@extends('frontend.layout.app')
@section('title', $Urun->title.' | Trinity College London Türkiye Kitapları')
@section('content')
    @include('frontend.layout.header2')

    <section class="inner_page_breadcrumb style2 blog_grid_bg_color" style="background-image: url('/frontend/images/headerback.png')">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="breadcrumb_content">
                        <h1 class="text-white">{{ $Urun->title }}</h1>
                        <ol class="d-flex align-items-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Anasayfa</a></li>
                            <li class="breadcrumb-item  text-white active">Kitaplar</li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ $Kategori->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-single-content pb0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="single_product_grid">
                        <div class="single_product_slider">
                            <div class="item">
                                <div class="single_product">
                                    <div class="single_item">
                                        <div class="thumb"><img class="img-fluid" src="{{ (!$Urun->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $Urun->getFirstMediaUrl('page')}}" alt="ss1.png"></div>
                                    </div>
                                    <a class="product_popup popup-img" href="{{ (!$Urun->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $Urun->getFirstMediaUrl('page')}}"><span class="flaticon-zoom-in"></span></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single_product">
                                    <div class="single_item">
                                        <div class="thumb"><img class="img-fluid" src="{{ (!$Urun->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $Urun->getFirstMediaUrl('page')}}" alt="ss1.png"></div>
                                    </div>
                                    <a class="product_popup popup-img" href="{{ (!$Urun->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $Urun->getFirstMediaUrl('page')}}"><span class="flaticon-zoom-in"></span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="shop_single_product_details">
                        <h3 class="title">{{ $Urun->title }}</h3>
                        <p class="mb20">{{ $Urun->short }}</p>
                        <ul class="cart_btns ui_kit_button mb30">

                            <li class="list-inline-item">
                                <a href="https://api.whatsapp.com/send?phone={{ config('setting.whatsapp1') }}&text=Merhaba sipariş vermek istiyorum.
                                {{ $Urun->title }} {{url()->full()}}" class="btn btn-success" style="background-color:seagreen">
                                    <i class="fa fa-whatsapp"></i> Whatsapp Bilgi
                                </a>
                            </li>

                            <li class="list-inline-item"><a href="https://www.bragiegitim.com/" class="btn" target="_blank">
                                <i class="fa fa-shopping-cart"></i>
                                Bragi Eğitim Satın AL</a>
                            </li>
                        </ul>
                        <ul class="sspd_sku mb20">
                            <li><a href="#"><b>Barkod:</b> {{ $Urun->sku }}</a></li>
                            <li><a href="#"><b>Dil: İngilizce</b></a></li>
                            <li><a href="#"><b>Etiketler:</b> Trinity, {{ $Kategori->title }}</a></li>
                        </ul>
                        <ul class="sspd_social_icon">
                            <li class="list-inline-item">Paylaş:</li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>

                        {!!  $Urun->desc !!}

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
