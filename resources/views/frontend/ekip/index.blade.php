@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')

    <div class="counter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-quote-inner">
                        <div class="thumb text-right">
                            <img src="/frontend/img/banner2.jpg" alt="img">
                        </div>

                    </div>
                </div>

                <div class="col-lg-8 pd-top-90">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-counter-inner after-bg">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="thumb">
                                            <img src="/frontend/img/icon/1.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <h2><span class="counter">89</span></h2>
                                            <p>Sertfika Sayısı</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-counter-inner after-bg">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="thumb">
                                            <img src="/frontend/img/icon/2.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <h2><span class="counter">43</span></h2>
                                            <p>Sınav Sayısı</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-counter-inner after-bg">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="thumb">
                                            <img src="/frontend/img/icon/3.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <h2><span class="counter">35</span></h2>
                                            <p>Eğitmen Sayısı</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-area">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-block-inner" style="background-image: url('/frontend/img/jazz.jpg');">
                                    <div class="cat"></div>
                                    <h4 class="mt-5">Klasik Jazz</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-block-inner" style="background-image: url('/frontend/img/rock.jpg');">
                                    <div class="cat"></div>
                                    <h4 class="mt-5">Pop & Rock</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area pd-top-90 pd-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6 mt-lg-5">
                            <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                <img src="https://picsum.photos/300/300?random=1" alt="img">
                            </div>
                            <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <img src="https://picsum.photos/300/300?random=2" alt="img">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <img src="https://picsum.photos/300/300?random=3" alt="img">
                            </div>
                            <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                <img src="https://picsum.photos/300/300?random=4" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center mt-4 mt-lg-0">
                    <div class="section-title style-bg mb-0">
                        <h5 class="sub-title">Who we are</h5>
                        <h2 class="title">Trinity College London
                            Laterna Müzik Kursu</h2>
                        <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi dicta dolore nemo. Nisi, veritatis deleniti incidunt unde aliquam doloribus quae dolorem atque. Suscipit animi, laboriosam consequatur nobis vel nulla. Tempora. </p>
                        <div class="single-list-inner mt-4">
                            <ul>
                                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet consectetur.</li>
                                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet consectetur.</li>
                                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet consectetur.</li>
                                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet consectetur.</li>
                                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet consectetur.</li>
                                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet consectetur.</li>
                                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet consectetur.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="call-to-action-area bg-cover pd-top-110 pd-bottom-120" style="background-image: url('/frontend/img/other/3.png');">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title mb-0 style-white">
                        <h2 class="title">Trinity College London <br>İzmir Laterna Müzik Kursu</h2>
                        <a class="btn btn-black" href="/trinity">Şubelerimiz</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-area pd-top-90 pd-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h5 class="sub-title">Trinity College London Türkiye</h5>
                        <h2 class="title">Eğitmenlerimiz</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-inner">
                        <div class="thumb">
                            <img src="https://picsum.photos/365/430?random=1" alt="img">
                        </div>
                        <div class="details pt-5">
                            <h5><a href="/trinity">Gökçer Başar</a> <span>  -  Keman</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-inner">
                        <div class="thumb">
                            <img src="https://picsum.photos/365/430?random=1" alt="img">
                        </div>
                        <div class="details pt-5">
                            <h5><a href="/trinity">Gökçer Başar</a> <span>  -  Keman</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-inner">
                        <div class="thumb">
                            <img src="https://picsum.photos/365/430?random=1" alt="img">
                        </div>
                        <div class="details pt-5">
                            <h5><a href="/trinity">Gökçer Başar</a> <span>  -  Keman</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="event-area mg-bottom-120">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-7 col-lg-6 bg-overlay bg-cover" style="background-image: url('/frontend/img/other/4.png');">
                    <div class="event-section-title">
                        <div class="section-title mb-0 pt-xl-5 style-white">
                            <h5 class="sub-title">Son Sınav Etkinlikleri</h5>
                            <h2 class="title">Book your sit on going latest events</h2>
                            <a class="btn btn-border-white" href="event.html">Tüm Sınavlarımız</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="event-area-inner bg-base">
                        <div class="single-event-inner style-white">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-users"></i>
                                    <div class="thumb">
                                        <img src="/frontend/img/event/1.png" alt="img">
                                    </div>
                                </div>
                                <div class="details media-body align-self-center">
                                    <div class="date"><i class="fa fa-calendar"></i> 09 Dec, 2021</div>
                                    <p class="location"><i class="fa fa-map-marker"></i>New york grand city 1247</p>
                                    <h5><a href="single-event.html">Conference for reducing global warming</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="single-event-inner style-white mb-0">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-users"></i>
                                    <div class="thumb">
                                        <img src="/frontend/img/event/2.png" alt="img">
                                    </div>
                                </div>
                                <div class="details media-body align-self-center">
                                    <div class="date"><i class="fa fa-calendar"></i> 2 Dec, 2021</div>
                                    <p class="location"><i class="fa fa-map-marker"></i>New york grand city 1247</p>
                                    <h5><a href="single-event.html">Global Conference for reducing warming</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-area pd-top-60 mb-5 pb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-11">
                    <div class="section-title text-center">
                        <h5 class="sub-title">Trinity London College </h5>
                        <h2 class="title">Haberler - Duyurular</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner">
                        <div class="thumb">
                            <a href="/trinity">
                                <img src="/frontend/img/blog/01.png" alt="img">
                            </a>
                        </div>
                        <div class="details">
                            <div class="blog-meta">
                                <ul>
                                    <li class="comnt bg-base">Community</li>
                                    <li class="author">By <span>Adam Mortin</span></li>
                                    <li class="date">1 Kasım 2019</li>
                                </ul>
                            </div>
                            <h4><a href="/trinity">Engage your ommunity like never before</a></h4>
                            <a class="readmore-text" href="/trinity">Devamını Oku</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner">
                        <div class="thumb">
                            <a href="/trinity">
                                <img src="/frontend/img/blog/02.png" alt="img">
                            </a>
                        </div>
                        <div class="details">
                            <div class="blog-meta">
                                <ul>
                                    <li class="comnt bg-red">Community</li>
                                    <li class="author">By <span>Mortin Joe</span></li>
                                    <li class="date">1 Kasım 2019</li>
                                </ul>
                            </div>
                            <h4><a href="/trinity">Community like never before Engage your </a></h4>
                            <a class="readmore-text" href="/trinity">Devamını Oku</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner">
                        <div class="thumb">
                            <a href="/trinity">
                                <img src="/frontend/img/blog/03.png" alt="img">
                            </a>
                        </div>
                        <div class="details">
                            <div class="blog-meta">
                                <ul>
                                    <li class="comnt bg-blue">Community</li>
                                    <li class="author">By <span>John Joe</span></li>
                                    <li class="date">1 Kasım 2019</li>
                                </ul>
                            </div>
                            <h4><a href="/trinity">Mortin your ommunity like Ever Article</a></h4>
                            <a class="readmore-text" href="/trinity">Devamını Oku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
