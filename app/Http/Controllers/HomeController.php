<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasvuruRequest;
use App\Http\Requests\TemsilciRequest;
use App\Models\Basvuru;
use App\Models\Faq;
use App\Models\GalleryCategory;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Team;
use App\Models\TeamCategory;
use App\Models\Temsilci;
use App\Models\VideoCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function temsilciolkayit(TemsilciRequest $request){
        $New = new Temsilci;
        $New->kurum  = $request->kurum;
        $New->baskakurum  = $request->baskakurum;
        $New->nasilhaber  = $request->nasilhaber;
        $New->resmiad  = $request->resmiad;
        $New->okuladres  = $request->okuladres;
        $New->il  = $request->il;
        $New->ilce  = $request->ilce;
        $New->website  = $request->website;
        $New->kurumtelefon  = $request->kurumtelefon;
        $New->kurumemail  = $request->kurumemail;
        $New->sosyalmedya  = $request->sosyalmedya;
        $New->adsoyad  = $request->adsoyad;
        $New->gorev  = $request->gorev;
        $New->email  = $request->email;
        $New->telefon  = $request->telefon;
        $New->save();

        $Mail = ['gokcerbasar@gmail.com','gokcerbasar@hotmail.com','gokcer@laternamuzikkursu.com'];
        //$Mail = ['olcayy@gmail.com','godijital@gmail.com'];

        foreach ($Mail as $item){
            Mail::send("mail.temsilci",compact('New'),function ($message) use($New,$item) {
                $message->to($item)->subject($New->resmiad.' - '.$New->adsoyad.' Temsilci  Başvuru Formu');
            });
        }

        alert()->success('Başarıyla Gönderildi','Talebiniz bizlere ulaştı. En kısa zaman içerisinde sizlere dönüş yapılacaktır.');
        return redirect()->route('temsilciol');

    }

    public function egitmenol(){
        return view('frontend.kurumsal.egitmenol');
    }

    public function sinavbasvuruformu(){
        $Level = ['Initial', 'Grade1', 'Grade2', 'Grade3', 'Grade4', 'Grade5',  'Grade6',   'Grade7', 'Grade8'];
        return view('frontend.kurumsal.sinavbasvuruformu', compact('Level'));
    }

    public function sinavbasvuru(BasvuruRequest $request){

        $New = new Basvuru;
        $New->name = $request->name;
        $New->email = $request->email;
        $New->phone = $request->phone;
        $New->level = $request->level;
        $New->exam = $request->exam;
        $New->save();

        $Mail = ['gokcerbasar@gmail.com','gokcerbasar@hotmail.com','gokcer@laternamuzikkursu.com'];
        //$Mail = ['olcayy@gmail.com','godijital@gmail.com'];

        foreach ($Mail as $item){
            Mail::send("mail.basvuru",compact('New'),function ($message) use($New,$item) {
                $message->to($item)->subject($New->name.' Sınav Başvuru Formu');
            });
        }

        alert()->success('Başarıyla Gönderildi','Talebiniz bizlere ulaştı. En kısa zaman içerisinde sizlere dönüş yapılacaktır.');
        return redirect()->route('sinavbasvuruformu');
    }

    public function sss(){
        $All = Faq::all();
        return view('frontend.sss.index', compact('All'));
    }
}
