<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/','homePageController@displayRecord')->name('homePage');
Route::get('testpage','homePageController@testpage')->name('tagPage');
Route::get('find-car', function () {
    return view('findCar.findCar');
});
Route::get('new-car-offers', function () {
    return view('findCar.newOfferCars');
});

/* Landing Pages routes Start*/
Route::get('/caravan-finance-calculator-loans-bad-credit-uk', 'homePageController@ViewCaravan')->name('landingCaravan');
Route::get('/motorbike-finance-for-bad-credit-loans-uk', 'homePageController@ViewBike')->name('landingBike');
Route::get('/van-finance-calculator-loans-uk', 'homePageController@ViewVan')->name('landingVan');
Route::get('/motorhome-finance-calculator-loans-uk', 'homePageController@ViewMotor')->name('landingMotor');
Route::get('/bad-credit-car-finance-loan-calculator-uk', 'homePageController@ViewBadCredit')->name('badCredit');
Route::get('/poor-bad-credit-car-finance-loan-uk', 'homePageController@ViewPoorCredit')->name('poorCredit');
Route::get('/no-deposit-car-finance-options-bad-credit-deal-uk', 'homePageController@ViewNoDeposit')->name('noDeposit');
Route::get('/best-compare-car-finance-loan-credit-deal-uk','homePageController@ViewCompareCarLoans')->name('compareCarLoans');

/* Landing Pages routes end*/
Route::get('new-offers-display-car/{id}', 'UserController@NewOffersDisplayCar')->name('viewCar');
Route::get('cap-info/{carId}', function () {
    return view('displayCar.capData');
});

Route::get('landing', function () {
    return view('index-new');
});
Route::get('404', function () {
    return view('errorPages.404');
});
Route::get('500', function () {
    return view('errorPages.500');
});

Route::get('car-finance-explained-options-personal-contract-plan-pcp-uk','yourOptionsController@displayRecord')->name('car-finance-explained');
Route::get('dashboard/{id}','UserController@ShowThankYou')->name('thankYou');
/*Route::get('cookie-policy', function () {
    return view('cookies.cookies');
});

Route::get('privacy-policy', function () {
    return view('privacy.privacyPolicy');
});
Route::get('terms-and-conditions', function () {
    return view('terms.termsAndConditions');
});
Route::get('treating-customers-fairly', function () {
    return view('treatingCustomersFairly.treatingCustomersFairly');
});*/

Route::post('/verify-bank-account','UserController@VerifyBank')->name('verifyBank');
Route::post('/save-address-data','UserController@SaveAddressData')->name('saveAddressData');
Route::post('/save-application','UserController@SaveApplication')->name('saveApplication');
Route::post('/update-reference','UserController@UpdateReference')->name('updateReference');
Route::post('/save-employement-data','UserController@SaveEmploymentData')->name('save-employement-data');
Route::post('/save-employement-data1','UserController@SaveEmploymentData1')->name('save-employement-data1');

Route::get('/set-user-session/{lid}','UserController@SetUserSession')->name('setUserSession');
Route::get('send-existing-email/{id}', 'UserController@SendExistingEmail')->name('sendExistingEmail');
Route::get('products','yourOptionsController@displayRecord')->name('products');
Route::get('cookie-policy','cookiesController@displayRecord')->name('cookiePolicy');
Route::get('terms-and-conditions','termsAndConditionsController@displayRecord')->name('termsAndConditions');
Route::get('treating-customers-fairly','treatingCustomersFairlyController@displayRecord')->name('treatingCustomersFairly');
Route::get('privacy-policy','privacyPolicyController@displayRecord')->name('privacyPolicy');

Route::post('store/api-save-leads','ExternalSources@StoreLeads');
Route::get('/redirect-users/{urlString}','ExternalSources@RedirectApiUser');

Route::get('apply-now', function () {
    return view('applyNow.applyNow');
});
Route::get('apply-now-iframe', function () {
    return view('applyNow.apply-now-iframe');
});
Route::get('apply-now-test', function () {
    return view('applyNow.applyNow-backup');
});
Route::get('/check-emails', function () {
    return view('emails.testEmails');
});
Route::get('test-email','UserController@sendEmails');
Route::get('car-finance-calculator-car-loan-uk','carFinanceCalculatorController@displayRecord')->name('financeCalculator');

Route::post('/save-address-data','UserController@SaveAddressData')->name('saveAddressData');

Route::get('display-car/{id}', 'UserController@ViewDisplayCar')->name('viewCar');


/* Route::get('/set-user-session/{lid}','UserController@SetUserSession')->name('setUserSession'); */
Route::get('dashboard', 'UserController@dashboard');
Route::group(['middleware' => ['auth:web']], function () {

  // Route::get('dashboard', function () {
  //     return view('memberArea.memberArea');
  // });
  Route::get('member-dashboard', 'UserController@ViewMemberArea');
  // Route::get('dashboard', 'UserController@dashboard');
  Route::get('upload-documents', function () {
    return view('memberArea.uploadDocument');
  });
  Route::post('upload-documents', 'UserReportsController@uploadDocuments')->name('uploadDocuments');
  Route::post('upload-selfie', 'UserReportsController@uploadSelfie')->name('uploadSelfie');

    Route::get('find-cars', function () {
      return view('memberArea.memberFindCar');
  });
    Route::get('new-offers', function () {
      return view('memberArea.newOffers');
  });

    /*Route::get('saved-cars', function () {
      return view('memberArea.savedCars');
  });*/
  Route::get('saved-cars','UserReportsController@ViewWishlist')->name('savedCars');
  Route::get('display-cars/{id}', 'UserController@ViewMemberDisplayCar')->name('viewCar');
  Route::get('delete-saved-car/{id}', 'UserController@DeleteSavedCar')->name('deleteSavedCar');
  Route::get('new-offers-display/{id}', 'UserController@MemberNewOffers')->name('viewCar');
  // Route::get('send-existing-email/{id}', 'UserController@SendExistingEmail')->name('sendExistingEmail');
  Route::post('add-wishlist', 'UserController@AddToWishList')->name('addToWishList');
  Route::post('add-car', 'UserController@addCar')->name('addCar');
  Route::post('set-first-password', 'UserController@SetFirstPassword')->name('setFirstPassword');

//testing RouteServiceProvider
Route::get('member-area-updated', function () {
  return view('testingPages.member-area-updated');
});


  });

  //Clear Config cache:
  Route::get('/cache-clear', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return '<h1>Cache cleared</h1>';
  });

  Route::get('dashboard-landbot/1', function () {
    return view('landbot.memberAreaLanding');
  });
  Route::get('logout', '\App\Http\Controllers\Auth\LoginController@loggedOut');
