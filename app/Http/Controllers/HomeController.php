<?php

namespace App\Http\Controllers;

use App\Models\Page;
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

    public function sinavDetay(){


    }

    public function kitapKategori(){

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
