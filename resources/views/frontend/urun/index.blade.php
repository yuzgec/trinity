@extends('frontend.layout.app')
@section('content')
    @section('header')
        @include('frontend.layout.header2')
    @endsection
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">Kitap - </h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kitaplar</li>
                        <li class="breadcrumb-item active" aria-current="page">Kitaplar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-team pb50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-6">
                        <div class="instructor_search_result">
                            <p class="mt10 fz15"><span class="color-dark pr10">{{ $Kategori->count() }}</span> adet kitap listelenmiştir.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-4">
                        <div class="shop_grid">
                            <div class="thumb text-center">
                                <img class="img-fluid" src="images/shop/1.png" alt="1.png">
                            </div>
                            <div class="details float-left">
                                <h4 class="item-tile">SEO Tricks</h4>
                            </div>
                            <a class="cart_bag float-right" href="#"><span class="flaticon-shopping-bag"></span></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                @foreach($Service_Categories as $item)
                <div class="selected_filter_widget style2 mb30">
                    <div id="accordion" class="panel-group">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#{{ $item->slug }}" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{ $item->title }}</a>
                                </h4>
                            </div>
                            <div id="{{ $item->slug }}" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="category_sidebar_widget">
                                        <ul class="category_list">
                                            @foreach($Service->where('category', $item->id) as $row)
                                            <li><a href="#">{{ $row->title }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

@endsection
