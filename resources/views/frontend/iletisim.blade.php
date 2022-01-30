@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.pageheader')

    <section class="our-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="contact_localtion text-center">
                        <div class="icon"><span class="flaticon-placeholder-1"></span></div>
                        <h4>Adresimiz</h4>
                        <p>{{ config('settings.adres1') }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="contact_localtion text-center">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <h4>Telefon</h4>
                        <p class="mb0">Sabit: {{ config('settings.telefon1') }}<br> Mobile: {{ config('settings.telefon2') }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="contact_localtion text-center">
                        <div class="icon"><span class="flaticon-email"></span></div>
                        <h4>Email</h4>
                        <p> {{ config('settings.email1') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6248.357535181902!2d27.105607!3d38.460434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf7ba242d63d8188e!2s%C3%96zel%20Laterna%20M%C3%BCzik%20Kursu!5e0!3m2!1str!2str!4v1643254047971!5m2!1str!2str" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                </div>
                <div class="col-lg-6 form_grid">
                    <h4 class="mb5">Mesaj Gönder</h4>
                    <p>Aşağıdaki formu kullanrak hızlı bir şekilde bizlere mail atabilirsiniz. En kısa zamanda tarafınıza dönüş yapılacaktır.</p>
                    <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputName">Adınız Soyadınız</label>
                                    <input id="form_name" name="form_name" class="form-control" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Email Adresiniz</label>
                                    <input id="form_email" name="form_email" class="form-control required email" required="required" type="email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputSubject">Telefon Numaranız</label>
                                    <input id="form_subject" name="form_subject" class="form-control required" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">YMesajınız</label>
                                    <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required"></textarea>
                                </div>
                                <div class="form-group ui_kit_button mb0">
                                    <button type="button" class="btn dbxshad btn-lg btn-thm circle white">Mesajı Gönder</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @endsection
