<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $Show = Page::findOrFail(1);
        return view('frontend.index', compact('Show'));
    }

    public function getKurumsal(){

    }

    public function getService(){

    }

    public function iletisim(){
        return view('frontend.iletisim');
    }
}
