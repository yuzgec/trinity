<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2 home7">
                <img class="nav_logo_img img-fluid float-left mt20" src="/frontend/images/logo.png" alt="header-logo.png" width="100px">
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item">
                    <div class="search_overlay">
                        <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                            <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                        </a>
                        <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                            <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
                            <div id="mk-fullscreen-search-wrapper2">
                                <form method="get" id="mk-fullscreen-searchform2">
                                    <input type="text" value="" placeholder="Kitap veya Sınav Ara..." id="mk-fullscreen-search-input2">
                                    <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div>
    <nav id="menu" class="stylehome1">
        <ul>
            <li><span><a href="{{ route('home') }}"> ANASAYFA</a></span></li>
            <li><span>Sınavlar</span>
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
            <li><span>Kitaplar</span>
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
            <li><span>Kurumsal</span>
                <ul>
                    <li><a href="page-blog-v1.html">Hakkımızda</a></li>
                    <li><a href="page-blog-v1.html">Sertfikasyon</a></li>
                    <li><a href="page-blog-v1.html">Eğitmenler</a></li>
                    <li><a href="page-blog-v1.html">Temsilci Ol</a></li>
                    <li><a href="page-blog-v1.html">İ.K.</a></li>
                    <li><a href="page-blog-v1.html">S.S.S</a></li>
                </ul>
            </li>
            <li><span>Galeri</span>
                <ul>
                    <li><a href="{{ route('video') }}">Video Galeri</a></li>
                    <li><a href="{{ route('galeri') }}">Foto Galeri</a></li>
                </ul>
            </li>
            <li><a href="{{ route('iletisim') }}">İletişim</a></li>
        </ul>
    </nav>
</div>
