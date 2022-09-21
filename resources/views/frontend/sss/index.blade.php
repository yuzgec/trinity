@extends('frontend.layout.app')
@section('title')
@section('content')
    @include('frontend.layout.header2')

    <section class="inner_page_breadcrumb style2 blog_grid_bg_color" style="background-image: url('/frontend/images/headerback.png')">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="breadcrumb_content">
                        <h1 class="text-white">Sıkça Sorulan Sorular</h1>
                        <ol class="d-flex align-items-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Anasayfa</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Sıkça Sorulan Sorular</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
