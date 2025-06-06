<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Hero;
use App\Models\Service;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\PortfolioItem;
use App\Models\PortfolioSectionSetting;
use App\Models\SkillSectionSetting;

class HomeController extends Controller
{
    public function index(){
        $hero = Hero::first();
        $typerTitle = TyperTitle::all();
        $services = Service::all();
        $about = About::first();
        $portfolioTitle = PortfolioSectionSetting::first();
        $portfolioCategories = Category::all();
        $portfolioItems = PortfolioItem::all();
        $skill = SkillSectionSetting::first();
        return view('frontend.home', 
            compact(
                'hero',
                'typerTitle',
                'services',
                'about',
                'portfolioTitle',
                'portfolioCategories',
                'portfolioItems',
                'skill',
            )
        );
    }


    public function showPortfolio($id){
        $portfolio = PortfolioItem::findOrFail($id);
        return view('frontend.portfolio-details', compact('portfolio'));
    }
}
