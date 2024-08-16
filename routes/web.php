<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\WebpagesController;
use App\Http\Controllers\admin\OurclinetsController;
use App\Http\Controllers\admin\OurteamController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\QouteControlles;
use App\Http\Controllers\admin\OurblogController;

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

Route::group(['prefix' => 'admin', 'as' => 'admin:'], function () {

    //Admin Auth Routes
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/submit-login', [AuthController::class, 'submitLogin'])->name('submitLogin');

    //Admin Users Module Routes
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.form');
        Route::delete('/delete/{id}', [WebpagesController::class, 'destroy'])->name('destroy');
        Route::get('/webpages', [WebpagesController::class, 'index'])->name('webpages');
        Route::get('/webpages/create', [WebpagesController::class, 'create'])->name('webpages.form');
        Route::post('/webpages/submitForm', [WebpagesController::class, 'submitForm'])->name('webpages.submitForm');
        Route::post('/webpages/checkPageUrlSlug', [WebpagesController::class, 'checkPageUrlSlug'])->name('webpages.checkPageUrlSlug');
        Route::post('/update-status', [WebpagesController::class, 'update_webpage_status'])->name('status');
         ///////////////our clinets//////////////////////////
         Route::get('/ourclinets', [OurclinetsController::class, 'index'])->name('ourclinets');
         Route::get('/create_clients', [OurclinetsController::class, 'create'])->name('create_clients');
         Route::post('/clients_submit', [OurclinetsController::class, 'submit'])->name('clients_submit');
         ////////////our team////////////////////////////////
         Route::get('/ourteam', [OurteamController::class, 'index'])->name('ourteam');
         Route::get('/create_team', [OurteamController::class, 'create'])->name('create_team');
         Route::post('/team_submit', [OurteamController::class, 'submit'])->name('team_submit');
          //////////////Testimonial////////////////////////
        Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
        Route::get('/create_testimonial', [TestimonialController::class, 'create'])->name('create_testimonial');
        Route::post('/testimonial_submit', [TestimonialController::class, 'submit'])->name('testimonial_submit');
        Route::post('/delete_testinomial/{id}', [TestimonialController::class, 'destroy'])->name('delete_testinomial');
        ////////////qoutes route/////////////////////////
        Route::get('/qoute', [QouteControlles::class, 'index'])->name('qoute');
        Route::post('/delete_qoute/{id}', [QouteControlles::class, 'destroy'])->name('destroy');
         ////////////our blog////////////////////////////
         Route::get('/ourblog', [OurblogController::class, 'index'])->name('ourblog');
         Route::get('/create_blog', [OurblogController::class, 'create'])->name('create_blog');
         Route::post('/blog_submit', [OurblogController::class, 'submit'])->name('blog_submit');
         Route::post('/delete_blog/{id}', [OurblogController::class, 'destroy'])->name('delete_blog');
    });
});
Route::get('/', [FrontController::class, 'index'])->name('homepage');
Route::get('/home', [FrontController::class, 'index'])->name('homepage');
Route::get('/our-story', [FrontController::class, 'ourStory'])->name('aboutus');
Route::get('/contact', [FrontController::class, 'contactUs'])->name('contactus');
Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('contactus');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');
Route::get('/privacy-policy', [FrontController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/terms-and-conditions', [FrontController::class, 'termsAndConditions'])->name('termsandconditions');
Route::post('/submit-contact-us', [FrontController::class, 'submitContactUS'])->name('submitContactUs');
Route::post('/submit-subscription', [FrontController::class, 'submitSubsription'])->name('submitSubsription');
Route::post('/submit-qoute', [FrontController::class, 'submitqoute'])->name('submitqoute');
Route::get('/blogDetail/{id}', [FrontController::class, 'blogDetail'])->name('blogDetail');

Route::get('/clear-cache-all', function () {
    Artisan::call('cache:clear');
    // Artisan::call('route:cache');
    // Artisan::call('view:clear');
    // Artisan::call('config:cache');
    dd("Cache Clear All");
});
