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


/*forntend pages route*/
	Route::get('/contact-us', 'HomeController@contact_us');
	Route::get('/how-it-works', 'HomeController@how_it_works');
	Route::get('/about-us', 'HomeController@about_us');
	Route::get('/compare-offers', 'HomeController@compare_offers');
	Route::get('/privacy', 'HomeController@privacy');
	Route::get('/terms-and-condition', 'HomeController@terms_and_condition');
	Route::get('/report/{id}', 'HomeController@report')->name('forntend_report');
	Route::get('/add-route', 'HomeController@add_route');
	Route:: get('/questions_flow','HomeController@question_flow')->name('get_flow');

/*QUESTIONS_FLOW PAGE*/
	Route::group(['middleware' =>'\App\Http\Middleware\checkuser'], function () {

	Route::get('/questions', 'HomeController@questions');
	//Route::get('/questions_new', 'QuestionSurveyController@view');
	Route::post('/questionGetstarted','QuestionSurveyController@questionGetstartedPost');
	Route::post('/survey_answers','QuestionSurveyController@survey_results');


	
	Route::post('/question1','QuestionSurveyController@questionOnePost');
	Route::post('/question2','QuestionSurveyController@questionTwoPost');
	Route::post('/question3','QuestionSurveyController@questionThreePost');
	Route::post('/question4','QuestionSurveyController@questionFourPost');
	Route::post('/question5','QuestionSurveyController@questionFivePost');
	Route::post('/question6','QuestionSurveyController@questionSixPost');
	Route::post('/question7','QuestionSurveyController@questionSevenPost');
	Route::post('/question8','QuestionSurveyController@questionEightPost');
	Route::post('/question9','QuestionSurveyController@questionNinePost');
	Route::post('/question10','QuestionSurveyController@questionTenPost');
	Route::post('/question11_1','QuestionSurveyController@questionElevenOnePost');
	Route::post('/question11_1_2','QuestionSurveyController@questionElevenOneTwoPost');
	Route::post('/question11_1_3','QuestionSurveyController@questionElevenOneThreePost');
	Route::post('/question11_2','QuestionSurveyController@questionElevenTwoPost');
	Route::post('/question11_2_2','QuestionSurveyController@questionElevenTwoTwoPost');
	Route::post('/question11_2_3','QuestionSurveyController@questionElevenTwoThreePost');
	
	Route::post('/question13','QuestionSurveyController@questionthirteenPost');
	Route::post('/question13_2','QuestionSurveyController@questionthirteenTwoPost');
	Route::post('/question13_3','QuestionSurveyController@questionthirteenThreePost');
	Route::post('/question14','QuestionSurveyController@questionfourteenPost');
	Route::post('/question14_2','QuestionSurveyController@questionfourteendoublePost');
	Route::post('/question14_3','QuestionSurveyController@questionfourteentriplePost');
	Route::post('/question15','QuestionSurveyController@questionfifteenPost');
	Route::post('/question16','QuestionSurveyController@questionsixteenPost');
	Route::post('/question17','QuestionSurveyController@questionseventeenPost');
	Route::post('/question18','QuestionSurveyController@questioneightteenPost');
	Route::post('/question18_data','QuestionSurveyController@questioneightteen_valuePost');

	Route::get('/final_result','QuestionSurveyController@final_ques');
	Route::post('/data_email','QuestionSurveyController@emailPost')->name('user.contact.email');

	//Route::post('/ajax/clerk_tabel_excel_upload','QuestionSurveyController@clerk_table_excel');

	// Route:: get('/questions_flow','QuestionSurveyController@question_flow')->name('get_flow');
	Route::get('/delete_entries','QuestionSurveyController@deleteforuser');
	Route::post('/pmt_slider_ajax_frontend','QuestionSurveyController@pmt_slider_ajax');

});

//Route::get('/login', 'HomeController@login');
//Route::get('/register', 'HomeController@register');

Route::post('/thanku', 'HomeController@thanku');
Route::post('/login_data', 'UserController@login_data');
Route::post('/register_data', 'UserController@register_data');
Route::get('/', function () {
    return view('homepage');
});

/*
|--------------------------------------------------------------------------
| Admin Login Route
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', function () {
    return view('adminlogin');
});

/*
|--------------------------------------------------------------------------
| Helper Class that will generate all Routes
|--------------------------------------------------------------------------
*/
//Auth::routes();

/*
|--------------------------------------------------------------------------
| Home Route
|--------------------------------------------------------------------------
*/
Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Email Confirmation Route
|--------------------------------------------------------------------------
*/
Route::get('/users/confirmation/{token}', 'Auth\RegisterController@confirmation')->name('confirmation');

/*
|--------------------------------------------------------------------------
| Login Through Social Media - Routes
|--------------------------------------------------------------------------
*/
Route::get('auth/facebook', 'SocialController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'SocialController@handleProviderCallback');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin','middleware' =>'\App\Http\Middleware\AdminMiddleware'], function () {

/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes
|--------------------------------------------------------------------------
*/

 Route::get('/logout', 'AdminimgController@logout');



Route::get('/dashboard', 'AdminimgController@users');
//customer-detail-page
Route::get('/customer-detail/{id}', 'AdminimgController@customer_details')->name('admin.customer.details');

Route::get('/bank-info/{id}','AdminimgController@bank_info')->name('bank_info');
Route::get('/compare-offers/{id}','AdminimgController@compare_offers')->name('compare_offers');
Route::get('/clerks', 'AdminimgController@clerks')->name('admin.clerks');
Route::get('/clerk_filter/{id}','AdminimgController@clerk_filter')->name('cf');
Route::get('/status_filter/{id}','AdminimgController@custom_status')->name('cf');
//Route::get('/clerk_filter','AdminimgController@clerk_filter')->name('cf');
Route::post('/ajax/clerk_tabel_excel_upload','AdminimgController@clerk_table_excel');
Route::post('/ajax/bank_interest_tabel_excel_upload','AdminimgController@bank_interest_table_excel');
Route::post('/ajax/bank_prime_excel_upload','AdminimgController@bank_prime_excel');
Route::post('/ajax/bank_madad_excel_upload','AdminimgController@bank_madad_excel');
Route::get('/report1/{id}','AdminimgController@report1')->name('report1');
Route::get('/report2/{id}','AdminimgController@report2')->name('report2');
Route::get('/bank_interest','AdminimgController@bank_interest');
Route::post('/bank_interest_table_data','AdminimgController@bank_interest_table_data');
Route::post('/bank_interest_prime_data','AdminimgController@bank_interest_prime_data');
Route::post('/bank_interest_madad_data','AdminimgController@bank_interest_madad_data');
Route::get('/customer-delete/{id}', 'AdminimgController@delete_customer');

/*settings page save coupons*/
Route::post('/save_coupon','AdminimgController@save_coupon');
Route::get('/delete-coupon/{id}','AdminimgController@delete_coupon')->name('deletecoupons');
/*settings page report*/
Route::post('/save_report','AdminimgController@save_report');
/*settings page constant*/
Route::post('/save_constant','AdminimgController@save_constant');

/*settings checkbox_button_values*/
Route::post('/check_box_value','AdminimgController@check_box_value');
Route::get('/settings','AdminimgController@settings')->name('get_settings');




Route::get('/registration/{id}','AdminimgController@registration')->name('admin_registration');


// Admin Dashboard Routes FOR HEBREW

Route::get('/dashboard-hr', 'AdminimgController@users_hr');

Route::get('/registration-hr/{id}','AdminimgController@registration_hr');
Route::get('/customer-detail-hr/{id}','AdminimgController@customer_details_hr');

Route::get('/bank-info-hr','AdminimgController@bank_info_hr');
Route::get('/bank_interest-hr','AdminimgController@bank_interest_hr');
Route::post('/bank_interest_table_data_hr','AdminimgController@bank_interest_table_data_hr');
Route::post('/bank_interest_prime_data_hr','AdminimgController@bank_interest_prime_data_hr');
Route::post('/bank_interest_madad_data_hr','AdminimgController@bank_interest_madad_data_hr');

Route::get('/clerks-hr', 'AdminimgController@clerks_hr');
Route::get('/clerk_filter-hr/{id}','AdminimgController@clerk_filter_hr')->name('cf');

Route::get('/settings-hr','AdminimgController@settings_hr')->name('get_settings_hr');
Route::post('/save_report-hr','AdminimgController@save_report_hr');
Route::post('/save_coupon-hr','AdminimgController@save_coupon_hr');
Route::get('/delete-coupon-hr/{id}','AdminimgController@delete_coupon_hr')->name('deletecoupons');
Route::post('/save_constant-hr','AdminimgController@save_constant_hr');
Route::post('/check_box_value_hr','AdminimgController@check_box_value_hr');

Route::get('/report1-hr','AdminimgController@report1_hr');
Route::get('/report2-hr','AdminimgController@report2_hr');
Route::get('/compare-offer-hr','AdminimgController@compare_offer_hr');
Route::get('/customer-delete-hr/{id}', 'AdminimgController@delete_customer_hr');

//excel upload  for hr
Route::post('/ajax/clerk_tabel_excel_upload_hr','AdminimgController@clerk_table_excel_hr');
Route::post('/ajax/bank_interest_tabel_excel_upload_hr','AdminimgController@bank_interest_table_excel_hr');
Route::post('/ajax/bank_prime_excel_upload_hr','AdminimgController@bank_prime_excel_hr');
Route::post('/ajax/bank_madad_excel_upload_hr','AdminimgController@bank_madad_excel_hr');




/*ADMIN REGISTRATION QUESTIONS ROUTE*/

	Route::post('/question1','AdminimgController@questionOnePost');
	Route::post('/question2','AdminimgController@questionTwoPost');
	Route::post('/question3','AdminimgController@questionThreePost');
	Route::post('/question4','AdminimgController@questionFourPost');
	Route::post('/question5','AdminimgController@questionFivePost');
	Route::post('/question6','AdminimgController@questionSixPost');
	Route::post('/question7','AdminimgController@questionSevenPost');
	Route::post('/question8','AdminimgController@questionEightPost');
	Route::post('/question9','AdminimgController@questionNinePost');
	Route::post('/question10','AdminimgController@questionTenPost');
	Route::post('/question11_1','AdminimgController@questionElevenOnePost');
	Route::post('/question11_2','AdminimgController@questionElevenTwoPost');
	Route::post('/question11_3','AdminimgController@questionthirteenPost');

	Route::post('/question12','AdminimgController@questionthirteenTwoPost');
	Route::post('/question14','AdminimgController@questionfourteenPost');

	Route::post('/question15','AdminimgController@questionfifteenPost');

	Route::post('/question16','AdminimgController@questionsixteenPost');

	Route::post('/question17','AdminimgController@questionseventeenPost');


	Route::post('/question18','AdminimgController@questioneightteenPost');



	Route::post('/admin_ques_six_ajax','AdminimgController@admin_ques_six_ajax');

	Route::post('/admin_ques_report_inte_ajax','AdminimgController@admin_ques_report_inte_ajax');
	



	Route::post('/ajax_question_twelve','AdminimgController@ajax_question_twelve');
	Route::post('/pmt_slider_ajax','AdminimgController@pmt_slider_ajax');


	Route::post('/table_best_bank_algo','AdminimgController@table_best_bank_algo');


	Route::post('/bank_table_discounts','AdminimgController@bank_table_discounts');




/*
|--------------------------------------------------------------------------
| Change Password Routes
|--------------------------------------------------------------------------
*/
Route::get('/change_password', function () {
    return view('admin.change-password');
});


/*
|--------------------------------------------------------------------------
| User Route 
|--------------------------------------------------------------------------
*/
Route::get('/users/index',array('as'=>'User.index','uses'=>'admin\UserController@index'));
Route::get('/users/create',array('as'=>'User.create','uses'=>'admin\UserController@create'));
Route::post('/users/update/{id}',array('as'=>'User.update','uses'=>'admin\UserController@update'));
Route::post('/users/store',array('as'=>'User.store','uses'=>'admin\UserController@store'));
Route::get('/users/show/{id}',array('as'=>'User.show','uses'=>'admin\UserController@show'));
Route::get('/users/edit/{id}', array('as'=>'User.edit','uses'=>'admin\UserController@edit'));
Route::post('/users/edit/{id}', array('as'=>'User.edit','uses'=>'admin\UserController@update'));
Route::get('/users/form',array('as'=>'User.form','uses'=>'admin\UserController@form'));
Route::post('/users/destroy',array('as'=>'User.destroy','uses'=>'admin\UserController@destroy'));

/*
|--------------------------------------------------------------------------
| CMS Pages Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/pages', 'PagesController@index');
Route::get('/pages/view/{id}', 'PagesController@view');
Route::get('/pages/add', 'PagesController@add');
Route::post('/pages/add', 'PagesController@store');
Route::get('/pages/edit/{id}', 'PagesController@edit');
Route::post('/pages/edit/{id}', 'PagesController@update');
Route::get('/pages/del/{id}', 'PagesController@del');
Route::get('/pages/view/{id}', 'PagesController@view');

/*
|--------------------------------------------------------------------------
| Questions Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/',array('uses'=>'admin\QuestionController@index'));
Route::get('/questions/index',array('as'=>'Questions.index','uses'=>'admin\QuestionController@index'));
Route::get('/questions/create',array('as'=>'Questions.create','uses'=>'admin\QuestionController@create'));
Route::post('/questions/update/{id}',array('as'=>'Questions.update','uses'=>'admin\QuestionController@update'));
Route::post('/questions/store',array('as'=>'Questions.store','uses'=>'admin\QuestionController@store'));
Route::get('/questions/show/{id}',array('as'=>'Questions.show','uses'=>'admin\QuestionController@show'));
Route::get('/questions/edit/{id}',array('as'=>'Questions.edit','uses'=>'admin\QuestionController@edit'));
Route::get('/questions/form',array('as'=>'Questions.form','uses'=>'admin\QuestionController@form'));
Route::post('/questions/destroy',array('as'=>'Questions.destroy','uses'=>'admin\QuestionController@destroy'));

/*
|--------------------------------------------------------------------------
| Metatags Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/',array('uses'=>'admin\MetaTagController@index'));
Route::get('/metatags/index',array('as'=>'Meta_tags.index','uses'=>'admin\MetaTagController@index'));
Route::get('/metatags/create',array('as'=>'Meta_tags.create','uses'=>'admin\MetaTagController@create'));
Route::post('/metatags/update',array('as'=>'Meta_tags.update','uses'=>'admin\MetaTagController@update'));
Route::post('/metatags/store',array('as'=>'Meta_tags.store','uses'=>'admin\MetaTagController@store'));
Route::get('/metatags/show/{id}',array('as'=>'Meta_tags.show','uses'=>'admin\MetaTagController@show'));
Route::get('/metatags/edit/{id}',array('as'=>'Meta_tags.edit','uses'=>'admin\MetaTagController@edit'));
Route::post('/metatags/destroy',array('as'=>'Meta_tags.destroy','uses'=>'admin\MetaTagController@destroy'));

/*
|--------------------------------------------------------------------------
| Coupons Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/',array('uses'=>'admin\CouponController@index'));
Route::get('/coupons/index',array('as'=>'Coupons.index','uses'=>'admin\CouponController@index'));
Route::get('/coupons/create',array('as'=>'Coupons.create','uses'=>'admin\CouponController@create'));
Route::post('/coupons/update',array('as'=>'Coupons.update','uses'=>'admin\CouponController@update'));
Route::post('/coupons/store',array('as'=>'Coupons.store','uses'=>'admin\CouponController@store'));
Route::get('/coupons/show/{id}',array('as'=>'Coupons.show','uses'=>'admin\CouponController@show'));
Route::get('/coupons/edit/{id}',array('as'=>'Coupons.edit','uses'=>'admin\CouponController@edit'));
Route::post('/coupons/destroy',array('as'=>'Coupons.destroy','uses'=>'admin\CouponController@destroy'));

/*
|--------------------------------------------------------------------------
| Services Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/services', 'ServiceController@index');
Route::get('/services/view/{id}', 'ServiceController@view');
Route::get('/services/add', 'ServiceController@add');
Route::post('/services/add', 'ServiceController@store');
Route::get('/services/edit/{id}', 'ServiceController@edit');
Route::post('/services/edit/{id}', 'ServiceController@update');
Route::get('/services/del/{id}', 'ServiceController@del');
Route::get('/services/view/{id}', 'ServiceController@view');

/*
|--------------------------------------------------------------------------
| Testimonials Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/testimonials', 'TestimonialController@index');
Route::get('/testimonials/view/{id}', 'TestimonialController@view');
Route::get('/testimonials/add', 'TestimonialController@add');
Route::post('/testimonials/add', 'TestimonialController@store');
Route::get('/testimonials/edit/{id}', 'TestimonialController@edit');
Route::post('/testimonials/edit/{id}', 'TestimonialController@update');
Route::get('/testimonials/del/{id}', 'TestimonialController@del');
Route::get('/testimonials/view/{id}', 'TestimonialController@view');

/*
|--------------------------------------------------------------------------
| Features Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/features', 'FeatureController@index');
Route::get('/features/view/{id}', 'FeatureController@view');
Route::get('/features/add', 'FeatureController@add');
Route::post('/features/add', 'FeatureController@store');
Route::get('/features/edit/{id}', 'FeatureController@edit');
Route::post('/features/edit/{id}', 'FeatureController@update');
Route::get('/features/del/{id}', 'FeatureController@del');
Route::get('/features/view/{id}', 'FeatureController@view');

/*
|--------------------------------------------------------------------------
| Home Page - Questions & Answers Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/homequestions', 'HomequestionController@index');
Route::get('/homequestions/view/{id}', 'HomequestionController@view');
Route::get('/homequestions/add', 'HomequestionController@add');
Route::post('/homequestions/add', 'HomequestionController@store');
Route::get('/homequestions/edit/{id}', 'HomequestionController@edit');
Route::post('/homequestions/edit/{id}', 'HomequestionController@update');
Route::get('/homequestions/del/{id}', 'HomequestionController@del');
Route::get('/homequestions/view/{id}', 'HomequestionController@view');

/*
|--------------------------------------------------------------------------
| Logos Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/logos', 'LogoController@index');
Route::get('/logos/view/{id}', 'LogoController@view');
Route::get('/logos/add', 'LogoController@add');
Route::post('/logos/add', 'LogoController@store');
Route::get('/logos/edit/{id}', 'LogoController@edit');
Route::post('/logos/edit/{id}', 'LogoController@update');
Route::get('/logos/del/{id}', 'LogoController@del');
Route::get('/logos/view/{id}', 'LogoController@view');

/*
|--------------------------------------------------------------------------
| Home Page Content - Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/commons', 'CommonController@index');
Route::get('/commons/view/{id}', 'CommonController@view');
Route::get('/commons/add', 'CommonController@add');
Route::post('/commons/add', 'CommonController@store');
Route::get('/commons/edit/{id}', 'CommonController@edit');
Route::post('/commons/edit/{id}', 'CommonController@update');
Route::get('/commons/del/{id}', 'CommonController@del');
Route::get('/commons/view/{id}', 'CommonController@view');

/*
|--------------------------------------------------------------------------
| Website - Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/sites', 'SiteController@index');
Route::get('/sites/view/{id}', 'SiteController@view');
Route::get('/sites/add', 'SiteController@add');
Route::post('/sites/add', 'SiteController@store');

/*
|--------------------------------------------------------------------------
| Admin Profile Image Settings - Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/adminimgs', 'AdminimgController@index');
Route::get('/adminimgs/view/{id}', 'AdminimgController@view');
Route::get('/adminimgs/add', 'AdminimgController@add');
Route::post('/adminimgs/add', 'AdminimgController@store');
Route::get('/adminimgs/edit/{id}', 'AdminimgController@edit');
Route::post('/adminimgs/edit/{id}', 'AdminimgController@update');
Route::get('/adminimgs/del/{id}', 'AdminimgController@del');
Route::get('/adminimgs/view/{id}', 'AdminimgController@view');
Route::get('/adminimgs/customer-delete/{id}', 'AdminimgController@delete_customer');

/*
|--------------------------------------------------------------------------
| Example Report PDF Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/exreports', 'ExreportController@index');
Route::get('/exreports/view/{id}', 'ExreportController@view');
Route::get('/exreports/add', 'ExreportController@add');
Route::post('/exreports/add', 'ExreportController@store');
Route::get('/exreports/edit/{id}', 'ExreportController@edit');
Route::post('/exreports/edit/{id}', 'ExreportController@update');
Route::get('/exreports/del/{id}', 'ExreportController@del');
Route::get('/exreports/view/{id}', 'ExreportController@view');
});

/*
|--------------------------------------------------------------------------
| Dashboard - Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/dashboard', function () {

	if(\Auth::check() && \Auth::user()->role == "admin")
	{
    	return redirect('/admin/dashboard');
	}
	elseif(\Auth::user()->role == "user")
	{
    	return redirect('/home');
	}else
	{
   		return redirect('/login');
	} 
});

/*
|--------------------------------------------------------------------------
| Language Route
|--------------------------------------------------------------------------
*/
// Route::get('locale/{locale}', function ($locale) {
    
//     Session::put('locale', $locale);

//     return redirect()->back();
// });






/*
|--------------------------------------------------------------------------
| Authentication Routes...
|--------------------------------------------------------------------------
*/
Route::get('login', [
  'as' => 'login',
  'uses' => 'HomeController@login'
]);
Route::post('login', [
  'as' => '',
  'uses' => 'HomeController@login'
]);
Route::post('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);
// Password Reset Routes...
Route::post('password/email', [
  'as' => 'password.email',
  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
  'as' => 'password.request',
  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
  'as' => 'password.update',
  'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
  'as' => 'password.reset',
  'uses' => 'Auth\ResetPasswordController@showResetForm'
]);
// Registration Routes...
Route::get('register', [
  'as' => 'register',
  'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
  'as' => '',
  'uses' => 'Auth\RegisterController@register'
]);


/*
|--------------------------------------------------------------------------
| Something New...
|--------------------------------------------------------------------------
*/





/*
----------------------------------------------------
Payment Routes
----------------------------------------------------
*/

Route::get('/paymentStep1','PaymentController@payment_one');
Route::get('/paymentStep2','PaymentController@payment_two');
Route::get('/paymentStep3','PaymentController@payment_three');
Route::get('/paymentStep4','PaymentController@payment_four');

/*-----STEPS 4.0 TO 4.7-----*/
Route::get('/bankinfoStep','PaymentController@bankStep_zero');
Route::get('/bankinfoStep1','PaymentController@bankStep_one');
Route::get('/bankinfoStep2','PaymentController@bankStep_two');
Route::get('/bankinfoStep3','PaymentController@bankStep_three');
Route::get('/bankinfoStep4','PaymentController@bankStep_four');
Route::get('/bankinfoStep5','PaymentController@bankStep_five');
Route::get('/bankinfoStep6','PaymentController@bankStep_six');
Route::get('/bankinfoStep7','PaymentController@bankStep_seven');




