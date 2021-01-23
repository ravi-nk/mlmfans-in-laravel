<?php

use Illuminate\Support\Facades\Route;

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
//     return view('user.index');
// });
Route::get('/', 'SiteController@bannerlist')->name('index');
// Route::get('/', 'SettingController@settinglist');


Route::get('register', 'usersController@registerIndex')->name('register');
Route::post('register', 'usersController@register');
Route::get('checkSponsor','usersController@checkSp')->name('checkSponsor');
Route::get('login', 'usersController@loginIndex')->name('login');
Route::post('login', 'usersController@login');


// admin panel
Route::group(['middleware' => 'auth',  'prefix' => ''], function(){

Route::post('logout', 'usersController@logout')->name('logout');

Route::get('admin/home', 'usersController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('admin/userlist', 'usersController@userlist')->name('admin.userlist');
Route::get('admin/edit/{id}','usersController@edituser');
Route::post('admin/useredit/{id}','usersController@updateuser')->name('useredit');
Route::get('/admin/userdelete/{id}','usersController@deleteuser')->name('userdelete');

Route::get('/admin/bannerAdd','AddbannerController@siteBanner')->name('admin.bannerAdd');
Route::post('/admin/bannerAdd','AddbannerController@bannerimg')->name('admin.bannerAdd');
Route::get('admin/bannerList', 'AddbannerController@bannerlist')->name('admin.bannerList');
Route::get('admin/bannerupdate/{id}','AddbannerController@editBanner');
Route::post('admin/bannerEdit/{id}','AddbannerController@bannerUpdate')->name('admin.bannerEdit');
Route::get('/admin/bannerdelete/{id}','AddbannerController@deletebanner')->name('bannerdelete');

Route::get('/admin/levelPlanList','LevelPlanController@index')->name('admin.planList');
Route::get('admin/addPlan','LevelPlanController@add')->name('admin.addPlan');
Route::post('admin/storePlan','LevelPlanController@store')->name('admin.storePlan');
Route::get('admin/editPlan/{id}','LevelPlanController@edit');
Route::post('admin/updatePlan/{id}','LevelPlanController@update')->name('admin.updatePlan');
Route::get('admin/deletePlan/{id}','LevelPlanController@delete');

Route::get('admin/add_package','PackageController@add')->name('admin.addPackage');
Route::post('admin/store_package','PackageController@store')->name('admin.storePackage');

Route::post("admin/updateStatus",'AddbannerController@updateStatus')->name('admin.bannerStatus');
Route::post("admin/userStatus",'usersController@updateStatus')->name('admin.userStatus');
});
//End admin panel


// user Pannel
Route::get('user/member', 'usersController@memberUser')->name('user.member');
Route::get('user/profile/{id}','usersController@showUserProfile')->name('user.profile');

Route::get('/user/addpost','SiteController@userspost')->name('user.addpost');
Route::post('/user/addpost','SiteController@AddPost')->name('user.addpost');
Route::get('/user/postList', 'SiteController@postlist')->name('user.postList');
Route::get('/user/downline', 'SiteController@getdownline')->name('user.downline');
Route::get('/user/direct', 'SiteController@getdirectuser')->name('user.direct');
Route::get('/user/clasifiedAd', 'SiteController@getAdds')->name('user.clasifiedAd');
Route::get('/user/adsPackage', 'SiteController@getPackage')->name('user.adsPackage');

Route::get('/user/adsBooking/{id}', 'SiteController@getAdsBooking')->name('user.adsBooking');
Route::post('/user/adsBooking','SiteController@addBook')->name('user.adsBook');

Route::get('/user/userPost','SiteController@get_userPost')->name('user.userPost');
Route::get('/user/adduserPost','SiteController@add_userPost')->name('user.addUserPost');
Route::post('/user/storePost','SiteController@store_userPost')->name('user.storePost');

// End user Pannel
