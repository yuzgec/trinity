<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $Show = Page::findOrFail(1);
        return view('frontend.index', compact('Show'));
    }


    public function sinavKategori($url){

        $Kategori =  Service::whereRelation('getCategory', 'slug', '=', $url)->get();
        $Detay = ServiceCategory::where('slug', $url)->first();
        return view('frontend.hizmet.detail', compact('Kategori', 'Detay'));

    }

    public function sinavDetay($url){
        $Detay = Service::with('getCategory')->where('slug', $url)->first();
        //dd($Detay);
        return view('frontend.hizmet.index', compact('Detay'));

    }

    public function kitapKategori(){
        $Kategori =  Product::whereRelation('getCategory', 'slug', '=', $url)->get();
        $Detay = ProductCategory::where('slug', $url)->first();
        return view('frontend.hizmet.detail', compact('Kategori', 'Detay'));
    }

    public function kitapDetay(){


    }

    public function videoDetay(){


    }

    public function videoKategori(){


    }

    public function galeriDetay(){


    }
    public function galeriKategori(){


    }

    public function blogDetay(){


    }
    public function blogKategori(){


    }

    public function kurumsalDetay(){


    }



    public function iletisim(){
        return view('frontend.iletisim');
    }
}
