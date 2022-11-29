<x-mobile-layout title="Blog - Paparan Pengembangan Aplikasi eOffice Dukcapil Kementerian Dalam Negeri Republik Indonesia">
    <div class="section full mt-2">
        <div class="section-title"></div>
        <div class="carousel-full splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{asset('img/blog/banner/eoffice.jpeg')}}" alt="alt" class="imaged w-100 square">
                    </li>
                    @for ($i = 1; $i < 12; $i++)
                    <li class="splide__slide">
                        <img src="{{asset('img/blog/banner/eoffice-'.$i.'.jpeg')}}" alt="alt" class="imaged w-100 square">
                    </li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
    <div class="blog-post">
        <h1 class="title">Paparan Pengembangan Aplikasi eOffice Dukcapil Kementerian Dalam Negeri Republik Indonesia</h1>
        <div class="post-header">
            <div>
                <a href="#">
                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w24 rounded me-05">
                    Tifany Azahra
                </a>
            </div>
            27/07/2022
        </div>
        <div class="post-body">
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
</x-mobile-layout>