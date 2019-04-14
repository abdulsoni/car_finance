<?php
namespace App\Http\Controllers;

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
        $apiReq = "Resource=".$request->Resource."&ApiKey=".$request->ApiKey."&VehicleType=".$request->VehicleType."&MonthlyBudget=".
        $request->MonthlyBudget."&DrivingLicence=".$request->DrivingLicence."&MaritalStatus=".$request->MaritalStatus."&UKPassport=".
        $request->UKPassport."&DOB=".$request->DOB."&EmploymentStatus=".$request->Employment[0]['EmploymentStatus']."&EmployerName=".
        $request->Employment[0]['EmployerName']."&JobTitle=".$request->Employment[0]['JobTitle']."&EmploymentYears=".$request->Employment[0]['EmploymentYears'].
        "&EmploymentMonths=".$request->Employment[0]['EmploymentMonths']."&MonthlyIncome=".$request->Employment[0]['MonthlyIncome'].
        "&EmployerName1=".$request->Employment1[0]['EmployerName']."&JobTitle1=".$request->Employment1[0]['JobTitle']."&EmploymentYears1=".$request->Employment1[0]['EmploymentYears'].
        "&EmploymentMonths1=".$request->Employment1[0]['EmploymentMonths']."&MonthlyIncome1=".$request->Employment1[0]['MonthlyIncome'].
        "&EmployerName2=".$request->Employment2[0]['EmployerName']."&JobTitle2=".$request->Employment2[0]['JobTitle']."&EmploymentYears2=".$request->Employment2[0]['EmploymentYears'].
        "&EmploymentMonths2=".$request->Employment2[0]['EmploymentMonths']."&MonthlyIncome2=".$request->Employment2[0]['MonthlyIncome'].
        "&Postcode=".$request->AddressDetails[0]['Postcode']."&BuildingName=".$request->AddressDetails[0]['BuildingName']."&BuildingNumber=".
        $request->AddressDetails[0]['BuildingNumber']."&StreetAddress=".$request->AddressDetails[0]['StreetAddress']."&SecondStreet=".
        $request->AddressDetails[0]['SecondStreet']."&Town=".$request->AddressDetails[0]['Town']."&County=".$request->AddressDetails[0]['County'].
        "&ResidentialStatus=".$request->AddressDetails[0]['ResidentialStatus']."&AddressYears=".$request->AddressDetails[0]['ResidentialStatus'].
        "&AddressYears=".$request->AddressDetails[0]['AddressYears']."&AddressMonths=".$request->AddressDetails[0]['AddressMonths'].
        "&Postcode1=".$request->AddressDetails1[0]['Postcode']."&BuildingName1=".$request->AddressDetails1[0]['BuildingName']."&BuildingNumber1=".
        $request->AddressDetails1[0]['BuildingNumber']."&StreetAddress1=".$request->AddressDetails1[0]['StreetAddress']."&SecondStreet1=".
        $request->AddressDetails1[0]['SecondStreet']."&Town1=".$request->AddressDetails1[0]['Town']."&County1=".$request->AddressDetails1[0]['County'].
        "&ResidentialStatus1=".$request->AddressDetails1[0]['ResidentialStatus']."&AddressYears1=".$request->AddressDetails1[0]['ResidentialStatus'].
        "&AddressYears1=".$request->AddressDetails1[0]['AddressYears']."&AddressMonths1=".$request->AddressDetails1[0]['AddressMonths'].
        "&Postcode2=".$request->AddressDetails2[0]['Postcode']."&BuildingName2=".$request->AddressDetails2[0]['BuildingName']."&BuildingNumber2=".
        $request->AddressDetails2[0]['BuildingNumber']."&StreetAddress2=".$request->AddressDetails2[0]['StreetAddress']."&SecondStreet2=".
        $request->AddressDetails2[0]['SecondStreet']."&Town2=".$request->AddressDetails2[0]['Town']."&County2=".$request->AddressDetails2[0]['County'].
        "&ResidentialStatus2=".$request->AddressDetails2[0]['ResidentialStatus']."&AddressYears2=".$request->AddressDetails2[0]['ResidentialStatus'].
        "&AddressYears2=".$request->AddressDetails2[0]['AddressYears']."&AddressMonths2=".$request->AddressDetails2[0]['AddressMonths'].
        "&PrefixTitle=".$request->PrefixTitle."&FirstName=".$request->FirstName."&LastName=".$request->LastName."&EmailConsent=".$request->EmailConsent."&SmsConsent=".$request->SmsConsent."&MarketingConsent=".$request->MarketingConsent.
        "&MobileNumber=".$request->MobileNumber."&EmailAddress=".$request->EmailAddress;
        $filters = ExternalLeadFilter::first();
        $apiLog = new ApiLog();
        $incomeValue = $filters->monthlyIncome;
        $minAge =  $filters->minAge;
        $maxAge = $filters->maxAge;
        $emailOptions = $request->EmailConsent;
        $smsOptions = $request->SmsConsent;
        $marketingOptions = $request->MarketingConsent;
        $resource = $request->Resource;
        $extApi = ExternalSource::where('apiKey',$request->apiKey)->first();

        if($extApi<1){
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
            return response()->json(['Error' => 'invalid api key');

        }

            $licF = $filters->licenceType;
            $dt = new \Carbon\Carbon();
            $before = $dt->subYears(18)->format('Y-m-d');
            // $validatedData = $request->validate([

            // ]);
            $validator = Validator::make($request->all(), [
                'Resource' => 'required',
                'MonthlyBudget' => [
                    'required',
                    Rule::in(['Under £150 / month','£150 - £250 / month','£251 - £350 / month','£351 - £450 / month','£451 - £550 / month','Over £550 / month']),
                ],
                // 'DrivingLicence' => [
                //     'required',
                //     // Rule::in(['Full Uk','Provisional Uk','European','International','No Licence']),
                //     Rule::in([$filters->licenceType]),
                // ],
                'VehicleType' => [
                    'required',
                    Rule::in(['Hatchback','Saloon','Coupe','Estate','SUV','MPV','Convertable','Pickup','Not Sure','Car','Van','Bike']),
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
                'DOB' => 'required|date_format:d/m/Y|before:'.$minAge.' years ago|after:'.-$maxAge.' years',
                'PrefixTitle' => 'required|string',
                'FirstName' => 'required|string',
                'LastName' => 'required|string',
                'MobileNumber' => 'required|digits_between:10,11',
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
                    Rule::in(['Tenant-Council','Living With Family','Military Accommodation','Work Accommodation','Student Accommodation','Other']),
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
                return $validator->messages();
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
            return response()->json(['Error' => 'Licence does not match the required value']);
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
            return response()->json(['Error' => 'Employment status does not match the required value']);
        }

        $EmpTime = new EmploymentTime();
        $AddTime = new CarAddress();
        $sid = session()->getId();
        $apiKey = $request->ApiKey;
        $vehicleType = $request->VehicleType;
        $carType = $request->CarType;
        $monthlyBudget = $request->MonthlyBudget;
        $licence = $request->DrivingLicence;
        $maritalStatus = $request->MaritalStatus;
        $passport = $request->UKPassport;
        $dob = $request->DOB;
            $dd = explode('/',$dob);
            $day = $dd[0];
            $month = $dd[1];
            $year = $dd[2];

        $employmentYears = $request->Employment[0]['EmploymentYears'];
        $employmentMonths = $request->Employment[0]['EmploymentMonths'];
        $tMonths = $employmentYears * 12 + $employmentMonths;
        if($tMonths >= 36){
            $employmentStatus = $request->Employment[0]['EmploymentStatus'];
            $employmentName = $request->Employment[0]['EmployerName'];
            $jobTitle = $request->Employment[0]['JobTitle'];
            $employmentYears = $request->Employment[0]['EmploymentYears'];
            $monthlyIncome = $request->Employment[0]['MonthlyIncome'];
            }
        else{
            $employmentStatus = $request->Employment[0]['EmploymentStatus'];
            $employmentName = $request->Employment[0]['EmployerName'];
            $jobTitle = $request->Employment[0]['JobTitle'];
            $employmentYears = $request->Employment[0]['EmploymentYears'];
            $employmentMonths = $request->Employment[0]['EmploymentMonths'];
            $monthlyIncome = $request->Employment[0]['MonthlyIncome'];

            $EmpTime['sessionId'] = $sid;
            $EmpTime['companyName'] = $employmentName;
            $EmpTime['jobTitle'] = $jobTitle;
            $EmpTime['employmentYears'] = $employmentYears;
            $EmpTime['employmentMonths'] = $employmentMonths;
            $EmpTime['userRefference'] = $request->Resource;
            $EmpTime->save();
            $employmentStatus = '';
            $employmentName = '';
            $jobTitle = '';
            $employmentYears = 0;
            $employmentMonths = 0;
            $monthlyIncome = '';
        }
        //Employment Status Second Step
        if(!empty($request->Employment1[1])){
            $employmentName1 = $request->Employment1[0]['EmployerName'];
            $jobTitle1 = $request->Employment1[0]['JobTitle'];
            $employmentYears1 = $request->Employment1[0]['EmploymentYears'];
            $employmentMonths1 = $request->Employment1[0]['EmploymentMonths'];
            $monthlyIncome1 = $request->Employment1[0]['MonthlyIncome'];

            $EmpTime['sessionId'] = $sid;
            $EmpTime['companyName'] = $employmentName1;
            $EmpTime['jobTitle'] = $jobTitle1;
            $EmpTime['employmentYears'] = $employmentYears1;
            $EmpTime['employmentMonths'] = $employmentMonths1;
            $EmpTime['totalMonths'] = 0;
            $EmpTime['userRefference'] = $request->Resource;
            $EmpTime->save();
        }

        //Employment Status Third Step
        if(!empty($request->Employment2[0])){
            $employmentName2 = $request->Employment2[0]['EmployerName'];
            $jobTitle2 = $request->Employment2[0]['JobTitle'];
            $employmentYears2 = $request->Employment2[0]['EmploymentYears'];
            $employmentMonths2 = $request->Employment2[0]['EmploymentMonths'];
            $monthlyIncome2 = $request->Employment2[0]['MonthlyIncome'];

            $EmpTime['sessionId'] = $sid;
            $EmpTime['companyName'] = $employmentName2;
            $EmpTime['jobTitle'] = $jobTitle2;
            $EmpTime['employmentYears'] = $employmentYears2;
            $EmpTime['employmentMonths'] = $employmentMonths2;
            $EmpTime['totalMonths'] = 0;
            $EmpTime['userRefference'] = $request->Resource;
            $EmpTime->save();
        }

        $addressYears = $request->AddressDetails[0]['AddressYears'];
        $addressMonths = $request->AddressDetails[0]['AddressMonths'];

        $addTotalMonths = $addressYears * 12 + $addressMonths;

        if($addTotalMonths>=36){
            $buildingName = $request->AddressDetails[0]['BuildingName'];
            $buildingNumber = $request->AddressDetails[0]['BuildingNumber'];
            $streetAddress = $request->AddressDetails[0]['StreetAddress'];
            $secondStreet = $request->AddressDetails[0]['SecondStreet'];
            $town = $request->AddressDetails[0]['Town'];
            $county = $request->AddressDetails[0]['County'];
            $postcode = $request->AddressDetails[0]['Postcode'];
            $residentialStatus = $request->AddressDetails[0]['ResidentialStatus'];
        }
        else{
            $buildingName = $request->AddressDetails[0]['BuildingName'];
            $buildingNumber = $request->AddressDetails[0]['BuildingNumber'];
            $streetAddress = $request->AddressDetails[0]['StreetAddress'];
            $secondStreet = $request->AddressDetails[0]['SecondStreet'];
            $town = $request->AddressDetails[0]['Town'];
            $county = $request->AddressDetails[0]['County'];
            $postcode = $request->AddressDetails[0]['Postcode'];
            $residentialStatus = $request->AddressDetails[0]['ResidentialStatus'];
            $AddTime['sessionId'] = $sid;
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

        }
        if(!empty($request->AddressDetails1[0])){
            $buildingName1 = $request->AddressDetails1[0]['BuildingName'];
            $buildingNumber1 = $request->AddressDetails1[0]['BuildingNumber'];
            $streetAddress1 = $request->AddressDetails1[0]['StreetAddress'];
            $secondStreet1 = $request->AddressDetails1[0]['SecondStreet'];
            $town1 = $request->AddressDetails1[0]['Town'];
            $county1 = $request->AddressDetails1[0]['County'];
            $postcode1 = $request->AddressDetails1[0]['Postcode'];
            $addressYears1 = $request->AddressDetails1[0]['AddressYears'];
            $addressMonths1 = $request->AddressDetails1[0]['AddressMonths'];


            $AddTime['sessionId'] = $sid;
            // $AddTime['residentialStatus'] = $residentialStatus1;
            $AddTime['addressYears'] = $addressYears1;
            $AddTime['addressMonths'] = $addressMonths1;
            $AddTime['postcode'] = $postcode1;
            $AddTime['buildingNumber'] = $buildingNumber1;
            $AddTime['street'] = $streetAddress1;
            $AddTime['town'] = $town1;
            $AddTime['county'] = $county1;
            $AddTime['buildingName'] = $buildingName1;
            $AddTime['totalMonths'] = 0;
            $AddTime['userRefference'] = $request->Resource;
            $AddTime->save();
        }
        if(!empty($request->AddressDetails2[0])){
            $buildingName2 = $request->AddressDetails2[0]['BuildingName'];
            $buildingNumber2 = $request->AddressDetails2[0]['BuildingNumber'];
            $streetAddress2 = $request->AddressDetails2[0]['StreetAddress'];
            $secondStreet2 = $request->AddressDetails2[0]['SecondStreet'];
            $town2 = $request->AddressDetails2[0]['Town'];
            $county2 = $request->AddressDetails2[0]['County'];
            $postcode2 = $request->AddressDetails2[0]['Postcode'];
            $addressYears2 = $request->AddressDetails2[0]['AddressYears'];
            $addressMonths2 = $request->AddressDetails2[0]['AddressMonths'];

            $AddTime['sessionId'] = $sid;
            // $AddTime['residentialStatus'] = $residentialStatus2;
            $AddTime['addressYears'] = $addressYears2;
            $AddTime['addressMonths'] = $addressMonths2;
            $AddTime['postcode'] = $postcode2;
            $AddTime['buildingNumber'] = $buildingNumber2;
            $AddTime['street'] = $streetAddress2;
            $AddTime['town'] = $town2;
            $AddTime['county'] = $county2;
            $AddTime['buildingName'] = $buildingName2;
            $AddTime['totalMonths'] = 0;
            $AddTime['userRefference'] = $request->Resource;
            $AddTime->save();
        }

        $prefixTitle = $request->PrefixTitle;
        $firstName = $request->FirstName;
        $lastName = $request->LastName;
        $mobileNumber = $request->MobileNumber;
        $emailAddress = $request->EmailAddress;
        $lId = User::orderBy('id','DESC')->first();
        $lId = $lId->leadId;
        $fin =  ltrim($lId,'CF');
        $fin = $fin + 1;
        $leadId = "CF".$fin;
        $existEmail = User::where('email',$emailAddress)->where('mobile',$mobileNumber)->first();
        // $count = $existEmail->count();
        $dayLimit = $filters->accountDaysLimit;
        $reqDate = strtotime(\Carbon\Carbon::now()->subDays($dayLimit));
        $applDate = strtotime($existEmail->created_at);

        $usr = new User();
        $usr['apiKey'] = $extApi;
        $usr['name'] = $firstName.' '.$lastName;
        $usr['leadId'] = $leadId;
        $usr['email'] = $emailAddress;
        $usr['password'] = Hash::make('secret');
        $usr['mobile'] = $mobileNumber;
        $usr['sessionId'] = $sid;
        $usr['vehicleType'] = $vehicleType;
        $usr['monthlyBudget'] = $monthlyBudget;
        $usr['drivingVehicle'] = $licence;
        $usr['creditRating'] = Null;
        $usr['depositOption'] = Null;
        $usr['dob'] = $dob;
        $usr['day'] = $day;
        $usr['month'] = $month;
        $usr['year'] = $year;
        $usr['postcode'] = $postcode;
        $usr['buildingNumber'] = $buildingNumber;
        $usr['town'] = $town;
        $usr['county'] = $county;
        $usr['residentialStatus'] = $residentialStatus;
        $usr['currentAddressYears'] = $addressYears;
        $usr['currentAddressMonths'] = $addressMonths;
        $usr['maritalStatus'] = $maritalStatus;
        $usr['licenceType'] = $licence;
        $usr['britishPassport'] = $passport;
        $usr['employmentStatus'] = $employmentStatus;
        $usr['employmentStatusOther'] = Null;
        $usr['monthlyIncome'] = $monthlyIncome;
        $usr['companyName'] = $employmentName;
        $usr['jobTitle'] = $jobTitle;
        $usr['employmentYears'] = $employmentYears;
        $usr['employmentMonths'] = $employmentMonths;
        $usr['prefixTitle'] = $prefixTitle;
        $usr['firstName'] = $firstName;
        $usr['lastName'] = $lastName;
        $usr['userType'] = 0;
        $usr['userRefference'] = $request->Resource;
        $usr['emailOptions'] = $emailOptions;
        $usr['smsOptions'] = $smsOptions;
        $usr['marketingOptions'] = $marketingOptions;
        // echo $applDate."<".$reqDate;die;
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
            return response()->json(['Error' => 'Account already exist']);
        }
        else{
            $usr->save();
            $usrByEmail = User::where('email',$emailAddress)->first();
            $id = $usrByEmail->id;
            $urlStr = new ExternalLeadsUrlStrings();
            if($usr->save()){
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
                return response()->json(['code' => 'Success', 'message' => 'Application processing.','url'=>$URL]);
            }
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
