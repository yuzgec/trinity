<div class="header_top home7">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-5"></div>
            <div class="col-lg-7 col-xl-7">
                <ul class="sign_up_btn home7 dn-smd text-right">
                    <li class="list-inline-item"><a class="light_white" href="#">{{ config('settings.telefon1') }}</a></li>
                    <li class="list-inline-item"><a class="light_white" href="#">{{ config('settings.email1') }}</a></li>
                    <li class="list-inline-item"><a class="light_white" href="#">S.S.S</a></li>
                    <li class="list-inline-item"><a class="light_white" href="#">Yardım</a></li>
                    <li class="list-inline-item"><a class="light_white" href="#">Temsilci Ol</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="header-nav menu_style_home_seven main-menu">
    <div class="container">
        <nav>
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="/frontend/images/logob.png" alt="Trinity College London Türkiye">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="{{ route('home') }}" class="navbar_brand float-left dn-smd">
                <img class="logo1 home7 img-fluid" src="/frontend/images/logob.png" alt="Trinity College London Türkiye" width="200px">
            </a>
            <div class="menu7_search home7 float-right">
                <div class="search_overlay">
                    <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                        <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                    </a>
                    <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
                        <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
                        <div id="mk-fullscreen-search-wrapper">
                            <form method="get" id="mk-fullscreen-searchform">
                                <input type="text" value="" placeholder="Arama..." id="mk-fullscreen-search-input">
                                <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li class="last">
                    <a href="{{route('iletisim')}}"><span class="title">Bize Ulaşın</span></a>
                </li>
                <li class="list_five">
                    <a href="#"><span class="title">Galeri</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('videolar') }}"><span class="title">Video Galeri</span></a>
                        </li>
                        <li>
                            <a href="{{ route('galeriler') }}"><span class="title">Foto Galeri</span></a>
                        </li>
                    </ul>
                </li>
                <li class="list_four">
                    <a href="#"><span class="title">Kurumsal</span></a>
                    <ul>
                        <li><a href="page-blog-v1.html">Hakkımızda</a></li>
                        <li><a href="page-blog-v1.html">Sertfikasyon</a></li>
                        <li><a href="{{ route('egitmenler') }}">Eğitmenler</a></li>
                        <li><a href="{{ route('egitmenler') }}">Temsilci Ol</a></li>
                        <li><a href="page-blog-v1.html">İ.K.</a></li>
                        <li><a href="page-blog-v1.html">S.S.S</a></li>
                    </ul>
                </li>
                <li class="list_three">
                    <a href="#"><span class="title">Kitaplar</span></a>
                    <ul>
                        @foreach($Product_Categories->whereNull('parent_id') as $item)
                            <li>
                                <a href="#">{{ $item->title  }}</a>
                                <ul>
                                    @foreach($Product_Categories->where('parent_id', $item->id) as $row)
                                        <li><a href="{{route('kitap.kategori', $row->slug) }}">{{ $row->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="list_two">
                    <a href="#"><span class="title">Sınavlar</span></a>
                    <ul>
                        @foreach($Service_Categories as $item)
                        <li>
                            <a href="{{ route('sinav.kategori', $item->slug) }}">{{ $item->title  }}</a>
                            <ul>
                                @foreach($Service->where('category', $item->id) as $row)
                                    <li><a href="{{route('sinav.detay', [$item->slug,$row->slug])}}">{{ $row->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>

                </li>
                <li class="list_one">
                    <a href="{{ route('home') }}"><span class="title">Anasayfa</span></a>
                </li>
            </ul>
        </nav>
    </div>
</header>
@include('frontend.layout.mobile-menu')
