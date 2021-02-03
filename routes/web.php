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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get','post'],'/redirectTo','UsersController@redirectTo');
Route::match(['get','post'], '/review','IndexController@addreview');

//Privacy Policy & Terms & Conditions
Route::match(['get','post'],'/privacy-policy','IndexController@privacy');
Route::match(['get','post'],'/term-condition','IndexController@term');
;

//all admin register
Route::match(['get','post'],'/allregister','IndexController@registeralladmin');
Route::match(['get','post'],'/alllogin','IndexController@loginalladmin');

//ask question page
Route::match(['get','post'],'/askquestion','IndexController@askquestion');
Route::match(['get','post'],'/askquestion','IndexController@addquestion');

//request blood & donate
Route::match(['get','post'],'/requestblood','IndexController@requestblood');
Route::match(['get','post'],'/addrequestblood','IndexController@addrequestblood');
Route::match(['get','post'],'/adddonateblood','IndexController@adddonateblood');

//superadmin
Route::match(['get','post'],'/admin','AdminController@login');
Route::match(['get','post'],'/admin/register','AdminController@register');
Route::match(['get','post'],'/','IndexController@index');

//users(Patient)

Route::match(['get','post'],'/user-login-register','UsersController@userlogin');
Route::match(['get','post'],'/user-register','UsersController@userregister');
Route::match(['get','post'],'/patient/forgot-password','UsersController@forgotpassword');


Route::group(['middleware' => ['patientmiddleware']] , function()
{
Route::match(['get','post'],'/patient-dashboard','UsersController@viewdashboard');
Route::match(['get','post'],'/patient-logout','UsersController@logout');
Route::match(['get','post'],'/patient/pharmacylist','UsersController@pharmacylist');
Route::match(['get','post'],'/patient/favourites','UsersController@favourites');
Route::match(['get','post'],'/patient/profile-settings','UsersController@profilesetting');
Route::match(['get','post'],'/doctor-booking/{id}','IndexController@booking');
Route::match(['get','post'],'/patient/change-password','UsersController@changepassword');
// Route::match(['get','post'],'/patient/change-password','UsersController@changepassword');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>['auth']],function()
{
//Dashboard
Route::match(['get','post'],'/admin/dashboard','AdminController@dashboard');


//Business Partners
Route::match(['get','post'],'/admin/bloodbank/bloodbank-listing','AdminController@viewbloodbank');
Route::match(['get','post'],'/status/bloodbank/update','AdminController@updatebloodbankstatus')->name('bloodbank.update.status');
Route::match(['get','post'],'/admin/doctor-list','AdminController@viewdoctor');
Route::match(['get','post'],'/status/doctor/update','AdminController@updatedoctorstatus')->name('doctor.update.status');
Route::match(['get','post'],'/admin/diagnostics-list','AdminController@viewdiagnostics');
Route::match(['get','post'],'/admin/diagnostic/delete/{id}','AdminController@deletediagnostic');
Route::match(['get','post'],'/status/diagnostic/update','AdminController@updatediagnosticstatus')->name('diagnostic.update.status');
Route::match(['get','post'],'/admin/hospital-list','AdminController@viewhospital');
Route::match(['get','post'],'/admin/hospital-delete/{id}','AdminController@deletehospital');
Route::match(['get','post'],'/status/hospital/update','AdminController@updatehospitalstatus')->name('hospital.update.status');
Route::match(['get','post'],'/admin/pharmacy-list','AdminController@viewpharmacy');
Route::match(['get','post'],'/status/update','AdminController@updatepharmacystatus')->name('pharmacy.update.status');

// Appointment-list
Route::match(['get','post'],'/admin/appointment-list','AdminController@viewappointment');
//patients-list
Route::match(['get','post'],'/admin/patient-list','AdminController@viewpatient');
Route::match(['get','post'],'/patient-list/status/update','AdminController@updatepatientstatus')->name('patient.update.status');
//Review-list
Route::match(['get','post'],'/admin/reviews','AdminController@viewreview');
//Transactions-list
Route::match(['get','post'],'/admin/transactions','AdminController@viewtransaction');
//Report-list
Route::match(['get','post'],'/admin/reports','AdminController@viewreport');


//speciality
Route::match(['get','post'],'/admin/speciality','SpecialityController@viewspec');
Route::match(['get','post'],'/admin/add-spec','SpecialityController@addspec');
Route::match(['get','post'],'/admin/edit-spec/{id}','SpecialityController@editspec');
Route::match(['get','post'],'/admin/speciality/delete/{id}','SpecialityController@deletespec');

// subadmin
Route::match(['get','post'],'/admin/subadmin','SubadminController@viewadmin');
Route::match(['get','post'],'/admin/add-admin','SubadminController@addadmin');
Route::match(['get','post'],'/admin/subadmin/delete/{id}','SubadminController@deleteadmin');

//category
Route::match(['get','post'],'/admin/category','CategoryController@index');
Route::match(['get','post'],'/admin/addcategory','CategoryController@addcat');
Route::match(['get','post'],'/admin/editcategory/{id}','CategoryController@editcat');
Route::match(['get','post'],'/admin/category/delete/{id}','CategoryController@deletecat');

//blog
Route::match(['get','post'],'/admin/blog','AdminController@viewblog');
// Route::match(['get','post'],'/admin/addblog','BlogController@addblog');
// Route::match(['get','post'],'/admin/editblog/{id}','BlogController@editblog');
// Route::match(['get','post'],'/admin/blog/delete/{id}','BlogController@deleteblog');

//Product
Route::match(['get','post'],'/admin/product','ProductController@viewproduct');
Route::match(['get','post'],'/admin/addproduct','ProductController@addproduct');
Route::match(['get','post'],'/admin/editproduct/{id}','ProductController@editproduct');
Route::match(['get','post'],'/admin/product/delete/{id}','ProductController@deleteproduct');

//Ask Question
Route::match(['get','post'],'/admin/askquestion','AskquestionController@viewlist');
Route::match(['get','post'],'admin/askquestion/delete/{id}','AskquestionController@deleteque');

//Donate blood
Route::match(['get','post'],'/admin/donateblood','BloodbankController@viewdonateblood');
Route::match(['get','post'],'/admin/donateblood/delete/{id}','BloodbankController@deletedonateblood');

//Request Blood
Route::match(['get','post'],'/admin/requestblood','BloodbankController@viewrequestblood');
Route::match(['get','post'],'/admin/requestblood/delete/{id}','BloodbankController@deleterequestblood');

//Subscription plan
Route::match(['get','post'],'/admin/subscription','SubscriptionplanController@viewplan');
Route::match(['get','post'],'/admin/subscription/add','SubscriptionplanController@addplan');
Route::match(['get','post'],'/admin/subscription/delete/{id}','SubscriptionplanController@deleteplan');

Route::match(['get','post'],'/status/update','AdminController@updatepharmacystatus')->name('pharmacy.update.status');

});

Route::get('/logout','AdminController@logout');

//Pharmacy-dashboard

Route::match(['get','post'],'/pharmacyadmin','PharmacyController@loginpharmacy');
Route::match(['get','post'],'/pharmacyregister','PharmacyController@registerpharmacy');
Route::get('/pharmacy-logout','PharmacyController@logout');

Route::group(['middleware' =>['pharmacyadmin']],function()
{
Route::match(['get','post'],'/pharmacy-dashboard','PharmacyController@index');

//pharmacy-product

Route::match(['get','post'],'/pharmacy/product','ProductController@pharmacyproduct');
Route::match(['get','post'],'/pharmacy/product/add-product','ProductController@addpharmacyproduct');
Route::match(['get','post'],'/pharmacy/product/edit-product/{id}','ProductController@editpharmacyproduct');
Route::match(['get','post'],'/pharmacy/product/delete/{id}','ProductController@deletepharmacyproduct');
// Route::match(['get','post'],'/pharmacy/product/expired','ProductController@expireproduct');
Route::match(['get','post'],'/pharmacy/product/outstock','ProductController@outstock');

//pharmacy-category
Route::match(['get','post'],'/pharmacy/category','PharmacyController@pharmacycategory');
Route::match(['get','post'],'/pharmacy/category/add-category','PharmacyController@addpharmacycat');
Route::match(['get','post'],'/pharmacy/category/edit-category/{id}','PharmacyController@editpharmacycat');
Route::match(['get','post'],'/pharmacy/category/delete/{id}','PharmacyController@deletepharmacycat');

//Pharmacy-Profile

Route::match(['get','post'],'/pharmacy/profile','PharmacyController@viewprofile');
Route::match(['get','post'],'/pharmacy/viewprofile','PharmacyController@changepassword


');
Route::match(['get','post'],'/pharmacy/editprofile','PharmacyController@editprofile');
// Order-List-Pharmacy 
Route::match(['get','post'],'/pharmacy/order','PharmacyController@vieworder');

//pharmacy-sales 
Route::match(['get','post'],'/pharmacy/sales','PharmacyController@viewsales');

//pharmacy-transaction
Route::match(['get','post'],'/pharmacy/transactions','PharmacyController@viewtransaction');

//pharmacy-invoice-report
Route::match(['get','post'],'/pharmacy/invoice-report','PharmacyController@viewinvoice');
Route::match(['get','post'],'/pharmacy/edit-Invoice-report','PharmacyController@editinvoice');

});
Route::match(['get','post'],'/doctoradmin','DoctorController@logindoctor');
Route::match(['get','post'],'/doctorregister','DoctorController@registerdoctor');
//doctor-dashboard
Route::group(['middleware' => ['doctormiddleware']] , function()
{
Route::match(['get','post'],'/doctor-dashboard','DoctorController@viewdoctordashboard');
Route::match(['get','post'],'/doctor-dashboard/appointments','DoctorController@viewdoctorappointment');
Route::match(['get','post'],'/doctor-dashboard/my-patients','DoctorController@viewmypatient');
Route::match(['get','post'],'/doctor-dashboard/schedule-timings','DoctorController@viewschedule');
Route::match(['get','post'],'/doctor-dashboard/editschedule/{id}','DoctorController@editschedule');
Route::match(['get','post'],'/doctor-dashboard/delete-time-slot/{id}','DoctorController@deleteschedule');
Route::match(['get','post'],'/doctor-dashboard/add-schedule','DoctorController@addtime');
Route::match(['get','post'],'/doctor-dashboard/listinvoice','DoctorController@listinvoice');
Route::match(['get','post'],'/doctor-dashboard/viewinvoice','DoctorController@viewinvoice');
Route::match(['get','post'],'/doctor-dashboard/reviews','DoctorController@viewreview');
Route::match(['get','post'],'/doctor-dashboard/doctor-profile-settings','DoctorController@viewdoctorprofile');
Route::match(['get','post'],'/doctor-dashboard/social-media','DoctorController@addsocialmedia');
Route::match(['get','post'],'/doctor-dashboard/doctor-change-password','DoctorController@changepassword');
Route::match(['get','post'],'/doctor-dashboard/logout','DoctorController@alllogout');


// schedule attributes

Route::match(['get','post'],'/doctor-dashboard/add-schedule/{id}','DoctorController@scheduleattribute');

Route::match(['get','post'],'/doctor-dashboard/edit-schedule/{id}','DoctorController@editscheattribute');

Route::match(['get','post'],'/doctor-dashboard/delete-schedule/{id}','DoctorController@deleteattribute');
//blog
Route::match(['get','post'],'/doctor/blog','BlogController@index');
Route::match(['get','post'],'/doctor/addblog','BlogController@addblog');
Route::match(['get','post'],'/doctor/editblog/{id}','BlogController@editblog');
Route::match(['get','post'],'/doctor/blog/delete/{id}','BlogController@deleteblog');


});

//Bloodbank Dashboard

Route::match(['get','post'],'/bloodbankadmin','BloodbankController@loginbloodbank');
Route::match(['get','post'],'/bloodbankregister','BloodbankController@registerbloodbank');

Route::group(['middleware' => ['bloodbankmiddleware']] , function()
{
    Route::match(['get','post'],'bloodbank/bloodbank-dashboard','BloodbankController@index');
    Route::get('/bloodbank-dashboard-logout','BloodbankController@logout');

    Route::match(['get','post'],'/bloodbank/bloodrequest','BloodbankController@viewrequest');
    Route::match(['get','post'],'/bloodbank/blooddonate','BloodbankController@viewdonate');
    Route::match(['get','post'],'/bloodbank/change-password','BloodbankController@changepassword');

    Route::match(['get','post'],'/bloodbank/profile-settings','BloodbankController@profilesetting');
});


//other pages on home page

Route::get('/doctors/map-grid','IndexController@viewdoctorgrid');
Route::get('/doctors/search','IndexController@searchdoctor');
Route::match(['get','post'],'/doctor-profile/{id}','IndexController@viewdoctorprofile');
Route::match(['get','post'],'/doctor-profile/reviews/{id}','IndexController@doctorreview');


Route::get('/doctor-booking-checkout','IndexController@checkout');
Route::get('/doctor-booking-success','IndexController@bookingsuccess');


Route::get('/pharmacy-index','IndexController@pharmacyindex');
Route::get('/pharmacy-details','IndexController@pharmacydetails');
Route::get('/pharmacy-search','IndexController@pharmacysearch');
Route::get('/product-all','IndexController@productall');
Route::get('/view-cart','IndexController@viewcart');
Route::match(['get','post'],'/blog-details/{id}','IndexController@viewblogdetails');
Route::get('/view-blog-grid','IndexController@viewbloggrid');
Route::get('/business-partners','IndexController@businesspartner');

//diagnostics dashboard

Route::match(['get','post'],'/diagnosticadmin','DiagnosticController@logindiagnostic');
Route::match(['get','post'],'/diagnosticregister','DiagnosticController@registerdiagnostic');

Route::group(['middleware' => ['diagnosticmiddleware']] , function()
{
    Route::match(['get','post'],'/diagnostic/diagnostic-dashboard','DiagnosticController@index');
    Route::match(['get','post'],'/diagnostic/diagnostic-change-password','DiagnosticController@changepassword');
    Route::match(['get','post'],'/diagnostic/diagnostic-profile-settings','DiagnosticController@profilesetting');
    Route::match(['get','post'],'/diagnostic/diagnostic-reviews','DiagnosticController@viewreview');
    Route::match(['get','post'],'/diagnostic/diagnostic-schedules','DiagnosticController@viewschedule');
    Route::match(['get','post'],'/diagnostic/diagnostic-schedule-edit-time','DiagnosticController@editschedule');
    Route::match(['get','post'],'/diagnostic/diagnostic-schedule-add-time','DiagnosticController@addtime');
    
    
    Route::match(['get','post'],'/diagnostic/logout','DiagnosticController@logout');
});



// hospital dashboard

Route::match(['get','post'],'/hospitaladmin','HospitalController@loginhospital');
Route::match(['get','post'],'/hospitalregister','HospitalController@registerhospital');
Route::group(['middleware'=>['hospitalmiddleware']] , function()
{
Route::match(['get','post'],'/hospital/change-password','HospitalController@changepassword');
Route::match(['get','post'],'/hospital/hospital-schedule-timings','HospitalController@viewschedule');
Route::match(['get','post'],'/hospital/hospital-schedule-edit-time','HospitalController@editschedule');
Route::match(['get','post'],'/hospital/hospital-schedule-add-time','HospitalController@addtime');
Route::match(['get','post'],'/hospital/hospital-dashboard','HospitalController@viewdashboard');
Route::match(['get','post'],'/hospital/hospital-profile-setting','HospitalController@profilesetting');
Route::match(['get','post'],'/hospital/hospital-reviews','HospitalController@viewreview');

Route::match(['get','post'],'/hospital/logout/{id}','HospitalController@hospitallogout');
});