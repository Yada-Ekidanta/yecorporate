<div class="qrt-top-bar">
    <a href="{{route('web.home')}}" class="qrt-symbol qrt-cursor-scale qrt-anima-link"><img src="{{asset('icon.png')}}" alt="Symbol"></a>
    <a href="{{route('web.home')}}" class="qrt-logo qrt-cursor-color qrt-cursor-scale qrt-anima-link">
        Yada Ekidanta
    </a>
    <div class="qrt-menu">
        <div id="qrt-dynamic-menu" class="qrt-dynamic-menu">
            <nav>
                <ul>
                    <li class="{{request()->is('/') ? 'current-menu-item' : ''}}">
                        {{-- <a class="qrt-mobile-fix" href="{{route('web.home')}}">Home</a> --}}
                        <a class="" href="{{route('web.home')}}">Home</a>
                    {{-- <ul>
                        <li><a href="home-slider.html">Home slider</a></li>
                        <li><a href="home-video.html">Home video</a></li>
                        <li><a href="home-image.html">Home image</a></li>
                        <li><a href="home-combined.html">Home combined</a></li>
                        <li class="qrt-this-page"><a href="home-classic.html">Home classic</a></li>
                    </ul> --}}
                    </li>
                    <li class="d-none {{request()->is('sponzme') ? 'current-menu-item' : ''}}">
                        <a class="" href="about-us.html">Solutions</a>
                        <ul>
                            <li><a href="https://sponzme.yadaekidanta.com" target="_blank">Sponzme</a></li>
                            <li><a href="https://wk.yadaekidanta.com" target="_blank">Warung Kerja</a></li>
                            <li><a href="https://worksuite.yadaekidanta.com" target="_blank">Worksuite</a></li>
                        </ul>
                    </li>
                    <li class="{{request()->is('services') || request()->is('agile-development') || request()->is('project-based') || request()->is('managed-services') || request()->is('design-services') || request()->is('technical-writer') || request()->is('quality-assurance') ? 'current-menu-item' : ''}}">
                        <a class="qrt-mobile-fix" href="{{route('web.services')}}">Services</a>
                        <ul>
                            <li><a href="{{route('web.ad')}}">Agile Development</a></li>
                            <li><a href="{{route('web.pb')}}">Project Based</a></li>
                            <li><a href="{{route('web.ms')}}">Managed Services</a></li>
                            <li><a href="{{route('web.ds')}}">Design Services</a></li>
                            <li><a href="{{route('web.tw')}}">Technical Writer</a></li>
                            <li><a href="{{route('web.qa')}}">Quality Assurance</a></li>
                        </ul>
                    </li>
                    <li class="{{request()->is('case-study') ? 'current-menu-item' : ''}}">
                        <a class="" href="{{route('web.contact')}}">Case Study</a>
                    </li>
                    <li class="{{request()->is('about') ? 'current-menu-item' : ''}}">
                        <a class="qrt-mobile-fix" href="#.">Explore More</a>
                        <ul>
                            <li class="{{request()->is('about') ? 'qrt-this-page' : ''}}"><a href="{{route('web.about')}}">About</a></li>
                            {{-- <li class="{{request()->is('career') ? 'qrt-this-page' : ''}}"><a href="{{route('web.career')}}">Career</a></li> --}}
                            <li class="{{request()->is('blog') ? 'qrt-this-page' : ''}}"><a href="{{route('web.blog')}}">Blog</a></li>
                        </ul>
                    </li>
                    <li class="{{request()->is('contact') ? 'current-menu-item' : ''}}">
                        <a class="" href="{{route('web.contact')}}">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="qrt-buttons">
        <a href="{{route('web.contact')}}" class="qrt-btn qrt-btn-md qrt-btn-color qrt-send-request qrt-anima-link qrt-mr-20"><span>Send request</span></a>
        <div class="qrt-menu-btn qrt-cursor-color qrt-cursor-scale"><span></span></div>
        {{-- <div class="qrt-search-btn qrt-cursor-color qrt-cursor-scale"><i class="fas fa-search"></i></div> --}}
        <div class="qrt-info-btn qrt-cursor-color qrt-cursor-scale"><span></span></div>
    </div>
    {{-- <div class="qrt-search">
        <form>
            <input type="text" placeholder="Enter search query">
        </form>
    </div> --}}
    <div class="qrt-info" id="qrt-scroll-info">
        <div class="qrt-info-frame">
            <ul class="qrt-table">
                <li>
                    <h5>Country</h5><span>Indonesia</span>
                </li>
                <li>
                    <h5>City</h5><span>Bandung</span>
                </li>
                <li>
                    <h5>Street</h5><span>Permata Buah Batu Blok C 15B</span>
                </li>
                <li>
                    <h5>Email</h5><span><a class="qrt-cursor-scale qrt-cursor-color" href="mailto:hello@yadaekidanta.com" data-no-swup>hello@yadaekidanta.com</a></span>
                </li>
                <li>
                    <h5>Phone</h5><span><a class="qrt-cursor-scale qrt-cursor-color" target="_blank" href="https://wa.me/62818694745" data-no-swup>+62 818 694 745</a></span>
                </li>
            </ul>
            <div class="qrt-divider"></div>
            <div class="qrt-social-links">
                <div class="qrt-social-links">
                    <h5 class="qrt-mb-40">We are on social</h5>
                    <ul class="qrt-social-list">
                        <li><a href="https://linkedin.com/company/yada-ekidanta" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://instagram.com/yadaekidanta" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://facebook.com/YadaEkidanta" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/YadaEkidanta" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="qrt-divider"></div>
            {{-- <div class="qrt-instagram">
                <h5 class="qrt-mb-40">Instagram</h5>
                <div class="qrt-instagram-frame">
                    <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                    <div class="qrt-instagram-image-frame">
                        <img src="img/projects/thumbnails/7.jpg" alt="instagram post">
                    </div>
                    </a>
                    <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                    <div class="qrt-instagram-image-frame">
                        <img src="img/projects/thumbnails/8.jpg" alt="instagram post">
                    </div>
                    </a>
                    <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                    <div class="qrt-instagram-image-frame">
                        <img src="img/projects/thumbnails/9.jpg" alt="instagram post">
                    </div>
                    </a>
                    <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                    <div class="qrt-instagram-image-frame">
                        <img src="img/projects/thumbnails/10.jpg" alt="instagram post">
                    </div>
                    </a>
                    <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                    <div class="qrt-instagram-image-frame">
                        <img src="img/projects/thumbnails/11.jpg" alt="instagram post">
                    </div>
                    </a>
                    <a href="#." class="qrt-instagram-item qrt-cursor-scale">
                    <div class="qrt-instagram-image-frame">
                        <img src="img/projects/thumbnails/12.jpg" alt="instagram post">
                    </div>
                    </a>
                </div>
            </div>
            <div class="qrt-divider"></div> --}}
            <h5 class="qrt-mb-40">Latest Publications</h5>
            <div class="qrt-post-frame qrt-sm-post">
                <a href="{{route('web.show_blog','kementerian-pertahanan-gelar-indo-defence-2022-expo-forum-pameran-industri')}}" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                    <img src="{{asset('img/blog/thumbnail/rdi.jpeg')}}" alt="thumbnail">
                </a>
                <div class="qrt-post-descr">
                    <div>
                    <h4 class="qrt-cursor-color qrt-post-title"><a href="{{route('web.show_blog','kementerian-pertahanan-gelar-indo-defence-2022-expo-forum-pameran-industri')}}" class="qrt-anima-link">Kementerian Pertahanan Gelar Indo Defence 2022 Expo & Forum, Pameran Industri Pertahanan Bertaraf Internasional</a></h4>
                    <div class="qrt-port-short-text">Kementerian Pertahanan akan menggelar pameran industri pertahanan bertaraf internasional, Indo Defence 2022 Expo & Forum pada Rabu (2/11/2022) sampai Sabtu (5/11/2022).</div>
                    </div>
                </div>
            </div>
            <div class="qrt-post-frame qrt-sm-post">
                <a href="{{route('web.show_blog',Str::slug('Paparan Pengembangan eOffice Dukcapil Kementerian Dalam Negeri Republik Indonesia Tahap 2'))}}" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                    <img src="{{asset('img/blog/thumbnail/nonper.jpeg')}}" alt="thumbnail">
                </a>
                <div class="qrt-post-descr">
                    <div>
                        <h4 class="qrt-cursor-color qrt-post-title"><a href="{{route('web.show_blog',Str::slug('Paparan Pengembangan Aplikasi Penduduk Non Permanen Dukcapil Kementerian Dalam Negeri Republik Indonesia'))}}" class="qrt-anima-link">Paparan Pengembangan Aplikasi Penduduk Non Permanen Dukcapil Kementerian Dalam Negeri Republik Indonesia</a></h4>
                        <div class="qrt-port-short-text">
                            Aplikasi Penduduk Non Permanen untuk mendaftarkan penduduk untuk pendataan perpindahan penduduk
                        </div>
                    </div>
                </div>
            </div>
            <div class="qrt-post-frame qrt-sm-post">
                <a href="{{route('web.show_blog',Str::slug('Pengembangan Sistem Informasi Program Hibah Luar Negeri Tahap 1'))}}" class="qrt-post-thumb qrt-cursor-scale qrt-anima-link">
                    <img src="{{asset('img/blog/thumbnail/phln.jpeg')}}" alt="thumbnail">
                </a>
                <div class="qrt-post-descr">
                    <div>
                        <h4 class="qrt-cursor-color qrt-post-title"><a href="{{route('web.show_blog',Str::slug('Paparan Pengembangan Aplikasi Program Hibah Luar Negeri Tahap 1'))}}" class="qrt-anima-link">Paparan Pengembangan Aplikasi Program Hibah Luar Negeri Tahap 1</a></h4>
                        <div class="qrt-port-short-text">Aplikasi Program Hibah Luar Negeri mengolah data-data pinjaman Luar Negeri berdasarkan programnya sehingga diketahui program hibah yang sudah selesai, yang sedang berjalan sesuai dengan track, atau meleset dari track</div>
                    </div>
                </div>
            </div>
            <div class="qrt-divider"></div>
            <div class="qrt-subscribe">
                <h5 class="qrt-mb-40">Subscribe our newsletter</h5>
                <form id="form_newsletter">
                    <input type="text" placeholder="Email">
                    <button id="tombol_newsletter" onclick="handle_save('#tombol_newsletter','#form_newsletter','{{route('web.newsletter')}}','POST');" class="qrt-btn qrt-btn-sm"><i class="far fa-paper-plane"></i></button>
                </form>
            </div>
            <div class="qrt-divider"></div>
            <div class="qrt-copy">
                <!-- author ( Please! Do not delete it. You are awesome! :) -->
                <div>
                    © 2021 {{config('app.name')}}.
                    {{-- <br>Design by:&#160; <a class="qrt-cursor-scale qrt-cursor-color" href="" target="_blank">Nazar Miller</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>