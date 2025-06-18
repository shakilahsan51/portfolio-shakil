<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\FeedbackSectionSettingController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\PortfolioSectionSetting;
use App\Http\Controllers\Admin\PortfolioSectionSettingController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SkillItemController;
use App\Http\Controllers\Admin\SkillSectionSettingController;
use App\Http\Controllers\Admin\TyperTitleController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/blog-details', function () {
    return view('frontend.blog-details');
});


Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('portfolio-details/{id}',[HomeController::class,'showPortfolio'])->name('show.portfolio');



Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'],function(){
    Route::resource('hero', HeroController::class);
    Route::resource('typer-title', TyperTitleController::class);
    Route::resource('service',ServiceController::class);


    // Portfolio About 
    Route::get('resume/download',[AboutController::class, 'resumeDownload'])->name('resume.download');
    Route::resource('about',AboutController::class);

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
});
