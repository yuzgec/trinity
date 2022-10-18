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

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="faq_according">
                    <div id="accordion" class="panel-group">
                        @foreach($All as $item)
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#panel{{ $item->id }}" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{ $item->title }}</a>
                                </h4>
                            </div>
                            <div id="panel{{ $item->id }}" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="mb25">
                                        {!! $item->desc !!}
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
@endsection
