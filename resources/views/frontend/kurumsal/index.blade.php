@extends('frontend.layout.app')
@section('content')
    @section('header')
        @include('frontend.layout.header2')
    @endsection


    <section class="inner_page_breadcrumb style2 blog_grid_bg_color" style="background-image: url('/frontend/images/headerback.png')">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h1 class="text-white">{{ $Detay->title }}</h1>
                        <ol class="d-flex align-items-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Anasayfa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Kurumsal</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ $Detay->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about_content">
                    <h3>{{ $Detay->title }}</h3>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
