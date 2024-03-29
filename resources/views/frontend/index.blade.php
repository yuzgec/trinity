@extends('frontend.layout.app')
@section('content')
    @section('header')
        @include('frontend.layout.header')
     @endsection
    @include('frontend.layout.slider')

    <section class="home7_about pt0 pb0">
        <div class="container">
            <div class="row home7_row">
                <div class="col-sm-6 col-lg-6"></div>
                @foreach($Service_Categories as $item)
                    <div class="col-sm-6 col-lg-3" style="">
                        <a href="{{ route('sinav.kategori', $item->slug) }}">
                            <div class="img_hvr_box home7 three"
                                 style="background-image: url({{ (!$item->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $item->getFirstMediaUrl('page', 'thumb')}});
                                 border:3px solid white">
                                <div class="overlay">
                                    <div class="details">
                                        <h4>{{ $item->title }}</h4>
                                        <p>Trinity College London</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            <div class="row mt60">
                <div class="col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <a href="https://www.artscouncil.org.uk/" title="ARTS COUNCIL ENGLAND" target="_blank">
                                <div class="home3_about_icon_box one">
                                <span class="icon text-center">
                                    <svg viewBox="0 0 100 99" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                            <g id="13_article_page_serif" sketch:type="MSArtboardGroup" transform="translate(-102.000000, -31.000000)" fill="#FFFFFF">
                                                <g id="Group-Copy-3" sketch:type="MSLayerGroup" transform="translate(1.000000, -41.000000)">
                                                    <g id="Great-art-and-cultur-2-+-ACE-logo-2" transform="translate(101.000000, 72.500000)" sketch:type="MSShapeGroup">
                                                        <g id="ACE-logo-2" transform="translate(0.000000, 0.263158)">
                                                            <g id="ACE-logo">
                                                                <path d="M11.2835366,78.3597391 L14.8109756,82.5581953 L15.604878,81.8926533 L12.7896341,78.5424131 L16.5682927,75.3766736 L19.1304878,78.4261107 L19.9243902,77.7611775 L17.3621951,74.7111315 L20.7567073,71.8668981 L23.4457317,75.0667368 L24.2396341,74.4011947 L20.8384146,70.353749 L11.2835366,78.3597391 Z M20.1445122,87.6200904 L21.0042683,88.1991668 L27.1585366,79.0849547 L27.1884146,79.1056577 L25.3756098,91.1444798 L26.5609756,91.9427649 L33.5353659,81.6162067 L32.6756098,81.0371303 L26.4804878,90.2097981 L26.4512195,90.1897039 L28.3042683,78.0918173 L27.1182927,77.2929233 L20.1445122,87.6200904 Z M39.4560976,90.862553 L41.6036585,91.4781642 L40.397561,95.6808828 C39.7640244,95.8154526 39.2634146,95.7460365 38.645122,95.5688427 C35.4835366,94.66278 35.3292683,91.444065 35.9591463,89.2477153 C37.0469512,85.456622 39.7060976,84.8075205 41.4243902,85.2995224 C42.3347561,85.5607461 43.372561,86.2847439 43.7335366,86.7779635 L44.1195122,85.6265087 C43.8182927,85.3171808 42.7408537,84.5998812 41.7786585,84.3246524 C38.4109756,83.3595251 35.7359756,85.7489003 34.854878,88.8202582 C34.2,91.1018558 34.0987805,95.342936 38.3079268,96.5491929 C39.2871951,96.8299019 40.2689024,96.9066249 41.2609756,96.6898519 L42.9542683,90.7882656 L39.7420732,89.8675889 L39.4560976,90.862553 Z M48.5091463,97.8291284 L53.6743902,97.8303462 L53.6743902,96.7951938 L49.6170732,96.7945849 L49.6146341,85.3713741 L48.5067073,85.3713741 L48.5091463,97.8291284 Z M60.1664634,85.1229376 L60.2006098,85.1131949 L64.1109756,91.0872419 L59.9707317,92.2721869 L60.1664634,85.1229376 Z M58.7463415,97.2646659 L59.8115854,96.9596004 L59.947561,93.3560523 L64.7231707,91.9890423 L66.7176829,94.9830683 L67.8518293,94.6585176 L60.425,83.8235169 L59.2914634,84.1480676 L58.7463415,97.2646659 Z M73.1871951,91.9859977 L74.0560976,91.4221442 L68.0579268,82.2001544 L68.0884146,82.1812781 L78.4780488,88.555381 L79.6768293,87.7777989 L72.879878,77.3288492 L72.0103659,77.8920938 L78.0481707,87.1737571 L78.0182927,87.1932423 L67.5896341,80.758857 L66.3902439,81.5364391 L73.1871951,91.9859977 Z M77.5347561,74.0535053 L78.1182927,73.3081956 C80.6920732,70.01702 83.4432927,71.7779968 84.9786585,72.9769468 C87.4432927,74.8998946 88.1426829,77.3702553 86.4371951,79.5495554 L85.7335366,80.4495291 L77.5347561,74.0535053 Z M85.8682927,81.9590248 L87.0560976,80.4403954 C89.5317073,77.2764826 88.4231707,74.1698077 85.5634146,71.938141 C82.379878,69.4549931 79.5890244,69.7454447 77.0371951,73.0080014 L76.0359756,74.2879369 L85.8682927,81.9590248 L85.8682927,81.9590248 Z" id="ENGLAND"></path>
                                                                <path d="M43.2823171,0.585088465 C42.7676829,0.502276276 41.752439,0.314731024 39.9414634,0.731836536 C37.4682927,1.30177925 34.8835366,3.76544188 35.9140244,8.21781487 C36.8030488,12.0612747 39.7121951,14.0104057 43.0384146,13.2437841 C44.5884146,12.886961 45.5335366,12.3760828 45.9853659,12.1069432 L45.2932927,9.59213187 C45.0426829,9.77845929 44.345122,10.488452 42.9518293,10.8093493 C41.1408537,11.2264548 39.395122,9.94347476 38.847561,7.57845606 C38.2804878,5.12636278 39.1408537,3.29779657 41.0567073,2.85633454 C42.3628049,2.55553144 43.1987805,2.83928497 43.6902439,2.98237956 L43.2823171,0.585088465 Z M52.8365854,6.17369341 C53.1280488,3.80014993 53.95,1.94174698 55.6353659,2.14877745 C57.3207317,2.35580792 57.6865854,4.36035003 57.3957317,6.73389351 C57.1036585,9.107437 56.2634146,10.9646221 54.5786585,10.7575916 C52.8932927,10.5505612 52.545122,8.5478458 52.8365854,6.17369341 Z M49.8560976,5.80834552 C49.4103659,9.43990358 50.7560976,12.409573 54.3219512,12.8473816 C57.8878049,13.2857991 59.929878,10.7314084 60.3756098,7.09924141 C60.8213415,3.46890117 59.4579268,0.495578231 55.8920732,0.0583785854 C52.3262195,-0.380038887 50.3018293,2.17678745 49.8560976,5.80834552 Z M64.5512195,10.1547676 C63.1481707,12.9058373 63.9786585,15.1709942 66.4792683,16.4436227 C68.9792683,17.7162512 71.302439,17.0555804 72.7054878,14.3051197 L76.3146341,7.22893991 L73.7030488,5.89968249 L69.8823171,13.3887054 C69.3152439,14.5017986 68.5518293,14.9749242 67.5006098,14.4402984 C66.45,13.9050638 66.3847561,13.0105703 66.952439,11.8974771 L70.772561,4.40784526 L68.1609756,3.07858784 L64.5512195,10.1547676 Z M73.620122,20.3485828 L75.4079268,22.197852 L81.9,15.9376159 L81.9243902,15.9631902 L77.9292683,24.8046092 L80.3378049,27.295673 L89.3103659,18.643017 L87.5219512,16.7943567 L81.3006098,22.7933691 L81.2762195,22.7677947 L84.9768293,14.1614162 L82.5926829,11.6959268 L73.620122,20.3485828 Z M96.6743902,32.5024894 C96.6396341,31.9830864 96.5932927,30.9534143 95.7786585,29.2843833 C94.6658537,27.0064392 91.6792683,25.044521 87.5670732,27.0472364 C84.0170732,28.7753319 82.7707317,32.0439778 84.2676829,35.1080288 C84.9652439,36.5359301 85.6768293,37.3415222 86.0408537,37.7202662 L88.3390244,36.4823457 C88.1006098,36.2801866 87.2506098,35.7607837 86.6237805,34.4771947 C85.8085366,32.8087727 86.6670732,30.821889 88.8518293,29.7581178 C91.1164634,28.6547671 93.0945122,29.0822242 93.9573171,30.8468545 C94.5445122,32.0500669 94.4560976,32.9275107 94.4268293,33.43778 L96.6743902,32.5024894 Z M86.6262195,41.9369898 L87.1359756,44.8195847 L99.4213415,42.6585519 L98.9115854,39.775957 L86.6262195,41.9369898 Z M87.5073171,49.2999677 L87.0158537,56.3329146 L89.2621951,56.4900142 L89.5493902,52.3774148 L99.7481707,53.091061 L99.9518293,50.1713224 L87.5073171,49.2999677 Z" id="COUNCIL"></path>
                                                                <path d="M7.69939024,49.9740345 L7.79756098,52.7750351 L2.5652439,51.4737876 L2.56402439,51.4384707 L7.69939024,49.9740345 L7.69939024,49.9740345 Z M12.5463415,48.4663656 L12.4408537,45.4699039 L0.113414634,49.8985293 L0.226219512,53.1087195 L12.8396341,56.8145649 L12.7408537,53.9959059 L9.92439024,53.2365912 L9.78719512,49.3304133 L12.5463415,48.4663656 Z M4.11768293,36.1541416 L4.39390244,35.3053166 C4.87987805,33.8116526 5.93231707,33.984584 6.425,34.1447281 C7.275,34.4205658 7.80731707,35.2121529 7.45914634,36.2814044 L7.17804878,37.1472789 L4.11768293,36.1541416 Z M13.1054878,42.0362426 L14.0109756,39.2522917 L9.21707317,37.6965186 C9.54817073,36.6784158 9.6695122,36.3045431 11.4335366,36.3703057 L14.9103659,36.4859992 L15.8597561,33.5662606 L11.5865854,33.5303348 C10.0323171,33.5138941 9.44573171,33.6983948 9.06219512,34.531388 L9.02804878,34.5204276 C9.31463415,32.0799036 7.38170732,31.3772178 6.88841463,31.2176826 C4.69573171,30.5052542 3.28780488,31.8874871 2.65304878,33.8396626 L1.23963415,38.1848669 L13.1054878,42.0362426 Z M18.2859756,29.7538554 L19.9664634,27.3565643 L11.5908537,21.4994286 L13.1487805,19.2775045 L11.3036585,17.9872175 L6.50731707,24.8289658 L8.35243902,26.1192527 L9.91036585,23.8973286 L18.2859756,29.7538554 Z M20.702439,9.50383946 C19.7317073,10.0147176 19.0579268,10.3228277 18.1817073,11.056568 C14.9780488,13.7406572 16.9140244,16.266429 17.1554878,16.553836 C20.0170732,19.9582694 23.0231707,15.90169 24.5743902,17.7479147 C25.2292683,18.5273235 24.8439024,19.456525 24.1317073,20.052651 C23.2963415,20.7522922 22.4323171,20.9173077 21.5432927,21.2199375 L22.9829268,23.1824646 C23.4969512,22.9614291 24.7262195,22.3975755 25.8896341,21.4227056 C27.7926829,19.8285709 28.3103659,17.5299238 26.7939024,15.7251052 C23.9439024,12.3340678 20.8573171,16.2950479 19.3981707,14.5584276 C18.8,13.847217 19.0719512,13.0605012 19.797561,12.452197 C20.4,11.947408 21.3365854,11.5357827 22.1006098,11.3616335 L20.702439,9.50383946 Z" id="ARTS"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <div class="details">
                                    <p>ULUSAL YARATICILIK VE KÜLTÜR AJANSI</p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <a href="https://www.ucas.com/" title="UCAS" target="_blank">
                            <div class="home3_about_icon_box two">
                                <span class="icon">
                                    <svg version="1.1" id="svg2" xmlns:svg="http://www.w3.org/2000/svg"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 100"
                                         style="enable-background:new 0 0 300 100;" xml:space="preserve">
                                        <style type="text/css">
                                            .st0{fill:#E00023;}
                                        </style>
                                        <path fill="#000" id="path2835_2_" d="M57.2,8H68v48.8c0,8.6-0.8,15.1-2.6,20.2c-1.8,4.9-5.3,9-10.2,12.3C50.3,92.4,43.8,94,35.9,94c-7.7,0-14-1.4-19.1-4.1S8.3,83.2,6.2,78.1C4.2,73,3,65.8,3,56.8V8h11v48.6c0,7.4,0.6,12.7,2,16.1s3.7,6.1,6.9,8c3.2,1.8,7.3,2.9,12,2.9c8.1,0,13.8-1.8,17.3-5.5c3.5-3.7,5.1-10.8,5.1-21.4V8"/>
                                        <path fill="#000" id="path2837" d="M140.9,62.6l11.1,2.9c-2.3,9-6.6,15.9-12.5,20.6c-6.2,4.5-13.6,6.9-22.2,6.9c-9,0-16.4-1.8-22-5.5s-9.9-9-12.9-15.9C79.4,64.7,78,57.3,78,49.4c0-8.6,1.6-16.1,4.9-22.6c3.3-6.5,8-11.4,14.2-14.7c6.2-3.3,12.9-5.1,20.3-5.1c8.4,0,15.4,2,21.2,6.3c5.8,4.3,9.7,10.2,11.9,17.7l-10.9,2.4c-1.9-6.1-4.7-10.4-8.4-13.2c-3.7-2.6-8.4-4.1-14-4.1c-6.4,0-11.9,1.4-16.2,4.5c-4.3,3.1-7.4,7.1-9,12.2c-1.8,5.1-2.7,10.4-2.7,15.9c0,7.1,1,13.2,3.1,18.5c2.1,5.3,5.3,9.2,9.7,11.8s9,3.9,14.2,3.9c6.2,0,11.5-1.8,15.8-5.3C136.4,74.9,139.3,69.6,140.9,62.6"/>
                                        <path fill="#000" id="path2841" d="M230,65.5l10.5-0.8c0.4,4.1,1.6,7.5,3.5,10.2c1.9,2.6,4.7,4.7,8.5,6.5c3.9,1.6,8,2.4,13,2.4c4.3,0,8-0.6,11.3-1.8c3.3-1.2,5.6-2.9,7.2-5.1c1.6-2.2,2.5-4.5,2.5-7.1s-0.8-4.9-2.3-6.7c-1.4-2-4.1-3.7-7.6-4.9c-2.3-0.8-7.2-2.2-15-4.1c-7.6-1.8-13.2-3.7-16.3-5.1c-3.9-2-7-4.7-9.1-7.7c-1.9-3.1-2.9-6.5-2.9-10.4c0-4.3,1.2-8.2,3.7-11.6c2.5-3.7,6-6.3,10.5-8.4C252.1,9,257.2,8,263,8c6.2,0,11.8,1,16.5,3.1s8.5,4.9,10.9,8.8s3.9,8.2,4.1,13l-10.7,0.8c-0.6-5.3-2.5-9.2-5.8-11.8s-8.2-4.1-14.6-4.1c-6.8,0-11.5,1.2-14.8,3.7c-3.1,2.4-4.5,5.3-4.5,8.8c0,3.1,1,5.5,3.3,7.3c2.1,1.8,7.6,3.9,16.7,5.9c9.1,2,15.3,3.7,18.6,5.3c4.9,2.2,8.5,5.1,10.9,8.6c2.3,3.5,3.5,7.3,3.5,11.8c0,4.5-1.2,8.6-3.9,12.4c-2.5,3.9-6.2,6.9-11.1,9.2c-4.7,2.2-10.1,3.3-16.1,3.3c-7.6,0-14-1-19.2-3.3c-5.2-2.2-9.1-5.5-12.2-9.8C231.6,75.9,230.2,71,230,65.5"/>
                                        <path class="st0" d="M163,94l26.5-71.9c0.4-1,1.8-1,2.2,0L219,94h11l-29.9-79.2c-1.4-4.1-5.1-6.8-9.4-6.8l0,0c-4.1,0-7.7,2.7-9.4,6.8L152,94H163z"/>
                                    </svg>
                                </span>
                                <div class="details">
                                    <p>ÜNİVERSİTELER VE KOLEJLER ARASI KABUL SERVİSİ</p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <a href="https://www.gov.uk/government/organisations/ofqual" title="OFQUEL" target="_blank">
                                <div class="home3_about_icon_box three">
                                    <span class="icon">
                                        <img src="/frontend/images/ofqual.png">
                                    </span>
                                    <div class="details">
                                        <p>SINAV YÖNETMELİKLERİ VE YETERLİLİKLERİ OFİSİ</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-6 align-items-center" style="margin-top:-70px">
                            <a href="https://www.open.ac.uk/" title="THE OPEN UNIVERSITY" target="_blank">>
                                <div class="home3_about_icon_box four">
                                    <span class="icon align-items-center ">
                                        <img src="/frontend/images/openuni.png"  class="text-center">
                                    </span>
                                    <div class="details">
                                        <p>THE OPEN UNIVERSITY</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about_box_home6">
                        <div class="details">
                            <h3>Trinity Türkiye Sınav Merkezi</h3>

                            <p>Trinity College London, zengin bir kültürel mirasa ve değerlendirme ve geliştirmeye yönelik olumlu,
                                destekleyici bir yaklaşıma sahip uluslararası bir sınav kuruludur. Bizi diğerlerinden ayıran şey,
                                öğrenene odaklanmamız ve esnek öğrenme ve öğretme tarzlarının sunulmasına dayalı yenilik ve başarı
                                konusundaki güçlü itibarımızdır. İngilizce dili, iletişim becerileri, müzik ve drama dahil olmak üzere
                                çeşitli iletişim temelli konularda tanınmış ve saygı duyulan nitelikler sunuyoruz.</p>

                            <p>Sınavlarımız ve değerlendirmelerimiz, öğrencilerin kendi bireysel yeteneklerini ve
                                becerilerini gerçekleştirmelerine yardımcı olmak için tasarlanmıştır. Bugün, dünya çapında her
                                yıl 850.000'den fazla değerlendirme sunuyoruz. Uluslararası ağımız hızla genişliyor ve şimdi dünya
                                çapında 60'tan fazla ülkede yeterlilikler sağlıyoruz.</p>

                            <p>Trinity sınavları, Ofqual (Yeterlilikler ve Sınavlar Yönetmeliği Ofisi) tarafından düzenlenir ve dünya çapında tanınır.</p>

                            <p>Trinity, adayları sınavlarına hazırlayan öğretmenler için kapsamlı kaynaklar ve destek sağlar ve bu kaynakların en
                                yüksek kalitede olmasını sağlamak için genellikle diğer kuruluşlarla ortak çalışır.</p>
{{--
                           <a class="btn dbxshad btn-lg btn-thm2 rounded" href="#">Devamını Oku</a>
--}}
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="becomea_instructor_home3 style2">
                    <div class="col-lg-12">
                    <div class="row">

                        <div class="col-12 col-lg-4">
                            <p>
                                “Trinity College London, zengin bir kültürel mirasa ve değerlendirme ve geliştirmeye yönelik olumlu,
                                destekleyici bir yaklaşıma sahip uluslararası bir sınav kuruludur.”
                            </p>
                        </div>

                        <div class="col-12 col-lg-4">
                            <p>“Bizi diğerlerinden ayıran şey, öğrenene odaklanmamız ve esnek öğrenme ve öğretme tarzlarının
                                sunulmasına dayalı yenilik ve başarı konusundaki güçlü itibarımızdır.”
                            </p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <p>“Sınavlarımız ve değerlendirmelerimiz, öğrencilerin kendi bireysel yeteneklerini ve becerilerini
                                gerçekleştirmelerine yardımcı olmak için tasarlanmıştır.”
                            </p>
                        </div>
                        <div class="col-12 ">
                            <hr style="border:1px solid white">
                        </div>
                        <div class="col-12 col-lg-4">
                            <p>“Bugün, dünya çapında her yıl 850.000'den fazla değerlendirme sunuyoruz.
                                Uluslararası ağımız hızla genişliyor ve şimdi dünya çapında 60'tan fazla ülkede yeterlilikler sağlıyoruz.”
                            </p>
                        </div>

                        <div class="col-12 col-lg-4">
                            <p>“Trinity, adayları sınavlarına hazırlayan öğretmenler için kapsamlı kaynaklar ve destek sağlar ve bu
                                kaynakların en yüksek kalitede olmasını sağlamak için genellikle diğer kuruluşlarla ortak çalışır.”
                            </p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <p>“Önde gelen uluslararası sınav kurulu ve bağımsız eğitim yardım kuruluşu Trinity College London,
                                2022'de 150. yılını kutlamaktan mutluluk duyuyor.”
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section id="top-courses" class="top-courses pb30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="options" class="alpha-pag full">
                        <div class="option-isotop">
                            <ul id="filter" class="option-set" data-option-key="filter">
                                <li class="list-inline-item"><a href="#all" data-option-value="*" class="selected">Hepsini Göster</a></li>
                                @foreach($Service_Categories as $item)
                                    <li class="list-inline-item"><a href="#{{ $item->slug }}" data-option-value=".{{ $item->slug }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="emply-text-sec">
                        <div class="row" id="masonry_abc">
                            @foreach($Service as $row)
                                <div class="col-md-6 col-lg-4 col-xl-3 {{ $row->getCategory->slug }}">
                                    <div class="top_courses">
                                        <div class="thumb">
                                            <img class="img-whp" src="{{ (!$row->getFirstMediaUrl('page')) ? '/frontend/resimyok.jpg': $row->getFirstMediaUrl('page', 'thumb')}}" alt="{{ $row->title }}">
                                            <div class="overlay">
                                                <a class="tc_preview_course" href="{{ route('sinav.detay', [$row->getCategory->slug, $row->slug]) }}">İncele</a>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <div class="tc_content">
                                                <p>{{ $row->getCategory->title }}</p>
                                                <h5>{{ $row->title }}</h5>
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
    </section>


    <section class="becomea_instructor_home3 style1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="app_grid">
                        <h1 class="mt0">TRINITY COLLEGE LONDON 150. YILI</h1>
                        <p style="font-size:24px">“Önümüzdeki aylarda 150. yılımızı ve mirasımızı kutlayacağız. Her yıl İngilizce, Müzik ve Drama alanlarında
                            Trinity yeterliliklerini alan dünya çapında 60'tan fazla ülkede 850.000 aday için Trinity'nin ne anlama
                            geldiğini yansıtan haberlere ve sosyal medya hikayelerine göz atın.“
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="{{ asset('/frontend/images/150.png') }}" alt="TRINITY COLLEGE LONDON 150. YILI">
                </div>
            </div>
        </div>
    </section>


    @include('frontend.layout.temsilcilik-ara')


@endsection
