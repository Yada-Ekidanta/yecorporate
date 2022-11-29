<x-mobile-layout title="Blog - Paparan Pengembangan Aplikasi Program Hibah Luar Negeri Tahap 1">
    <div class="section full mt-2">
        <div class="section-title"></div>
        <div class="carousel-full splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{asset('img/blog/banner/phln.jpeg')}}" alt="alt" class="imaged w-100 square">
                    </li>
                    @for ($i = 1; $i < 7; $i++)
                    <li class="splide__slide">
                        <img src="{{asset('img/blog/banner/phln-'.$i.'.jpeg')}}" alt="alt" class="imaged w-100 square">
                    </li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
    <div class="blog-post">
        <h1 class="title">Paparan Pengembangan Aplikasi Program Hibah Luar Negeri Tahap 1</h1>
        <div class="post-header">
            <div>
                <a href="#">
                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w24 rounded me-05">
                    Rizky Ramadhan
                </a>
            </div>
            17/12/2021
        </div>
        <div class="post-body">
        </div>
    </div>
</x-mobile-layout>