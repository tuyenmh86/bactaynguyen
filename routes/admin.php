<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', 'HomeController@admin_dashboard')->name('admin.dashboard')->middleware(['auth', 'admin']);
// Route::get('/admin', 'HomeController@admin_dashboard')->name('admin.dashboard');

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){

    Route::get('/laravel-show', function(){
        return view('filemanager.filemanager');
    })->name('laravel-show');
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    Route::get('/slugcate','SubSubCategoryController@index');
    Route::resource('categories','CategoryController');
	Route::get('/categories/destroy/{id}', 'CategoryController@destroy')->name('categories.destroy');
	Route::post('/categories/featured', 'CategoryController@updateFeatured')->name('categories.featured');

	Route::resource('subcategories','SubCategoryController');
	Route::get('/subcategories/destroy/{id}', 'SubCategoryController@destroy')->name('subcategories.destroy');

	Route::resource('subsubcategories','SubSubCategoryController');
	Route::get('/subsubcategories/destroy/{id}', 'SubSubCategoryController@destroy')->name('subsubcategories.destroy');

	Route::resource('brands','BrandController');
	Route::get('/brands/destroy/{id}', 'BrandController@destroy')->name('brands.destroy');
//  Router Post
    Route::get('/posts', 'PostController@index')->name('posts');
    Route::get('/posts/create','PostController@create')->name('posts.create');
    Route::get('/posts/{id}/edit','PostController@edit')->name('posts.edit');
    Route::post('/posts/store/','PostController@store')->name('posts.store');
    Route::post('/posts/update/{id}','PostController@update')->name('posts.update');
    Route::post('/posts/published', 'PostController@updatePublished')->name('posts.updatePublished');
    Route::post('/posts/updateFeatured', 'PostController@updateFeatured')->name('posts.updateFeatured');
    Route::get('/posts/duplicate/{id}', 'PostController@duplicate')->name('posts.duplicate');
    Route::get('/posts/destroy/{id}', 'PostController@destroy')->name('posts.destroy');
//    Router Category Post
    Route::get('/postcategory', 'CategoryPostController@index')->name('postcategory');
    Route::get('/postcategory/create','CategoryPostController@create')->name('postcategory.create');
    Route::get('/postcategory/{id}/edit','CategoryPostController@edit')->name('postcategory.edit');
    Route::post('/postcategory/update/{id}','CategoryPostController@update')->name('postcategory.update');
    Route::post('/postcategory/store/','CategoryPostController@store')->name('postcategory.store');
    Route::get('/postcategory/destroy/{id}', 'CategoryPostController@destroy')->name('postcategory.destroy');
    Route::post('/postcategory/updateFeatured', 'CategoryPostController@updateFeatured')->name('postcategory.updateFeatured');
    Route::post('/postcategory/updateHeadmenu', 'CategoryPostController@updateHeadmenu')->name('postcategory.updateHeadmenu');
	Route::post('/postcategory/updateFooter', 'CategoryPostController@updateFooter')->name('postcategory.updateFooter');
	Route::post('/postcategory/published', 'CategoryPostController@updatePublished')->name('postcategory.updatePublished');
    Route::post('/postcategory/homepage', 'CategoryPostController@updateHomepage')->name('postcategory.updateHomepage');
    Route::get('/postcategory/galeryImage/{categoryId}', 'CategoryPostController@ImportProductByCategoryFolder')->name('postcategory.ImportProductByCategoryFolder');

//    Route::get('/posts/admin/{id}/edit','ProductController@admin_product_edit')->name('products.admin.edit');
//Widgets
    Route::get('/widgets', 'WidgetController@index')->name('widgets');
    Route::get('/widget/create','WidgetController@create')->name('widget.create');
    Route::post('/widget/store/','WidgetController@store')->name('widget.store');
    Route::get('/widget/{id}/edit','WidgetController@edit')->name('widget.edit');
    Route::post('/widget/update/{id}','WidgetController@update')->name('widget.update');
    Route::get('/widget/destroy/{id}', 'WidgetController@destroy')->name('widget.destroy');
    Route::post('/widget/updateFeatured', 'WidgetController@updateFeatured')->name('widget.updateFeatured');
    Route::post('/widget/published', 'WidgetController@updatePublished')->name('widget.updatePublished');
//Album
	Route::get('/albums', 'AlbumController@index')->name('albums');
	Route::get('/album/create','AlbumController@create')->name('album.create');
	Route::post('/album/store/','AlbumController@store')->name('album.store');
	Route::get('/album/{id}/edit','AlbumController@edit')->name('album.edit');
	Route::post('/album/update/{id}','AlbumController@update')->name('album.update');
	Route::get('/album/destroy/{id}', 'AlbumController@destroy')->name('album.destroy');
	// album.published
	Route::post('/album/published', 'AlbumController@updatePublished')->name('album.updatePublished');
	Route::post('/album/updateFeatured', 'PageControAlbumControllerller@updateFeatured')->name('album.updateFeatured');
	
	// Route::get('/photos', 'PhotoController@index')->name('photos');
    // Route::get('/photos/create','PhotoController@create')->name('photos.create');
    // Route::post('/photos/store/','PhotoController@store')->name('photos.store');
    // Route::get('/photos/{id}/edit','PhotoController@edit')->name('photos.edit');
    // Route::post('/photos/update/{id}','PhotoController@update')->name('photos.update');
    // Route::get('/photos/destroy/{id}', 'PhotoController@destroy')->name('photos.destroy');

	Route::resource('photos','PhotoController');
	Route::post('/photos/them_anh', 'PhotoController@getPhoto')->name('album.photo');

    Route::get('/pages', 'PageController@index')->name('pages');
    Route::get('/page/create','PageController@create')->name('page.create');
    Route::post('/page/store/','PageController@store')->name('page.store');
    Route::get('/page/{id}/edit','PageController@edit')->name('page.edit');
    Route::post('/page/update/{id}','PageController@update')->name('page.update');
    Route::get('/page/destroy/{id}', 'PageController@destroy')->name('page.destroy');
    Route::post('/page/updateFeatured', 'PageController@updateFeatured')->name('page.updateFeatured');
    Route::post('/page/published', 'PageController@updatePublished')->name('page.updatePublished');
    Route::get('/contacts', 'ContactController@index')->name('contacts.index');
	Route::get('/contacts/destroy/{id}', 'ContactController@destroy')->name('contacts.destroy');

    Route::get('/affiliate', 'AffiliateController@index')->name('affiliates.index');
    Route::get('/commission', 'CommissionController@index')->name('commission.index');
    Route::get('/commission/{user_id}', 'CommissionController@staffCommission')->name('commission.staffCommission');
    Route::post('/affiliate/ordered', 'CommissionController@updateStatus')->name('affiliates.updateStatus');
    Route::get('/kichhoatkhoahoc', 'StaffController@userCourse')->name('khoahoc.userCourse');
    Route::post('/kichhoatkhoahoc', 'StaffController@updateUserCourse')->name('khoahoc.updateUserCourse');

	Route::get('/products/admin','ProductController@admin_products')->name('products.admin');
	Route::get('/products/seller','ProductController@seller_products')->name('products.seller');
	Route::get('/products/create','ProductController@create')->name('products.create');
	Route::get('/product_session/create','ProductSessionController@create')->name('session.create');
	Route::post('/product_session/store','ProductSessionController@store')->name('session.store');
	Route::get('/product_lesson/createLesson','ProductSessionController@createLesson')->name('lesson.create');
	Route::post('/product_lesson/store','ProductSessionController@storeLesson')->name('lesson.store');
    Route::post('/product_lesson/getSessionByCourse', 'ProductSessionController@getSessionByCourse')->name('lesson.getSessionByCourse');
    Route::post('/product_lesson/SessionByCourse', 'ProductSessionController@SessionByCourse')->name('lesson.SessionByCourse');
    Route::get('/session/EditSession', 'ProductSessionController@EditSession')->name('session.EditSession');
    Route::post('/session/updateSession/{id}', 'ProductSessionController@UpdateSession')->name('session.UpdateSession');
    Route::get('/session/destroy/{id}', 'ProductSessionController@destroySession')->name('session.destroy');

	Route::get('/products/admin/{id}/edit','ProductController@admin_product_edit')->name('products.admin.edit');
	Route::get('/products/seller/{id}/edit','ProductController@seller_product_edit')->name('products.seller.edit');
	Route::post('/products/todays_deal', 'ProductController@updateTodaysDeal')->name('products.todays_deal');
	Route::post('/products/get_products_by_subsubcategory', 'ProductController@get_products_by_subsubcategory')->name('products.get_products_by_subsubcategory');


	Route::resource('sellers','SellerController');
	Route::get('/sellers/destroy/{id}', 'SellerController@destroy')->name('sellers.destroy');
	Route::get('/sellers/view/{id}/verification', 'SellerController@show_verification_request')->name('sellers.show_verification_request');
	Route::get('/sellers/approve/{id}', 'SellerController@approve_seller')->name('sellers.approve');
	Route::get('/sellers/reject/{id}', 'SellerController@reject_seller')->name('sellers.reject');
	Route::post('/sellers/payment_modal', 'SellerController@payment_modal')->name('sellers.payment_modal');

	Route::resource('customers','CustomerController');
	Route::get('/customers/destroy/{id}', 'CustomerController@destroy')->name('customers.destroy');

	Route::get('/newsletter', 'NewsletterController@index')->name('newsletters.index');
	Route::post('/newsletter/send', 'NewsletterController@send')->name('newsletters.send');

	Route::resource('profile','ProfileController');

	Route::post('/business-settings/update', 'BusinessSettingsController@update')->name('business_settings.update');
	Route::post('/business-settings/update/activation', 'BusinessSettingsController@updateActivationSettings')->name('business_settings.update.activation');
	Route::get('/activation', 'BusinessSettingsController@activation')->name('activation.index');
	Route::get('/payment-method', 'BusinessSettingsController@payment_method')->name('payment_method.index');
	Route::get('/social-login', 'BusinessSettingsController@social_login')->name('social_login.index');
	Route::get('/smtp-settings', 'BusinessSettingsController@smtp_settings')->name('smtp_settings.index');
	Route::get('/google-analytics', 'BusinessSettingsController@google_analytics')->name('google_analytics.index');
	Route::get('/facebook-chat', 'BusinessSettingsController@facebook_chat')->name('facebook_chat.index');
	Route::post('/env_key_update', 'BusinessSettingsController@env_key_update')->name('env_key_update.update');
	Route::post('/payment_method_update', 'BusinessSettingsController@payment_method_update')->name('payment_method.update');
	Route::post('/google_analytics', 'BusinessSettingsController@google_analytics_update')->name('google_analytics.update');
	Route::post('/facebook_chat', 'BusinessSettingsController@facebook_chat_update')->name('facebook_chat.update');
	Route::get('/currency', 'CurrencyController@currency')->name('currency.index');
    Route::post('/currency/update', 'CurrencyController@updateCurrency')->name('currency.update');
    Route::post('/your-currency/update', 'CurrencyController@updateYourCurrency')->name('your_currency.update');
	Route::get('/verification/form', 'BusinessSettingsController@seller_verification_form')->name('seller_verification_form.index');
	Route::post('/verification/form', 'BusinessSettingsController@seller_verification_form_update')->name('seller_verification_form.update');
	Route::get('/vendor_commission', 'BusinessSettingsController@vendor_commission')->name('business_settings.vendor_commission');
	Route::post('/vendor_commission_update', 'BusinessSettingsController@vendor_commission_update')->name('business_settings.vendor_commission.update');

	Route::resource('/languages', 'LanguageController');
	Route::post('/languages/update_rtl_status', 'LanguageController@update_rtl_status')->name('languages.update_rtl_status');
	Route::get('/languages/destroy/{id}', 'LanguageController@destroy')->name('languages.destroy');
	Route::get('/languages/{id}/edit', 'LanguageController@edit')->name('languages.edit');
	Route::post('/languages/{id}/update', 'LanguageController@update')->name('languages.update');
	Route::post('/languages/key_value_store', 'LanguageController@key_value_store')->name('languages.key_value_store');

	Route::get('/frontend_settings/home', 'HomeController@home_settings')->name('home_settings.index');
	Route::post('/frontend_settings/home/top_10', 'HomeController@top_10_settings')->name('top_10_settings.store');
	Route::get('/sellerpolicy/{type}', 'PolicyController@index')->name('sellerpolicy.index');
	Route::get('/returnpolicy/{type}', 'PolicyController@index')->name('returnpolicy.index');
	Route::get('/supportpolicy/{type}', 'PolicyController@index')->name('supportpolicy.index');
	Route::get('/terms/{type}', 'PolicyController@index')->name('terms.index');
	Route::get('/privacypolicy/{type}', 'PolicyController@index')->name('privacypolicy.index');

	//Policy Controller
	Route::post('/policies/store', 'PolicyController@store')->name('policies.store');

	Route::group(['prefix' => 'frontend_settings'], function(){
		Route::resource('sliders','SliderController');
	    Route::get('/sliders/destroy/{id}', 'SliderController@destroy')->name('sliders.destroy');

		Route::resource('home_banners','BannerController');
		Route::get('/home_banners/create/{position}', 'BannerController@create')->name('home_banners.create');
		Route::post('/home_banners/update_status', 'BannerController@update_status')->name('home_banners.update_status');
	    Route::get('/home_banners/destroy/{id}', 'BannerController@destroy')->name('home_banners.destroy');

		Route::resource('home_categories','HomeCategoryController');
	    Route::get('/home_categories/destroy/{id}', 'HomeCategoryController@destroy')->name('home_categories.destroy');
		Route::post('/home_categories/update_status', 'HomeCategoryController@update_status')->name('home_categories.update_status');
        Route::post('/home_categories/get_subsubcategories_by_category', 'HomeCategoryController@getSubSubCategories')->name('home_categories.get_subsubcategories_by_category');
        Route::post('/home_categories/get_subcategories_by_category', 'HomeCategoryController@getSubCategories')->name('home_categories.get_subcategories_by_category');
	});

	Route::resource('roles','RoleController');
    Route::get('/roles/destroy/{id}', 'RoleController@destroy')->name('roles.destroy');

    Route::resource('staffs','StaffController');
    Route::get('/staffs/destroy/{id}', 'StaffController@destroy')->name('staffs.destroy');

    Route::get('/staffs/addUserCourse/{id}', 'StaffController@addUserProducts')->name('staffs.addUserProducts');
    Route::post('/staffs/storeUserProducts', 'StaffController@storeUserProducts')->name('staffs.storeUserProducts');

	Route::resource('flash_deals','FlashDealController');
    Route::get('/flash_deals/destroy/{id}', 'FlashDealController@destroy')->name('flash_deals.destroy');
	Route::post('/flash_deals/update_status', 'FlashDealController@update_status')->name('flash_deals.update_status');
	Route::post('/flash_deals/product_discount', 'FlashDealController@product_discount')->name('flash_deals.product_discount');
	Route::post('/flash_deals/product_discount_edit', 'FlashDealController@product_discount_edit')->name('flash_deals.product_discount_edit');

	Route::get('/orders', 'OrderController@admin_orders')->name('orders.index.admin');
	Route::get('/orders/{id}/show', 'OrderController@show')->name('orders.show');
	Route::get('/sales/{id}/show', 'OrderController@sales_show')->name('sales.show');
	Route::get('/orders/destroy/{id}', 'OrderController@destroy')->name('orders.destroy');
	Route::get('/sales', 'OrderController@sales')->name('sales.index');
	Route::post('/doanhthu', 'OrderController@doanhthu')->name('doanhthu.month');

	Route::resource('links','LinkController');
	Route::get('/links/destroy/{id}', 'LinkController@destroy')->name('links.destroy');

	Route::resource('generalsettings','GeneralSettingController');
	Route::get('/logo','GeneralSettingController@logo')->name('generalsettings.logo');
	Route::post('/logo','GeneralSettingController@storeLogo')->name('generalsettings.logo.store');
	Route::get('/color','GeneralSettingController@color')->name('generalsettings.color');
	Route::post('/color','GeneralSettingController@storeColor')->name('generalsettings.color.store');

	Route::resource('seosetting','SEOController');

	Route::post('/pay_to_seller', 'CommissionController@pay_to_seller')->name('commissions.pay_to_seller');

	//Reports
	Route::get('/stock_report', 'ReportController@stock_report')->name('stock_report.index');
	Route::get('/in_house_sale_report', 'ReportController@in_house_sale_report')->name('in_house_sale_report.index');
	Route::get('/seller_report', 'ReportController@seller_report')->name('seller_report.index');
	Route::get('/seller_sale_report', 'ReportController@seller_sale_report')->name('seller_sale_report.index');
	Route::get('/wish_report', 'ReportController@wish_report')->name('wish_report.index');

	//Coupons
	Route::resource('coupon','CouponController');
	Route::post('/coupon/get_form', 'CouponController@get_coupon_form')->name('coupon.get_coupon_form');
	Route::post('/coupon/get_form_edit', 'CouponController@get_coupon_form_edit')->name('coupon.get_coupon_form_edit');
	Route::get('/coupon/destroy/{id}', 'CouponController@destroy')->name('coupon.destroy');

	//Reviews
	Route::get('/reviews', 'ReviewController@index')->name('reviews.index');
	Route::post('/reviews/published', 'ReviewController@updatePublished')->name('reviews.published');

	//Support_Ticket
	Route::get('support_ticket/','SupportTicketController@admin_index')->name('support_ticket.admin_index');
	Route::get('support_ticket/{id}/show','SupportTicketController@admin_show')->name('support_ticket.admin_show');
	Route::post('support_ticket/reply','SupportTicketController@admin_store')->name('support_ticket.admin_store');
});
