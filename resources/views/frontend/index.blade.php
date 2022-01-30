@extends('frontend.layout.app')
@section('content')
    @section('header')
        @include('frontend.layout.header')
     @endsection
    @include('frontend.layout.slider')

    <section class="home7_about pt0 pb0">
        <div class="container">
            <div class="row home7_row">
                <div class="col-sm-6 col-lg-6"></div>
                @foreach($Service_Categories as $item)
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box home7 three" style="background-image: url(https://www.laternamuzikkursu.com/upload/slider/67keman-dersi-karsiyaka.jpg);">
                            <div class="overlay">
                                <div class="details">
                                    <h4>{{ $item->title }}</h4>
                                    <p>Trinity College London</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt60">
                <div class="col-lg-6">
                    <div class="about_box_home6">
                        <div class="details">
                            <h3>Trinity Türkiye Sınav Merkezi</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <a class="btn dbxshad btn-lg btn-thm2 rounded" href="#">Devamını Oku</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_box_home7">
                        <div class="thumb"><img class="img-fluid img-rounded" src="/frontend/images/logob.png" alt="1.jpg"></div>
                    </div>
                </div>
            </div>
            <div class="row mt40">
                <div class="col-sm-6 col-lg-3">
                    <div class="home_icon_box home6">
                        <div class="icon"><span class="flaticon-student"></span></div>
                        <p>Learn From The Experts</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="home_icon_box home6">
                        <div class="icon"><span class="flaticon-book"></span></div>
                        <p>Book Library & Store</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="home_icon_box home6">
                        <div class="icon"><span class="flaticon-global"></span></div>
                        <p>Worldwide Recognize</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="home_icon_box home6">
                        <div class="icon"><span class="flaticon-first"></span></div>
                        <p>Best Industry Leaders</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Top Courses -->
    <section id="top-courses" class="top-courses pb30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">Browse Our Top Courses</h3>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="options" class="alpha-pag full">
                        <div class="option-isotop">
                            <ul id="filter" class="option-set" data-option-key="filter">
                                <li class="list-inline-item"><a href="#all" data-option-value="*" class="selected">Hepsini Göster</a></li>
                                @foreach($Service_Categories as $item)
                                    <li class="list-inline-item"><a href="#{{ $item->slug }}" data-option-value=".{{ $item->slug }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- FILTER BUTTONS -->
                    <div class="emply-text-sec">
                        <div class="row" id="masonry_abc">
                            @foreach($Service as $row)
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
                                        <div class="tc_footer">

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


    @include('frontend.layout.temsilcilik-ara')


    @endsection
