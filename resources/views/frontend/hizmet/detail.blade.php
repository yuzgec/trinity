@extends('frontend.layout.app')
@section('content')
@section('header')
    @include('frontend.layout.header2')
@endsection

<section class="inner_page_breadcrumb style2 blog_grid_bg_color" style="background-image: url('https://www.laternamuzikkursu.com/upload/slider/67keman-dersi-karsiyaka.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">{{ $Detay->title }}</h4>
                    <ol class="d-flex align-items-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Sınavlar</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $Detay->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Top Courses -->
<section id="top-courses" class="top-courses pb30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="emply-text-sec">
                    <div class="row" id="masonry_abc">
                        @foreach($Kategori as $row)
                            <div class="col-md-6 col-lg-4 col-xl-3 {{ $row->getCategory->slug }}">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/courses/t1.jpg" alt="t1.jpg">
                                        <div class="overlay">
                                            <a class="tc_preview_course" href="#">İncele</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>{{ $row->getCategory->title }}</p>
                                            <h5>{{ $row->title }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
