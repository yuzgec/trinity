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
                        <h1 class="text-white">Temsilci Ol</h1>
                        <ol class="d-flex align-items-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Anasayfa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Kurumsal</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Temsilci Ol</li>
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
                            <h4 class="mb15">Temsilcimiz Olun</h4>
                            <form class="form2" action="{{ route('temsilciolkayit') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="my_profile_select_box form-group">
                                            <label>Kurumuzunu Tanımlayın *</label><br>
                                            @if($errors->has('kurum'))
                                                <div class="invalid-feedback">{{ $errors->first('kurum') }}</div>
                                            @endif
                                            <select class="selectpicker @if($errors->has('kurum')) is-invalid @endif" name="kurum">
                                                <option value="0">Seçiniz</option>
                                                <option value="Devlet okulu">Devlet okulu</option>
                                                <option value="Özel okul">Özel okul</option>
                                                <option value="Müzik Kursu">Müzik Kursu</option>
                                                <option value="Sanat kursu">Sanat kursu</option>
                                                <option value="Üniversite">Üniversite</option>
                                                <option value="Öğretmen okulu">Öğretmen okulu</option>
                                                <option value="Konservatuar">Konservatuar</option>
                                                <option value="Özel öğretmen">Özel öğretmen</option>
                                                <option value="Yaz okulu">Yaz okulu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Başka bir sınav kurulu ile çalışıyor musunuz?<br>Evet ise hangisi?</label>
                                            <input  name="baskakurum" class="form-control"  type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="my_profile_select_box form-group">
                                            <label>Trinity’den nasıl haberiniz oldu? *</label><br>
                                            <select class="selectpicker" name="nasilhaber">>
                                                <option>Seçiniz</option>
                                                <option value="Toplantı">Toplantı</option>
                                                <option value="Trinity ziyareti">Trinity ziyareti</option>
                                                <option value="Trinity web sitesi">Trinity web sitesi</option>
                                                <option value="Reklamlar">Reklamlar</option>
                                                <option value="Yönlendirme">Yönlendirme</option>
                                                <option value="E-posta">E-posta</option>
                                                <option value="Diğer">Diğer</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputName3">Kurumunuzun resmi adı (Tüm resmi belgelerde görünecek şekilde yazınız.)</label>
                                            <input value="{{old('resmiad')}}" type="text" class="form-control mb10 @if($errors->has('resmiad')) is-invalid @endif" name="resmiad">
                                            @if($errors->has('resmiad'))
                                                <div class="invalid-feedback">{{$errors->first('resmiad')}}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb0">
                                            <label for="exampleInputTextArea">Okul Adresi *</label>
                                            <textarea name="okuladres" class="form-control required mb10 @if($errors->has('okuladres')) is-invalid @endif" rows="3" ></textarea>
                                            @if($errors->has('okuladres'))
                                                <div class="invalid-feedback">{{$errors->first('okuladres')}}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>İl *</label>
                                            <input value="{{old('il')}}" type="text" class="form-control mb10 @if($errors->has('il')) is-invalid @endif" name="il">
                                            @if($errors->has('il'))
                                                <div class="invalid-feedback">{{$errors->first('il')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>İlçe *</label>
                                            <input name="ilce" class="form-control"  type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Website *</label>
                                            <input name="website" class="form-control"  type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Telefon</label>
                                            <input value="{{old('kurumtelefon')}}" type="text" class="form-control mb10 @if($errors->has('kurumtelefon')) is-invalid @endif" name="kurumtelefon">
                                            @if($errors->has('kurumtelefon'))
                                                <div class="invalid-feedback">{{$errors->first('kurumtelefon')}}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="{{old('kurumemail')}}" type="text" class="form-control mb10 @if($errors->has('kurumemail')) is-invalid @endif" name="kurumemail">
                                            @if($errors->has('kurumemail'))
                                                <div class="invalid-feedback">{{$errors->first('kurumemail')}}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>İnstagram</label>
                                            <input name="sosyalmedya" class="form-control"  type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mt20">
                                        <h4>Kurum Yetkili Bilgileri</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Adınız Soyadınız *</label>
                                            <input value="{{old('adsoyad')}}" type="text" class="form-control mb10 @if($errors->has('adsoyad')) is-invalid @endif" name="adsoyad">
                                            @if($errors->has('adsoyad'))
                                                <div class="invalid-feedback">{{$errors->first('adsoyad')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Görevi *</label>
                                            <input value="{{old('gorev')}}" type="text" class="form-control mb10 @if($errors->has('gorev')) is-invalid @endif" name="gorev">
                                            @if($errors->has('gorev'))
                                                <div class="invalid-feedback">{{$errors->first('gorev')}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>E-posta *</label>
                                            <input value="{{old('email')}}" type="text" class="form-control mb10 @if($errors->has('email')) is-invalid @endif" name="email">
                                            @if($errors->has('email'))
                                                <div class="invalid-feedback">{{$errors->first('email')}}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Telefon *</label>
                                            <input value="{{old('telefon')}}" type="text" class="form-control mb10 @if($errors->has('telefon')) is-invalid @endif" name="telefon">
                                            @if($errors->has('telefon'))
                                                <div class="invalid-feedback">{{$errors->first('telefon')}}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary">Gönder</button>
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
