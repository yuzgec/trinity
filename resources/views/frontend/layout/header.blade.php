<div class="td-search-popup" id="td-search-popup">
    <form action="index.html" class="search-form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Arama.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
    </form>
</div>
<div class="body-overlay" id="body-overlay"></div>
<div class="navbar-area">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-6 align-self-center text-md-left text-center">
                    <ul>
                        <li class="d-none d-md-inline-block">
                            <p>
                                <i class="fa fa-envelope-o"></i>
                                {{config('settings.email1')}}
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="text-right">
                        <li class="d-lg-inline-block d-none"><p><i class="fa fa-info-circle"></i> Duyuru & Haberler</p></li>
                        <li class="d-lg-inline-block d-none"><p><i class="fa fa-briefcase"></i> Yardım</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-area-1 navbar-area navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#edumint_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <a href="{{ route('home') }}"><img src="/frontend/img/logo.png" alt="img"></a>
            </div>
            <div class="nav-left-part nav-right-part-desktop">
                <label class="single-input-inner right-side-icon">
                    <input type="text" placeholder="Arama">
                    <i class="fa fa-search" style="font-size: 20px"></i>
                </label>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="search-bar-btn" href="#"><i class="fa fa-search" style="margin-top:-15px"></i></a>
            </div>
            <div class="collapse navbar-collapse" id="edumint_main_menu">
                <ul class="navbar-nav menu-open">
                    <li><a href="{{ route('home') }}">Anasayfa</a></li>
                    <li class="menu-item-has-children current-menu-item">
                        <a href="#">Kurumsal</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('home') }}">Hakkımızda</a></li>
                            <li><a href="{{ route('home') }}">Bayilikler</a></li>
                            <li><a href="{{ route('home') }}">S.S.S.</a></li>
                            <li><a href="{{ route('home') }}">Eğitmenler</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Sınavlarımız</a>
                        <ul class="sub-menu">
                             @foreach($Service_Categories as $item)
                            <li><a href="{{ route('home') }}"><b>{{ $item->title }}</b></a></li>
                                @foreach($Service->where('category' , $item->id) as $service)
                                    <li><a href="{{ route('home') }}">{{ $service->title }}</a></li>
                                @endforeach
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Kitaplar</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('home') }}"><b>Klasik Jazz</b></a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}"><b>Pop & Rock</b></a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                            <li><a href="{{ route('home') }}">Piano</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('home') }}">Haberler</a></li>

                    <li class="menu-item-has-children">
                        <a href="#">Galeri</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('galeri') }}">Foto Galeri</a></li>
                            <li><a href="{{ route('video') }}">Video Galeri</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('iletisim') }}">İletişim</a></li>
                </ul>
            </div>

        </div>
    </nav>
</div>
