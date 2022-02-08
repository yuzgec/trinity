<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $All = Product::with('getCategory')->orderBy('rank')->get();
        $Kategori = ProductCategory::all();
        return view('backend.product.index', compact('All', 'Kategori'));
    }

    public function create()
    {
        $Kategori = ProductCategory::pluck('title', 'id');
        return view('backend.product.create',  compact('Kategori'));
    }


    public function store(ProductRequest $request)
    {
        $New = new Product;
        $New->title = $request->title;
        $New->slug = seo($request->title);
        $New->category = $request->category;
        $New->short = $request->short;
        $New->desc = $request->desc;

        $New->seo_desc = $request->seo_desc;
        $New->seo_key = $request->seo_key;
        $New->seo_title = $request->seo_title;

        if($request->hasfile('image')){
            $New->addMedia($request->image)->toMediaCollection('product');
        }

        if($request->hasfile('gallery')) {
            foreach ($request->gallery as $item){
                $New->addMedia($item)->toMediaCollection('gallery');
            }
        }

        $New->save();

        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('product.index');

    }


    public function show($id)
    {
        $Show = Product::findOrFail($id);
        return view('frontend.product.index', compact('Show'));
    }

    public function edit($id)
    {


        $Edit = Product::findOrFail($id);

        //dd($Edit->getMedia('product'));
        $Kategori = ProductCategory::pluck('title', 'id');
        return view('backend.product.edit', compact('Edit', 'Kategori'));
    }

    public function update(ProductRequest $request, $id)
    {
        $Update = Product::findOrFail($id);
        $Update->title = $request->title;
        $Update->slug = seo($request->title);
        $Update->category = $request->category;
        $Update->short = $request->short;
        $Update->desc = $request->desc;

        $Update->seo_title = $request->seo_title;
        $Update->seo_desc = $request->seo_desc;
        $Update->seo_key = $request->seo_key;

        if($request->removeImage == "1"){
            $Update->media()->where('collection_name', 'product')->delete();
        }

        if ($request->hasFile('image')) {
            $Update->media()->where('collection_name', 'product')->delete();
            $Update->addMedia($request->image)->toMediaCollection('product');
        }

        if($request->hasfile('gallery')) {
            foreach ($request->gallery as $item){
                $Update->addMedia($item)->toMediaCollection('gallery');
            }
        }

        $Update->save();

        toast(SWEETALERT_MESSAGE_UPDATE,'success');
        return redirect()->route('product.index');

    }

    public function destroy($id)
    {
        $Delete = Product::findOrFail($id);
        $Delete->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('product.index');
    }

    public function getTrash(){
        $Trash = Product::onlyTrashed()->orderBy('deleted_at','desc')->get();
        return view('backend.product.trash', compact('Trash'));
    }

    public function getOrder(Request $request){
        foreach($request->get('product') as  $key => $rank ){
            Product::where('id',$rank)->update(['rank'=>$key]);
        }
    }

    public function getSwitch(Request $request){
        $update=Product::findOrFail($request->id);
        $update->status = $request->status == "true" ? 1 : 0 ;
        $update->save();
    }

    public function postUpload(Request $request)
    {

        if($request->hasFile('upload')) {
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $filenametostore = seo($filename).'_'.time().'.'.$extension;
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Resim Yüklendi';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function deleteGaleriDelete($id){

        $Delete = Product::find($id);
        $Delete->media()->where('id', \request('image_id'))->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('product.edit', $id);

    }
}
