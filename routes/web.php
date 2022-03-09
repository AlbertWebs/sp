<?php
use App\Http\Controllers\DropzoneController;

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

//HomeRoutes
Route::get('/','App\Http\Controllers\HomeController@index1');
Route::get('/home1','App\Http\Controllers\HomeController@index');
Route::get('/home2','App\Http\Controllers\HomeController@index2');
Route::get('/home','App\Http\Controllers\HomeController@home');
Route::get('/shop','App\Http\Controllers\HomeController@shop');
Route::get('/shop/website','App\Http\Controllers\HomeController@website');
Route::get('/shop/website/cat/{cat}','App\Http\Controllers\HomeController@website_cat');
Route::get('/shop/website/{name}','App\Http\Controllers\HomeController@website_details');
Route::get('/shop/website/link/{name}','App\Http\Controllers\HomeController@link');
Route::get('/shop/cat/{cat}','App\Http\Controllers\HomeController@shop_cat');
Route::get('/shop/{name}','App\Http\Controllers\HomeController@shop_details');
Route::get('/portfolio','App\Http\Controllers\HomeController@portfolio');
Route::get('/our-work','App\Http\Controllers\HomeController@portfolio');
Route::get('/portfolio/{id}','App\Http\Controllers\HomeController@portfolio_detail');
Route::get('/contact','App\Http\Controllers\HomeController@contact');
Route::get('/contact-us','App\Http\Controllers\HomeController@contact');
Route::get('/services','App\Http\Controllers\HomeController@services');
Route::get('/our-services','App\Http\Controllers\HomeController@services');
Route::get('/service/{name}','App\Http\Controllers\HomeController@service');
Route::get('/service/{name}/{extra}','App\Http\Controllers\HomeController@service_extra');
Route::get('/about','App\Http\Controllers\HomeController@about');
Route::get('/about-us','App\Http\Controllers\HomeController@about');
Route::get('/what-we-do','App\Http\Controllers\HomeController@who');
Route::get('/terms','App\Http\Controllers\HomeController@terms');
Route::get('/privacy','App\Http\Controllers\HomeController@privacy');
Route::get('/copyright','App\Http\Controllers\HomeController@copyright');
Route::get('/commingsoon','App\Http\Controllers\HomeController@commingsoon');
Route::post('/submitMessage','App\Http\Controllers\HomeController@submitMessage');
Route::post('/till','PaymentsConroller@till');
Route::post('/stk','PaymentsConroller@stk');
Route::get('/rfp','App\Http\Controllers\HomeController@rfp');

Route::get('/how','App\Http\Controllers\HomeController@how');
Route::get('/servicerequest/{id}','App\Http\Controllers\HomeController@servicerequest');
Route::post('/service_request','App\Http\Controllers\HomeController@service_request');
Route::post('/calculate','App\Http\Controllers\HomeController@calculate');
Route::post('/quote_request','App\Http\Controllers\HomeController@quote_request');
Route::post('/post_rfp','App\Http\Controllers\HomeController@post_rfp');
Route::get('/quote','App\Http\Controllers\HomeController@quote');
Route::get('/get-an-av-quote','App\Http\Controllers\HomeController@quote');

Route::get('/container/{id}','App\Http\Controllers\HomeController@container');

Route::get('/industry/{title}','App\Http\Controllers\HomeController@industry');
Route::get('/industries','App\Http\Controllers\HomeController@industries_one');
Route::get('/our-industries','App\Http\Controllers\HomeController@industries_one');
Route::get('/industries_two','App\Http\Controllers\HomeController@industries_two');
Route::get('/industries_three','App\Http\Controllers\HomeController@industries_three');
Route::get('/industries_four','App\Http\Controllers\HomeController@industries_four');
Route::get('/industries_five','App\Http\Controllers\HomeController@industries_five');
// Route::get('/instagram','App\Http\Controllers\HomeController@instafeeds');

// Version Control
Route::get('/version_control', 'App\Http\Controllers\HomeController@version');

//Check If Mail Exists
Route::post('/checkemail','App\Http\Controllers\HomeController@checkEmail');
//Subscribers
Route::post('/subscribe','App\Http\Controllers\HomeController@subscribe');
//Request Quote
Route::get('/request_quote','App\Http\Controllers\HomeController@request_quote');
//Search Site
Route::post('/searchsite','App\Http\Controllers\HomeController@searchsite');

//BlogRoutes
Route::get('/blog','BlogController@index');
Route::get('/blog/videos','BlogController@videos');
Route::get('/blog/{title}','BlogController@blog');
Route::get('/blog/cat/{cat}','BlogController@blogCat');
Route::post('/blog/search','BlogController@search_blog');
Route::get('/blog/tag/{tag}','BlogController@tag');
Route::post('/blog/comment','BlogController@add_comment');


// Cart Routes
Route::get('/cart','CartController@index');
Route::get('/cart/destroy/{rowId}','CartController@destroy');
Route::get('cart/addItem/{id}','CartController@addItem');
Route::get('cart/addCart/{id}','CartController@addCart');
Route::post('/cart/update/{id}', 'CartController@update');


// Checkout Routes
Route::get('/checkout','CheckoutController@index');
Route::post('/checkout/formvalidate', 'CheckoutController@formvalidate');
Route::get('checkout/placeOrder', 'CheckoutController@placeOrder');

//Payment pages
Route::get('mpesa/lipa_na_mpesa','PaymentsConroller@lipa_na_mpesa');
// Payments Routes
Route::get('mpesa/confirm','PaymentsConroller@confirm');
Route::get('mpesa/validate','PaymentsConroller@validation');
Route::get('mpesa/register','PaymentsConroller@register');
Route::get('/form','PayPalController@form');

use Dymantic\InstagramFeed\Profile;
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('config:clear');
    Profile::where('username','stagepassav')->first()->refreshFeed(6);
    // return what you want
    echo "Done";
});

Auth::routes();

Route::group(['prefix'=>'admin'], function(){

    Route::get('dropzone/{id}', [DropzoneController::class, 'dropzone']);
    Route::post('dropzone/store', [DropzoneController::class, 'dropzoneStore'])->name('dropzone.store');
//Login route

Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'App\Http\Controllers\AdminsController@index')->name('admin.index');
Route::get('/home', 'App\Http\Controllers\AdminsController@index')->name('admin.home')->middleware('is_admin');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

//reset password
Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

//Testimonial
Route::get('/addTestimonial', 'App\Http\Controllers\AdminsController@addTestimonial');
Route::post('/add_Testimonial', 'App\Http\Controllers\AdminsController@add_Testimonial');
Route::get('/testimonials','App\Http\Controllers\AdminsController@testimonials');
Route::get('/editTestimonial/{id}', 'App\Http\Controllers\AdminsController@editTestimonial');
Route::get('/deleteTestimonial/{id}', 'App\Http\Controllers\AdminsController@deleteTestimonial');
Route::post('/edit_Testimonial/{id}', 'App\Http\Controllers\AdminsController@edit_Testimonial');

//Terms Privacy copyright
//copyright
Route::get('/copyright','App\Http\Controllers\AdminsController@copyright');
Route::post('/edit_copyright', 'App\Http\Controllers\AdminsController@edit_copyright');
//Privacy
Route::get('/privacy','App\Http\Controllers\AdminsController@privacy');
Route::get('/addPrivacy', 'App\Http\Controllers\AdminsController@addPrivacy');
Route::get('/editPrivacy/{id}', 'App\Http\Controllers\AdminsController@editPrivacy');
Route::post('/add_privacy', 'App\Http\Controllers\AdminsController@add_privacy');
Route::get('/delete_privacy/{id}','App\Http\Controllers\AdminsController@delete_privacy');
Route::post('/edit_privacy/{id}', 'App\Http\Controllers\AdminsController@edit_privacy');

//values
Route::get('/values','App\Http\Controllers\AdminsController@values');
Route::get('/addValues', 'App\Http\Controllers\AdminsController@addValues');
Route::get('/editValues/{id}', 'App\Http\Controllers\AdminsController@editValues');
Route::post('/add_values', 'App\Http\Controllers\AdminsController@add_values');
Route::get('/delete_values/{id}','App\Http\Controllers\AdminsController@delete_values');
Route::post('/edit_values/{id}', 'App\Http\Controllers\AdminsController@edit_values');

//Who
Route::get('/who','App\Http\Controllers\AdminsController@who');
Route::get('/editWho/{id}', 'App\Http\Controllers\AdminsController@editWho');
Route::get('/delete_who/{id}','App\Http\Controllers\AdminsController@delete_who');
Route::post('/edit_who/{id}', 'App\Http\Controllers\AdminsController@edit_who');

//Terms
Route::get('/terms','App\Http\Controllers\AdminsController@terms');
Route::get('/addTerms', 'App\Http\Controllers\AdminsController@addTerms');
Route::get('/editTerm/{id}', 'App\Http\Controllers\AdminsController@editTerm');
Route::post('/add_term', 'App\Http\Controllers\AdminsController@add_term');
Route::post('/edit_term/{id}', 'App\Http\Controllers\AdminsController@edit_term');
Route::get('/delete_term/{id}','App\Http\Controllers\AdminsController@delete_term');
//About
Route::get('/about','App\Http\Controllers\AdminsController@about');
Route::post('/about_save', 'App\Http\Controllers\AdminsController@about_save');
//Services
Route::get('/services','App\Http\Controllers\AdminsController@services');
Route::get('/deleteService/{id}','App\Http\Controllers\AdminsController@deleteService');
Route::post('/edit_Services/{id}', 'App\Http\Controllers\AdminsController@edit_Services');
Route::get('/editServices/{id}', 'App\Http\Controllers\AdminsController@editServices');
Route::get('/addService', 'App\Http\Controllers\AdminsController@addService');
Route::post('/add_Service', 'App\Http\Controllers\AdminsController@add_Service');

//Services Extras
Route::get('/extras/{serivice_id}','App\Http\Controllers\AdminsController@extras');
Route::get('/deleteExtras/{id}','App\Http\Controllers\AdminsController@deleteExtras');
Route::post('/edit_Extras/{id}', 'App\Http\Controllers\AdminsController@edit_Extras');
Route::get('/editExtras/{id}', 'App\Http\Controllers\AdminsController@editExtras');
Route::get('/addExtras/{service_id}', 'App\Http\Controllers\AdminsController@addExtra');
Route::post('/add_Extra', 'App\Http\Controllers\AdminsController@add_Extra');

//Industries
Route::get('/industries','App\Http\Controllers\AdminsController@industries');
Route::get('/deleteIndustries/{id}','App\Http\Controllers\AdminsController@deleteIndustries');
Route::post('/edit_Industries/{id}', 'App\Http\Controllers\AdminsController@edit_Industries');
Route::get('/editIndustries/{id}', 'App\Http\Controllers\AdminsController@editIndustries');
Route::get('/addIndustries', 'App\Http\Controllers\AdminsController@addIndustries');
Route::post('/add_Industries', 'App\Http\Controllers\AdminsController@add_Industries');

//Pricing
Route::get('/pricing','App\Http\Controllers\AdminsController@pricing');
Route::get('/deletePricing/{id}','App\Http\Controllers\AdminsController@deletePricing');
Route::post('/edit_Pricing/{id}', 'App\Http\Controllers\AdminsController@edit_Pricing');
Route::get('/editPricing/{id}', 'App\Http\Controllers\AdminsController@editPricing');
Route::get('/addPricing', 'App\Http\Controllers\AdminsController@addPricing');
Route::post('/add_Pricing', 'App\Http\Controllers\AdminsController@add_Pricing');

//Video
Route::get('/videos','App\Http\Controllers\AdminsController@videos');
Route::get('/deleteVideo/{id}','App\Http\Controllers\AdminsController@deleteVideo');
Route::post('/edit_Video/{id}', 'App\Http\Controllers\AdminsController@edit_Video');
Route::get('/editVideo/{id}', 'App\Http\Controllers\AdminsController@editVideo');

//Porfolio
Route::get('/portfolio','App\Http\Controllers\AdminsController@portfolio');
Route::get('/deletePortfolio/{id}','App\Http\Controllers\AdminsController@deletePortfolio');
Route::post('/edit_Portfolio/{id}', 'App\Http\Controllers\AdminsController@edit_Portfolio');
Route::get('/editPortfolio/{id}', 'App\Http\Controllers\AdminsController@editPortfolio');
Route::get('/addPortfolio', 'App\Http\Controllers\AdminsController@addPortfolio');
Route::post('/add_Portfolio', 'App\Http\Controllers\AdminsController@add_Portfolio');

//How It Works
Route::get('/how','App\Http\Controllers\AdminsController@how');
Route::get('/deleteHow/{id}','App\Http\Controllers\AdminsController@deleteHow');
Route::post('/edit_How/{id}', 'App\Http\Controllers\AdminsController@edit_How');
Route::get('/editHow/{id}', 'App\Http\Controllers\AdminsController@editHow');
Route::get('/addHow', 'App\Http\Controllers\AdminsController@addHow');
Route::post('/add_How', 'App\Http\Controllers\AdminsController@add_How');

//Gallery
Route::get('/gallery','App\Http\Controllers\AdminsController@gallery');
Route::get('/editGallery/{id}','App\Http\Controllers\AdminsController@editGallery');
Route::get('/deleteGallery/{id}','App\Http\Controllers\AdminsController@deleteGallery');
Route::post('/save_gallery/{id}', 'App\Http\Controllers\AdminsController@save_gallery');
Route::get('/addGallery', 'App\Http\Controllers\AdminsController@addGallery');
Route::get('/galleryList', 'App\Http\Controllers\AdminsController@galleryList');
Route::post('/add_Gallery', 'App\Http\Controllers\AdminsController@add_Gallery');

//Slider
Route::get('/slider','App\Http\Controllers\AdminsController@slider');
Route::get('/editSlider/{id}','App\Http\Controllers\AdminsController@editSlider');
Route::get('/deleteSlider/{id}','App\Http\Controllers\AdminsController@deleteSlider');
Route::post('/edit_Slider/{id}', 'App\Http\Controllers\AdminsController@edit_Slider');
Route::get('/addSlider', 'App\Http\Controllers\AdminsController@addSlider');
Route::post('/add_Slider', 'App\Http\Controllers\AdminsController@add_Slider');

//Banner
Route::get('/banner','App\Http\Controllers\AdminsController@banners');
Route::get('/editBanner/{id}','App\Http\Controllers\AdminsController@editBanner');
Route::post('/edit_Banner/{id}', 'App\Http\Controllers\AdminsController@edit_Banner');

//Clients
Route::get('/addClient', 'App\Http\Controllers\AdminsController@addClient');
Route::post('/add_Client', 'App\Http\Controllers\AdminsController@add_Client');
Route::get('/clients','App\Http\Controllers\AdminsController@clients');
Route::get('/editClient/{id}', 'App\Http\Controllers\AdminsController@editClient');
Route::get('/deleteClient/{id}', 'App\Http\Controllers\AdminsController@deleteClient');
Route::post('/edit_Client/{id}', 'App\Http\Controllers\AdminsController@edit_Client');

//Statisctics
Route::get('/stats','App\Http\Controllers\AdminsController@stats');
Route::get('/editStats/{id}', 'App\Http\Controllers\AdminsController@editStats');
Route::get('/deleteStats/{id}', 'App\Http\Controllers\AdminsController@deleteStats');
Route::post('/edit_Stats/{id}', 'App\Http\Controllers\AdminsController@edit_Stats');

//Pages
Route::get('/pages','App\Http\Controllers\AdminsController@pages');
Route::get('/editPage/{id}','App\Http\Controllers\AdminsController@editPage');
Route::get('/deletePage/{id}','App\Http\Controllers\AdminsController@deletePage');
Route::post('/edit_Page/{id}', 'App\Http\Controllers\AdminsController@edit_Page');
Route::get('/addPage', 'App\Http\Controllers\AdminsController@addPage');
Route::post('/add_Page', 'App\Http\Controllers\AdminsController@add_Page');
Route::post('/set_Page/{name}', 'App\Http\Controllers\AdminsController@set_Page');
Route::get('/setPage/{name}', 'App\Http\Controllers\AdminsController@setPage');


//Priducts
Route::get('/products','App\Http\Controllers\AdminsController@products');
Route::get('/editProduct/{id}','App\Http\Controllers\AdminsController@editProduct');
Route::get('/deleteProduct/{id}','App\Http\Controllers\AdminsController@deleteProduct');
Route::post('/edit_Product/{id}', 'App\Http\Controllers\AdminsController@edit_Product');
Route::get('/addProduct', 'App\Http\Controllers\AdminsController@addProduct');
Route::post('/add_Product', 'App\Http\Controllers\AdminsController@add_Product');


//Admin
Route::get('/admins','App\Http\Controllers\AdminsController@admins');
Route::get('/editAdmin/{id}','App\Http\Controllers\AdminsController@editAdmin');
Route::get('/deleteAdmin/{id}','App\Http\Controllers\AdminsController@deleteAdmin');
Route::post('/edit_Admin/{id}', 'App\Http\Controllers\AdminsController@edit_Admin');
Route::get('/addAdmin', 'App\Http\Controllers\AdminsController@addAdmin');
Route::post('/add_Admin', 'App\Http\Controllers\AdminsController@add_Admin');

//Orders
Route::get('/orders','App\Http\Controllers\AdminsController@orders');
Route::get('/editOrders/{id}','App\Http\Controllers\AdminsController@editOrders');
Route::get('/deleteOrders/{id}','App\Http\Controllers\AdminsController@deleteOrders');
Route::get('/confrimOrder/{id}','App\Http\Controllers\AdminsController@confrimOrder');
Route::post('/edit_Orders/{id}', 'App\Http\Controllers\AdminsController@edit_Orders');
Route::get('/addOrder', 'App\Http\Controllers\AdminsController@addOrder');
Route::post('/add_Order', 'App\Http\Controllers\AdminsController@add_Order');

//User
Route::get('/users','App\Http\Controllers\AdminsController@users');
Route::get('/editUser/{id}','App\Http\Controllers\AdminsController@editUser');
Route::get('/deleteUser/{id}','App\Http\Controllers\AdminsController@deleteUser');
Route::post('/edit_User/{id}', 'App\Http\Controllers\AdminsController@edit_User');
Route::get('/addUser', 'App\Http\Controllers\AdminsController@addUser');
Route::post('/add_User', 'App\Http\Controllers\AdminsController@add_User');

//Blog Controls
Route::get('/blog','App\Http\Controllers\AdminsController@blog');
Route::get('/editBlog/{id}','App\Http\Controllers\AdminsController@editBlog');
Route::get('/delete_Blog/{id}','App\Http\Controllers\AdminsController@delete_Blog');
Route::post('/edit_Blog/{id}', 'App\Http\Controllers\AdminsController@edit_Blog');
Route::get('/addBlog', 'App\Http\Controllers\AdminsController@addBlog');
Route::post('/add_blog', 'App\Http\Controllers\AdminsController@add_Blog');
//Categories Control
Route::get('/categories','App\Http\Controllers\AdminsController@categories');
Route::get('/editCategories/{id}','App\Http\Controllers\AdminsController@editCategories');
Route::get('/deleteCategory/{id}','App\Http\Controllers\AdminsController@deleteCategory');
Route::post('/edit_Category/{id}', 'App\Http\Controllers\AdminsController@edit_Category');
Route::get('/addCategory', 'App\Http\Controllers\AdminsController@addCategory');
Route::post('/add_Category', 'App\Http\Controllers\AdminsController@add_Category');

//Service Renreded Control
Route::get('/service_rendered','App\Http\Controllers\AdminsController@service_rendered');
Route::get('/editService_rendered/{id}','App\Http\Controllers\AdminsController@editService_rendered');
Route::get('/deleteService_rendered/{id}','App\Http\Controllers\AdminsController@deleteService_rendered');
Route::post('/edit_Service_rendered/{id}', 'App\Http\Controllers\AdminsController@edit_Service_rendered');
Route::get('/addService_rendered', 'App\Http\Controllers\AdminsController@addService_rendered');
Route::post('/add_Service_rendered', 'App\Http\Controllers\AdminsController@add_Service_rendered');

//Daily
Route::get('/daily','App\Http\Controllers\AdminsController@daily');
Route::get('/editDaily/{id}','App\Http\Controllers\AdminsController@editDaily');
Route::get('/deleteDaily/{id}','App\Http\Controllers\AdminsController@deleteDaily');
Route::post('/edit_Daily/{id}', 'App\Http\Controllers\AdminsController@edit_Daily');
Route::get('/addDaily', 'App\Http\Controllers\AdminsController@addDaily');
Route::post('/add_Daily', 'App\Http\Controllers\AdminsController@add_Daily');


//Sub Categories
Route::get('/subCategories','App\Http\Controllers\AdminsController@subCategories');
Route::get('/editSubCategories/{id}','App\Http\Controllers\AdminsController@editSubCategories');
Route::get('/deleteSubCategory/{id}','App\Http\Controllers\AdminsController@deleteSubCategory');
Route::post('/edit_SubCategory/{id}', 'App\Http\Controllers\AdminsController@edit_SubCategory');
Route::get('/addSubCategory', 'App\Http\Controllers\AdminsController@addSubCategory');
Route::post('/add_SubCategory', 'App\Http\Controllers\AdminsController@add_SubCategory');

//Active Services
Route::get('/traceServices','App\Http\Controllers\AdminsController@traceServices');
Route::get('/editTraceServices/{id}','App\Http\Controllers\AdminsController@editTraceServices');
Route::get('/deleteTraceServices/{id}','App\Http\Controllers\AdminsController@deleteTraceServices');
Route::post('/edit_TraceServices/{id}', 'App\Http\Controllers\AdminsController@edit_TraceServices');
Route::get('/addTraceServices', 'App\Http\Controllers\AdminsController@addTraceServices');
Route::post('/add_TraceServices', 'App\Http\Controllers\AdminsController@add_TraceServices');

// Generic Routes
Route::get('/form','App\Http\Controllers\AdminsController@form');
Route::get('/list','App\Http\Controllers\AdminsController@list');
Route::get('/formfile','App\Http\Controllers\AdminsController@formfile');
Route::get('/formfiletext','App\Http\Controllers\AdminsController@formfiletext');

//Payments
Route::get('/payments','App\Http\Controllers\AdminsController@payments');

//Notifications
Route::get('/notifications','App\Http\Controllers\AdminsController@notifications');
Route::get('/notification/{id}','App\Http\Controllers\AdminsController@notification');
Route::get('/deleteNotification/{id}','App\Http\Controllers\AdminsController@deleteNotification');

//Service Requests
Route::get('/requests','App\Http\Controllers\AdminsController@quoterequeste');
Route::get('/markRequest/{id}/{status}/{type}','App\Http\Controllers\AdminsController@markRequest');

//Comments
Route::get('/comments','App\Http\Controllers\AdminsController@comments');
Route::get('/approve/{id}','App\Http\Controllers\AdminsController@approve');
Route::get('/decline/{id}','App\Http\Controllers\AdminsController@decline');

// Error Pages
Route::get('/403','App\Http\Controllers\AdminsController@error403');
Route::get('/404','App\Http\Controllers\AdminsController@error404');
Route::get('/405','App\Http\Controllers\AdminsController@error405');
Route::get('/500','App\Http\Controllers\AdminsController@error500');
Route::get('/503','App\Http\Controllers\AdminsController@error503');

// Subscribers Mail
Route::post('/updatemail','App\Http\Controllers\AdminsController@updatemail');


//Updates
Route::get('/updates','App\Http\Controllers\AdminsController@updates');
Route::get('/update/{id}','App\Http\Controllers\AdminsController@update');
Route::get('/mark/{id}','App\Http\Controllers\AdminsController@mark');

//profile
Route::get('/profile','App\Http\Controllers\AdminsController@profile');
Route::post('/profile_save/{id}','App\Http\Controllers\AdminsController@profile_save');
Route::get('/editFile/{id}','App\Http\Controllers\AdminsController@editFile');
Route::post('/edit_File/{id}','App\Http\Controllers\AdminsController@edit_File');

// Gallery
Route::get('/gallery','App\Http\Controllers\AdminsController@gallery');

//Under Contruction
Route::get('/under_construction','App\Http\Controllers\AdminsController@under_construction');

//Wizard
Route::get('/wizard','App\Http\Controllers\AdminsController@wizard');

//Maps
Route::get('/maps','App\Http\Controllers\AdminsController@maps');
// SiteSettings
Route::get('/sitesettings','App\Http\Controllers\AdminsController@sitesettings');
Route::post('/savesitesettings','App\Http\Controllers\AdminsController@savesitesettings');
//Messages
Route::get('/allMessages', 'App\Http\Controllers\AdminsController@allMessages');
Route::get('/unread', 'App\Http\Controllers\AdminsController@unread');
Route::get('/read/{id}', 'App\Http\Controllers\AdminsController@read');
Route::post('/reply/{id}', 'App\Http\Controllers\AdminsController@reply');
Route::get('/deleteMessage/{id}', 'App\Http\Controllers\AdminsController@deleteMessage');

//Subscribers
Route::get('/subscribers', 'App\Http\Controllers\AdminsController@subscribers');
Route::get('/mailSubscribers/{email}', 'App\Http\Controllers\AdminsController@mailSubscribers');
Route::get('/mailSubscriber/{email}', 'App\Http\Controllers\AdminsController@mailSubscriber');
Route::get('/deleteSubscriber/{id}', 'App\Http\Controllers\AdminsController@deleteSubscriber');
// Version Control
Route::get('/version', 'App\Http\Controllers\AdminsController@version');

// Seo Settings
// SeoSettings
Route::get('/seosettings','App\Http\Controllers\AdminsController@seosettings');
Route::post('/saveseosettings','App\Http\Controllers\AdminsController@saveseosettings');
});

// Users Routes
Auth::routes();
Route::group(['prefix'=>'clientarea'], function(){
Route::get('/','ClientController@index');
Route::get('/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('/profile','ClientController@profile');
Route::get('/place','ClientController@place');
Route::post('/save','ClientController@save');
Route::post('/place_order','ClientController@place_order');

Route::get('/pay/{invoice}','PaymentConroller@pay');

});

// Paypall Checkout
Route::get('/paypal/{order?}', [
    'name' => 'PayPal Express Checkout',
    'as' => 'order.paypal',
    'uses' => 'PayPalController@form',
]);

Route::post('/checkout/payment/{order}/paypal', [
    'name' => 'PayPal Express Checkout',
    'as' => 'checkout.payment.paypal',
    'uses' => 'PayPalController@checkout',
]);

Route::get('/paypal/checkout/{order}/completed', [
    'name' => 'PayPal Express Checkout',
    'as' => 'paypal.checkout.completed',
    'uses' => 'PayPalController@completed',
]);

Route::get('/paypal/checkout/{order}/cancelled', [
    'name' => 'PayPal Express Checkout',
    'as' => 'paypal.checkout.cancelled',
    'uses' => 'PayPalController@cancelled',
]);

Route::post('/webhook/paypal/{order?}/{env?}', [
    'name' => 'PayPal Express IPN',
    'as' => 'webhook.paypal.ipn',
    'uses' => 'PayPalController@webhook',
]);


Route::get('/instagram/feed', [
    'name' => 'Instagram Feed',
    'as' => 'app.instagram.feed',
    'uses' => 'InstagramController@feed',
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
