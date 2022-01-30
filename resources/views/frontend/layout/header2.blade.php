<header class="header-nav menu_style_home_one new_style bgc-white navbar-scrolltofixed stricky main-menu">
    <div class="container">
        <nav>
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="/frontend/images/logo2.png" alt="header-logo.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="{{ route('home') }}" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="/frontend/images/logo2.png" alt="header-logo.png" width="150px">
                <img class="logo2 img-fluid" src="/frontend/images/logo2.png" alt="header-logo2.png" width="150px">
            </a>
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a href="{{ route('home') }}"><span class="title">Anasayfa</span></a>
                </li>
                <li>
                    <a href="#"><span class="title">Sınavlar</span></a>
                    <ul>
                        @foreach($Service_Categories as $item)
                            <li>
                                <a href="#">{{ $item->title  }}</a>
                                <ul>
                                    @foreach($Service->where('category', $item->id) as $row)
                                        <li><a href="page-course-v1.html">{{ $row->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">Kitaplar</span></a>
                    <ul>
                        @foreach($Service_Categories as $item)
                            <li>
                                <a href="#">{{ $item->title  }}</a>
                                <ul>
                                    @foreach($Service->where('category', $item->id) as $row)
                                        <li><a href="page-course-v1.html">{{ $row->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">Galeri</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('video') }}"><span class="title">Video Galeri</span></a>
                        </li>
                        <li>
                            <a href="{{ route('galeri') }}"><span class="title">Foto Galeri</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">Kurumsal</span></a>
                    <ul>
                        <li><a href="page-blog-v1.html">Hakkımızda</a></li>
                        <li><a href="page-blog-v1.html">Sertfikasyon</a></li>
                        <li><a href="page-blog-v1.html">Eğitmenler</a></li>
                        <li><a href="page-blog-v1.html">Temsilci Ol</a></li>
                        <li><a href="page-blog-v1.html">İ.K.</a></li>
                        <li><a href="page-blog-v1.html">S.S.S</a></li>
                    </ul>
                </li>
                <li class="last">
                    <a href="{{ route('home') }}"><span class="title">Bize Ulaşın</span></a>
                </li>
            </ul>
            <ul class="sign_up_btn pull-right dn-smd mt20">

                <li class="list-inline-item list_s">
                    <div class="search_overlay">
                        <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                            <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="search_overlay dn-992">
    <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
        <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
        <div id="mk-fullscreen-search-wrapper">
            <form method="get" id="mk-fullscreen-searchform">
                <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
                <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
            </form>
        </div>
    </div>
</div>

@include('frontend.layout.mobile-menu')