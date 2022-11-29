<x-web-layout title="Blog - Paparan Pengembangan Aplikasi Penduduk Non Permanen Dukcapil Kementerian Dalam Negeri Republik Indonesia">
    <div class="swiper-container qrt-main-slider-onepage">
        <div class="qrt-slider-pagination">
            <div class="swiper-pagination swiper-main-pagination"></div>
        </div>
        <div class="qrt-slider-navigation qrt-absolute">
            <div class="qrt-slider-nav-btn qrt-main-prev qrt-cursor-scale qrt-cursor-color"><i class="fas fa-arrow-left"></i><span>prev</span></div>
            <div class="qrt-slider-nav-btn qrt-main-next qrt-cursor-scale qrt-cursor-color"><span>next</span><i class="fas fa-arrow-right"></i></div>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="{{asset('img/blog/banner/nonper.jpeg')}}" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    </div>
                </div>
            </div>
            @for ($i = 1; $i < 9; $i++)
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="{{asset('img/blog/banner/nonper-'.$i.'.jpeg')}}" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
    <div class="qrt-content-frame">
        <div class="qrt-left">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="qrt-mb-40">Paparan Pengembangan Aplikasi Penduduk Non Permanen Dukcapil Kementerian Dalam Negeri Republik Indonesia</h2>
                    <div class="qrt-post-date qrt-mb-40">
                        <span><i class="far fa-user"></i>Rizky Ramadhan</span>
                        <span><i class="far fa-clock"></i> 14/09/2022</span>
                    </div>
                </div>
                <div class="col-lg-12">
                </div>
            </div>
        </div>
        <div id="fixed" class="qrt-right"></div>
    </div>
</x-web-layout>