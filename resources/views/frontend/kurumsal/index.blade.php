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
            <div class="col-lg-6">
                <div class="about_content">
                    <h3>Our Values</h3>
                    <p class="color-black22 mt20">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis,et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <p class="mt15">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis,et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <p class="mt20">Nemo enim ipsam,voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia,consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.,Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, adipisci velit, sed quia non numquam eius modi tempora</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_thumb">
                    <img class="img-fluid" src="/frotnend/images/about/8.jpg" alt="8.jpg">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="about_whoweare">
                    <h4>Who We Are</h4>
                    <p class="mt25">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis,et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <p class="mt25">Nemo enim ipsam,voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia,consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.,Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, adipisci velit, sed quia non numquam eius modi tempora</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_whoweare">
                    <h4>What We Do</h4>
                    <p class="mt25">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis,et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <p class="mt25">Nemo enim ipsam,voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia,consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.,Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, adipisci velit, sed quia non numquam eius modi tempora</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
