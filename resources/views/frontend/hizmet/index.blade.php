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
                            <li class="breadcrumb-item"><a href="{{ route('sinav.kategori', $Detay->getCategory->slug) }}" class="text-white">{{$Detay->getCategory->title}}</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ $Detay->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="top-courses " class="blog-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    <img src="{{ (!$Detay->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $Detay->getFirstMediaUrl('page')}}" alt="{{ $Detay->title }}" class="img-fluid" width="100%">
                    <div class="courses_single_container">
                        <div class="cs_rwo_tabs csv2">
                            <ul class="nav nav-tabs style4 mt30" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link style4 active" id="genel-bakis-tab" data-toggle="tab" href="#Overview" role="tab" aria-controls="Genel Bakış" aria-selected="true">
                                        Genel Bakış
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link style4" id="icerik-tab" data-toggle="tab" href="#icerik" role="tab" aria-controls="Sınav İçeriği" aria-selected="false">
                                       Sınav İçeriği
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link style4" id="seviyeler-tab" data-toggle="tab" href="#course" role="tab" aria-controls="Sınav Seviyeleri" aria-selected="false">
                                        Sınav Seviyeleri
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link style4" id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="Sınav Tarihleri" aria-selected="false">
                                        Sınav Tarihleri
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link style4" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">
                                        Eğitmen
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Overview" role="tabpanel" aria-labelledby="Overview-tab">
                                    <div class="cs_row_two csv2">
                                        <div class="cs_overview style2">
                                            {!! $Detay->desc !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="icerik" role="tabpanel" aria-labelledby="icerik-tab">
                                    <div class="cs_row_three csv2">
                                        <div class="course_content style2">

                                            @for($i=1; $i <= 8; $i++)
                                                <div class="details">
                                                    <div id="accordion" class="panel-group cc_tab">
                                                        <div class="panel">

                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a href="#panelBodyCourseStart{{$i}}" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">
                                                                        Grade {{$i}}
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="panelBodyCourseStart{{$i}}" class="panel-collapse collapse {{ ($i == 1) ? 'show' : null}}">
                                                                <div class="panel-body">
                                                                    Grade {{$i}} İçeriği
                                                                    <p>At Grade 1 you can develop a range of skills and techniques including counting, pick-ups, belt and intervals. In the exam you’ll play a set list of three songs and demonstrate your playback or improvising skills.</p>

                                                                    <p>   You can find out more about the exam by downloading the complete Vocals syllabus, or taking a look at the information below.</p>
                                                                    <p>At Grade 1 you can develop a range of skills and techniques including counting, pick-ups, belt and intervals. In the exam you’ll play a set list of three songs and demonstrate your playback or improvising skills.</p>

                                                                    <p>    You can find out more about the exam by downloading the complete Vocals syllabus, or taking a look at the information below.</p>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-3 pl-lg-0 pr-lg-0">
                    <div class="sidebar_course_widget style2">
                        <div class="course_list_details">
                            <a class="btn btn-block buy_now_btn dbxshad btn-lg btn-thm3 mt20" href="#">İletişime Geç</a>
                            <ul class="icon-box-list mt20 mb0">
                                <li><span class="fwb fz15 icon flaticon-clock"></span>
                                    <span class="fwb fz15 pl10 title">Süresi</span>
                                    <span class="para"> 15 weeks</span>
                                </li>
                                <li><span class="fwb fz15 icon flaticon-creative-idea"></span>
                                    <span class="fwb fz15 pl10 title">Seviye</span> <span class="para"> Hepsi</span>
                                </li>
                                <li><span class="fwb fz15 icon flaticon-ebook"></span>
                                    <span class="fwb fz15 pl10 title">Eğitim</span> <span class="para"> 24 Ders</span>
                                </li>
                                <li><span class="fwb fz15 icon flaticon-account"></span>
                                    <span class="fwb fz15 pl10 title">Kapasite</span> <span class="para"> 1'e 1 Ders</span>
                                </li>
                                <li><span class="fwb fz15 icon flaticon-resume"></span>
                                    <span class="fwb fz15 pl10 title">Dil</span> <span class="para"> Türkçe</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                        <div class="blog_post mt-3">
                            <div class="thumb">
                                <img class="img-fluid" src="/frontend/images/hizmetpdf.jpg" alt="Müfredat İndir" width="100%">
                            </div>
                            <div class="details text-white">
                                <i class="fa fa-file-pdf-o" style="font-size:30px"></i>
                                <h5>{{ $Detay->getCategory->title }}</h5>
                                <h4>Müfredat İndir</h4>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>

@endsection
