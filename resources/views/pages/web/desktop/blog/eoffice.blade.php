<x-web-layout title="Blog - Paparan Pengembangan Aplikasi eOffice Dukcapil Kementerian Dalam Negeri Republik Indonesia">
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
                        <img class="" src="{{asset('img/blog/banner/eoffice.jpeg')}}" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                    </div>
                </div>
            </div>
            @for ($i = 1; $i < 12; $i++)
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="{{asset('img/blog/banner/eoffice-'.$i.'.jpeg')}}" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
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
                    <h2 class="qrt-mb-40">Paparan Pengembangan Aplikasi eOffice Dukcapil Kementerian Dalam Negeri Republik Indonesia</h2>
                    <div class="qrt-post-date qrt-mb-40">
                        <span><i class="far fa-user"></i>Tifany Azahra</span>
                        <span><i class="far fa-clock"></i> 27/07/2022</span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p>
                        Beberapa waktu lalu, pada Rabu (27/07/2022) Kementerian Dalam Negeri (Kemendagri) mengadakan rapat penting terkait perkembangan transformasi layanan publik yang membantu kemudahan bagi para pegawai sipil, terutama dalam meningkatkan kualitas pelayanan bagi masyarakat yakni eOffice. 
                    </p>
                    <p>
                        Electronic Office (Eoffice) sendiri merupakan aplikasi berbasis website yang mendukung administrasi pengelolaan database  terkait persuratan baik surat dinas, data kepegawaian, data kependudukan, pencatatan sipil hingga dokumen yang bersifat rahasia sebelumnya dipindahkan ke bentuk kertas, sekarang dapat diakses melalui media digital. Semua penyimpanan, pengontrolan dokumen serta penerimaan surat masuk - surat keluar mulai dari rancangan/ konsep, persetujuan, penomoran hingga distribusi kepada penerima, dapat dilakukan secara digital. 
                    </p>
                    <p>
                        Peningkatan kualitas pelayanan ini tidak hanya akan dirasakan oleh pegawai sipil saja, tapi para pejabat pun dapat mengakses data seperti menerima dan menandatangani berbagai surat secara elektronik sampai memonitoring progress kinerja daerah.
                    </p>
                    <p>
                        Pelaporan kerja pegawai daerah baik ASN maupun non-ASN juga akan diterapkan dalam aplikasi ini sesuai dengan Peraturan Menteri Dalam Negeri ( Permendagri ) nomor 53 tahun 2019 pasal 11 ayat 3 mengatakan 'pelaporan secara daring sebagaimana yang dimaksud dalam ayat 1 huruf b, dilakukan oleh SIAK' dan pasal 14 mengatakan bahwa 'pelaporan secara daring sebagaimana dimaksud dalam pasal 11 ayat 3 dilakukan oleh pemegang hak akses dengan cara mengakses menu laporan pada laman aplikasi SIAK'. 
                    </p>
                    <p>
                        Keuntungan lainnya dari pelayanan digital ini yaitu, setiap pegawai dalam kantor dapat berkomunikasi serta berkoordinasi terkait pekerjaan administratif internal kantor. Selain itu, eOffice ini juga memiliki fitur menganalisa terkait pegawai sipil yang akan naik jabatan dan yang akan pensiun berdasarkan hasil/ kriteria yang ditetapkan oleh pemerintah. 
                    </p>
                    <p>
                        Dan terakhir adalah mampu meningkatkan efisiensi kerja dengan konsep paperless karena dapat mengurangi anggaran sekitar Rp450 M /tahun untuk pengadaan pencetakan kertas security printing untuk dokumen kependudukan yang diganti jadi dokumen elektronik. Konsep paperless sudah menjadi kebiasaan baru karena selain dapat meningkatkan citra suatu instansi, pohon - pohon sekarang tidak akan ditebang lagi untuk memproduksi kertas. 
                    </p>
                    <p>
                        Dari keuntungan transformasi layanan baru ini diharapkan kini dapat meningkatkan kualitas kinerja setiap pegawai maupun pemimpin dalam membantu serta memudahkan kebutuhan masyarakat akan pelayanan yang lebih mumpuni dan profesional.
                    </p>
                </div>
            </div>
        </div>
        <div id="fixed" class="qrt-right"></div>
    </div>
</x-web-layout>