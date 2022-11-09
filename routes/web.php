<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

    Auth::routes();

    Route::get('/sitemap', function(){
        SitemapGenerator::create(\route('home'))->writeToFile('sitemap.xml');
    });

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/sinav-kategori/{url}', 'HomeController@sinavKategori')->name('sinav.kategori');
    Route::get('/sinav/{kategori}/{url}', 'HomeController@sinavDetay')->name('sinav.detay');

    Route::get('/blog/{kategori?}/{url?}', 'HomeController@blogDetay')->name('blog.detay');
    Route::get('/blog/{kategori?}', 'HomeController@blogKategori')->name('blog.kategori');

    Route::get('/kurumsal/{url?}', 'HomeController@kurumsalDetay')->name('kurumsal.detay');

    Route::get('/kitap/{kategori}/{url}', 'HomeController@kitapDetay')->name('kitap.detay');
    Route::get('/kitap-kategori/{url?}', 'HomeController@kitapKategori')->name('kitap.kategori');

    Route::get('/video/{url?}', 'HomeController@videoDetay')->name('video.detay');
    Route::get('/videogaleri', 'HomeController@video')->name('videolar');
    Route::get('/galeri/{url?}', 'HomeController@galeriDetay')->name('galeri.detay');
    Route::get('/fotogaleri', 'HomeController@galeri')->name('galeriler');

    Route::get('/egitmenler', 'HomeController@egitmenler')->name('egitmenler');

    Route::get('/temsilciol', 'HomeController@temsilciol')->name('temsilciol');
    Route::post('/temsilciolkayit', 'HomeController@temsilciolkayit')->name('temsilciolkayit');

    Route::get('/sinavbasvuruformu', 'HomeController@sinavbasvuruformu')->name('sinavbasvuruformu');
    Route::post('/sinavbasvuru', 'HomeController@sinavbasvuru')->name('sinavbasvuru');


    Route::get('/egitmenol', 'HomeController@egitmenol')->name('egitmenol');

    Route::get('/ik', 'HomeController@ik')->name('ik');
    Route::get('/sss', 'HomeController@sss')->name('sss');

    Route::get('/iletisim', 'HomeController@iletisim')->name('iletisim');

    Route::group(["prefix"=>"go", 'middleware' => ['auth']],function() {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::auto('/page', PageController::class);
        Route::auto('/page-categories', PageCategoryController::class);
        Route::auto('/blog', BlogController::class);
        Route::auto('/blog-categories', BlogCategoryController::class);
        Route::auto('/service', ServiceController::class);
        Route::auto('/service-categories', ServiceCategoryController::class);
        Route::auto('/banner', BannerController::class);
        Route::auto('/banner-area', BannerAreaController::class);
        Route::auto('/faq', FaqController::class);
        Route::auto('/faq-categories', FaqCategoryController::class);
        Route::auto('/gallery', GalleryController::class);
        Route::auto('/gallery-categories', GalleryCategoryController::class);
        Route::auto('/price', PriceController::class);
        Route::auto('/price-categories', PriceCategoryController::class);
        Route::auto('/project', ProjectController::class);
        Route::auto('/project-categories', ProjectCategoryController::class);
        Route::auto('/slider', SliderController::class);
        Route::auto('/video', VideoController::class);
        Route::auto('/video-categories', VideoCategoryController::class);
        Route::auto('/settings', SettingController::class);
        Route::auto('/contact', ContactController::class);
        Route::auto('/team', TeamController::class);
        Route::auto('/team-categories', TeamCategoryController::class);
        Route::auto('/product', ProductController::class);
        Route::auto('/product-categories', ProductCategoryController::class);
    });
