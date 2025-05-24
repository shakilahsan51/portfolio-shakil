<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Hero;
use App\Models\Service;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $hero = Hero::first();
        $typerTitle = TyperTitle::all();

        $services = Service::all();
        return view('frontend.home', compact('hero','typerTitle','services'));
    }
}
