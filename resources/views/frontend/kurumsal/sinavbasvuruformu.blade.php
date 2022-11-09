@extends('frontend.layout.app')
@section('content')
    @section('header')
        @include('frontend.layout.header2')
    @endsection
    @include('sweetalert::alert')
    <section class="inner_page_breadcrumb style2 blog_grid_bg_color" style="background-image: url('/frontend/images/headerback.png')">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h1 class="text-white">Sınav Başvuru Talep Formu</h1>
                        <ol class="d-flex align-items-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Anasayfa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Kurumsal</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Sınav Başvuru Talep Formul</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-checkouts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout_form">

                        <div class="checkout_coupon ui_kit_button">
                            <form class="form2" action="{{ route('sinavbasvuru') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Adınız Soyadınız</label>
                                            <input value="{{old('name')}}" type="text" class="form-control mb10 @if($errors->has('name')) is-invalid @endif" name="name">
                                            @if($errors->has('name'))
                                                <div class="invalid-feedback">{{$errors->first('name')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="my_profile_select_box form-group">
                                            <label>Seviye*</label><br>
                                            <select class="selectpicker" name="level">>
                                                <option>Seçiniz</option>
                                                @foreach($Level as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="my_profile_select_box form-group">
                                            <label>Kategori*</label><br>
                                            <select class="selectpicker" name="exam">
                                                <option>Seçiniz</option>
                                                @foreach($Service_Categories as $item)
                                                    @foreach($Service->where('category', $item->id) as $row)
                                                        <option value="{{ $item->title.' - '.$row->title}}">{{ $item->title.' - '.$row->title}}</option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="{{old('email')}}" type="text" class="form-control mb10 @if($errors->has('email')) is-invalid @endif" name="email">
                                            @if($errors->has('email'))
                                                <div class="invalid-feedback">{{$errors->first('email')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Telefon</label>
                                            <input value="{{old('phone')}}" type="text" class="form-control mb10 @if($errors->has('phone')) is-invalid @endif" name="phone">
                                            @if($errors->has('phone'))
                                                <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary">Gönder</button>
                                    </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                                        <div class="becomea_instructor_home3 style1 ">
                                            <img class="img-fluid" src="/frontend/images/150.png" alt="TRINITY COLLEGE LONDON 150. YILI">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
