<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogSectionSettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\FeedbackSectionSettingController;
use App\Http\Controllers\Admin\FooterContactInfoController;
use App\Http\Controllers\Admin\FooterHelpLinkController;
use App\Http\Controllers\Admin\FooterInfoController;
use App\Http\Controllers\Admin\FooterSocialLinkController;
use App\Http\Controllers\Admin\FooterUsefullLinkController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\PortfolioSectionSetting;
use App\Http\Controllers\Admin\PortfolioSectionSettingController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SeoSettingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SkillItemController;
use App\Http\Controllers\Admin\SkillSectionSettingController;
use App\Http\Controllers\Admin\TyperTitleController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Frontend\HomeController;
use App\Models\Experience;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/blog-details', function () {
    return view('frontend.blog-details');
});

Route::get('/admin', [AuthController::class, 'index'])->name('show.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('portfolio-details/{id}', [HomeController::class, 'showPortfolio'])->name('show.portfolio');
Route::get('blog-details/{id}', [HomeController::class, 'showBlog'])->name('show.blog');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');


Route::post('contact', [HomeController::class, 'contact'])->name('contact');






Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::resource('hero', HeroController::class);
    Route::resource('typer-title', TyperTitleController::class);
    Route::resource('service', ServiceController::class);


    // Portfolio About 
    Route::get('resume/download', [AboutController::class, 'resumeDownload'])->name('resume.download');
    Route::resource('about', AboutController::class);
    // Portfolio-Ctegory 
    Route::resource('category', CategoryController::class);
    // Portfolio-Item 
    Route::resource('portfolio-item', PortfolioItemController::class);
    // Portfolio-Section-Setting
    Route::resource('portfolio-section-setting', PortfolioSectionSettingController::class);


    // Skill-Section-Setting
    Route::resource('skill-section-setting', SkillSectionSettingController::class);
    // Skill-Item
    Route::resource('skill-item', SkillItemController::class);


    // Experience
    Route::resource('experience', ExperienceController::class);



    // Feedback
    Route::resource('feedback', FeedbackController::class);
    // Feedback Section Setting
    Route::resource('feedback-section-setting', FeedbackSectionSettingController::class);



    // Blog Category
    Route::resource('blog-category', BlogCategoryController::class);
    // Blog create
    Route::resource('blog', BlogController::class);
    // Blog Section Setting Route
    Route::resource('blog-sectin-setting', BlogSectionSettingController::class);



    // Footer Social Route
    Route::resource('footer-social', FooterSocialLinkController::class);
    // Footer Social Route
    Route::resource('footer-info', FooterInfoController::class);
    // Footer Social Route
    Route::resource('footer-contact-info', FooterContactInfoController::class);
    // Footer Usefull link Route
    Route::resource('footer-usefull-link', FooterUsefullLinkController::class);
    // Footer Help link Route
    Route::resource('footer-help-link', FooterHelpLinkController::class);



    // Setting Route
    Route::get('settings', SettingController::class)->name('settings.index');


    // General Setting Route
    Route::resource('general-setting', GeneralSettingController::class);
    // SEO Setting Route
    Route::resource('seo-setting', SeoSettingController::class);
});
