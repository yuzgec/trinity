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
        $Kategori = ProductCategory::where('slug', $kategori)->first();
        $Urun = Product::with(['books', 'getCategory'])->where('slug', $url)->first();
        return view('frontend.urun.detail', compact('Kategori', 'Urun'));
    }

    public function videoDetay(){

    }

    public function video(){
        $All = VideoCategory::all();
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

    public function kurumsalDetay($url){
        $Detay = Page::where('slug', $url)->first();
        return view('frontend.kurumsal.index', compact('Detay'));

    }

    public function iletisim(){
        return view('frontend.iletisim');
    }

    public function egitmenler(){
        $All = Team::paginate(18);
        $AllCategories = TeamCategory::all();
        return view('frontend.egitmen.index', compact('All', 'AllCategories'));
    }

    public function temsilciol(){
        return view('frontend.kurumsal.temsilciol');
    }

    public function egitmenol(){
        return view('frontend.kurumsal.egitmenol');
    }

    public function sss(){
        $All = Faq::all();
        return view('frontend.sss.index', compact('All'));
    }


}
