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
// Normal View Routes
Route::get('/', function () {
    return view('index');
});
Route::get('find-car', function () {
    return view('findCar.findCar');
});

Route::get('display-car/{id}', 'UserController@ViewDisplayCar')->name('viewCar');
Route::get('car-finance-explanation', function () {
    return view('carFinanceExplanation.carFinanceExplanation');
});
Route::get('cookie-policy', function () {
    return view('cookies.cookies');
});
Route::get('apply-now', function () {
    return view('applyNow.applyNow');
});
Route::get('privacy-policy', function () {
    return view('privacy.privacyPolicy');
});
Route::get('terms-and-conditions', function () {
    return view('terms.termsAndConditions');
});
Route::get('treating-customers-fairly', function () {
    return view('treatingCustomersFairly.treatingCustomersFairly');
});

Route::get('/admin-login','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin-login','Admin\LoginController@login')->name('admin.login');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/save-application','UserController@SaveApplication')->name('saveApplication');
Route::get('/set-user-session/{lid}','UserController@SetUserSession')->name('setUserSession');
Route::post('/save-address-data','UserController@SaveAddressData')->name('saveAddressData');
Route::post('/save-employement-data','UserController@SaveEmploymentData')->name('save-employement-data');
Route::post('/admin/password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin/password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin/password/reset','Admin\ResetPasswordController@reset')->name('admin.password.update');
Route::get('/admin/password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('send-existing-email/{id}', 'UserController@SendExistingEmail')->name('sendExistingEmail');
Route::post('store/api-save-leads','ExternalSources@StoreLeads');
Route::get('/redirect-users/{urlString}','ExternalSources@RedirectApiUser');
// Route::post('/store-application/{apiKey}','ExternalSources@StoreLeads')->name('StoreLeads');
//Admin Routes
Route::group(['middleware' => ['auth:admin']], function () {
  Route::get('admin/dashboard', function () {
      return view('admin.dashboard');

  });
  Route::get('/admin/wishlist','UserReportsController@ViewWishlist')->name('wishlist');
  Route::get('/admin/users-leads','UserReportsController@ViewUserLeads')->name('userLead');
  Route::post('/admin/users-leads','UserReportsController@addActivity')->name('addActivity');
  Route::get('/admin/lead-detail/{id}','UserReportsController@LeadDetail')->name('leadDetails');
  Route::get('/admin/view-api-doc','ExternalSources@ViewApiDoc')->name('apiDocument');

/* External Sources routes start */

Route::get('/admin/add-resource','ExternalSources@ShowAddResource')->name('ShowResource');
Route::post('/admin/add-resource','ExternalSources@AddResource')->name('AddResource');
Route::get('admin/view-resources', 'ExternalSources@ViewResources')->name('viewResource');
Route::get('admin/edit-resources/{id}', 'ExternalSources@editResource')->name('editResource');
Route::get('/admin/delete-resource/{id}','ExternalSources@DeleteResource')->name('deleteResource');
Route::post('/admin/update-resource','ExternalSources@updateResource')->name('updateResource');

Route::get('/admin/view-logs','ExternalSources@ViewApiLogs')->name('viewApiLogs');

/* External Sources routes end */

/* get Lead start */
Route::get('admin/update-lead-filters', 'ExternalSources@ViewFilters')->name('viewLeadFilters');
Route::post('admin/update-lead-filters', 'ExternalSources@UpdateLeadFilters')->name('UpdateLeadFilters');
/* get Lead end */

/*Admin Panel Pages Routes start*/
Route::get('admin/home-page', 'homePageController@editRecord')->name('homePage');
Route::get('admin/representative-example', 'representativeExampleController@editRecord')->name('representativeExample');
Route::get('admin/features', 'featuresController@editRecord')->name('features');
Route::get('admin/calculator', 'calculatorController@editRecord')->name('calculator');
Route::get('admin/your-options', 'yourOptionsController@editRecord')->name('yourOptions');
Route::get('admin/complaints-procedures', 'complaintsProceduresController@editRecord')->name('complaintsProcedures');
Route::get('admin/terms-and-conditions', 'termsAndConditionsController@editRecord')->name('termsAndConditions');
Route::get('admin/privacy-policy', 'PrivacyPolicyController@editRecord')->name('privacyPolicy');
Route::get('admin/cookies', 'cookiesController@editRecord')->name('cookies');
Route::get('admin/treating-customers-fairly', 'treatingCustomersFairlyController@editRecord')->name('treatingCustomersFairly');


Route::post('admin/home-page', 'homePageController@updateRecord')->name('updateHomePage');
Route::post('admin/representative-example', 'representativeExampleController@updateRecord')->name('updateRepresentativeExample');
Route::post('admin/features', 'featuresController@updateRecord')->name('updateFeatures');
Route::post('admin/calculator', 'calculatorController@updateRecord')->name('updateCalculator');
Route::post('admin/your-options', 'yourOptionsController@updateRecord')->name('updateYourOptions');
Route::post('admin/complaints-procedures', 'complaintsProceduresController@updateRecord')->name('updateComplaintsProcedures');
Route::post('admin/terms-and-conditions', 'termsAndConditionsController@updateRecord')->name('updateTermsAndConditions');
Route::post('admin/privacy-policy', 'PrivacyPolicyController@updateRecord')->name('updatePrivacyPolicy');
Route::post('admin/cookies', 'cookiesController@updateRecord')->name('updateCookies');
Route::post('admin/treating-customers-fairly', 'treatingCustomersFairlyController@updateRecord')->name('updatetreatingCustomersFairly');
/*Admin Panel Pages Routes end*/

});

//Users Group
Route::group(['middleware' => ['auth:web']], function () {

  Route::get('member-area', function () {
      return view('memberArea.memberArea');
  });
  Route::get('upload-documents', function () {
    return view('memberArea.uploadDocument');
});
  Route::get('find-cars', function () {
    return view('memberArea.memberFindCar');
});
Route::get('saved-cars', 'UserReportsController@ViewUserWishlist')->name('viewUserWishlist');
Route::get('display-cars/{id}', 'UserController@ViewMemberDisplayCar')->name('viewCar');
Route::post('add-wishlist', 'UserController@AddToWishList')->name('addToWishList');
Route::post('set-first-password', 'UserController@SetFirstPassword')->name('setFirstPassword');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
