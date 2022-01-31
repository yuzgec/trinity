<section class="footer_one bgc-black22 pb50">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                <div class="footer_contact_widget home12">
                    <h4>İLETİŞİM</h4>
                    <p>{{ config('settings.adres1') }}.</p>
                    <p>{{ config('settings.telefon1') }} - {{ config('settings.telefon2') }}</p>
                    <p>{{ config('settings.email1') }}</p>
                </div>
                <div class="footer_contact_widget home12">
                    <img class="logo1 home7 img-fluid" src="/frontend/images/logo.png" alt="header-logo4.jpg" width="200px">
                </div>
                <div class="footer_social_widget home12 mt15 text-left mb30-md ml20">
                    <ul>
                        <li class="list-inline-item pl0"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                <div class="footer_company_widget home12 pl30 pl0-lg">
                    <h4>KURUMSAL</h4>
                    <ul class="list-unstyled">
                        <li><a href="page-blog-v1.html"><i class="flaticon-right-arrow-1 right"></i> Hakkımızda</a></li>
                        <li><a href="page-blog-v1.html"><i class="flaticon-right-arrow-1 right"></i> Sertfikasyon</a></li>
                        <li><a href="page-blog-v1.html"><i class="flaticon-right-arrow-1 right"></i> Eğitmenler</a></li>
                        <li><a href="{{ route('videolar') }}"><i class="flaticon-right-arrow-1 right"></i> Video Galeri</a></li>
                        <li><a href="{{ route('galeriler') }}"><i class="flaticon-right-arrow-1 right"></i> Foto Galeri</a></li>
                        <li><a href="page-blog-v1.html"><i class="flaticon-right-arrow-1 right"></i> Temsilci Ol</a></li>
                        <li><a href="page-blog-v1.html"><i class="flaticon-right-arrow-1 right"></i> İ.K.</a></li>
                        <li><a href="page-blog-v1.html"><i class="flaticon-right-arrow-1 right"></i> S.S.S</a></li>

                    </ul>

                    <h4>HABERLER</h4>
                    <ul class="list-unstyled">
                        <li><a href="page-blog-v1.html"><i class="flaticon-right-arrow-1 right"></i> Haberler</a></li>
                        <li><a href="page-blog-v1.html"><i class="flaticon-right-arrow-1 right"></i> Etkinlikler</a></li>
                        <li><a href="page-blog-v1.html"><i class="flaticon-right-arrow-1 right"></i> Duyurular</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                <div class="footer_program_widget home12 style2 pl60 pl0-lg">
                    <h4>SINAVLAR</h4>
                    <ul class="list-unstyled">
                        @foreach($Service as $item)
                            <li><a href="#"><i class="flaticon-right-arrow-1 right"></i> {{ $item->title }} - ({{ $item->getCategory->title }})</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                <div class="footer_support_widget home12 style2 pl30 pl0-lg">
                    <h4>KİTAPLAR</h4>
                    <ul class="list-unstyled">
                        @foreach($Service as $item)
                            <li><a href="#"><i class="flaticon-right-arrow-1 right"></i> {{ $item->title }} - ({{ $item->getCategory->title }})</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer_bottom_area bgc-black22 pt25 pb25">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="copyright-widget text-center home12">
                    <p>Copyright Laterna Müzik Kursu© {{ date('Y') }}. Tüm hakları saklıdır.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
