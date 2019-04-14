<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ExternalSource;
use Illuminate\Support\Facades\Session;
use Redirect;
use App\CarAddress;
use App\EmploymentTime;
use Illuminate\Foundation\Auth\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\ExternalLeadFilter;
use App\ApiLog;
use App\ExternalLeadsUrlStrings;
use Exception;
use App\ActivityLog;
use App\TaskLog;
class ExternalSources extends Controller
{
    public function ShowAddResource(){
        return view('admin.addResource');
    }

    public function AddResource(Request $request){
        $resName = $request->resourceName;
        $resUrl = $request->resourceURL;
            function randstr($len=10, $abc="aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789") {
                $letters = str_split($abc);
                $str = "";
                for ($i=0; $i<=$len; $i++) {
                    $str .= $letters[rand(0, count($letters)-1)];
                }
                return $str;
            }
            $api = randstr(19);
            $split = str_split($api, 5);
            $apiKey =  implode('-', $split);
            $external = new ExternalSource();
            $external['apiKey'] = $apiKey;
            $external['resourceName'] = $resName;
            $external['resourceUrl'] = $resUrl;
            $external->save();
            if($external->save()){
                return Redirect::back()->with('successMessage', 'Resource has been added sccessfully!');
            }

    }
    function ViewResources(){
        $extSrc = ExternalSource::all();
        return view('admin.viewResources',['ExtSrc'=>$extSrc]);
    }
    function EditResource($id){
        $src = ExternalSource::where('id',$id)->first();
        return view('admin.editResource',['Src'=>$src]);
    }
    function UpdateResource(Request $request){
        $src = ExternalSource::where('id',$request->id)->first();
        $src['resourceName'] = $request->resourceName;
        $src['resourceUrl'] = $request->resourceURL;
        $src->save();
        return Redirect::back()->with('successMessage', 'Resource has been Updated sccessfully!');
    }
    function DeleteResource($id){
        $news = ExternalSource::destroy($id);
        if($news){
            return Redirect::back()->with('successMessage', 'Resource has been deleted sccessfully!');
        }
    }

    public function StoreLeads(Request $request){
        $Emp2 = false;
        $Emp3 = false;
        $Adr2 = false;
        $Adr3 = false;
        // return json_encode($request->all());
        $apiReq = json_encode($request->all());
        // $apiReq = "Resource=".$request->Resource."&ApiKey=".$request->ApiKey."&VehicleType=".$request->VehicleType."&MonthlyBudget=".
        // $request->MonthlyBudget."&DrivingLicence=".$request->DrivingLicence."&MaritalStatus=".$request->MaritalStatus."&UKPassport=".
        // $request->UKPassport."&DOB=".$request->DOB."&EmploymentStatus=".$request->Employment[0]['EmploymentStatus']."&EmployerName=".
        // $request->Employment[0]['EmployerName']."&JobTitle=".$request->Employment[0]['JobTitle']."&EmploymentYears=".$request->Employment[0]['EmploymentYears'].
        // "&EmploymentMonths=".$request->Employment[0]['EmploymentMonths']."&MonthlyIncome=".$request->Employment[0]['MonthlyIncome'].
        // "&EmployerName1=".$request->Employment1[0]['EmployerName']."&JobTitle1=".$request->Employment1[0]['JobTitle']."&EmploymentYears1=".$request->Employment1[0]['EmploymentYears'].
        // "&EmploymentMonths1=".$request->Employment1[0]['EmploymentMonths']."&MonthlyIncome1=".$request->Employment1[0]['MonthlyIncome'].
        // "&EmployerName2=".$request->Employment2[0]['EmployerName']."&JobTitle2=".$request->Employment2[0]['JobTitle']."&EmploymentYears2=".$request->Employment2[0]['EmploymentYears'].
        // "&EmploymentMonths2=".$request->Employment2[0]['EmploymentMonths']."&MonthlyIncome2=".$request->Employment2[0]['MonthlyIncome'].
        // "&Postcode=".$request->AddressDetails[0]['Postcode']."&BuildingName=".$request->AddressDetails[0]['BuildingName']."&BuildingNumber=".
        // $request->AddressDetails[0]['BuildingNumber']."&StreetAddress=".$request->AddressDetails[0]['StreetAddress']."&SecondStreet=".
        // $request->AddressDetails[0]['SecondStreet']."&Town=".$request->AddressDetails[0]['Town']."&County=".$request->AddressDetails[0]['County'].
        // "&ResidentialStatus=".$request->AddressDetails[0]['ResidentialStatus']."&AddressYears=".$request->AddressDetails[0]['ResidentialStatus'].
        // "&AddressYears=".$request->AddressDetails[0]['AddressYears']."&AddressMonths=".$request->AddressDetails[0]['AddressMonths'].
        // "&Postcode1=".$request->AddressDetails1[0]['Postcode']."&BuildingName1=".$request->AddressDetails1[0]['BuildingName']."&BuildingNumber1=".
        // $request->AddressDetails1[0]['BuildingNumber']."&StreetAddress1=".$request->AddressDetails1[0]['StreetAddress']."&SecondStreet1=".
        // $request->AddressDetails1[0]['SecondStreet']."&Town1=".$request->AddressDetails1[0]['Town']."&County1=".$request->AddressDetails1[0]['County'].
        // "&ResidentialStatus1=".$request->AddressDetails[0]['ResidentialStatus']."&AddressYears1=".$request->AddressDetails1[0]['ResidentialStatus'].
        // "&AddressYears1=".$request->AddressDetails1[0]['AddressYears']."&AddressMonths1=".$request->AddressDetails1[0]['AddressMonths'].
        // "&Postcode2=".$request->AddressDetails2[0]['Postcode']."&BuildingName2=".$request->AddressDetails2[0]['BuildingName']."&BuildingNumber2=".
        // $request->AddressDetails2[0]['BuildingNumber']."&StreetAddress2=".$request->AddressDetails2[0]['StreetAddress']."&SecondStreet2=".
        // $request->AddressDetails2[0]['SecondStreet']."&Town2=".$request->AddressDetails2[0]['Town']."&County2=".$request->AddressDetails2[0]['County'].
        // "&ResidentialStatus2=".$request->AddressDetails[0]['ResidentialStatus']."&AddressYears2=".$request->AddressDetails2[0]['ResidentialStatus'].
        // "&AddressYears2=".$request->AddressDetails2[0]['AddressYears']."&AddressMonths2=".$request->AddressDetails2[0]['AddressMonths'].
        // "&PrefixTitle=".$request->PrefixTitle."&FirstName=".$request->FirstName."&LastName=".$request->LastName."&EmailConsent=".$request->EmailConsent."&SmsConsent=".$request->SmsConsent."&MarketingConsent=".$request->MarketingConsent.
        // "&MobileNumber=".$request->MobileNumber."&EmailAddress=".$request->EmailAddress;
        $filters = ExternalLeadFilter::first();
        $apiLog = new ApiLog();
        $incomeValue = $filters->monthlyIncome;
        $minAge =  $filters->minAge;
        $maxAge = $filters->maxAge;
        $loanMin = $filters->minLoanAmount;
        $loanMax = $filters->maxLoanAmount;
        $emailOptions = $request->EmailConsent;
        $smsOptions = $request->SmsConsent;
        $marketingOptions = $request->MarketingConsent;
        $resource = $request->Resource;
        $extApiCount = ExternalSource::where('apiKey',$request->ApiKey)->count();

        if($extApiCount<1){
            $rejectionType ='Invalid API Key';
            $reason = 'API Key does not match with database';
            $apiLog['email'] = $request->EmailAddress;
            $apiLog['mobileNumber'] = $request->MobileNumber;
            $apiLog['name'] = $request->FirstName.' '.$request->LastName;
            $apiLog['rejectionType'] = 'Invalid Api Key';
            $apiLog['reason'] = $reason;
            $apiLog['requestData'] = $apiReq;
            $apiLog['applicationSource'] = $request->Resource;
            $apiLog->save();
            return response()->json(['error' => 'invalid api key'], 400);
        }

            $licF = $filters->licenceType;
            $dt = new \Carbon\Carbon();
            $before = $dt->subYears(18)->format('Y-m-d');
            // $validatedData = $request->validate([

            // ]);
            // 'BankAccount' => 'required',
            // 'BankSortCode' => 'required',
            $validator = Validator::make($request->all(), [
                'Resource' => 'required',
                'MonthlyBudget' => [
                    'required',
                    Rule::in(['Under 150 / month','150 - 250 / month','251 - 350 / month','351 - 450 / month','451 - 550 / month','Over 550 / month']),
                ],
                'VehicleType' => [
                    'required',
                    Rule::in(['Static Caravan','Motorhome','Caravan','Car','Van','Bike']),
                ],
                'MaritalStatus' => [
                    'required',
                    Rule::in(['Single','Married','Cohabiting','Divorced','Separated','Widowed','Civil Partnership','Partner']),
                ],
                'UKPassport' => [
                    'required',
                    Rule::in(['Yes','No']),
                ],
                'EmailConsent' => [
                    'required',
                    Rule::in(['Yes','No']),
                ],
                'SmsConsent' => [
                    'required',
                    Rule::in(['Yes','No']),
                ],
                'MarketingConsent' => [
                    'required',
                    Rule::in(['Yes','No']),
                ],

                'DOB' => 'required|date_format:Y-m-d|before:'.$minAge.' years ago|after:'.-$maxAge.' years',
                'PrefixTitle' => 'required|string',
                'FirstName' => 'required|string',
                'LastName' => 'required|string',
                'MobileNumber' => 'required|digits_between:10,11',
                'LoanAmount' => 'required|between:1000,5000',
                'LoanAmount' => 'required|numeric|between:'.$loanMin.','.$loanMax,
                'EmailAddress' => 'required|email',
                'Employment.*.EmploymentStatus' => [
                    'required',
                    // Rule::in(['Full-Time Employment','Part-Time EmploymentNo','Self-Employment','Temporary/Contract','Retired','Homemaker/Carer','Education','Benefits','Armed Forces']),
                    // Rule::in([$filters->employmentType]),
                ],
                'Employment.*.EmployerName' => 'required|string',
                'Employment.*.JobTitle' => 'required|string',
                'Employment.*.EmploymentYears' => 'required|numeric',
                'Employment.*.EmploymentMonths' => 'numeric|nullable',
                'Employment.*.MonthlyIncome' => 'required|numeric|min:'.$incomeValue,

                'Employment1.*.EmployerName' => 'required|string',
                'Employment1.*.JobTitle' => 'required|string',
                'Employment1.*.EmploymentYears' => 'required|numeric',
                'Employment1.*.EmploymentMonths' => 'numeric|nullable',
                'Employment1.*.MonthlyIncome' => 'required|numeric|min:'.$incomeValue,

                'Employment2.*.EmployerName' => 'required|string',
                'Employment2.*.JobTitle' => 'required|string',
                'Employment2.*.EmploymentYears' => 'required|numeric',
                'Employment2.*.EmploymentMonths' => 'numeric|nullable',
                'Employment2.*.MonthlyIncome' => 'required|numeric|min:'.$incomeValue,

                'AddressDetails.*.Postcode' => 'required',
                'AddressDetails.*.BuildingName' => 'nullable',
                'AddressDetails.*.BuildingNumber' => 'nullable',
                'AddressDetails.*.StreetAddress' => 'nullable',
                'AddressDetails.*.SecondStreet' => 'nullable',
                'AddressDetails.*.Town' => 'nullable',
                'AddressDetails.*.County' => 'nullable',
                'AddressDetails.*.ResidentialStatus' => [
                    'required',
                    Rule::in(['Homeowner','Tenant - Housing','Tenant - Private','Tenant - Council','Living With Family','Military Accommodation','Work Accommodation','Student Accommodation','Other']),
                ],
                'AddressDetails.*.AddressYears' => 'required|numeric',
                'AddressDetails.*.AddressMonths' => 'numeric|nullable',

                'AddressDetails1.*.Postcode' => 'required',
                'AddressDetails1.*.BuildingName' => 'nullable',
                'AddressDetails1.*.BuildingNumber' => 'nullable',
                'AddressDetails1.*.StreetAddress' => 'nullable',
                'AddressDetails1.*.SecondStreet' => 'nullable',
                'AddressDetails1.*.Town' => 'nullable',
                'AddressDetails1.*.County' => 'nullable',
                'AddressDetails1.*.AddressYears' => 'required|numeric',
                'AddressDetails1.*.AddressMonths' => 'numeric|nullable',

                'AddressDetails2.*.Postcode' => 'required',
                'AddressDetails2.*.BuildingName' => 'nullable',
                'AddressDetails2.*.BuildingNumber' => 'nullable',
                'AddressDetails2.*.StreetAddress' => 'nullable',
                'AddressDetails2.*.SecondStreet' => 'nullable',
                'AddressDetails2.*.Town' => 'nullable',
                'AddressDetails2.*.County' => 'nullable',
                'AddressDetails2.*.AddressYears' => 'required|numeric',
                'AddressDetails2.*.AddressMonths' => 'numeric|nullable'
            ]);

            if($validator->fails()){
                $reason = $validator->errors()->first();
                $apiLog['email'] = $request->EmailAddress;
                $apiLog['mobileNumber'] = $request->MobileNumber;
                $apiLog['name'] = $request->FirstName.' '.$request->LastName;
                $apiLog['rejectionType'] = 'Validation';
                $apiLog['reason'] = $reason;
                $apiLog['requestData'] = $apiReq;
                $apiLog['applicationSource'] = $request->Resource;
                $apiLog->save();
                // return $validator->messages();
                 return response()->json( [ 'error' => $validator->errors() ], 400 );
            }

        // check if Licence value present in Selected Filters
        if((strpos($filters->licenceType, $request->DrivingLicence) === false)){
            $reason = 'Licence does not match the required value';
            $apiLog['email'] = $request->EmailAddress;
            $apiLog['mobileNumber'] = $request->MobileNumber;
            $apiLog['name'] = $request->FirstName.' '.$request->LastName;
            $apiLog['rejectionType'] = 'Validation';
            $apiLog['reason'] = $reason;
            $apiLog['requestData'] = $apiReq;
            $apiLog['applicationSource'] = $request->Resource;
            $apiLog->save();
            return response()->json(['error' => 'Licence does not match the required value'], 400);
        }
        // check if Employment Status value present in Selected Filters
        if((strpos($filters->employmentType, $request->Employment[0]['EmploymentStatus']) === false)){
            $reason = 'Employment status does not match the required value';
            $apiLog['email'] = $request->EmailAddress;
            $apiLog['mobileNumber'] = $request->MobileNumber;
            $apiLog['name'] = $request->FirstName.' '.$request->LastName;
            $apiLog['rejectionType'] = 'Validation';
            $apiLog['reason'] = $reason;
            $apiLog['requestData'] = $apiReq;
            $apiLog['applicationSource'] = $request->Resource;
            $apiLog->save();
            return response()->json(['error' => 'Employment status does not match the required value'], 400);
        }

        $uid = new User();
        $uid['status'] =0;
        $uid->save();
        $sid = $uid->id;



        $EmpTime = new EmploymentTime();
        $AddTime = new CarAddress();
        // $sid = session()->getId();
        $apiKey = $request->ApiKey;
        $vehicleType = $request->VehicleType;
        $carType = $request->CarType;
        $monthlyBudget = $request->MonthlyBudget;
        $licence = $request->DrivingLicence;
        $maritalStatus = $request->MaritalStatus;
        $passport = $request->UKPassport;

        $finDate = $request->DOB;
        $employmentYears = $request->Employment[0]['EmploymentYears'];
        $employmentMonths = $request->Employment[0]['EmploymentMonths'];
        $tMonths = $employmentYears * 12 + $employmentMonths;

            $employmentStatus = $request->Employment[0]['EmploymentStatus'];
            $employmentName = $request->Employment[0]['EmployerName'];
            $jobTitle = $request->Employment[0]['JobTitle'];
            $employmentYears = $request->Employment[0]['EmploymentYears'];
            $employmentMonths = $request->Employment[0]['EmploymentMonths'];
            $monthlyIncome = $request->Employment[0]['MonthlyIncome'];

            $EmpTime['uid'] = $sid;
            $EmpTime['companyName'] = $employmentName;
            $EmpTime['jobTitle'] = $jobTitle;
            $EmpTime['employmentYears'] = $employmentYears;
            $EmpTime['employmentMonths'] = $employmentMonths;
            $EmpTime['userRefference'] = $request->Resource;
            $EmpTime['totalMonths'] = 0;
            $EmpTime['monthlyIncome'] =$monthlyIncome;
            $EmpTime->save();


        //Employment Status Second Step
        if(!empty($request->Employment1[0])){
            $Emp2 = true;
            $EmpTime1 = new EmploymentTime();
            $employmentName1 = $request->Employment1[0]['EmployerName'];
            $jobTitle1 = $request->Employment1[0]['JobTitle'];
            $employmentYears1 = $request->Employment1[0]['EmploymentYears'];
            $employmentMonths1 = $request->Employment1[0]['EmploymentMonths'];
            $monthlyIncome1 = $request->Employment1[0]['MonthlyIncome'];

            $EmpTime1['uid'] = $sid;
            $EmpTime1['companyName'] = $employmentName1;
            $EmpTime1['jobTitle'] = $jobTitle1;
            $EmpTime1['employmentYears'] = $employmentYears1;
            $EmpTime1['employmentMonths'] = $employmentMonths1;
            $EmpTime1['totalMonths'] = 0;
            $EmpTime1['monthlyIncome'] =$monthlyIncome1;
            $EmpTime1['userRefference'] = $request->Resource;
            $EmpTime1->save();
        }

        //Employment Status Third Step
        if(!empty($request->Employment2[0])){
            $Emp3 = true;
            $EmpTime2 = new EmploymentTime();
            $employmentName2 = $request->Employment2[0]['EmployerName'];
            $jobTitle2 = $request->Employment2[0]['JobTitle'];
            $employmentYears2 = $request->Employment2[0]['EmploymentYears'];
            $employmentMonths2 = $request->Employment2[0]['EmploymentMonths'];
            $monthlyIncome2 = $request->Employment2[0]['MonthlyIncome'];

            $EmpTime2['uid'] = $sid;
            $EmpTime2['companyName'] = $employmentName2;
            $EmpTime2['jobTitle'] = $jobTitle2;
            $EmpTime2['employmentYears'] = $employmentYears2;
            $EmpTime2['employmentMonths'] = $employmentMonths2;
            $EmpTime2['totalMonths'] = 0;
            $EmpTime2['monthlyIncome'] =$monthlyIncome2;
            $EmpTime2['userRefference'] = $request->Resource;
            $EmpTime2->save();
        }

            $addressYears = $request->AddressDetails[0]['AddressYears'];
            $addressMonths = $request->AddressDetails[0]['AddressMonths'];
            $buildingName = $request->AddressDetails[0]['BuildingName'];
            $buildingNumber = $request->AddressDetails[0]['BuildingNumber'];
            $streetAddress = $request->AddressDetails[0]['StreetAddress'];
            $secondStreet = $request->AddressDetails[0]['SecondStreet'];
            $town = $request->AddressDetails[0]['Town'];
            $county = $request->AddressDetails[0]['County'];
            $postcode = $request->AddressDetails[0]['Postcode'];
            $residentialStatus = $request->AddressDetails[0]['ResidentialStatus'];
            $AddTime['uid'] = $sid;
            $AddTime['residentialStatus'] = $residentialStatus;
            $AddTime['addressYears'] = $addressYears;
            $AddTime['addressMonths'] = $addressMonths;
            $AddTime['postcode'] = $postcode;
            $AddTime['buildingNumber'] = $buildingNumber;
            $AddTime['street'] = $streetAddress;
            $AddTime['town'] = $town;
            $AddTime['totalMonths'] = 0;
            $AddTime['county'] = $county;
            $AddTime['buildingName'] = $buildingName;
            $AddTime['userRefference'] = $request->Resource;
            $AddTime->save();

        // }

        if(!empty($request->AddressDetails1[0])){
            $Adr2 = true;
            $AddTime1 = new CarAddress();
            $buildingName1 = $request->AddressDetails1[0]['BuildingName'];
            $buildingNumber1 = $request->AddressDetails1[0]['BuildingNumber'];
            $streetAddress1 = $request->AddressDetails1[0]['StreetAddress'];
            $secondStreet1 = $request->AddressDetails1[0]['SecondStreet'];
            $town1 = $request->AddressDetails1[0]['Town'];
            $county1 = $request->AddressDetails1[0]['County'];
            $postcode1 = $request->AddressDetails1[0]['Postcode'];
            $addressYears1 = $request->AddressDetails1[0]['AddressYears'];
            $addressMonths1 = $request->AddressDetails1[0]['AddressMonths'];


            $AddTime1['uid'] = $sid;
            // $AddTime1['residentialStatus'] = $residentialStatus1;
            $AddTime1['addressYears'] = $addressYears1;
            $AddTime1['addressMonths'] = $addressMonths1;
            $AddTime1['postcode'] = $postcode1;
            $AddTime1['buildingNumber'] = $buildingNumber1;
            $AddTime1['street'] = $streetAddress1;
            $AddTime1['town'] = $town1;
            $AddTime1['county'] = $county1;
            $AddTime1['buildingName'] = $buildingName1;
            $AddTime1['totalMonths'] = 0;
            $AddTime1['userRefference'] = $request->Resource;
            $AddTime1->save();
        }

        if(!empty($request->AddressDetails2[0])){
            $Adr3 = true;
            $AddTime2 = new CarAddress();
            $buildingName2 = $request->AddressDetails2[0]['BuildingName'];
            $buildingNumber2 = $request->AddressDetails2[0]['BuildingNumber'];
            $streetAddress2 = $request->AddressDetails2[0]['StreetAddress'];
            $secondStreet2 = $request->AddressDetails2[0]['SecondStreet'];
            $town2 = $request->AddressDetails2[0]['Town'];
            $county2 = $request->AddressDetails2[0]['County'];
            $postcode2 = $request->AddressDetails2[0]['Postcode'];
            $addressYears2 = $request->AddressDetails2[0]['AddressYears'];
            $addressMonths2 = $request->AddressDetails2[0]['AddressMonths'];

            $AddTime2['uid'] = $sid;
            // $AddTime2['residentialStatus'] = $residentialStatus2;
            $AddTime2['addressYears'] = $addressYears2;
            $AddTime2['addressMonths'] = $addressMonths2;
            $AddTime2['postcode'] = $postcode2;
            $AddTime2['buildingNumber'] = $buildingNumber2;
            $AddTime2['street'] = $streetAddress2;
            $AddTime2['town'] = $town2;
            $AddTime2['county'] = $county2;
            $AddTime2['buildingName'] = $buildingName2;
            $AddTime2['totalMonths'] = 0;
            $AddTime2['userRefference'] = $request->Resource;
            $AddTime2->save();
        }

        $prefixTitle = $request->PrefixTitle;
        $firstName = $request->FirstName;
        $lastName = $request->LastName;
        $mobileNumber = $request->MobileNumber;
        $emailAddress = $request->EmailAddress;
        if($passport=='True'){
          $passport = 'Yes';
        }else{
          $passport = 'No';
        }
        if($monthlyBudget=='Under 150 / month'){
          $monthlyBudget = 'Under £150 / month';
        }
        elseif($monthlyBudget=='150 - 250 / month'){
          $monthlyBudget = '£150 - £250 / month';
        }
        elseif($monthlyBudget=='251 - 350 / month'){
          $monthlyBudget = '£251 - £350 / month';
        }
        elseif($monthlyBudget=='451 - 450 / month'){
          $monthlyBudget = '£451 - £550 / month';
        }
        elseif($monthlyBudget=='Over 550 / month'){
          $monthlyBudget = 'Over £550 / month';
        }
        $lId = User::orderBy('id','DESC')->where('leadId', '!=', '')->first();
        $lId = $lId->leadId;
        $fin =  ltrim($lId,'CF');
        $fin = $fin + 1;
        $leadId = "CF".$fin;

        $usr = User::where('id',$sid)->first();
        $usr['apiKey'] = $apiKey;
        $usr['name'] = $firstName.' '.$lastName;
        $usr['leadId'] = $leadId;
        $usr['email'] = $emailAddress;
        $usr['password'] = Hash::make('secret');
        $usr['mobile'] = $mobileNumber;
        $usr['vehicleType'] = $vehicleType;
        $usr['monthlyBudget'] = $monthlyBudget;
        $usr['licenceType'] = $licence;
        $usr['creditRating'] = Null;
        $usr['depositOption'] = Null;
        $usr['dob'] = $finDate;
        $usr['maritalStatus'] = $maritalStatus;
        $usr['licenceType'] = $licence;
        $usr['britishPassport'] = $passport;
        $usr['prefixTitle'] = $prefixTitle;
        $usr['firstName'] = $firstName;
        $usr['lastName'] = $lastName;
        $usr['userType'] = 0;
        $usr['userRefference'] = $request->Resource;
        $usr['emailOptions'] = $emailOptions;
        $usr['smsOptions'] = $smsOptions;
        $usr['marketingOptions'] = $marketingOptions;
        $usr['loanAmount'] = $request->LoanAmount;
        // $usr['BankAccount'] = $request->BankAccount;
        // $usr['BankSortCode'] = $request->BankSortCode;
        $usr['status']=0;
        $existEmail = User::where('email',$emailAddress)->where('mobile',$mobileNumber)->first();
        if($existEmail){
        $dayLimit = $filters->accountDaysLimit;
        $reqDate = strtotime(\Carbon\Carbon::now()->subDays($dayLimit));
        $applDate = strtotime($existEmail->created_at);
        if($applDate<$reqDate){
            $reason = 'Account already exist';
            $apiLog['email'] = $request->EmailAddress;
            $apiLog['mobileNumber'] = $request->MobileNumber;
            $apiLog['name'] = $request->FirstName.' '.$request->LastName;
            $apiLog['rejectionType'] = 'Duplicate Email';
            $apiLog['reason'] = $reason;
            $apiLog['requestData'] = $apiReq;
            $apiLog['applicationSource'] = $request->Resource;
            $apiLog->save();
            return response()->json(['error' => 'Account already exist'], 400);
        }
      }
            $usr->save();
            $usrByEmail = User::where('email',$emailAddress)->first();
            $id = $usrByEmail->id;
            $urlStr = new ExternalLeadsUrlStrings();
            if($usr->save()){
              /* Add Activity Log Start */
                $activity_log = new ActivityLog();
                $activity_log['uid'] = $usr->id;
                $activity_log['aid'] = $usr->id;
                $activity_log['activity_name'] = $usr->getTable();
                $activity_log->save();
                /* Add Activity Log End */

                /* Tasks Log Start*/
                // $taskLog = new TaskLog();
                // $taskLog['uid'] = $usr->id;
                // $taskLog['tid'] = $usr->id;
                // $taskLog['task_name'] = $usr->getTable();
                // $taskLog->save();
                $t_task_name = $usr->getTable();
                DB::select("call sp_task_logs($usr->id,$usr->id,'$t_task_name')");
                /* Tasks Log End*/
                function randstr($len=10, $abc="aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789") {
                    $letters = str_split($abc);
                    $str = "";
                    for ($i=0; $i<=$len; $i++) {
                        $str .= $letters[rand(0, count($letters)-1)];
                    }
                    return $str;
                }
                $userLastId = User::orderBy('id','DESC')->first();
                $lastId = $userLastId->id;
                $urlSrting = randstr(30);
                $urlStr['urlString'] = $urlSrting;
                $URL = "https://quickcarfinance.co.uk/redirect-users/".$urlSrting."-".$lastId;
                $urlStr->save();

                /* AutoConvert API Request Start */
                $employmentObj=''; $addressObj='';
                if($Emp2==false){
                  $employmentStatus = $request->Employment[0]['EmploymentStatus'];
                  $employmentName = $request->Employment[0]['EmployerName'];
                  $jobTitle = $request->Employment[0]['JobTitle'];
                  $employmentYears = $request->Employment[0]['EmploymentYears'];
                  $employmentMonths = $request->Employment[0]['EmploymentMonths'];
                  $monthlyIncome = $request->Employment[0]['MonthlyIncome'];

                    $employmentObj = array(
                       array(
                      "Company" => $employmentName,
                      "Building" => "",
                      "Street" => "",
                      "Town" => "",
                      "County" => "",
                      "Postcode" => "",
                      "EmploymentStatus" => $employmentStatus,
                      "JobTitle" => $jobTitle,
                      "MonthlyIncome" => $monthlyIncome,
                      "TimeAtEmployerMonths" => $employmentMonths,
                      "TimeAtEmployerYears" => $employmentYears
                    )
                  );
                }

                if($Emp2==true){
                  $employmentStatus = $request->Employment[0]['EmploymentStatus'];
                  $employmentName = $request->Employment[0]['EmployerName'];
                  $jobTitle = $request->Employment[0]['JobTitle'];
                  $employmentYears = $request->Employment[0]['EmploymentYears'];
                  $employmentMonths = $request->Employment[0]['EmploymentMonths'];
                  $monthlyIncome = $request->Employment[0]['MonthlyIncome'];

                  // $employmentStatus1 = $request->Employment1[0]['EmploymentStatus'];
                  $employmentName1 = $request->Employment1[0]['EmployerName'];
                  $jobTitle1 = $request->Employment1[0]['JobTitle'];
                  $employmentYears1 = $request->Employment1[0]['EmploymentYears'];
                  $employmentMonths1 = $request->Employment1[0]['EmploymentMonths'];
                  $monthlyIncome1 = $request->Employment1[0]['MonthlyIncome'];
                    $employmentObj = array(
                       array(
                      "Company" => $employmentName,
                      "Building" => "",
                      "Street" => "",
                      "Town" => "",
                      "County" => "",
                      "Postcode" => "",
                      "EmploymentStatus" => $employmentStatus,
                      "JobTitle" => $jobTitle,
                      "MonthlyIncome" => $monthlyIncome,
                      "TimeAtEmployerMonths" => $employmentMonths,
                      "TimeAtEmployerYears" => $employmentYears
                    ),
                    array(
                       "Company" => $employmentName1,
                       "Building" => "",
                       "Street" => "",
                       "Town" => "",
                       "County" => "",
                       "Postcode" => "",
                       "EmploymentStatus" => $employmentStatus,
                       "JobTitle" => $jobTitle1,
                       "MonthlyIncome" => $monthlyIncome1,
                       "TimeAtEmployerMonths" => $employmentMonths1,
                       "TimeAtEmployerYears" => $employmentYears1
                     )
                  );
                }

                if($Emp3==true){
                  $employmentStatus = $request->Employment[0]['EmploymentStatus'];
                  $employmentName = $request->Employment[0]['EmployerName'];
                  $jobTitle = $request->Employment[0]['JobTitle'];
                  $employmentYears = $request->Employment[0]['EmploymentYears'];
                  $employmentMonths = $request->Employment[0]['EmploymentMonths'];
                  $monthlyIncome = $request->Employment[0]['MonthlyIncome'];

                  // $employmentStatus1 = $request->Employment1[0]['EmploymentStatus'];
                  $employmentName1 = $request->Employment1[0]['EmployerName'];
                  $jobTitle1 = $request->Employment1[0]['JobTitle'];
                  $employmentYears1 = $request->Employment1[0]['EmploymentYears'];
                  $employmentMonths1 = $request->Employment1[0]['EmploymentMonths'];
                  $monthlyIncome1 = $request->Employment1[0]['MonthlyIncome'];

                  // $employmentStatus2 = $request->Employment2[0]['EmploymentStatus'];
                  $employmentName2 = $request->Employment2[0]['EmployerName'];
                  $jobTitle2 = $request->Employment2[0]['JobTitle'];
                  $employmentYears2 = $request->Employment2[0]['EmploymentYears'];
                  $employmentMonths2 = $request->Employment2[0]['EmploymentMonths'];
                  $monthlyIncome2 = $request->Employment2[0]['MonthlyIncome'];

                    $employmentObj = array(
                       array(
                      "Company" => $employmentName,
                      "Building" => "",
                      "Street" => "",
                      "Town" => "",
                      "County" => "",
                      "Postcode" => "",
                      "EmploymentStatus" => $employmentStatus,
                      "JobTitle" => $jobTitle,
                      "MonthlyIncome" => $monthlyIncome,
                      "TimeAtEmployerMonths" => $employmentMonths,
                      "TimeAtEmployerYears" => $employmentYears
                    ),
                    array(
                       "Company" => $employmentName1,
                       "Building" => "",
                       "Street" => "",
                       "Town" => "",
                       "County" => "",
                       "Postcode" => "",
                       "EmploymentStatus" => $employmentStatus,
                       "JobTitle" => $jobTitle1,
                       "MonthlyIncome" => $monthlyIncome1,
                       "TimeAtEmployerMonths" => $employmentMonths1,
                       "TimeAtEmployerYears" => $employmentYears1
                     ),
                     array(
                        "Company" => $employmentName2,
                        "Building" => "",
                        "Street" => "",
                        "Town" => "",
                        "County" => "",
                        "Postcode" => "",
                        "EmploymentStatus" => $employmentStatus,
                        "JobTitle" => $jobTitle2,
                        "MonthlyIncome" => $monthlyIncome2,
                        "TimeAtEmployerMonths" => $employmentMonths2,
                        "TimeAtEmployerYears" => $employmentYears2
                      )
                  );

                }

                if($Adr2==false){
                  $addressYears = $request->AddressDetails[0]['AddressYears'];
                  $addressMonths = $request->AddressDetails[0]['AddressMonths'];
                  $buildingName = $request->AddressDetails[0]['BuildingName'];
                  $buildingNumber = $request->AddressDetails[0]['BuildingNumber'];
                  $streetAddress = $request->AddressDetails[0]['StreetAddress'];
                  // $secondStreet = $request->AddressDetails[0]['SecondStreet'];
                  $town = $request->AddressDetails[0]['Town'];
                  $county = $request->AddressDetails[0]['County'];
                  $postcode = $request->AddressDetails[0]['Postcode'];
                  $residentialStatus = $request->AddressDetails[0]['ResidentialStatus'];

                  $addressObj = array(
                    array(
                      "Building" => $buildingNumber.' '.$buildingName,
                      "Street" => $streetAddress,
                      "County" => $county,
                      "Postcode" => $postcode,
                      "TimeAtAddressMonths" => $addressMonths,
                      "TimeAtAddressYears" => $addressYears,
                      "Town" => $town,
                      "ResidentialStatus" => $residentialStatus
                    )
                  );
                }
                if($Adr2==true){
                  $addressYears = $request->AddressDetails[0]['AddressYears'];
                  $addressMonths = $request->AddressDetails[0]['AddressMonths'];
                  $buildingName = $request->AddressDetails[0]['BuildingName'];
                  $buildingNumber = $request->AddressDetails[0]['BuildingNumber'];
                  $streetAddress = $request->AddressDetails[0]['StreetAddress'];
                  // $secondStreet = $request->AddressDetails[0]['SecondStreet'];
                  $town = $request->AddressDetails[0]['Town'];
                  $county = $request->AddressDetails[0]['County'];
                  $postcode = $request->AddressDetails[0]['Postcode'];
                  $residentialStatus = $request->AddressDetails[0]['ResidentialStatus'];

                  // $residentialStatus1 = $request->AddressDetails1[0]['ResidentialStatus'];
                  $buildingName1 = $request->AddressDetails1[0]['BuildingName'];
                  $buildingNumber1 = $request->AddressDetails1[0]['BuildingNumber'];
                  $streetAddress1 = $request->AddressDetails1[0]['StreetAddress'];
                  // $secondStreet1 = $request->AddressDetails1[0]['SecondStreet'];
                  $town1 = $request->AddressDetails1[0]['Town'];
                  $county1 = $request->AddressDetails1[0]['County'];
                  $postcode1 = $request->AddressDetails1[0]['Postcode'];
                  $addressYears1 = $request->AddressDetails1[0]['AddressYears'];
                  $addressMonths1 = $request->AddressDetails1[0]['AddressMonths'];

                    $addressObj = array(
                      array(
                        "Building" => $buildingNumber.' '.$buildingName,
                        "Street" => $streetAddress,
                        "County" => $county,
                        "Postcode" => $postcode,
                        "TimeAtAddressMonths" => $addressMonths,
                        "TimeAtAddressYears" => $addressYears,
                        "Town" => $town,
                        "ResidentialStatus" => $residentialStatus
                      ),
                      array(
                        "Building" => $buildingNumber1.' '.$buildingName1,
                        "Street" => $streetAddress1,
                        "County" => $county1,
                        "Postcode" => $postcode1,
                        "TimeAtAddressMonths" => $addressMonths1,
                        "TimeAtAddressYears" => $addressYears1,
                        "Town" => $town1,
                        "ResidentialStatus" => $residentialStatus
                      )
                    );
                }
                if($Adr3==true){
                  $addressYears = $request->AddressDetails[0]['AddressYears'];
                  $addressMonths = $request->AddressDetails[0]['AddressMonths'];
                  $buildingName = $request->AddressDetails[0]['BuildingName'];
                  $buildingNumber = $request->AddressDetails[0]['BuildingNumber'];
                  $streetAddress = $request->AddressDetails[0]['StreetAddress'];
                  // $secondStreet = $request->AddressDetails[0]['SecondStreet'];
                  $town = $request->AddressDetails[0]['Town'];
                  $county = $request->AddressDetails[0]['County'];
                  $postcode = $request->AddressDetails[0]['Postcode'];
                  // $residentialStatus = $request->AddressDetails[0]['ResidentialStatus'];

                  // $residentialStatus = $request->AddressDetails1[0]['ResidentialStatus'];
                  $buildingName1 = $request->AddressDetails1[0]['BuildingName'];
                  $buildingNumber1 = $request->AddressDetails1[0]['BuildingNumber'];
                  $streetAddress1 = $request->AddressDetails1[0]['StreetAddress'];
                  // $secondStreet1 = $request->AddressDetails1[0]['SecondStreet'];
                  $town1 = $request->AddressDetails1[0]['Town'];
                  $county1 = $request->AddressDetails1[0]['County'];
                  $postcode1 = $request->AddressDetails1[0]['Postcode'];
                  $addressYears1 = $request->AddressDetails1[0]['AddressYears'];
                  $addressMonths1 = $request->AddressDetails1[0]['AddressMonths'];

                  // $residentialStatus2 = $request->AddressDetails2[0]['ResidentialStatus'];
                  $buildingName2 = $request->AddressDetails2[0]['BuildingName'];
                  $buildingNumber2 = $request->AddressDetails2[0]['BuildingNumber'];
                  // $streetAddress2 = $request->AddressDetails2[0]['StreetAddress'];
                  $secondStreet2 = $request->AddressDetails2[0]['SecondStreet'];
                  $town2 = $request->AddressDetails2[0]['Town'];
                  $county2 = $request->AddressDetails2[0]['County'];
                  $postcode2 = $request->AddressDetails2[0]['Postcode'];
                  $addressYears2 = $request->AddressDetails2[0]['AddressYears'];
                  $addressMonths2 = $request->AddressDetails2[0]['AddressMonths'];

                  $addressObj = array(
                    array(
                      "Building" => $buildingNumber.' '.$buildingName,
                      "Street" => $streetAddress,
                      "County" => $county,
                      "Postcode" => $postcode,
                      "TimeAtAddressMonths" => $addressMonths,
                      "TimeAtAddressYears" => $addressYears,
                      "Town" => $town,
                      "ResidentialStatus" => $residentialStatus
                    ),
                    array(
                      "Building" => $buildingNumber1.' '.$buildingName1,
                      "Street" => $streetAddress1,
                      "County" => $county1,
                      "Postcode" => $postcode1,
                      "TimeAtAddressMonths" => $addressMonths1,
                      "TimeAtAddressYears" => $addressYears1,
                      "Town" => $town1,
                      "ResidentialStatus" => $residentialStatus
                    ),
                    array(
                      "Building" => $buildingNumber2.' '.$buildingName2,
                      "Street" => $streetAddress2,
                      "County" => $county2,
                      "Postcode" => $postcode2,
                      "TimeAtAddressMonths" => $addressMonths2,
                      "TimeAtAddressYears" => $addressYears2,
                      "Town" => $town2,
                      "ResidentialStatus" => $residentialStatus
                    )
                  );
                }

                  $apiData = array(
                    "VehicleType" => $vehicleType,
                    "AmountToBorrow"=> $request->LoanAmount,
                    "LoanTerm" => 48,
                    "Applicants" => array(
                      array(
                        "DateOfBirth" => $finDate,
                        "DrivingLicenseType" => $licence,
                        "Email" => $emailAddress,
                        "Forename" => $firstName,
                        "Surname" => $lastName,
                        "Mobile" => $mobileNumber,
                        "Title" => $prefixTitle,
                        "MaritalStatus" => $maritalStatus,
                        "Landline" => $mobileNumber,
                        "ValidUkPassport" => $passport,
                        "NumberOfDependants" => 1,
                        "OtherIncome" => 0,
                        "MortgageBalance" => "Null",
                        "HouseValuation" => "Null",
                        "Addresses" => $addressObj,
                        "Employments" => $employmentObj,
                        "Notes" => array(
                          " "
                        )
                      )
                    ),
                  );
                  $apiData = json_encode($apiData);
                  $ch = curl_init('https://api.autoconvert.co.uk/application/submit');
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $apiData);
                  $headers = [
                    'X-ApiKey:c93f7ea3-b7c3-478c-a3e7-ceeba3446958',
                    'Content-Type:application/json'
                  ];
                  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                  $response = curl_exec($ch);
                  curl_close($ch);
                  // return $response;
                /* AutoConvert API Request End */

                return response()->json(['code' => 'Success', 'message' => 'Application processing.','url'=>$URL], 200);
            }
    }

    function ViewFilters(){
        $filters =  ExternalLeadFilter::first();
        foreach($filters as $f){
            if(isset ($f->licenceType['Full UK'])){
                return $f;
            }
        }
        return view('admin.updateFilters',['Filters'=>$filters]);
    }

    function UpdateLeadFilters(Request $request){
        $licence = $request->licence;
        $employment = $request->employment;
        $arrLic =[];
        $arrEmp =[];
        if($licence){
            foreach ($licence as $lic){
                array_push($arrLic, $lic);
                $licFin = implode(', ',$arrLic);
            }
        }
        if($employment){
        foreach ($employment as $emp){
            array_push($arrEmp, $emp);
            $empFin = implode(', ',$arrEmp);
            }
        }


        $filters = ExternalLeadFilter::first();
        $filters['minAge'] = $request->minAge;
        $filters['maxAge'] = $request->maxAge;
        $filters['licenceType'] = $licFin;
        $filters['employmentType'] = $empFin;
        $filters['monthlyIncome'] = $request->monthlyIncome;
        $filters->save();
        if($filters->save()){
            return redirect()->back()->with('successMessage', 'Filters has been updated!');
        }
    }
    function RedirectApiUser($urlString){
        $data = explode('-',$urlString);
        $strings = $data[0];
        $id = $data[1];
        $urlStr = ExternalLeadsUrlStrings::where('urlString',$strings)->where('status',0)->first();
        $count = $urlStr->count();
        $urlStr['status'] = 1;
        $urlStr->save();
        if($count>0){
            Auth::loginUsingId($id,true);
            return redirect('/dashboard');
        }
        else{
            return redirect('/login');
        }
    }
    function ViewApiLogs(){
        $apiLogs = ApiLog::all();
        return view('admin.viewApiLogs',['ApiLogs'=>$apiLogs]);
    }
}
