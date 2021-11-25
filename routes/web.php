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
// =========  Admin Home Route =======
// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();



//well-Known route

 Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/blog_search', [App\Http\Controllers\FrontendController::class, 'blogSearch'])->name('blog.search');
Route::get('/blog_categori/{type}', [App\Http\Controllers\FrontendController::class, 'blogCategori'])->name('blog_categori');
Route::get('/blog_detail/{id}', [App\Http\Controllers\FrontendController::class, 'blog_detail'])->name('blog_detail');
Route::post('/blog_comments/{name}', [App\Http\Controllers\FrontendController::class, 'blogComments'])->name('blog.comments');
Route::get('/blog', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');
Route::get('/gallery', [App\Http\Controllers\FrontendController::class, 'getGallery'])->name('gallery');
Route::get('/team', [App\Http\Controllers\FrontendController::class, 'getTeam'])->name('get.team');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\FrontendController::class, 'postContact'])->name('post.contact');
Route::get('/project', [App\Http\Controllers\FrontendController::class, 'project'])->name('project');
Route::get('/project_detail/{id}', [App\Http\Controllers\FrontendController::class, 'project_detail'])->name('project_detail');
Route::get('/service_detail/{id}', [App\Http\Controllers\FrontendController::class, 'service_detail'])->name('service_detail');
Route::get('/service', [App\Http\Controllers\FrontendController::class, 'service'])->name('service');
Route::post('/indexpost', [App\Http\Controllers\FrontendController::class, 'indexPost'])->name('index.post');
Route::post('/subscribe', [App\Http\Controllers\FrontendController::class, 'subscribePost'])->name('subscribe.post');
Route::get('/course', [App\Http\Controllers\CourseController::class, 'getCourse'])->name('course');

Route::post('/course_enroll/{id}', [App\Http\Controllers\CourseController::class, 'postCourseEnroll'])->name('post.course_enroll');
Route::get('/career', [App\Http\Controllers\CareerController::class, 'getCareer'])->name('get.career');
Route::post('/jobsearch', [App\Http\Controllers\CareerController::class, 'jobLiveSearch'])->name('job.liveSearch');
Route::get('/jobdeails/{id}', [App\Http\Controllers\CareerController::class, 'jobDetails'])->name('job.details');
Route::get('/jobapply/{id}', [App\Http\Controllers\CareerController::class, 'jobApply'])->name('job.apply');
Route::post('/postjobapply/{id}', [App\Http\Controllers\CareerController::class, 'postApplyJob'])->name('post.apply');
Route::get('/studentlogin', [App\Http\Controllers\StudentController::class, 'studentLogin'])->name('student.login')->middleware('alredyloggedin');

Route::post('/studentlogin', [App\Http\Controllers\StudentController::class, 'studentLoginAuth'])->name('student.login');
Route::get('/studentreg', [App\Http\Controllers\StudentController::class, 'studentReg'])->name('student.reg');
Route::post('/studentpostreg', [App\Http\Controllers\StudentController::class, 'studentPostReg'])->name('student.post.reg');

//costumer login
Route::get('/customer/login-view', 'CustomerLoginController@index')->name('customer.login.form');
Route::get('/customer/logout', 'CustomerLoginController@logout')->name('customer.logout');
Route::post('/customer-login', 'CustomerLoginController@login')->name('customer.login');
Route::get('/update-profile/{id}', 'CustomerLoginController@profile_update')->name('update.profile');
Route::post('/customer-profile-update', 'CustomerLoginController@update_profile')->name('update.customer.profile');

//customer register
Route::get('/customer/register-view', 'CustomerLoginController@registerview')->name('customer.register.form');
Route::post('/customer-register', 'CustomerLoginController@register')->name('customer.register');


Route::get('/product-view/{id}','ProductController@details')->name('product.details');
Route::get('/cart-display','ProductViewController@cart')->name('cart.view');
Route::get('/add-to-cart/{id}/{name}/{price}','ProductViewController@add_to_cart')->name('add.cart');

//Checkout route and middleware *************************

Route::group(['middleware' => ['customer']], function () {
  Route::get('/product-checkout','ProductViewController@checkoutForm')->name('product.checkout');
  Route::get('/product-shipping','ProductViewController@shipping')->name('product.shipping');
  Route::post('/shipping', 'StripePaymentController@shippingAdd')->name('shipping.add');
  Route::get('/product-payment','ProductViewController@payment')->name('product.payment');
  Route::post('/payment-stripe', 'StripePaymentController@stripePost')->name('stripe.payment');
  Route::get('/payment-success','StripePaymentController@success')->name('stripe.success');

  
 
});



// ProductController
Route::get('/product-display', 'ProductController@index')->name('product.display');

 //Route::post('/product-checkout','ProductViewController@checkoutForm')->name('product.checkout');
Route::post('/checkout','ProductViewController@checkout')->name('checkout');

Route::get('stripe', 'StripePaymentController@stripe');
// Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');



// Product cart Route Start *************************************

Route::get('/product', 'ProductViewController@index')->name('product');
Route::get('/product-details/{id}/{name}/{price}','ProductViewController@productcart')->name('get.product-details');
 Route::get('/increase/{increase_cart}','ProductViewController@increase')->name('increase-cart');

Route::get('/cart','ProductViewController@showCart')->name('cart');
Route::post('/increase','ProductViewController@increase')->name('increase');

Route::post('/increase_post','ProductViewController@increase_post')->name('increase');
Route::post('/decrease_post','ProductViewController@decrease_post')->name('decrease');
Route::post('/destroy','ProductViewController@destroy_cart')->name('destroy_cart');


Route::get('/reduce/{reduce_cart}','ProductViewController@reduce')->name('reduce');
Route::get('/remove/{delete}','ProductViewController@destroy')->name('destroy');
Route::get('/reduce-all','ProductViewController@destroyAll')->name('destroyAll');



// Product cart Route End*********************************






// SSLCOMMERZ Start
// Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('pay');
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout')->name('pay');
// Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

// Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay', 'SslCommerzPaymentController@index');
// Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

// Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/success','SslCommerzPaymentController@success');
// Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/fail','SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END



//

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/admin','HomeController@admin');
Route::get('/home','HomeController@home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/// Create Question Route With Controller 

Route::get('/addquestion','QuestionController@addquestion')->name('admin.addquestion');
Route::post('/questionpost','QuestionController@questionpost')->name('admin.question.posts');
Route::get('/question_active/{question_id}','QuestionController@question_active')->name('admin.question_active');
Route::get('/edit_question/{question_id}','QuestionController@edit_question')->name('admin.edit_question');
Route::post('/edit_questionpost','QuestionController@edit_questionpost')->name('admin.edit_questionpost');
Route::get('/delete_question/{question_id}','QuestionController@delete_question')->name('admin.delete_question');

// Create Question Route With Controller 
Route::post('/answerpost','AnswerController@answerpost')->name('user.answerpost');
// Create  View Answer and Question route and Controller
Route::get('/view_answer','QuestionViewController@view_answer')->name('user.view_answer');
// Create User Route and controller 
Route::get('/users','HomeController@users')->name('admin.users');
// ===== Delete User Route and Controller ===== //
Route::get('/user_delete/{user_id}','HomeController@user_delete')->name('admin.user_delete');
// =====  User Edit Route and Controller ===== //
Route::get('/user_edit/{user_id}','HomeController@user_edit')->name('admin.user_edit');
Route::post('/edit_user_post','HomeController@edit_user_post')->name('admin.edit_user_post');
// Add User method and controller 
Route::get('/add_user','AddUserController@index')->name('admin.add_user');
Route::post('/userpost','AddUserController@userpost')->name('admin.userpost');
// ==== Create Edit Profile Route and Controller ==== ///

// Route::get('/studenteditprofile','StudentController@studentEditprofile')->name('student.editprofile');
Route::post('/editprofilepost','HomeController@editprofilepost')->name('admin.editprofilepost');
// Route::post('/editprofilestudentpost','StudentController@editprofileStudent')->name('student.editprofilepost');
// ============= Create Category Route and Controller =====//
Route::get('/category','CategoryController@index')->name('admin.category');
Route::post('/categorypost','CategoryController@categorypost')->name('admin.categorypost');
Route::get('/active_category/{category_id}','CategoryController@active_category')->name('admin.active_category');
Route::get('/edit_category/{category_id}','CategoryController@edit_category')->name('admin.edit_category');
Route::post('/edit_categorypost','CategoryController@edit_categorypost')->name('admin.edit_categorypost');
Route::get('/delete_category/{category_id}','CategoryController@delete_category')->name('admin.delete_category');
// ========== Create Route and Controller For App Info ==========//
Route::get('/appinfo','AppInfoController@index')->name('admin.appinfo');
Route::post('/appinfopost','AppInfoController@appinfopost')->name('admin.appinfopost');
Route::get('/active_app/{app_id}','AppInfoController@active_app')->name('admin.active_app');
Route::get('/edit_app/{app_id}','AppInfoController@edit_app')->name('admin.edit_app');
Route::post('/editinfopost','AppInfoController@editinfopost')->name('admin.editinfopost');
Route::get('/delete_app/{app_id}','AppInfoController@delete_app')->name('admin.delete_app');
 Route::get('all-course-details','CourseController@allCourseDetails')->name('course-details');
  Route::get('/course-details/{id}', [App\Http\Controllers\CourseController::class, 'getCourseDetails'])->name('get.course-details');

Route::group(['middleware' => ['student']], function () {
    Route::post('/course_enroll/{id}', [App\Http\Controllers\CourseController::class, 'postCourseEnroll'])->name('post.course_enroll');
    Route::get('studentlogout','StudentController@studentLogout')->name('student.logout');
    Route::post('/pay', 'SslCommerzPaymentController@index');
    Route::get('/enroll/{id}', [App\Http\Controllers\CourseController::class, 'getCourseEnroll'])->name('get.course_enroll');
    Route::get('/student','StudentController@studentDashboard')->name('student');
    Route::get('/studenteditprofile','StudentController@studentEditprofile')->name('student.editprofile');
   Route::post('/editprofilestudentpost','StudentController@editprofileStudent')->name('student.editprofilepost');

   Route::get('student/complete-course','StudentController@completeCourseList')->name('complete.course');
    Route::get('student/course-routine','StudentController@courseRoutine')->name('course.routine');





});



// ==========  Front Page Cart Controller and Route =========/
// Route::get('/frontcart','DashboardController@frontcart')->name('front.user.cart');
// Route::get('/frontcheckout','DashboardController@frontcheckout')->name('front.user.checkout');


// ===== create cart page =====//
// Route::get('/frontcartpage','FrontendController@cartpage')->name('front.cart.page');
// ==== Create Checkout Page ======
// Route::get('/front_checkout','FrontendController@frontcheckout')->name('front.checkout');
// =====  Create Login and Registration Route ====
// Route::get('/', function () {
//     return view('pages.auth.login');
// });

// ==========  Create DashboardController and Route ======= 
// Route::get('/dashboard','DashboardController@dashboard');

// Route::group(['prefix' => 'email'], function(){
//     Route::get('inbox', function () { return view('pages.email.inbox'); });
//     Route::get('read', function () { return view('pages.email.read'); });
//     Route::get('compose', function () { return view('pages.email.compose'); });
// });

// Route::group(['prefix' => 'apps'], function(){
//     Route::get('chat', function () { return view('pages.apps.chat'); });
//     Route::get('calendar', function () { return view('pages.apps.calendar'); });
// });

// Route::group(['prefix' => 'ui-components'], function(){
//     Route::get('alerts', function () { return view('pages.ui-components.alerts'); });
//     Route::get('badges', function () { return view('pages.ui-components.badges'); });
//     Route::get('breadcrumbs', function () { return view('pages.ui-components.breadcrumbs'); });
//     Route::get('buttons', function () { return view('pages.ui-components.buttons'); });
//     Route::get('button-group', function () { return view('pages.ui-components.button-group'); });
//     Route::get('cards', function () { return view('pages.ui-components.cards'); });
//     Route::get('carousel', function () { return view('pages.ui-components.carousel'); });
//     Route::get('collapse', function () { return view('pages.ui-components.collapse'); });
//     Route::get('dropdowns', function () { return view('pages.ui-components.dropdowns'); });
//     Route::get('list-group', function () { return view('pages.ui-components.list-group'); });
//     Route::get('media-object', function () { return view('pages.ui-components.media-object'); });
//     Route::get('modal', function () { return view('pages.ui-components.modal'); });
//     Route::get('navs', function () { return view('pages.ui-components.navs'); });
//     Route::get('navbar', function () { return view('pages.ui-components.navbar'); });
//     Route::get('pagination', function () { return view('pages.ui-components.pagination'); });
//     Route::get('popovers', function () { return view('pages.ui-components.popovers'); });
//     Route::get('progress', function () { return view('pages.ui-components.progress'); });
//     Route::get('scrollbar', function () { return view('pages.ui-components.scrollbar'); });
//     Route::get('scrollspy', function () { return view('pages.ui-components.scrollspy'); });
//     Route::get('spinners', function () { return view('pages.ui-components.spinners'); });
//     Route::get('tabs', function () { return view('pages.ui-components.tabs'); });
//     Route::get('tooltips', function () { return view('pages.ui-components.tooltips'); });
// });

// Route::group(['prefix' => 'advanced-ui'], function(){
//     Route::get('cropper', function () { return view('pages.advanced-ui.cropper'); });
//     Route::get('owl-carousel', function () { return view('pages.advanced-ui.owl-carousel'); });
//     Route::get('sweet-alert', function () { return view('pages.advanced-ui.sweet-alert'); });
// });

Route::group(['prefix' => 'forms','middleware' => 'auth'], function(){
    Route::get('basic-elements', function () { return view('pages.forms.basic-elements'); });
    Route::get('contact','FrontendController@getContactForm');
    Route::get('header','FrontendController@getHeaderForm');
    Route::post('postheader','HomeController@postHeader')->name('post.header');
    Route::post('updateheader/{id}','HomeController@updateHeader')->name('update.header');
    Route::get('navitem','FrontendController@getNavForm');
    Route::post('navitem/{id}','HomeController@postNavItem')->name('post.navitem');
    Route::post('createnavitem','HomeController@createNavItem')->name('create.navitem');
    Route::post('navlogo/{id}','HomeController@postNavLogo')->name('post.logo');
    Route::get('bannar/{id}','FrontendController@getBannerForm')->name('get.banner');
    Route::get('banner-create','FrontendController@getBannerCreateForm');
    Route::post('banner-image_uppdate/{id}','HomeController@postBannerImage')->name('post.banner-image');

    Route::post('banner/{id}','HomeController@postBanner')->name('post.banner');
    Route::post('createbanner','HomeController@createBanner')->name('create.banner');
    Route::get('teamdetails','FrontendController@getTeamDetails');
    Route::get('getcareeradminforms/{id}','CareerController@getCareerForms')->name('get.careeradminforms');
    Route::post('updatecareerforms/{id}','CareerController@updateCareerForms')->name('update.career');
    Route::get('deletejob/{id}','CareerController@deleteJob')->name('job.delete');
    
    
    



    Route::get('blog/{id}','FrontendController@getBlogForm')->name('get.BlogForm');
    Route::post('servicecreate','HomeController@createService')->name('create.service');
    Route::post('service/{id}','HomeController@postService')->name('post.service');
    Route::post('servicelogo/{id}','HomeController@postServiceLogo')->name('post.servicelogo');
    Route::get('service/{id}','FrontendController@getServiceForm')->name('get.ServiceForm');
     Route::get('gallery/{id}','FrontendController@getGalleryForm')->name('get.GalleryForm');
     Route::post('updategallery/{id}','HomeController@updateGallery')->name('update.gallery');
    Route::get('team/{id}','FrontendController@geTeamForm')->name('get.teamForm');
    Route::post('updateteam/{id}','HomeController@updateTeam')->name('update.team');
     Route::post('updateteamimage/{id}','HomeController@updateTeamImage')->name('update.teamimage');
    Route::post('projectcreate','HomeController@createProject')->name('create.project');
    Route::get('project/{id}','FrontendController@getProjectForm')->name('get.projectForm');
    Route::post('project/{id}','HomeController@postProject')->name('post.project');
    Route::post('projectlogo/{id}','HomeController@postProjectLogo')->name('post.projectlogo');
    Route::get('testimonial/{id}','FrontendController@getTestimonialForm')->name('get.testimonialForm');
     Route::get('sponsor/{id}','FrontendController@getSponsorForm')->name('get.sponsorForm');
     Route::post('createsponsor','HomeController@createSponsor')->name('create.sponsor');
     Route::post('sponsor/{id}','HomeController@postSponsor')->name('post.sponsor');
    
    Route::get('about','FrontendController@getAboutForm')->name('get.aboutForm');
    Route::post('createabout','HomeController@createAbout')->name('create.about');
    Route::post('about/{id}','HomeController@postAbout')->name('post.about');
    Route::post('aboutceologo/{id}','HomeController@postCeoLogo')->name('post.ceologo');
    Route::post('aboutbglogo/{id}','HomeController@postBgLogo')->name('post.bglogo');
     Route::post('createteamdetails','HomeController@createTeamDetails')->name('create.teamdetails');
    Route::post('updatetemdetail/{id}','HomeController@updateTeamDetail')->name('update.teamdetail');
    Route::post('updateteamlogo/{id}','HomeController@updateTeamLogo')->name('update.teamlogo');
     Route::post('teambglogo/{id}','HomeController@updateTeamBgLogo')->name('update.teambglogo');
    Route::get('cta','FrontendController@getCta')->name('get.cta');
    Route::post('updatecta/{id}','HomeController@updateCta')->name('update.cta');
    Route::post('cta','HomeController@postCta')->name('post.cta');
    Route::get('video','FrontendController@getVideo');
    Route::post('video','HomeController@postVideo')->name('post.video');
    Route::post('createtestimonial','HomeController@createTestimonial')->name('crete.testimonial');
    Route::post('testimonial/{id}','HomeController@postTestimonial')->name('post.testimonial');
    Route::post('createblog','HomeController@createBlog')->name('create.blog');

    Route::post('blog/{id}','HomeController@postBlog')->name('post.blog');
    Route::post('bloglogo/{id}','HomeController@postBlogLogo')->name('post.blogLogo');
    Route::post('blog_details','HomeController@postBlog_details')->name('post.blog_details');
     Route::post('createteam','HomeController@createTeam')->name('create.team');
    Route::get('map','FrontendController@gettMap');
    Route::post('map','HomeController@postMap')->name('post.map');
    Route::post('updatemap/{id}','HomeController@updateMap')->name('update.map');
     Route::get('choose','FrontendController@getChoose')->name('get.choose');
    Route::post('choose','HomeController@postChoose')->name('post.choose');
    Route::post('updatechoose/{id}','HomeController@updateChoose')->name('update.choose');
    Route::get('footer/{id}','FrontendController@getFooterForm')->name('get.footer');
    Route::post('footer','HomeController@postFooter')->name('post.footerForm');
      Route::post('updatefooter/{id}','HomeController@updateFooter')->name('update.footer');
    Route::post('our_details','HomeController@postDetails')->name('our.details');
     Route::post('update_details/{id}','HomeController@updateDetails')->name('update.details');

    Route::post('coursecreate','CourseController@postCourse')->name('course.create');
    Route::get('course/{id}','CourseController@getCourseForm')->name('get.CourseForm');
    Route::post('course/{id}','CourseController@courseUpdate')->name('post.course');
    Route::post('courseimage/{id}','CourseController@postCourseImageUpdate')->name('post.courseimage');
    



    Route::get('advanced-elements', function () { return view('pages.forms.advanced-elements'); });
    Route::get('editors', function () { return view('pages.forms.editors'); });
    Route::get('wizard', function () { return view('pages.forms.wizard'); });
});

// Route::group(['prefix' => 'charts'], function(){
//     Route::get('apex', function () { return view('pages.charts.apex'); });
//     Route::get('chartjs', function () { return view('pages.charts.chartjs'); });
//     Route::get('flot', function () { return view('pages.charts.flot'); });
//     Route::get('morrisjs', function () { return view('pages.charts.morrisjs'); });
//     Route::get('peity', function () { return view('pages.charts.peity'); });
//     Route::get('sparkline', function () { return view('pages.charts.sparkline'); });
// });

Route::group(['prefix' => 'tables'], function(){
    Route::get('basic-tables', function () { return view('pages.tables.basic-tables'); });
    Route::get('data-table', function () { return view('pages.tables.data-table'); });
     Route::get('consulation-table','FrontendController@getConsulation');
     Route::get('contact-table','FrontendController@getContact');
     Route::get('subscribe','FrontendController@getSubscribeList');
     Route::get('enroll','FrontendController@getEnrollList');
     Route::get('applylist','CareerController@getApplyList');
     Route::get('blog_comments','FrontendController@getblogComments');
     Route::get('banner_table','FrontendController@getBannerTable');
     Route::get('banner-remove/{id}','HomeController@bannerRemove')->name('banner.remove');
     Route::get('team-remove/{id}','HomeController@teamRemove')->name('team.remove');
     Route::get('blog-remove/{id}','HomeController@blogRemove')->name('blog.remove');
      Route::get('footer-remove/{id}','HomeController@footerRemove')->name('footer.remove');
    Route::get('service-remove/{id}','HomeController@serviceRemove')->name('service.remove');
    Route::get('sponsor-remove/{id}','HomeController@sponsorRemove')->name('sponsor.remove');
    Route::get('course-remove/{id}','HomeController@courseRemove')->name('course.remove');
    Route::get('testimonial-remove/{id}','HomeController@testimonialRemove')->name('testimonial.remove');
     Route::get('project-remove/{id}','HomeController@projectRemove')->name('project.remove');
     Route::get('service','HomeController@getServiceTable')->name('get.service');
    Route::get('career','CareerController@getCareerTable')->name('get.table.career');
     Route::post('job','CareerController@postJob')->name('post.job');
     Route::get('project','HomeController@getProjectTable')->name('get.project');
     Route::get('testimonial','HomeController@getTestimonialTable')->name('get.testimonial');
    Route::get('sponsor','HomeController@getsponsorTable')->name('get.sponsor');
    Route::get('gallery','HomeController@getGalleryTable')->name('get.gallery');
    Route::post('creategallary','HomeController@createGallary')->name('create.gallery');
    Route::get('blog','HomeController@getBlogTable')->name('get.blog');
    Route::get('course','HomeController@getCourseTable')->name('get.course');
     Route::get('footer','HomeController@getFooterTable')->name('get.FooterTable');
     Route::get('team','HomeController@getTeamTable')->name('get.TeamTable');
     Route::get('pdfview/{id}','CareerController@pdfView')->name('pdf.view');

     // why Learn route start

Route::get('why-learn-course','WhylearnController@getBannerTable');
    Route::post('why-learn-course','WhylearnController@store')->name('why-learn-course');
    Route::get('why-learn-course/edit/{id}','WhylearnController@edit')->name('why-learn-course.edit');
    // Route::get('why-learn-course/delete/{id}','WhylearnController@getBannerTable')->name('why-learn-course.delete');
    Route::post('why-learn-course/update','WhylearnController@update')->name('why-learn-course.update');

    Route::get('why-learn-course/delete/{id}','WhylearnController@delete')->name('why-learn-course.delete');


    Route::get('why-learn-course-content','ContentController@getBannerTable');
    Route::post('why-learn-course-content','ContentController@store')->name('why-learn-course-content');
    Route::get('why-learn-course-content/edit/{id}','ContentController@edit')->name('why-learn-course-content.edit');
     Route::get('why-learn-course-content/delete/{id}','ContentController@delete')->name('why-learn-course-content.delete');
     Route::post('why-learn-course-content/update','ContentController@update')->name('why-learn-course-content.update');


// why Learn route end

//Product Feature start
Route::post('product-feature','ProductFeatureController@store')->name('product.feature');
Route::get('product-feature-table','ProductFeatureController@index')->name('feature.view');
Route::get('product-feature-edit/{id}','ProductFeatureController@edit')->name('product.feature.edit');
Route::post('product-feature-update','ProductFeatureController@update')->name('product.feature.update');
Route::get('product-feature-delete/{id}','ProductFeatureController@delete')->name('product.feature.delete');

//Product Feature start

//Product Key Feature Start
Route::post('product-key-feature','KeyFeatureController@store')->name('key.feature');
Route::get('product-key-feature-table','KeyFeatureController@index')->name('key.view');
Route::get('product-feature-key-edit/{id}','KeyFeatureController@edit')->name('key.feature.edit');
Route::post('product-feature-key-update','KeyFeatureController@update')->name('key.feature.update');
Route::get('product-feature-key-delete/{id}','KeyFeatureController@delete')->name('key.feature.delete');

//Product Key Feature End


//Product Preview Start
Route::post('product-preview','ProductPreviewController@store')->name('preview');
Route::get('product-preview-view','ProductPreviewController@index')->name('preview.view');
Route::get('product-preview-edit/{id}','ProductPreviewController@edit')->name('preview.edit');
Route::post('product-preview-update','ProductPreviewController@update')->name('preview.update');
Route::get('product-preview-delete/{id}','ProductPreviewController@delete')->name('preview.delete');

//Product Preview End


//Customer Order Details Start******************************

Route::get('Admin/Customer-Order', 'CustomerOrderController@index')->name('Customer.Order');
Route::get('Order-Details/{id}', 'CustomerOrderController@order_details')->name('Order.Details');

Route::get('Shipping-Details/{id}', 'CustomerOrderController@shipping_details')->name('Shipping.Details');
Route::post('update-status', 'CustomerOrderController@update_status')->name('update.status');

Route::get('Customer-Dashboard/{id}', 'CustomerOrderController@dashboard')->name('Customer.Dashboard');


Route::get('Customer-order/{id}', 'CustomerOrderController@order_show')->name('order.show');
Route::get('Shipping-Details/show/{id}', 'CustomerOrderController@shipping_details_show')->name('Shipping.Details.Show');
Route::get('Order-Details/show/{id}', 'CustomerOrderController@order_details_show')->name('Order.Details.Show');
//Customer Order Details End******************************
     // Admin Category  Product Route Start ******************************

Route::get('Admin/Category-View', 'AdminCategoryController@index')->name('category.view');
Route::get('Admin/Category-add', 'AdminCategoryController@store')->name('category.add');
Route::post('Admin/Category-add', 'AdminCategoryController@create')->name('category.add.new');
Route::get('Admin/Category-Delete/{slug}', 'AdminCategoryController@delete')->name('category.delete');
Route::get('Admin/Category-Edit/{slug}', 'AdminCategoryController@edit')->name('category.edit');
Route::post('Admin/Category-update', 'AdminCategoryController@update')->name('category.new.update');


Route::get('Admin/Product-View', 'AdminProductController@index')->name('product.view');
Route::get('Admin/Product-Add', 'AdminProductController@create')->name('product.add');
Route::post('Admin/Product-New-Add', 'AdminProductController@store')->name('product.add.new');
Route::get('Admin/Product-Delete/{id}', 'AdminProductController@delete')->name('product.delete');
Route::get('Admin/Product-Edit/{id}', 'AdminProductController@edit')->name('product.edit');
Route::post('Admin/Product-Update', 'AdminProductController@update')->name('product.update');




//Admin Product Route End ********************************

//student information
 Route::get('student','HomeController@getStudentTable')->name('get.studentTable');
 Route::get('student-remove/{id}','HomeController@studentRemove')->name('student.remove');

//customer Information
 Route::get('customer-table','HomeController@getCustomerTable')->name('get.customerTable');
  Route::get('customer-remove/{id}','HomeController@customerRemove')->name('customer.remove');




});


// Route::group(['prefix' => 'icons'], function(){
//     Route::get('feather-icons', function () { return view('pages.icons.feather-icons'); });
//     Route::get('flag-icons', function () { return view('pages.icons.flag-icons'); });
//     Route::get('mdi-icons', function () { return view('pages.icons.mdi-icons'); });
// });

// Route::group(['prefix' => 'general'], function(){
//     Route::get('blank-page', function () { return view('pages.general.blank-page'); });
//     Route::get('faq', function () { return view('pages.general.faq'); });
//     Route::get('invoice', function () { return view('pages.general.invoice'); });
//     Route::get('profile', function () { return view('pages.general.profile'); });
//     Route::get('pricing', function () { return view('pages.general.pricing'); });
//     Route::get('timeline', function () { return view('pages.general.timeline'); });
// });

// Route::group(['prefix' => 'auth'], function(){
//     Route::get('login', function () { return view('pages.auth.login'); });
//     Route::get('register', function () { return view('pages.auth.register'); });
// });

// Route::group(['prefix' => 'error'], function(){
//     Route::get('404', function () { return view('pages.error.404'); });
//     Route::get('500', function () { return view('pages.error.500'); });
// });

// Route::get('/clear-cache', function() {
//     Artisan::call('cache:clear');
//     return "Cache is cleared";
// });

// 404 for undefined routes
// Route::any('/{page?}',function(){
//     return View::make('pages.error.404');
// })->where('page','.*');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
