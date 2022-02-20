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

                        <div class="cs_row_two mt-2">
                            <div class="cs_overview">
                                <h4 class="title">Genel Bakış</h4>
                                {!! $Detay->desc !!}
                            </div>
                        </div>
                        <div class="cs_row_three">
                            <div class="course_content">
                                <div class="cc_headers">
                                    <h4 class="title">Course Content</h4>
                                    <ul class="course_schdule float-right">
                                        <li class="list-inline-item"><a href="#">92 Lectures</a></li>
                                        <li class="list-inline-item"><a href="#">10:56:11</a></li>
                                    </ul>
                                </div>
                                <br>
                                <div class="details">
                                    <div id="accordion" class="panel-group cc_tab">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodyCourseStart" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">Getting Started</a>
                                                </h4>
                                            </div>
                                            <div id="panelBodyCourseStart" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <ul class="cs_list mb0">
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.2 Exercise: Your first design challenge <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.3 How to solve the previous exercise <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.4 Find out why smart objects are amazing <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.5 How to use text layers effectively <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="details">
                                    <div id="accordion" class="panel-group cc_tab">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodyCourseBrief" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">The Brief</a>
                                                </h4>
                                            </div>
                                            <div id="panelBodyCourseBrief" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul class="cs_list mb0">
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.2 Exercise: Your first design challenge <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.3 How to solve the previous exercise <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.4 Find out why smart objects are amazing <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.5 How to use text layers effectively <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="details">
                                    <div id="accordion" class="panel-group cc_tab">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodyCourseLow" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">Wireframing Low Fidelity</a>
                                                </h4>
                                            </div>
                                            <div id="panelBodyCourseLow" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul class="cs_list mb0">
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.2 Exercise: Your first design challenge <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.3 How to solve the previous exercise <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.4 Find out why smart objects are amazing <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.5 How to use text layers effectively <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="details">
                                    <div id="accordion" class="panel-group cc_tab">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodyCourseType" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">Type, Color & Icon Introduction</a>
                                                </h4>
                                            </div>
                                            <div id="panelBodyCourseType" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul class="cs_list mb0">
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.1 Introduction to the User Experience Course <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.2 Exercise: Your first design challenge <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.3 How to solve the previous exercise <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.4 Find out why smart objects are amazing <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                        <li><a href="#"><span class="flaticon-play-button-1 icon"></span> Lecture1.5 How to use text layers effectively <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
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
                    @if($Detay->getFirstMediaUrl('pdfcover') != null)
                        <a href="{{ $Detay->getFirstMediaUrl('pdf') }}" target="_blank" title="{{ $Detay->title }} Müfredat İndir">
                        <div class="blog_post mt-3">
                            <div class="thumb">
                                <img class="img-fluid" src="{{ $Detay->getFirstMediaUrl('pdfcover') }}" alt="Müfredat İndir" width="100%">
                            </div>
                            <div class="details text-white">
                                <i class="fa fa-file-pdf-o" style="font-size:30px"></i>
                                <h5>{{ $Detay->getCategory->title }}</h5>
                                <h4>{{ $Detay->title }} <br>Müfredat <br>İndir</h4>
                            </div>
                        </div>
                        </a>
                    @endif
                    <div class="blog_category_widget mt-3">
                        <ul class="list-group">
                            <h4 class="title">{{ $Detay->getCategory->title }}</h4>
                            @foreach($Service->where('category', $Detay->getCategory->id) as $item)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="{{route('sinav.detay', [$Detay->getCategory->slug,$item->slug]) }}" >{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    </div>

            </div>
        </div>
    </section>
@include('frontend.layout.temsilcilik-ara')

@endsection
