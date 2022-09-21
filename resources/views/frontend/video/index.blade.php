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
                        <h1 class="text-white">Video Galeri</h1>
                        <ol class="d-flex align-items-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Anasayfa</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Video Galeri</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row mt60">
        <div class="col-lg-6 col-12">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/mZgKzpvWUYc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6 col-12">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Na5BlG4Ehlc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

    </div>

@endsection
