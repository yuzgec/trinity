@extends('frontend.layout.app')
@section('title', 'Eğitmenler')
@section('content')
    @section('header')
        @include('frontend.layout.header2')
    @endsection

    <section class="inner_page_breadcrumb style2 blog_grid_bg_color" style="background-image: url('/frontend/images/headerback.png')">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h1 class="text-white">Eğitmenlerimiz</h1>
                        <ol class="d-flex align-items-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Anasayfa</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Eğitmenlerimiz</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-team pb40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-sm-5 col-lg-5 col-xl-6">
                            <div class="instructor_search_result">
                                <p class="mt10 fz15"><span class="color-dark">Toplam ({{ $All->count() }})</span> Eğitmen</p>
                            </div>
                        </div>
                        <div class="col-sm-7 col-lg-7 col-xl-6">
                            <div class="candidate_revew_search_box mb30 float-right fn-520 d-flex">
                                <div class="mt-2 my-2">{{ $All->appends(['siralama' => 'egitmenler'])->links() }}</div>
                                <div> </div>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Eğitmen Ara" aria-label="Search">
                                    <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($All as $item)
                        <div class="col-sm-6 col-lg-6 col-xl-4">
                            <div class="team_member style2 text-center">
                                <div class="instructor_col">
                                    <div class="">
                                        <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $item->getFirstMediaUrl('page')}}" alt="{{ $item->title }}" class="img-fluid">
                                    </div>
                                    <div class="details mt-3">
                                        <h4>{{ $item->title }}</h4>
                                        <p>{{ $item->master }}</p>
                                    </div>
                                </div>
                                <div class="tm_footer">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-lg-12">

                            {{ $All->appends(['siralama' => 'egitmenler'])->links() }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="selected_filter_widget style2 mb30">
                        <div id="accordion" class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Eğitmen Kategori</a>
                                    </h4>
                                </div>
                                <div id="panelBodySoftware" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <div class="ui_kit_checkbox">
                                            @foreach($AllCategories as $item)
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">{{ $item->title }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
