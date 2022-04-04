<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Team;
use App\Models\TeamCategory;
use App\Models\VideoCategory;
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

    public function sinavDetay($kategori,$url){
        $Kategori = ServiceCategory::where('slug', $kategori)->first();
        $Detay = Service::with('getCategory')->where('slug', $url)->first();

        return view('frontend.hizmet.index', compact('Detay'));
    }

    public function kitapKategori($url){

        $Detay  = ProductCategory::where('slug', $url)->first();
        $Books  = Product::where('category', $Detay->id)->get();
        return view('frontend.urun.index', compact('Books', 'Detay'));
    }

    public function kitapDetay($kategori,$url){
        //dd($kategori,$url);
        $Kategori = ProductCategory::where('slug', $kategori)->first();
        $Urun = Product::with(['books', 'getCategory'])->where('slug', $url)->first();
        //dd($Urun);
        return view('frontend.urun.detail', compact('Kategori', 'Urun'));
    }

    public function videoDetay(){


    }



    public function video(){
        $All = VideoCategory::all();
        //dd($All);
        return view('frontend.video.index', compact('All'));
    }

    public function galeriDetay(){


    }

    public function galeri(){
        $All = GalleryCategory::all();
        return view('frontend.galeri.index', compact('All'));
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

    public function egitmenler(){
        $All = Team::paginate(18);
        $AllCategories = TeamCategory::all();
        return view('frontend.egitmen.index', compact('All', 'AllCategories'));
    }

}
