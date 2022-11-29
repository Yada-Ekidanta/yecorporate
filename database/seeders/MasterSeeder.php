<?php

namespace Database\Seeders;

use App\Models\Master\Day;
use App\Models\Master\Bank;
use App\Models\Master\Isic;
use App\Models\Master\Company;
use App\Models\Master\IsicType;
use Illuminate\Database\Seeder;
use App\Models\Master\CompanyAddress;

class MasterSeeder extends Seeder
{
    public function run()
    {
        $company = array(
            [
                "name" => "CV Yada Ekidanta",
                "address" => "Permata Buah Batu Residence Block C 15B",
                "phone" => "0818694745",
                "email" => "hello@yadaekidanta.com",
                "web_url" => "https://yadaekidanta.com",
                "instagram_url" => "https://",
                "linkedin_url" => "https://",
                "facebook_url" => "https://",
                "twitter_url" => "https://",
            ],
        );
        $company_address = array(
            [
                "company_id" => 1,
                "name" => "HQ Yada Ekidanta",
                "address" => "Permata Buah Batu Residence Bloc C 15B",
                "is_primary" => true,
            ],
        );
        $jenis_kbli = array(
            [
                "nama" => "Pertanian, Kehutanan, dan Perikanan"
            ],
            [
            "nama" => "Pertambangan dan Penggalian"
            ],
            [
            "nama" => "Industri Pengolahan"
            ],
            [
            "nama" => "Pengadaan Listrik, Gas, Uap/Air Panas Dan Udara Dingin"
            ],
            [
            "nama" => "Treatment Air & Air Limbah, Treatment & Pemulihan Material Sampah, Aktivitas Remediasi"
            ],
            [
            "nama" => "Konstruksi"
            ],
            [
            "nama" => "Perdagangan Besar Dan Eceran; Reparasi Dan Perawatan Mobil Dan Sepeda Motor"
            ],
            [
            "nama" => "Pengangkutan dan Pergudangan"
            ],
            [
            "nama" => "Penyediaan Akomodasi Dan Penyediaan Makan Minum"
            ],
            [
            "nama" => "Informasi Dan Komunikasi"
            ],
            [
            "nama" => "Aktivitas Keuangan dan Asuransi"
            ],
            [
            "nama" => "Real Estat"
            ],
            [
            "nama" => "Aktivitas Profesional, Ilmiah Dan Teknis"
            ],
            [
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi, Ketenagakerjaan, Agen Perjalanan"
            ],
            [
            "nama" => "Administrasi Pemerintahan, Pertahanan Dan Jaminan Sosial Wajib"
            ],
            [
            "nama" => "Pendidikan"
            ],
            [
            "nama" => "Aktivitas Kesehatan Manusia Dan Aktivitas Sosial"
            ],
            [
            "nama" => "Kesenian, Hiburan Dan Rekreasi"
            ],
            [
            "nama" => "Aktivitas Jasa Lainnya"
            ],
            [
            "nama" => "Aktivitas Rumah Tangga Sbg Pemberi Kerja; Aktivitas Yg Menghasilkan Barang Jasa Oleh Rumah Tangga"
            ],
            [
            "nama" => "Aktivitas Badan Internasional Dan Badan Ekstra Internasional Lainnya"
            ]
        );
        $kbli = array(
            [
            "jenis_kbli_id" => 15,
            "kode" => "84111",
            "nama" => "Lembaga Legislatif"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84112",
            "nama" => "Penyelenggaraan Pemerintah Negara Dan Kesekretariatan Negara"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01111",
            "nama" => "Pertanian Jagung"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01112",
            "nama" => "Pertanian Gandum"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01113",
            "nama" => "Pertanian Kedelai"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01114",
            "nama" => "Pertanian Kacang Tanah"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01115",
            "nama" => "Pertanian Kacang Hijau"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01116",
            "nama" => "Pertanian Aneka Kacang Hortikultura"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01117",
            "nama" => "Pertanian Biji-bijian Pengahsil Minyak Makan"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01118",
            "nama" => "Pertanian Biji-bijian Penghasil Bukan Minyak Makan"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01119",
            "nama" => "Pertanian Serealia Lainnya, Aneka Kacang dan Biji-Bijian Penghasil Minyak Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01121",
            "nama" => "Pertanian Padi Hibrida"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01122",
            "nama" => "Pertanian Padi Inbrida"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01131",
            "nama" => "Pertanian Hortikultura Sayuran Daun"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01132",
            "nama" => "Pertanian Hortikultura Buah"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01133",
            "nama" => "Pertanian Hortikultura Sayuran Buah"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01134",
            "nama" => "Pertanian Hortikultura Sayuran Umbi"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01135",
            "nama" => "Pertanian Aneka Umbi Palawija"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01136",
            "nama" => "Pertanian Jamur"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01137",
            "nama" => "Pertanian Bit Gula Dan Tanaman Pemanis Bukan Tebu"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01139",
            "nama" => "Pertanian Sayuran, Buah dan Aneka Umbi Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01140",
            "nama" => "Perkebunan Tebu"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01150",
            "nama" => "Perkebunan Tembakau"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01160",
            "nama" => "Pertanian Tanaman Berserat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01191",
            "nama" => "Pertanian Tanaman Pakan Ternak"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01192",
            "nama" => "Perbenihan Tanaman Pakan Ternak dan Pembibitan Bit (Bukan Bit Gula)"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01193",
            "nama" => "Pertanian Tanaman Bunga"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01194",
            "nama" => "Pertanian Pembibitan Tanaman Bunga"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01199",
            "nama" => "Pertanian tanaman semusim lainnya ytdl"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01210",
            "nama" => "Pertanian Buah Anggur"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01220",
            "nama" => "Pertanian Buah-Buahan Tropis dan Subtropis"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01230",
            "nama" => "Pertanian Buah Jeruk"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01240",
            "nama" => "Pertanian Buah Apel dan Buah Batu (Pome and Stone Fruits)"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01251",
            "nama" => "Pertanian Buah Beri"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01252",
            "nama" => "Pertanian Buah Biji Kacang-Kacangan"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01253",
            "nama" => "Pertanian Sayuran Tahunan"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01259",
            "nama" => "Pertanian Buah Semak Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01261",
            "nama" => "Perkebunan Buah Kelapa"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01262",
            "nama" => "Perkebunan Buah Kelapa Sawit"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01269",
            "nama" => "Perkebunan Buah Oleaginous Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01270",
            "nama" => "Pertanian Tanaman Untuk Bahan Minuman"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01281",
            "nama" => "Perkebunan Lada"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01282",
            "nama" => "Perkebunan Cengkeh"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01283",
            "nama" => "Pertanian Cabai"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01284",
            "nama" => "Perkebunan Tanaman Aromatik/Penyegar"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01285",
            "nama" => "Pertanian Tanaman Obat atau Biofarmaka Rimpang"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01286",
            "nama" => "Pertanian Tanaman Obat atau Biofarmaka Non Rimpang"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01287",
            "nama" => "Pertanian Tanaman Narkotika dan Tanaman Obat Terlarang"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01289",
            "nama" => "Pertanian Tanaman Rempah-Rempah, Aromatik/Penyegar, dan Obat Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01291",
            "nama" => "Perkebunan Karet Dan Tanaman Penghasil Getah Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01299",
            "nama" => "Pertanian Cemara dan Tanaman Tahunan Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01301",
            "nama" => "Pertanian Tanaman Hias"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01302",
            "nama" => "Pertanian Pengembangbiakan Tanaman"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01411",
            "nama" => "Pembibitan Dan Budidaya Sapi Potong"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01412",
            "nama" => "Pembibitan Dan Budidaya Sapi Perah"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01413",
            "nama" => "Pembibitan Dan Budidaya Kerbau Potong"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01414",
            "nama" => "Pembibitan Dan Budidaya Kerbau Perah"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01420",
            "nama" => "Peternakan Kuda dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01430",
            "nama" => "Peternakan unta dan sejenisnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01441",
            "nama" => "Pembibitan Dan Budidaya Domba Potong"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01442",
            "nama" => "Pembibitan Dan Budidaya Kambing Potong"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01443",
            "nama" => "Pembibitan Dan Budidaya Kambing Perah"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01444",
            "nama" => "Pembibitan Dan Budidaya Domba Perah"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01445",
            "nama" => "Produksi Bulu Domba Mentah/Raw Wool"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01450",
            "nama" => "Peternakan Babi"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01461",
            "nama" => "Budidaya Ayam Ras Pedaging"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01462",
            "nama" => "Budidaya Ayam Ras Petelur"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01463",
            "nama" => "Pembibitan Ayam Lokal dan Persilangannya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01464",
            "nama" => "Budidaya Ayam Lokal dan Persilangannya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01465",
            "nama" => "Pembibitan dan Budidaya Itik dan/atau Bebek"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01466",
            "nama" => "Pembibitan Dan Budidaya Burung Puyuh"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01467",
            "nama" => "Pembibitan Dan Budidaya Burung Merpati"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01468",
            "nama" => "Pembibitan Ayam Ras"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01469",
            "nama" => "Pembibitan Dan Budidaya Ternak Unggas Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01491",
            "nama" => "Pembibitan Dan Budidaya Burung Unta"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01492",
            "nama" => "Pengusahaan Kokon/Kepompong Ulat Sutera"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01493",
            "nama" => "Pembibitan Dan Budidaya Lebah"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01494",
            "nama" => "Pembibitan Dan Budidaya Rusa"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01495",
            "nama" => "Pembibitan Dan Budidaya Kelinci"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01496",
            "nama" => "Pembibitan Dan Budidaya Cacing"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01497",
            "nama" => "Pembibitan dan Budidaya Burung Walet"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01499",
            "nama" => "Pembibitan Dan Budidaya Aneka Ternak Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01611",
            "nama" => "Jasa Pengolahan Lahan"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01612",
            "nama" => "Jasa Pemupukan, Penanaman Bibit/Benih Dan Pengendalian Hama dan Gulma"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01613",
            "nama" => "Jasa Pemanenan"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01614",
            "nama" => "Jasa Penyemprotan Dan Penyerbukan Melalui Udara"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01619",
            "nama" => "Jasa Penunjang Pertanian Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01621",
            "nama" => "Jasa Pelayanan Kesehatan Ternak"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01622",
            "nama" => "Jasa Perkawinan Ternak"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01623",
            "nama" => "Jasa Penetasan Telur"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01629",
            "nama" => "Jasa Penunjang Peternakan Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01630",
            "nama" => "Jasa Pasca Panen"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01640",
            "nama" => "Pemilihan benih tanaman untuk pengembangbiakan"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01711",
            "nama" => "Perburuan dan Penangkapan Primata"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01712",
            "nama" => "Perburuan dan Penangkapan Mamalia"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01713",
            "nama" => "Perburuan dan Penangkapan Reptil"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01714",
            "nama" => "Perburuan dan Penangkapan Burung"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01715",
            "nama" => "Perburuan dan Penangkapan Insekta"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01719",
            "nama" => "Perburuan dan Penangkapan Satwa Liar Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01721",
            "nama" => "Penangkaran Primata"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01722",
            "nama" => "Penangkaran Mamalia"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01723",
            "nama" => "Penangkaran Reptil"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01724",
            "nama" => "Penangkaran Burung"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01725",
            "nama" => "Penangkaran Insekta"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01726",
            "nama" => "Penangkaran Anggrek"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01727",
            "nama" => "Penangkaran Ikan dan Coral/karang"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "01729",
            "nama" => "Penangkaran Tumbuhan/Satwa Liar Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02111",
            "nama" => "Pemanfaatan Kayu Hutan Tanaman pada Hutan Produksi"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02112",
            "nama" => "Pemanfaatan kayu hutan tanaman hasil rehabilitasi pada hutan produksi"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02113",
            "nama" => "Pemanfaatan kayu hutan tanaman rakyat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02119",
            "nama" => "Pemanfaatan kayu hutan tanaman lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02121",
            "nama" => "Pemanfaatan Kayu Hutan Alam"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02122",
            "nama" => "Pemanfaatan kayu hasil restorasi ekosistem pada hutan alam"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02130",
            "nama" => "Pemanfaatan Hasil Hutan Bukan Kayu"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02140",
            "nama" => "Pengusahaan Perbenihan Tanaman Kehutanan"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02201",
            "nama" => "Pemanenan kayu"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02202",
            "nama" => "Usaha Pemungutan Kayu"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02209",
            "nama" => "Usaha Kehutanan Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02301",
            "nama" => "Pemungutan Getah Karet"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02302",
            "nama" => "Pemungutan Rotan"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02303",
            "nama" => "Pemungutan Getah Pinus"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02304",
            "nama" => "Pemungutan Daun Kayu Putih"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02305",
            "nama" => "Pemungutan Kokon/Kepompong Ulat Sutera"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02306",
            "nama" => "Pemungutan Damar"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02307",
            "nama" => "Pemungutan Madu"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02308",
            "nama" => "Pemungutan Bambu"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02309",
            "nama" => "Pemungutan Bukan Kayu Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02401",
            "nama" => "Jasa Penggunaan Kawasan Hutan Di Luar Sektor Kehutanan"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02402",
            "nama" => "Jasa Perlindungan Hutan Dan Konservasi Alam"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02403",
            "nama" => "Jasa Rehabilitasi Dan Restorasi Kehutanan Sosial"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02404",
            "nama" => "Jasa Kehutanan Bidang Perencanaan Kehutanan"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "02409",
            "nama" => "Jasa Penunjang Kehutanan Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03111",
            "nama" => "Penangkapan Pisces/Ikan Bersirip Di Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03112",
            "nama" => "Penangkapan Crustacea Di Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03113",
            "nama" => "Penangkapan Mollusca Di Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03114",
            "nama" => "Penangkapan/Pengambilan Tumbuhan Air Di Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03115",
            "nama" => "Penangkapan/Pengambilan Induk/Benih Ikan Di Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03116",
            "nama" => "Penangkapan Echinodermata Di Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03117",
            "nama" => "Penangkapan Coelenterata Di Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03118",
            "nama" => "Penangkapan Ikan Hias Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03119",
            "nama" => "Penangkapan Biota Air Lainnya Di Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03121",
            "nama" => "Penangkapan Pisces/Ikan Bersirip Di Perairan Darat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03122",
            "nama" => "Penangkapan Crustacea Di Perairan Darat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03123",
            "nama" => "Penangkapan Mollusca Di Perairan Darat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03124",
            "nama" => "Penangkapan/Pengambilan Tumbuhan Air Di Perairan Darat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03125",
            "nama" => "Penangkapan/Pengambilan Induk/Benih Ikan Di Perairan Darat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03126",
            "nama" => "Penangkapan Ikan Hias di Perairan Darat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03129",
            "nama" => "Penangkapan Biota Air Lainnya Di Perairan Darat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03131",
            "nama" => "Jasa Sarana Produksi Penangkapan Ikan Di Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03132",
            "nama" => "Jasa Produksi Penangkapan Ikan Di Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03133",
            "nama" => "Jasa Pasca Panen Penangkapan Ikan Di Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03141",
            "nama" => "Jasa Sarana Produksi Penangkapan Ikan Di Perairan Darat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03142",
            "nama" => "Jasa Produksi Penangkapan Ikan Di Perairan Darat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03143",
            "nama" => "Jasa Pasca Panen Penangkapan Ikan Di Perairan Darat"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03151",
            "nama" => "Penangkapan/Pengambilan Ikan Bersirip (Pisces) yang Dilindungi dan/atau Termasuk dalam Appendiks  CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03152",
            "nama" => "Penangkapan/Pengambilan Crustacea yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03153",
            "nama" => "Penangkapan/Pengambilan Mollusca yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03154",
            "nama" => "Penangkapan/Pengambilan Coelenterata yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03155",
            "nama" => "Penangkapan/Pengambilan Echinodermata yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03156",
            "nama" => "Penangkapan/Pengambilan Amphibia yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03157",
            "nama" => "Penangkapan/Pengambilan Reptilia yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03158",
            "nama" => "Penangkapan/Pengambilan Mamalia yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03159",
            "nama" => "Penangkapan/Pengambilan Algae dan Biota Perairan Lainnya yang Dilindungi dan/atau Termasuk dalam  Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03211",
            "nama" => "Pembesaran Pisces/ Ikan Bersirip Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03212",
            "nama" => "Pembenihan Ikan Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03213",
            "nama" => "Budidaya Ikan Hias Air Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03214",
            "nama" => "Budidaya Karang (Coral)"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03215",
            "nama" => "Pembesaran Mollusca Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03216",
            "nama" => "Pembesaran Crustacea Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03217",
            "nama" => "Pembesaran Tumbuhan air Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03219",
            "nama" => "Budidaya Biota Air Laut Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03221",
            "nama" => "Pembesaran Ikan Air Tawar Di Kolam"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03222",
            "nama" => "Pembesaran Ikan Air Tawar Di Karamba Jaring Apung"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03223",
            "nama" => "Pembesaran Ikan Air Tawar Di Karamba"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03224",
            "nama" => "Pembesaran Ikan Air Tawar Di Sawah"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03225",
            "nama" => "Budidaya Ikan Hias Air Tawar"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03226",
            "nama" => "Pembenihan Ikan Air Tawar"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03227",
            "nama" => "Pembesaran Ikan Air Tawar Di Karamba Jaring Tancap"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03229",
            "nama" => "Budidaya Ikan Air Tawar di Media Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03231",
            "nama" => "Jasa Sarana Produksi Budidaya Ikan Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03232",
            "nama" => "Jasa Produksi Budidaya Ikan Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03233",
            "nama" => "Jasa Pasca Panen Budidaya Ikan Laut"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03241",
            "nama" => "Jasa Sarana Produksi Budidaya Ikan Air Tawar"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03242",
            "nama" => "Jasa Produksi Budidaya Ikan Air Tawar"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03243",
            "nama" => "Jasa Pasca Panen Budidaya Ikan Air Tawar"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03251",
            "nama" => "Pembesaran Pisces/Ikan Bersirip Air Payau"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03252",
            "nama" => "Pembenihan Ikan Air Payau"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03253",
            "nama" => "Pembesaran Mollusca Air Payau"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03254",
            "nama" => "Pembesaran Crustacea Air Payau"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03255",
            "nama" => "Pembesaran Tumbuhan Air Payau"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03259",
            "nama" => "Budidaya Biota Air Payau Lainnya"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03261",
            "nama" => "Jasa Sarana Produksi Budidaya Ikan Air Payau"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03262",
            "nama" => "Jasa Produksi Budidaya Ikan Air Payau"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03263",
            "nama" => "Jasa Pasca Panen Budidaya Ikan Air Payau"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03271",
            "nama" => "Pengembangbiakan Ikan Bersirip (Pisces) yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03272",
            "nama" => "Pengembangbiakan Crustacea yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03273",
            "nama" => "Pengembangbiakan Mollusca yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03274",
            "nama" => "Pengembangbiakan Coelenterata yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03275",
            "nama" => "Pengembangbiakan Echinodermata yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03276",
            "nama" => "Pengembangbiakan Amphibia yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03277",
            "nama" => "Pengembangbiakan Reptilia yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03278",
            "nama" => "Pengembangbiakan Mamalia yang Dilindungi dan/atau Termasuk dalam Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 1,
            "kode" => "03279",
            "nama" => "Pengembangbiakan Algae dan Biota Perairan Lainnya yang Dilindungi dan/atau Termasuk dalam  Appendiks CITES"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "05100",
            "nama" => "Pertambangan Batu Bara"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "05200",
            "nama" => "Pertambangan Lignit"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "06100",
            "nama" => "Pertambangan Minyak Bumi"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "06201",
            "nama" => "Pertambangan Gas Alam"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "06202",
            "nama" => "Pengusahaan Tenaga Panas Bumi"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07101",
            "nama" => "Pertambangan Pasir Besi"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07102",
            "nama" => "Pertambangan Bijih Besi"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07210",
            "nama" => "Pertambangan Bijih Uranium Dan Torium"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07291",
            "nama" => "Pertambangan Bijih Timah"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07292",
            "nama" => "Pertambangan Bijih Timah Hitam"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07293",
            "nama" => "Pertambangan Bijih Bauksit"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07294",
            "nama" => "Pertambangan Bijih Tembaga"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07295",
            "nama" => "Pertambangan Bijih Nikel"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07296",
            "nama" => "Pertambangan Bijih Mangan"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07299",
            "nama" => "Pertambangan Bahan Galian Lainnya Yang Tidak Mengandung Bijih Besi"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07301",
            "nama" => "Pertambangan Emas Dan Perak"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "07309",
            "nama" => "Pertambangan Bijih Logam Mulia Lainnya"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08101",
            "nama" => "Penggalian Batu Hias Dan Batu Bangunan"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08102",
            "nama" => "Penggalian Batu Kapur/Gamping"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08103",
            "nama" => "Penggalian Kerikil/Sirtu"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08104",
            "nama" => "Penggalian Pasir"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08105",
            "nama" => "Penggalian Tanah dan Tanah Liat"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08106",
            "nama" => "Penggalian Gips"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08107",
            "nama" => "Penggalian Tras"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08108",
            "nama" => "Penggalian Batu Apung"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08109",
            "nama" => "Penggalian batu, pasir dan tanah liat lainnya"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08911",
            "nama" => "Pertambangan Belerang"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08912",
            "nama" => "Pertambangan Fosfat"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08913",
            "nama" => "Pertambangan Nitrat"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08914",
            "nama" => "Pertambangan Yodium"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08915",
            "nama" => "Pertambangan Potash (Kalium Karbonat)"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08919",
            "nama" => "Pertambangan Mineral, Bahan Kimia Dan Bahan Pupuk Lainnya"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08920",
            "nama" => "Ekstraksi Tanah Gemuk (Peat)"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08930",
            "nama" => "Ekstraksi Garam"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08991",
            "nama" => "Pertambangan Batu Mulia"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08992",
            "nama" => "Penggalian Feldspar dan Kalsit"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08993",
            "nama" => "Pertambangan Aspal Alam"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08994",
            "nama" => "Penggalian Asbes"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08995",
            "nama" => "Penggalian Kuarsa/Pasir Kuarsa"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "08999",
            "nama" => "Pertambangan Dan Penggalian Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "09100",
            "nama" => "Aktivitas Penunjang Pertambangan Minyak Bumi Dan Gas Alam"
            ],
            [
            "jenis_kbli_id" => 2,
            "kode" => "09900",
            "nama" => "Aktivitas Penunjang pertambangan dan penggalian lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10110",
            "nama" => "Kegiatan Rumah Potong Dan Pengepakan Daging Bukan Unggas"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10120",
            "nama" => "Kegiatan Rumah Potong Dan Pengepakan Daging Unggas"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10130",
            "nama" => "Industri Pengolahan dan Pengawetan Produk Daging dan Daging Unggas"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10211",
            "nama" => "Industri Penggaraman/Pengeringan Ikan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10212",
            "nama" => "Industri Pengasapan/Pemanggangan Ikan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10213",
            "nama" => "Industri Pembekuan Ikan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10214",
            "nama" => "Industri Pemindangan Ikan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10215",
            "nama" => "Industri Peragian/Fermentasi Ikan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10216",
            "nama" => "Industri Berbasis Daging Lumatan Dan Surimi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10217",
            "nama" => "Industri Pendinginan/Pengesan Ikan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10219",
            "nama" => "Industri Pengolahan Dan Pengawetan Lainnya untuk Ikan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10221",
            "nama" => "Industri Pengolahan dan Pengawetan Ikan dan Biota Air (Bukan Udang) Dalam Kaleng"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10222",
            "nama" => "Industri Pengolahan dan Pengawetan Udang Dalam Kaleng"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10291",
            "nama" => "Industri Penggaraman/Pengeringan Biota Air Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10292",
            "nama" => "Industri Pengasapan/Pemanggangan Biota Air Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10293",
            "nama" => "Industri Pembekuan Biota Air Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10294",
            "nama" => "Industri Pemindangan Biota Air Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10295",
            "nama" => "Industri Peragian/Fermentasi Biota Air Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10296",
            "nama" => "Industri Berbasis Lumatan Biota Air Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10297",
            "nama" => "Industri Pendinginan/Pengesan Biota Air Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10298",
            "nama" => "Industri pengolahan rumput laut"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10299",
            "nama" => "Industri Pengolahan Dan Pengawetan Lainnya untuk Biota Air Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10311",
            "nama" => "Industri Pengasinan Buah-buahan Dan Sayuran"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10312",
            "nama" => "Industri Pelumatan Buah-buahan Dan Sayuran"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10313",
            "nama" => "Industri Pengeringan Buah-buahan Dan Sayuran"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10314",
            "nama" => "Industri Pembekuan Buah-buahan Dan Sayuran"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10320",
            "nama" => "Industri Pengolahan dan Pengawetan Buah-buahan dan Sayuran Dalam Kaleng"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10330",
            "nama" => "Industri Pengolahan Sari Buah Dan Sayuran"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10391",
            "nama" => "Industri Tempe Kedelai"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10392",
            "nama" => "Industri Tahu Kedelai"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10393",
            "nama" => "Industri Pengolahan dan Pengawetan Kedelai dan Kacang-kacangan Lainnya Selain Tahu dan Tempe"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10399",
            "nama" => "Industri Pengolahan dan Pengawetan Lainnya Buah-buahan Dan Sayuran Bukan Kacang-kacangan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10411",
            "nama" => "Industri Minyak Mentah dan Lemak Nabati"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10412",
            "nama" => "Industri Margarine"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10413",
            "nama" => "Industri Minyak Mentah Dan Lemak Hewani Selain Ikan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10414",
            "nama" => "Industri Minyak Ikan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10415",
            "nama" => "Industri Minyak Goreng Bukan Minyak Kelapa Dan Minyak Kelapa Sawit"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10421",
            "nama" => "Industri Kopra"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10422",
            "nama" => "Industri Minyak Mentah Kelapa"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10423",
            "nama" => "Industri Minyak Goreng Kelapa"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10424",
            "nama" => "Industri Pelet Kelapa"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10431",
            "nama" => "Industri Minyak Mentah Kelapa Sawit (Crude Palm Oil)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10432",
            "nama" => "Industri Pemisahan/Fraksinasi Minyak Mentah Kelapa Sawit dan Minyak Mentah Inti Kelapa Sawit"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10434",
            "nama" => "Industri Pemurnian Minyak Mentah Kelapa Sawit dan Minyak Mentah Inti Kelapa Sawit"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10435",
            "nama" => "Industri Pemisahan/Fraksinasi Minyak Murni Kelapa Sawit"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10436",
            "nama" => "Industri Pemisahan/Fraksinasi Minyak Murni Inti Kelapa Sawit"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10437",
            "nama" => "Industri Minyak Goreng Kelapa Sawit"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10490",
            "nama" => "Industri Minyak Mentah Dan Lemak Nabati Dan Hewani Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10510",
            "nama" => "Industri Pengolahan Susu Segar dan Krim"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10520",
            "nama" => "Industri Pengolahan Susu Bubuk dan Susu Kental"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10531",
            "nama" => "Industri Pengolahan Es Krim"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10532",
            "nama" => "Industri Pengolahan Es Sejenisnya Yang Dapat Dimakan (Bukan Es Batu dan Es Balok)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10590",
            "nama" => "Industri Pengolahan Produk dari Susu Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10611",
            "nama" => "Industri Penggilingan Gandum dan Serelia Lainnya"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35112",
            "nama" => "Transmisi Tenaga Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10612",
            "nama" => "Industri Penggilingan Aneka Kacang (Termasuk leguminous)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10613",
            "nama" => "Industri Penggilingan Aneka Umbi Dan Sayuran (Termasuk Rhizoma)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10614",
            "nama" => "Industri Tepung Campuran dan Adonan Tepung"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10615",
            "nama" => "Industri Makanan Sereal"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10616",
            "nama" => "Industri Tepung Terigu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10621",
            "nama" => "Industri Pati Ubi Kayu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10622",
            "nama" => "Industri Berbagai Macam Pati Palma"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10623",
            "nama" => "Industri Glukosa Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10629",
            "nama" => "Industri Pati dan Produk Pati Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10631",
            "nama" => "Industri Penggilingan Padi Dan Penyosohan Beras"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10632",
            "nama" => "Industri Penggilingan Dan Pembersihan Jagung"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10633",
            "nama" => "Industri Tepung Beras Dan Tepung Jagung"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10634",
            "nama" => "Industri Pati Beras dan Jagung"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35113",
            "nama" => "Distribusi Tenaga Listrik"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35115",
            "nama" => "Pembangkit, Transmisi, Distribusi dan Penjualan Tenaga Listrik Dalam Satu Kesatuan Usaha"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35114",
            "nama" => "Penjualan Tenaga Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10635",
            "nama" => "Industri Pemanis dari Beras dan Jagung"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10636",
            "nama" => "Industri Minyak Dari Jagung dan Beras"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10710",
            "nama" => "Industri Produk Roti Dan Kue"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10721",
            "nama" => "Industri Gula Pasir"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10722",
            "nama" => "Industri Gula Merah"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10723",
            "nama" => "Industri Sirop"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10729",
            "nama" => "Industri Pengolahan Gula Lainnya Bukan Sirop"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10731",
            "nama" => "Industri Kakao"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10732",
            "nama" => "Industri Makanan Dari Cokelat Dan Kembang Gula dari Coklat"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10733",
            "nama" => "Industri Manisan Buah-buahan Dan Sayuran Kering"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10734",
            "nama" => "Industri Kembang Gula"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10739",
            "nama" => "Industri Kembang Gula Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10740",
            "nama" => "Industri Makaroni, Mie Dan Produk Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10750",
            "nama" => "Industri Makanan dan Masakan Olahan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10761",
            "nama" => "Industri Pengolahan Kopi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10762",
            "nama" => "Industri Pengolahan Herbal (herb infusion)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10763",
            "nama" => "Industri Pengolahan Teh"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10771",
            "nama" => "Industri Kecap"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10772",
            "nama" => "Industri Bumbu Masak Dan Penyedap Masakan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10773",
            "nama" => "Industri Produk Masak Dari Kelapa"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10774",
            "nama" => "Industri Pengolahan Garam"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10779",
            "nama" => "Industri Produk Masak Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10791",
            "nama" => "Industri Makanan Bayi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10792",
            "nama" => "Industri Kue Basah"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10793",
            "nama" => "Industri Makanan Dari Kedele Dan Kacang-kacangan Lainnya Bukan Kecap, Tempe Dan Tahu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10794",
            "nama" => "Industri Kerupuk, Keripik, Peyek Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10795",
            "nama" => "Industri Krimer Nabati"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10796",
            "nama" => "Industri Dodol"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10799",
            "nama" => "Industri Produk Makanan Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10801",
            "nama" => "Industri Ransum Makanan Hewan"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35116",
            "nama" => "Pembangkit, Transmisi, dan Penjualan Tenaga Listrik Dalam Satu Kesatuan Usaha"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "10802",
            "nama" => "Industri Konsentrat Makanan Hewan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "11010",
            "nama" => "Industri Minuman Beralkohol Hasil Destilasi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "11020",
            "nama" => "Industri Minuman Beralkohol Hasil Fermentasi Anggur dan Hasil Pertanian Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "11031",
            "nama" => "Industri Minuman Beralkohol Hasil Fermentasi Malt"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "11032",
            "nama" => "Industri Malt"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "11040",
            "nama" => "Industri Minuman Ringan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "11051",
            "nama" => "Industri Air Kemasan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "11052",
            "nama" => "Industri Air Minum Isi Ulang"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "11090",
            "nama" => "Industri Minuman Lainnya"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35118",
            "nama" => "Distribusi, dan Penjualan Tenaga Listrik Dalam Satu Kesatuan Usaha"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "12011",
            "nama" => "Industri Sigaret Kretek Tangan"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35121",
            "nama" => "Pengoperasian Instalasi Penyediaan Tenaga Listrik"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35122",
            "nama" => "Pengoperasian Instalasi Pemanfaatan Tenaga Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "12012",
            "nama" => "Industri Rokok Putih"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35129",
            "nama" => "Aktivitas penunjang tenaga listrik lainnya"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35201",
            "nama" => "Pengadaan Gas Alam Dan Buatan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "12013",
            "nama" => "Industri Sigaret Kretek Mesin"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "12019",
            "nama" => "Industri Rokok Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "12091",
            "nama" => "Industri Pengeringan Dan Pengolahan Tembakau"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "12099",
            "nama" => "Industri Bumbu Rokok Serta Kelengkapan Rokok Lainnya"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35203",
            "nama" => "Pengadaan Gas Bio"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35301",
            "nama" => "Pengadaan Uap/Air Panas Dan Udara Dingin"
            ],
            [
            "jenis_kbli_id" => 4,
            "kode" => "35302",
            "nama" => "Produksi Es"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "36001",
            "nama" => "Penampungan, Penjernihan dan Penyaluran Air Minum"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "36002",
            "nama" => "Penampungan dan Penyaluran Air Baku"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "36003",
            "nama" => "Aktivitas Penunjang Treatment Air"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "37011",
            "nama" => "Pengumpulan Air Limbah Tidak Berbahaya"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "37012",
            "nama" => "Pengumpulan Air Limbah Berbahaya"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "37021",
            "nama" => "Treatment dan Pembuangan Air Limbah Tidak Berbahaya"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "37022",
            "nama" => "Treatment dan Pembuangan Air Limbah Berbahaya"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "38110",
            "nama" => "Pengumpulan limbah dan sampah tidak berbahaya"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "38120",
            "nama" => "Pengumpulan Limbah Berbahaya"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "38211",
            "nama" => "Treatment dan Pembuangan Limbah dan Sampah Tidak Berbahaya"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "38212",
            "nama" => "Produksi Kompos Sampah Organik"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "38220",
            "nama" => "Treatment dan Pembuangan Limbah Berbahaya"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "38301",
            "nama" => "Pemulihan Material Barang Logam"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "38302",
            "nama" => "Pemulihan Material Barang Bukan Logam"
            ],
            [
            "jenis_kbli_id" => 5,
            "kode" => "39000",
            "nama" => "Aktivitas Remediasi dan Pengelolaan Limbah dan Sampah Lainnya"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "41011",
            "nama" => "Konstruksi Gedung Hunian"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "41012",
            "nama" => "Konstruksi Gedung Perkantoran"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "41013",
            "nama" => "Konstruksi Gedung Industri"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "41014",
            "nama" => "Konstruksi Gedung Perbelanjaan"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "41015",
            "nama" => "Konstruksi Gedung Kesehatan"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "41016",
            "nama" => "Konstruksi Gedung Pendidikan"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "41017",
            "nama" => "Konstruksi Gedung Penginapan"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "41018",
            "nama" => "Konstruksi Gedung Tempat Hiburan dan Olahraga"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "41019",
            "nama" => "Konstruksi Gedung Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13111",
            "nama" => "Industri Persiapan Serat Tekstil"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13112",
            "nama" => "Industri Pemintalan Benang"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "41020",
            "nama" => "Jasa Pekerjaan Konstruksi Prapabrikasi Bangunan Gedung"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13113",
            "nama" => "Industri Pemintalan Benang Jahit"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42101",
            "nama" => "Konstruksi Bangunan Sipil Jalan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13121",
            "nama" => "Industri Pertenunan (Bukan Pertenunan Karung Goni Dan Karung Lainnya)"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42102",
            "nama" => "Konstruksi Bangunan Sipil Jembatan, Jalan Layang, Fly Over, dan Underpass"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13122",
            "nama" => "Industri Kain Tenun Ikat"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13123",
            "nama" => "Industri Bulu Tiruan Tenunan"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42103",
            "nama" => "Konstruksi Jalan Rel"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42104",
            "nama" => "Konstruksi Terowongan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13131",
            "nama" => "Industri Penyempurnaan Benang"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13132",
            "nama" => "Industri Penyempurnaan Kain"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42201",
            "nama" => "Konstruksi Jaringan Irigasi dan Drainase"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13133",
            "nama" => "Industri Pencetakan Kain"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42202",
            "nama" => "Konstruksi Bangunan Sipil Pengolahan Air Bersih"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13134",
            "nama" => "Industri Batik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13911",
            "nama" => "Industri Kain Rajutan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13912",
            "nama" => "Industri Kain Sulaman"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42203",
            "nama" => "Konstruksi Bangunan Sipil Prasarana dan Sarana Sistem Pengolahan Limbah Padat, Cair, dan Gas"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13913",
            "nama" => "Industri Bulu Tiruan Rajutan"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42204",
            "nama" => "Konstruksi Bangunan Sipil Elektrikal"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42205",
            "nama" => "Konstruksi Bangunan Sipil Telekomunikasi untuk Prasarana Transportasi"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42206",
            "nama" => "Konstruksi Sentral Telekomunikasi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13921",
            "nama" => "Industri Barang Jadi Tekstil Untuk Keperluan Rumah Tangga"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42207",
            "nama" => "Pembuatan/Pengeboran Sumur Air Tanah"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42209",
            "nama" => "Konstruksi Jaringan Irigasi, Komunikasi, dan Limbah Lainnya"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42911",
            "nama" => "Konstruksi Bangunan Prasarana Sumber Daya Air"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42912",
            "nama" => "Konstruksi Bangunan Pelabuhan Bukan Perikanan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13922",
            "nama" => "Industri Barang Jadi Tekstil Sulaman"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42913",
            "nama" => "Konstruksi Bangunan Pelabuhan Perikanan"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42914",
            "nama" => "Pengerukan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13923",
            "nama" => "Industri Bantal dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42915",
            "nama" => "Konstruksi Bangunan Sipil Minyak dan Gas Bumi"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42916",
            "nama" => "Konstruksi Bangunan Sipil Pertambangan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13924",
            "nama" => "Industri Barang Jadi Rajutan dan Sulaman"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13925",
            "nama" => "Industri Karung Goni"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42917",
            "nama" => "Konstruksi Bangunan Sipil Panas Bumi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13926",
            "nama" => "Industri Karung Bukan Goni"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13929",
            "nama" => "Industri Barang Jadi Tekstil Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13930",
            "nama" => "Industri Karpet dan Permadani"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42918",
            "nama" => "Konstruksi Bangunan Sipil Fasilitas Olah Raga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13941",
            "nama" => "Industri Tali"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13942",
            "nama" => "Industri Barang Dari Tali"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42919",
            "nama" => "Konstruksi Bangunan Sipil Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13991",
            "nama" => "Industri Kain Pita (Narrow Fabric)"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42921",
            "nama" => "Konstruksi Reservoir Pembangkit Listrik Tenaga Air"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13992",
            "nama" => "Industri Yang Menghasilkan Kain Keperluan Industri"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13993",
            "nama" => "Industri Non Woven (bukan Tenunan)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13994",
            "nama" => "Industri Kain Ban"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13995",
            "nama" => "Industri Kapuk"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13996",
            "nama" => "Industri Kain Tulle dan Kain Jaring"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "13999",
            "nama" => "Industri Tekstil Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42922",
            "nama" => "Jasa Pekerjaan Konstruksi Pelindung Pantai"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "14111",
            "nama" => "Industri Pakaian Jadi (Konveksi) Dari Tekstil"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "14112",
            "nama" => "Industri Pakaian Jadi (Konveksi) Dari Kulit"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "14120",
            "nama" => "Penjahitan Dan Pembuatan Pakaian Sesuai Pesanan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "14131",
            "nama" => "Industri Perlengkapan Pakaian Dari Tekstil"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "14132",
            "nama" => "Industri Perlengkapan Pakaian Dari Kulit"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "14200",
            "nama" => "Industri Pakaian Jadi dan Barang Dari Kulit Berbulu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "14301",
            "nama" => "Industri Pakaian Jadi Rajutan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "14302",
            "nama" => "Industri Pakaian Jadi Sulaman/Bordir"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42923",
            "nama" => "Konstruksi Bangunan Sipil Fasilitas Pengolahan Produk Kimia, Petrokimia, Farmasi, dan Industri Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15111",
            "nama" => "Industri Pengawetan Kulit"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42924",
            "nama" => "Konstruksi Bangunan Sipil Fasilitas Militer dan Peluncuran Satelit"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42929",
            "nama" => "Konstruksi Khusus Bangunan Sipil Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "42930",
            "nama" => "Jasa Pekerjaan Konstruksi Prapabrikasi Bangunan Sipil"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43110",
            "nama" => "Pembongkaran"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15112",
            "nama" => "Industri Penyamakan Kulit"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15113",
            "nama" => "Industri Pencelupan Kulit Bulu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15114",
            "nama" => "Industri Kulit Komposisi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15121",
            "nama" => "Industri Barang Dari Kulit Dan Kulit Komposisi Untuk Keperluan Pribadi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "14303",
            "nama" => "Industri Rajutan Kaos Kaki dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15122",
            "nama" => "Industri Barang Dari Kulit Dan Kulit Komposisi Untuk Keperluan Teknik/Industri"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43120",
            "nama" => "Penyiapan Lahan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15123",
            "nama" => "Industri Barang Dari Kulit Dan Kulit Komposisi Untuk Keperluan Hewan"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43211",
            "nama" => "Instalasi Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15129",
            "nama" => "Industri Barang Dari Kulit Dan Kulit Komposisi Untuk Keperluan Lainnya"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43212",
            "nama" => "Instalasi Telekomunikasi"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43213",
            "nama" => "Instalasi Elektronika"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43214",
            "nama" => "Jasa Instalasi Konstruksi Navigasi Laut, Sungai, dan Udara"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43215",
            "nama" => "Instalasi Sinyal Dan Telekomunikasi Kereta Api"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43216",
            "nama" => "Instalasi Sinyal Dan Rambu-rambu Jalan Raya"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43221",
            "nama" => "Instalasi Saluran Air (Plambing)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15201",
            "nama" => "Industri Alas Kaki Untuk Keperluan Sehari-hari"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43222",
            "nama" => "Instalasi Pemanas Dan Geotermal"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43223",
            "nama" => "Instalasi Minyak Dan Gas"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15202",
            "nama" => "Industri Sepatu Olahraga"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43224",
            "nama" => "Instalasi Pendingin Dan Ventilasi Udara"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15203",
            "nama" => "Industri Sepatu Teknik Lapangan/Keperluan Industri"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43291",
            "nama" => "Instalasi Mekanikal"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "15209",
            "nama" => "Industri Alas Kaki Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16101",
            "nama" => "Industri Penggergajian Kayu"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43292",
            "nama" => "Instalasi Meteorologi, Klimatologi Dan Geofisika"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16102",
            "nama" => "Industri Pengawetan Kayu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16103",
            "nama" => "Industri Pengawetan Rotan, Bambu Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16104",
            "nama" => "Industri Pengolahan Rotan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16105",
            "nama" => "Industri Partikel Kayu dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16211",
            "nama" => "Industri Kayu Lapis"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43293",
            "nama" => "Instalasi Fasilitas Sumber Radiasi Pengion"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43294",
            "nama" => "Instalasi Nuklir"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43299",
            "nama" => "Instalasi Konstruksi Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16212",
            "nama" => "Industri Kayu Lapis Laminasi, Termasuk Decorative Plywood"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43301",
            "nama" => "Pengerjaan Pemasangan Kaca Dan Alumunium"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16213",
            "nama" => "Industri Panel Kayu Lainnya"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43302",
            "nama" => "Pengerjaan Lantai, Dinding, Peralatan Saniter Dan Plafon"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16214",
            "nama" => "Industri Veneer"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16215",
            "nama" => "Industri Kayu Laminasi"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43303",
            "nama" => "Pengecatan"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43304",
            "nama" => "Dekorasi Interior"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16221",
            "nama" => "Industri Barang Bangunan Dari Kayu"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43305",
            "nama" => "Dekorasi Eksterior"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43309",
            "nama" => "Penyelesaian Konstruksi Bangunan Lainnya"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43901",
            "nama" => "Pemasangan Pondasi Dan Tiang Pancang"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16222",
            "nama" => "Industri Bangunan Prafabrikasi Dari Kayu"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43902",
            "nama" => "Pemasangan Perancah (Steiger)"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43903",
            "nama" => "Pemasangan Rangka dan Atap/Roof Covering"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16230",
            "nama" => "Industri Wadah Dari Kayu"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43904",
            "nama" => "Pemasangan Kerangka Baja"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43905",
            "nama" => "Penyewaan Alat Konstruksi Dengan Operator"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16292",
            "nama" => "Industri barang Anyaman Dari Tanaman Bukan Rotan Dan Bambu"
            ],
            [
            "jenis_kbli_id" => 6,
            "kode" => "43909",
            "nama" => "Konstruksi Khusus Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16293",
            "nama" => "Industri Kerajinan Ukiran Dari Kayu Bukan Mebeller"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16294",
            "nama" => "Industri Alat Dapur Dari Kayu, Rotan Dan Bambu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16295",
            "nama" => "Industri Kayu Bakar dan Pelet Kayu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "16299",
            "nama" => "Industri Barang Dari Kayu, Rotan, Gabus Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "17011",
            "nama" => "Industri Bubur Kertas (Pulp)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "17012",
            "nama" => "Industri Kertas Budaya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "17013",
            "nama" => "Industri Kertas Berharga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "17014",
            "nama" => "Industri Kertas Khusus"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "17019",
            "nama" => "Industri Kertas Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "17021",
            "nama" => "Industri Kertas dan Papan Kertas Bergelombang"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "17022",
            "nama" => "Industri Kemasan Dan Kotak Dari Kertas Dan Karton"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "17091",
            "nama" => "Industri Kertas Tissue"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "17099",
            "nama" => "Industri Barang Dari Kertas Dan Papan Kertas Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "18111",
            "nama" => "Industri Pencetakan Umum"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "18112",
            "nama" => "Industri Pencetakan Khusus"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "18113",
            "nama" => "Industri Pencetakan 3D Printing"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "18120",
            "nama" => "Kegiatan Jasa Penunjang Pencetakan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "18201",
            "nama" => "Reproduksi Media Rekaman Suara dan Piranti Lunak"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "18202",
            "nama" => "Reproduksi Media Rekaman Film Dan Video"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "19100",
            "nama" => "Industri produk dari batu bara"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "19211",
            "nama" => "Industri Bahan Bakar Dari Pemurnian Dan Pengilangan Minyak Bumi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "19212",
            "nama" => "Industri Pembuatan Minyak Pelumas"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "19213",
            "nama" => "Industri Pengolahan Kembali Minyak Pelumas Bekas"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "19214",
            "nama" => "Industri Pengolahan Minyak Pelumas Bekas Menjadi Bahan Bakar"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "19291",
            "nama" => "Industri Produk Dari Hasil Kilang Minyak Bumi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "19292",
            "nama" => "Industri Briket Batu Bara"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20111",
            "nama" => "Industri Kimia Dasar Anorganik Khlor Dan Alkali"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20112",
            "nama" => "Industri Kimia Dasar Anorganik Gas Industri"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20113",
            "nama" => "Industri Kimia Dasar Anorganik Pigmen"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20114",
            "nama" => "Industri Kimia Dasar Anorganik Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20115",
            "nama" => "Industri Kimia Dasar Organik Yang Bersumber Dari Hasil Pertanian"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20116",
            "nama" => "Industri Kimia Dasar Organik Untuk Bahan Baku Zat Warna Dan Pigmen, Zat Warna Dan Pigmen"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20117",
            "nama" => "Industri Kimia Dasar Organik Yang Bersumber Dari Minyak Bumi, Gas Alam Dan Batu Bara"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20118",
            "nama" => "Industri Kimia Dasar Organik Yang Menghasilkan Bahan Kimia Khusus"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20119",
            "nama" => "Industri Kimia Dasar Organik Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20121",
            "nama" => "Industri Pupuk Alam/Non Sintetis Hara Makro Primer"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20122",
            "nama" => "Industri Pupuk Buatan Tunggal Hara Makro Primer"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20123",
            "nama" => "Industri Pupuk Buatan Majemuk Hara Makro Primer"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20124",
            "nama" => "Industri Pupuk Buatan Campuran Hara Makro Primer"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20125",
            "nama" => "Industri Pupuk Hara Makro Sekunder"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20126",
            "nama" => "Industri Pupuk Hara Mikro"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20127",
            "nama" => "Industri Pupuk Pelengkap"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20128",
            "nama" => "Industri Media Tanam"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20129",
            "nama" => "Industri Pupuk Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20131",
            "nama" => "Industri Damar Buatan (Resin Sintetis) Dan Bahan Baku Plastik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20132",
            "nama" => "Industri Karet Buatan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20211",
            "nama" => "Industri Bahan Baku Pemberantas Hama (Bahan Aktif)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20212",
            "nama" => "Industri Pemberantas Hama (Formulasi)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20213",
            "nama" => "Industri Zat Pengatur Tumbuh"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20214",
            "nama" => "Industri Bahan Amelioran (Pembenah Tanah)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20221",
            "nama" => "Industri Cat dan Tinta Cetak"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20222",
            "nama" => "Industri Pernis (Termasuk Mastik)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20223",
            "nama" => "Industri Lak"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20231",
            "nama" => "Industri Sabun Dan Bahan Pembersih Keperluan Rumah Tangga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20232",
            "nama" => "Industri Kosmetik Untuk Manusia, Termasuk Pasta Gigi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20233",
            "nama" => "Industri Kosmetik Untuk Hewan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20234",
            "nama" => "Industri Perekat Gigi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20291",
            "nama" => "Industri Perekat/Lem"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20292",
            "nama" => "Industri Bahan Peledak"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20293",
            "nama" => "Industri Tinta"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20294",
            "nama" => "Industri Minyak Atsiri"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20295",
            "nama" => "Industri Korek Api"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20296",
            "nama" => "Industri Minyak Atsiri Rantai Tengah"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20299",
            "nama" => "Industri Barang Kimia Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20301",
            "nama" => "Industri Serat/Benang/Strip Filamen Buatan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "20302",
            "nama" => "Industri Serat Stapel Buatan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "21011",
            "nama" => "Industri Bahan Farmasi Untuk Manusia"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "21012",
            "nama" => "Industri Produk Farmasi Untuk Manusia"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "21013",
            "nama" => "Industri Produk Farmasi Untuk Hewan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "21014",
            "nama" => "Industri Bahan Farmasi Untuk Hewan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "21015",
            "nama" => "Industri Alat Kesehatan dalam Subgolongan 2101"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "21021",
            "nama" => "Industri Bahan Baku Obat Tradisional untuk Manusia"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "21022",
            "nama" => "Industri Produk Obat Tradisional untuk Manusia"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "21023",
            "nama" => "Industri Produk Obat Tradisional Untuk Hewan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "21024",
            "nama" => "Industri Bahan Baku Obat Tradisional Untuk Hewan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22111",
            "nama" => "Industri Ban Luar Dan Ban Dalam"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22112",
            "nama" => "Industri Vulkanisir Ban"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22121",
            "nama" => "Industri Pengasapan Karet"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22122",
            "nama" => "Industri Remilling Karet"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22123",
            "nama" => "Industri Karet Remah (Crumb Rubber)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22191",
            "nama" => "Industri Barang Dari Karet Untuk Keperluan Rumah Tangga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22192",
            "nama" => "Industri Barang Dari Karet Untuk Keperluan Industr"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22193",
            "nama" => "Industri Barang dari Karet untuk Keperluan Infrastruktur"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22194",
            "nama" => "Industri Barang Dari Karet Untuk Kesehatan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22199",
            "nama" => "Industri Barang Dari Karet Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22210",
            "nama" => "Industri Barang dari Plastik Untuk Bangunan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22220",
            "nama" => "Industri Barang Dari Plastik Untuk Pengemasan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22230",
            "nama" => "Industri Pipa Plastik Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22291",
            "nama" => "Industri Barang Plastik Lembaran"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22292",
            "nama" => "Industri Perlengkapan Dan Peralatan Rumah Tangga (tidak Termasuk Furnitur)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22293",
            "nama" => "Industri Barang Dan Peralatan Teknik/Industri Dari Plastik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "22299",
            "nama" => "Industri Barang Plastik Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23111",
            "nama" => "Industri Kaca Lembaran"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23112",
            "nama" => "Industri Kaca Pengaman"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23119",
            "nama" => "Industri Kaca Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23121",
            "nama" => "Industri Perlengkapan Dan Peralatan Rumah Tangga Dari Kaca"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23122",
            "nama" => "Industri Alat-alat Laboratorium Non Klinis, Farmasi Dan Kesehatan Dari Kaca"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23123",
            "nama" => "Industri Kemasan Dari Kaca"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23124",
            "nama" => "Industri Alat Laboratorium Klinis dari Kaca"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23129",
            "nama" => "Industri Barang Lainnya Dari Kaca"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23911",
            "nama" => "Industri Bata, Mortar, Semen, dan Sejenisnya yang Tahan Api"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23919",
            "nama" => "Industri Barang Tahan Api Dari Tanah Liat/Keramik Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23921",
            "nama" => "Industri Batu Bata Dari Tanah Liat/Keramik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23922",
            "nama" => "Industri Genteng Dari Tanah Liat/Keramik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23923",
            "nama" => "Industri Peralatan Saniter Dari Porselen"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23929",
            "nama" => "Industri Bahan Bangunan Dari Tanah Liat/Keramik Bukan Batu Bata Dan Genteng"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23931",
            "nama" => "Industri Perlengkapan Rumah Tangga Dari Porselen"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23932",
            "nama" => "Industri Perlengkapan Rumah Tangga Dari Tanah Liat/Keramik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23933",
            "nama" => "Industri Alat Laboratorium Dan Alat Listrik/Teknik Dari Porselen"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23939",
            "nama" => "Industri Barang Tanah Liat/Keramik dan Porselen Lainnya Bukan Bahan Bangunan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23941",
            "nama" => "Industri Semen"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23942",
            "nama" => "Industri Kapur"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23943",
            "nama" => "Industri Gips"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23951",
            "nama" => "Industri Barang Dari Semen"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23952",
            "nama" => "Industri Barang Dari Kapur"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23953",
            "nama" => "Industri Barang Dari Semen Dan Kapur Untuk Konstruksi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23954",
            "nama" => "Industri Barang dari Gips Untuk Konstruksi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23955",
            "nama" => "Industri Barang Dari Asbes Untuk Keperluan Bahan Bangunan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23956",
            "nama" => "Industri Barang Dari Asbes Untuk Keperluan Industri"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23957",
            "nama" => "Industri Mortar atau Beton Siap Pakai"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23959",
            "nama" => "Industri Barang Dari Semen, Kapur, Gips dan Asbes Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23961",
            "nama" => "Industri Barang Dari Marmer Dan Granit Untuk Keperluan Rumah Tangga Dan Pajangan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23962",
            "nama" => "Industri Barang Dari Marmer Dan Granit Untuk Keperluan Bahan Bangunan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23963",
            "nama" => "Industri Barang Dari Batu Untuk Keperluan Rumah Tangga, Pajangan, dan Bahan Bangunan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23969",
            "nama" => "Industri Barang Dari Marmer, Granit Dan Batu Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "23990",
            "nama" => "Industri Barang Galian Bukan Logam Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "24101",
            "nama" => "Industri Besi Dan Baja Dasar (Iron And Steel Making)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "24102",
            "nama" => "Industri Penggilingan Baja (Steel Rolling)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "24103",
            "nama" => "Industri Pipa Dan Sambungan Pipa Dari Baja Dan Besi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "24201",
            "nama" => "Industri Pembuatan Logam Dasar Mulia"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "24202",
            "nama" => "Industri Pembuatan Logam Dasar Bukan Besi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "24203",
            "nama" => "Industri Penggilingan Logam Bukan Besi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "24204",
            "nama" => "Industri Ekstrusi Logam Bukan Besi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "24205",
            "nama" => "Industri Pipa Dan Sambungan Pipa Dari Logam Bukan Besi Dan Baja"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "24206",
            "nama" => "Industri Pengolahan Uranium dan Bijih Uranium"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "24310",
            "nama" => "Industri Pengecoran Besi Dan Baja"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "24320",
            "nama" => "Industri Pengecoran Logam Bukan Besi Dan Baja"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25111",
            "nama" => "Industri Barang Dari Logam Bukan Aluminium Siap Pasang Untuk Bangunan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25112",
            "nama" => "Industri Barang Dari Logam Aluminium Siap Pasang Untuk Bangunan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25113",
            "nama" => "Industri Konstruksi Berat Siap Pasang Dari Baja Untuk Bangunan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25119",
            "nama" => "Industri Barang Dari Logam Siap Pasang Untuk Konstruksi Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25120",
            "nama" => "Industri Tangki, Tandon Air Dan Wadah Dari Logam"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25130",
            "nama" => "Industri Generator Uap, Bukan Ketel Pemanas"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25200",
            "nama" => "Industri Senjata Dan Amunisi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25910",
            "nama" => "Industri Penempaan, Pengepresan, Pencetakan Dan Pembentukan Logam; Metalurgi Bubuk"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25920",
            "nama" => "Jasa Industri Untuk Berbagai Pengerjaan Khusus Logam Dan Barang Dari Logam"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25931",
            "nama" => "Industri Alat Potong dan Perkakas Tangan Untuk Pertanian"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25932",
            "nama" => "Industri Alat Potong dan Perkakas Tangan Pertukangan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25933",
            "nama" => "Industri Alat Potong Dan Perkakas Tangan Yang Digunakan Dalam Rumah Tangga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25934",
            "nama" => "Industri Peralatan Umum"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25940",
            "nama" => "Industri Ember, Kaleng, Drum Dan Wadah Sejenis Dari Logam"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25951",
            "nama" => "Industri Barang Dari Kawat"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25952",
            "nama" => "Industri Paku, Mur Dan Baut"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25991",
            "nama" => "Industri Brankas, Filling Kantor dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25992",
            "nama" => "Industri Peralatan Dapur Dan Peralatan Meja Dari Logam"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25993",
            "nama" => "Industri Keperluan Rumah Tangga Dari Logam Bukan Peralatan Dapur dan Peralatan Meja"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25994",
            "nama" => "Industri Pembuatan Profil"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25995",
            "nama" => "Industri Lampu Dari Logam"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "25999",
            "nama" => "Industri Barang Logam Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26110",
            "nama" => "Industri Tabung Elektron Dan Konektor Elektronik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26120",
            "nama" => "Industri Semi Konduktor Dan Komponen Elektronik Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26210",
            "nama" => "Industri Komputer Dan/Atau Perakitan Komputer"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26220",
            "nama" => "Industri Perlengkapan Komputer"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26310",
            "nama" => "Industri Peralatan Telepon Dan Faksimili"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26320",
            "nama" => "Industri Peralatan Komunikasi Tanpa kabel (Wireless)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26391",
            "nama" => "Industri Kartu Cerdas (Smart Card)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26399",
            "nama" => "Industri Peralatan Komunikasi Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26410",
            "nama" => "Industri Televisi Dan/Atau Perakitan Televisi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26420",
            "nama" => "Industri Peralatan Perekam, Penerima dan Pengganda Audio Dan Video, Bukan Industri Televisi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26490",
            "nama" => "Industri Peralatan Audio dan Video Elektronik Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26511",
            "nama" => "Industri Alat Ukur Dan Alat Uji Manual"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26512",
            "nama" => "Industri Alat Ukur Dan Alat Uji Elektrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26513",
            "nama" => "Industri Alat Ukur Dan Alat Uji Elektronik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26514",
            "nama" => "Industri Alat Uji Dalam Proses Industri"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26520",
            "nama" => "Industri Alat Ukur Waktu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26601",
            "nama" => "Industri Peralatan Iradiasi/Sinar X, Perlengkapan Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26602",
            "nama" => "Industri Peralatan Elektromedikal dan Elektroterapi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26710",
            "nama" => "Industri Peralatan Fotografi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26791",
            "nama" => "Industri Kamera Cinematografi Proyektor Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26792",
            "nama" => "Industri Teropong Dan Instrumen Optik Bukan Kaca Mata"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "26800",
            "nama" => "Industri Media Magnetik dan Media Optik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27111",
            "nama" => "Industri Motor Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27112",
            "nama" => "Industri Mesin Pembangkit Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27113",
            "nama" => "Industri Pengubah Tegangan (Transformator), Pengubah Arus (Rectifier) Dan Pengontrol Tegangan  (Voltage Stabilizer)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27120",
            "nama" => "Industri Peralatan Pengontrol dan Pendistribusian Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27201",
            "nama" => "Industri Batu Baterai"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27202",
            "nama" => "Industri Akumulator Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27203",
            "nama" => "Industri Baterai Untuk Kendaraan Bermotor Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27310",
            "nama" => "Industri Kabel Serat Optik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27320",
            "nama" => "Industri Kabel Listrik Dan Elektronik Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27330",
            "nama" => "Industri Perlengkapan Kabel"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27401",
            "nama" => "Industri Bola Lampu Pijar, Lampu Penerangan Terpusat Dan Lampu Ultra Violet"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27402",
            "nama" => "Industri Lampu Tabung Gas (Lampu Pembuang Listrik)"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27403",
            "nama" => "Industri Peralatan Penerangan Untuk Alat Transportasi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27404",
            "nama" => "Industri Lampu LED"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27409",
            "nama" => "Industri Peralatan Penerangan Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27510",
            "nama" => "Industri Peralatan Listrik Rumah Tangga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27520",
            "nama" => "Industri Peralatan Elektrotermal Rumah Tangga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27530",
            "nama" => "Industri Peralatan Pemanas Dan Masak Bukan Listrik Rumah Tangga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "27900",
            "nama" => "Industri Peralatan Listrik Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28111",
            "nama" => "Industri Mesin Uap, Turbin Dan Kincir"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28112",
            "nama" => "Industri Motor Pembakaran Dalam"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28113",
            "nama" => "Industri Komponen Dan Suku Cadang Mesin Dan Turbin"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28120",
            "nama" => "Industri Peralatan Tenaga Zat Cair dan Gas"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28130",
            "nama" => "Industri Pompa Lainnya, Kompresor, Kran dan Klep/Katup"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28140",
            "nama" => "Industri Bearing, Roda Gigi dan Elemen Penggerak Mesin"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28151",
            "nama" => "Industri Oven, Perapian dan Tungku Pembakar Sejenis Yang Tidak Menggunakan Arus Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28152",
            "nama" => "Industri Oven, Perapian dan Tungku Pembakar Sejenis Yang Menggunakan Arus Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28160",
            "nama" => "Industri Alat Pengangkat Dan Pemindah"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28171",
            "nama" => "Industri Mesin Kantor Dan Akuntansi Manual"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28172",
            "nama" => "Industri Mesin Kantor Dan Akuntansi Elektrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28173",
            "nama" => "Industri Mesin Kantor Dan Akuntansi Elektronik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28174",
            "nama" => "Industri Mesin Fotocopi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28179",
            "nama" => "Industri Mesin dan Peralatan Kantor Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28180",
            "nama" => "Industri Perkakas Tangan Yang Digerakkan Tenaga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28191",
            "nama" => "Industri Mesin Untuk Pembungkus, Pembotolan Dan Pengalengan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28192",
            "nama" => "Industri Mesin Timbangan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28193",
            "nama" => "Industri Mesin Pendingin"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28199",
            "nama" => "Industri Mesin Untuk Keperluan Umum Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28210",
            "nama" => "Industri Mesin Pertanian Dan Kehutanan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28221",
            "nama" => "Industri Mesin dan Perkakas Mesin Untuk Pengerjaan Logam"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28222",
            "nama" => "Industri Mesin dan Perkakas Mesin Untuk Pengerjaan Kayu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28223",
            "nama" => "Industri Mesin dan Perkakas Mesin Untuk Pengerjaan Bahan Bukan Logam Dan Kayu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28224",
            "nama" => "Industri Mesin dan Perkakas Mesin Untuk Pengelasan Yang Menggunakan Arus Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28230",
            "nama" => "Industri Mesin Metalurgi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28240",
            "nama" => "Industri Mesin Penambangan, Penggalian Dan Konstruksi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28250",
            "nama" => "Industri Mesin Pengolahan Makanan, Minuman Dan Tembakau"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28261",
            "nama" => "Industri Kabinet Mesin Jahit"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28262",
            "nama" => "Industri Mesin Jahit Serta Mesin Cuci Dan Mesin Pengering Untuk Keperluan Niaga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28263",
            "nama" => "Industri Mesin Tekstil"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28264",
            "nama" => "Industri Jarum Mesin Jahit, Rajut, Bordir Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28265",
            "nama" => "Industri Mesin Penyiapan Dan Pembuatan Produk Kulit"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28291",
            "nama" => "Industri Mesin Percetakan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28292",
            "nama" => "Industri Mesin Pabrik Kertas"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "28299",
            "nama" => "Industri Mesin Keperluan Khusus Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "29101",
            "nama" => "Industri Kendaraan Bermotor Roda Empat Atau Lebih"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "29102",
            "nama" => "Industri Kendaraan Multiguna Pedesaan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "29200",
            "nama" => "Industri Karoseri Kendaraan Bermotor Roda Empat Atau Lebih dan Industri Trailer dan Semi Trailer"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "29300",
            "nama" => "Industri Suku Cadang dan Aksesori Kendaraan Bermotor Roda Empat Atau Lebih"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30111",
            "nama" => "Industri Kapal Dan Perahu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30112",
            "nama" => "Industri Bangunan Lepas Pantai Dan Bangunan Terapung"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30113",
            "nama" => "Industri Peralatan, Perlengkapan Dan Bagian Kapal"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30120",
            "nama" => "Industri Pembuatan Kapal dan Perahu Untuk Tujuan Wisata atau Rekreasi dan Olahraga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30200",
            "nama" => "Industri Lokomotif dan Gerbong Kereta"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30300",
            "nama" => "Industri Pesawat Terbang Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30400",
            "nama" => "Industri Kendaraan Perang"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30911",
            "nama" => "Industri Sepeda Motor Roda Dua Dan Tiga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30912",
            "nama" => "Industri Komponen Dan Perlengkapan Sepeda Motor Roda Dua Dan Tiga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30921",
            "nama" => "Industri Sepeda Dan Kursi Roda Termasuk Becak"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30922",
            "nama" => "Industri Perlengkapan Sepeda Dan Kursi Roda Termasuk Becak"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "30990",
            "nama" => "Industri Alat Angkutan Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "31001",
            "nama" => "Industri Furnitur Dari Kayu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "31002",
            "nama" => "Industri Furnitur Dari Rotan Dan Atau Bambu"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "31003",
            "nama" => "Industri Furnitur Dari Plastik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "31004",
            "nama" => "Industri Furnitur Dari Logam"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "31009",
            "nama" => "Industri Furnitur Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32111",
            "nama" => "Industri Permata"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32112",
            "nama" => "Industri Barang Perhiasan Dari Logam Mulia Untuk Keperluan Pribadi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32113",
            "nama" => "Industri Barang Perhiasan Dari Logam Mulia Bukan Untuk Keperluan Pribadi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32114",
            "nama" => "Industri Barang Dari Logam Mulia Untuk Keperluan Teknik Dan Atau Laboratorium"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32115",
            "nama" => "Industri Perhiasan Mutiara"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32119",
            "nama" => "Industri Barang Lainnya Dari Logam Mulia"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32120",
            "nama" => "Industri Perhiasan Imitasi dan Barang Sejenis"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32201",
            "nama" => "Industri Alat Musik Tradisional"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32202",
            "nama" => "Industri Alat Musik Bukan Tradisional"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32300",
            "nama" => "Industri Alat Olahraga"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32401",
            "nama" => "Industri Alat Permainan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32402",
            "nama" => "Industri Mainan Anak-anak"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32501",
            "nama" => "Industri Furnitur Untuk Operasi, Perawatan Kedokteran Dan Kedokteran Gigi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32502",
            "nama" => "Industri Peralatan Kedokteran Dan Kedokteran Gigi, Perlengkapan Orthopaedic Dan Prosthetic"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32503",
            "nama" => "Industri Kaca Mata"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32509",
            "nama" => "Industri Peralatan Kedokteran Dan Kedokteran Gigi Serta Perlengkapan Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32901",
            "nama" => "Industri Alat Tulis Dan Gambar Termasuk Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32902",
            "nama" => "Industri Pita Mesin Tulis/Gambar"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32903",
            "nama" => "Industri Kerajinan YTDL"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32904",
            "nama" => "Industri Peralatan Untuk Pelindung Keselamatan"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32905",
            "nama" => "Industri Serat Sabut Kelapa"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32906",
            "nama" => "Industri Produksi Radioisotop"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32907",
            "nama" => "Industri Fabrikasi Elemen Bakar Uranium"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "32909",
            "nama" => "Industri Pengolahan Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33111",
            "nama" => "Reparasi Produk Logam Siap Pasang Untuk Bangunan, Tangki, Tandon Air Dan Generator Uap"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33112",
            "nama" => "Reparasi Produk Senjata Dan Amunisi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33119",
            "nama" => "Reparasi Produk Logam Pabrikasi Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33121",
            "nama" => "Reparasi Mesin Untuk Keperluan Umum"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33122",
            "nama" => "Reparasi Mesin Untuk Keperluan Khusus"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33131",
            "nama" => "Reparasi Alat Ukur, Alat Uji dan Peralatan Navigasi Dan Pengontrol"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33132",
            "nama" => "Reparasi Peralatan Iradiasi, Elektromedis Dan Elektroterapi"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33133",
            "nama" => "Reparasi Peralatan Fotografi Dan Optik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33141",
            "nama" => "Reparasi Motor Listrik, Generator Dan Transformator"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33142",
            "nama" => "Reparasi Baterai Dan Akumulator Listrik"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33149",
            "nama" => "Reparasi Peralatan Listrik Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33151",
            "nama" => "Reparasi Kapal, Perahu Dan Bangunan Terapung"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33152",
            "nama" => "Reparasi Lokomotif Dan Gerbong Kereta"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33153",
            "nama" => "Reparasi Pesawat Terbang"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33159",
            "nama" => "Reparasi Alat Angkutan Lainnya, Bukan Kendaraan Bermotor"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33190",
            "nama" => "Reparasi Peralatan Lainnya"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "33200",
            "nama" => "Instalasi/Pemasangan Mesin dan Peralatan Industri"
            ],
            [
            "jenis_kbli_id" => 3,
            "kode" => "35111",
            "nama" => "Instalasi/Pemasangan Mesin dan Peralatan Industri"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45101",
            "nama" => "Perdagangan Besar Mobil Baru"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45102",
            "nama" => "Perdagangan Besar Mobil Bekas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45103",
            "nama" => "Perdagangan Eceran Mobil Baru"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45104",
            "nama" => "Perdagangan Eceran Mobil Bekas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45201",
            "nama" => "Reparasi Mobil"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45202",
            "nama" => "Pencucian Dan Salon Mobil"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45301",
            "nama" => "Perdagangan Besar Suku Cadang Dan Aksesori Mobil"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45302",
            "nama" => "Perdagangan Eceran Suku Cadang Dan Aksesori Mobil"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45401",
            "nama" => "Perdagangan Besar Sepeda Motor Baru"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45402",
            "nama" => "Perdagangan Besar Sepeda Motor Bekas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45403",
            "nama" => "Perdagangan Eceran Sepeda Motor Baru"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45404",
            "nama" => "Perdagangan Eceran Sepeda Motor Bekas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45405",
            "nama" => "Perdagangan Besar Suku Cadang Sepeda Motor Dan Aksesorinya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45406",
            "nama" => "Perdagangan Eceran Suku Cadang Sepeda Motor Dan Aksesorinya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "45407",
            "nama" => "Reparasi Dan Perawatan Sepeda Motor"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46100",
            "nama" => "Perdagangan Besar Atas Dasar Balas Jasa (Fee) Atau Kontrak"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46201",
            "nama" => "Perdagangan Besar Padi Dan Palawija"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46202",
            "nama" => "Perdagangan Besar Buah Yang Mengandung Minyak"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46203",
            "nama" => "Perdagangan Besar Bunga Dan Tanaman Hias"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46204",
            "nama" => "Perdagangan Besar Tembakau Rajangan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46205",
            "nama" => "Perdagangan Besar Binatang Hidup"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46206",
            "nama" => "Perdagangan Besar Hasil Perikanan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46207",
            "nama" => "Perdagangan Besar Hasil Kehutanan Dan Perburuan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46208",
            "nama" => "Perdagangan Besar Kulit Dan Kulit Jangat"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46209",
            "nama" => "Perdagangan Besar Hasil Pertanian Dan Hewan Hidup Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46311",
            "nama" => "Perdagangan Besar Beras"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46312",
            "nama" => "Perdagangan Besar Buah-buahan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46313",
            "nama" => "Perdagangan Besar Sayuran"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46314",
            "nama" => "Perdagangan Besar Kopi, Teh Dan Kakao"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46315",
            "nama" => "Perdagangan Besar Minyak dan Lemak Nabati"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46319",
            "nama" => "Perdagangan Besar Bahan Makanan Dan Minuman Hasil Pertanian Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46321",
            "nama" => "Perdagangan Besar Daging Sapi Dan Daging Sapi Olahan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46322",
            "nama" => "Perdagangan Besar Daging Ayam Dan Daging Ayam Olahan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46323",
            "nama" => "Perdagangan Besar Daging Dan Daging Olahan Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46324",
            "nama" => "Perdagangan Besar Hasil Olahan Perikanan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46325",
            "nama" => "Perdagangan Besar Telur Dan Hasil Olahan Telur"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46326",
            "nama" => "Perdagangan Besar Susu Dan Produk Susu"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46327",
            "nama" => "Perdagangan Besar Minyak Dan Lemak Hewani"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46329",
            "nama" => "Perdagangan Besar Bahan Makanan Dan Minuman Hasil Peternakan Dan Perikanan Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46331",
            "nama" => "Perdagangan Besar Gula, Coklat Dan Kembang Gula"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46332",
            "nama" => "Perdagangan Besar Produk Roti"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46333",
            "nama" => "Perdagangan Besar Minuman Beralkohol"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46334",
            "nama" => "Perdagangan Besar Minuman Non Alkohol Bukan Susu"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46335",
            "nama" => "Perdagangan Besar Rokok Dan Tembakau"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46339",
            "nama" => "Perdagangan Besar Makanan Dan Minuman Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46411",
            "nama" => "Perdagangan Besar Tekstil"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46412",
            "nama" => "Perdagangan Besar Pakaian"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46413",
            "nama" => "Perdagangan Besar Alas Kaki"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46414",
            "nama" => "Perdagangan Besar Barang Lainnya Dari Tekstil"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46419",
            "nama" => "Perdagangan besar tekstil, pakaian dan alas kaki lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46421",
            "nama" => "Perdagangan Besar Alat Tulis Dan Gambar"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46422",
            "nama" => "Perdagangan Besar Barang Percetakan Dan Penerbitan Dalam Berbagai Bentuk"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46430",
            "nama" => "Perdagangan Besar Alat Fotografi dan Barang Optik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46441",
            "nama" => "Perdagangan Besar Obat Farmasi Untuk Manusia"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46442",
            "nama" => "Perdagangan Besar Obat Tradisional Untuk Manusia"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46443",
            "nama" => "Perdagangan Besar Kosmetik Untuk Manusia"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46444",
            "nama" => "Perdagangan Besar Obat Farmasi Untuk Hewan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46445",
            "nama" => "Perdagangan Besar Obat Tradisional Untuk Hewan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46446",
            "nama" => "Perdagangan Besar Kosmetik Untuk Hewan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46447",
            "nama" => "Perdagangan Besar Bahan Farmasi Untuk Manusia Dan Hewan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46448",
            "nama" => "Perdagangan Besar Bahan Baku Obat Tradisional Untuk Manusia Dan Hewan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46491",
            "nama" => "Perdagangan Besar Peralatan Dan Perlengkapan Rumah Tangga"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46492",
            "nama" => "Perdagangan Besar Alat Olahraga"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46493",
            "nama" => "Perdagangan Besar Alat Musik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46494",
            "nama" => "Perdagangan Besar Perhiasan Dan Jam"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46495",
            "nama" => "Perdagangan Besar Alat Permainan Dan Mainan Anak-anak"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46499",
            "nama" => "Perdagangan Besar Berbagai Barang Dan Perlengkapan Rumah Tangga Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46511",
            "nama" => "Perdagangan Besar Komputer dan Perlengkapan Komputer"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46512",
            "nama" => "Perdagangan Besar Piranti Lunak"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46521",
            "nama" => "Perdagangan Besar Suku Cadang Elektronik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46522",
            "nama" => "Perdagangan Besar Disket, Flash Drive, Pita Audio dan Video, CD dan DVD Kosong"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46523",
            "nama" => "Perdagangan Besar Peralatan Telekomunikasi"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46530",
            "nama" => "Perdagangan Besar Mesin, Peralatan Dan Perlengkapan Pertanian"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46591",
            "nama" => "Perdagangan Besar Mesin Kantor dan Industri Pengolahan, Suku Cadang Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46592",
            "nama" => "Perdagangan Besar Alat Transportasi Laut, Suku Cadang Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46593",
            "nama" => "Perdagangan Besar Alat Transportasi Darat (Bukan Mobil, Sepeda Motor, Dan Sejenisnya), Suku Cadang  Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46594",
            "nama" => "Perdagangan Besar Alat Transportasi Udara, Suku Cadang Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46599",
            "nama" => "Perdagangan Besar Mesin, Peralatan Dan Perlengkapan Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46610",
            "nama" => "Perdagangan Besar Bahan Bakar Padat, Cair Dan Gas Dan Produk YBDI"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46620",
            "nama" => "Perdagangan Besar Logam Dan Bijih Logam"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46631",
            "nama" => "Perdagangan Besar Barang Logam Untuk Bahan Konstruksi"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46632",
            "nama" => "Perdagangan Besar Kaca"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46633",
            "nama" => "Perdagangan Besar Genteng, Batu Bata, Ubin Dan Sejenisnya Dari Tanah Liat, Kapur, Semen Atau Kaca"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46634",
            "nama" => "Perdagangan Besar Semen, Kapur, Pasir Dan Batu"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46635",
            "nama" => "Perdagangan Besar Bahan Konstruksi Dari Porselen"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46636",
            "nama" => "Perdagangan Besar Bahan Konstruksi Dari Kayu"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46637",
            "nama" => "Perdagangan Besar Cat"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46638",
            "nama" => "Perdagangan Besar Berbagai Macam Material Bangunan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46639",
            "nama" => "Perdagangan Besar Bahan Konstruksi Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46641",
            "nama" => "Perdagangan Besar Mineral Bukan Logam"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46642",
            "nama" => "Perdagangan Besar Mineral Radioaktif"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46643",
            "nama" => "Perdagangan Besar Zat Radioaktif Dan Pembangkit Radiasi Pengion"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46651",
            "nama" => "Perdagangan Besar Bahan Dan Barang Kimia"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46652",
            "nama" => "Perdagangan Besar Pupuk Dan Produk Agrokimia"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46653",
            "nama" => "Perdagangan Besar Bahan Berbahaya (B2)"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46654",
            "nama" => "Perdagangan Besar Bahan Berbahaya Dan Beracun (B3)"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46691",
            "nama" => "Perdagangan Besar Alat Laboratorium, Alat Farmasi Dan Alat Kedokteran Untuk Manusia"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46692",
            "nama" => "Perdagangan Besar Alat Laboratorium, Alat Farmasi Dan Alat Kedokteran Untuk Hewan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46693",
            "nama" => "Perdagangan Besar Karet Dan Plastik Dalam Bentuk Dasar"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46694",
            "nama" => "Perdagangan Besar Kertas Dan Karton"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46695",
            "nama" => "Perdagangan Besar Barang Dari Kertas Dan Karton"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46696",
            "nama" => "Perdagangan Besar Barang Bekas Dan Sisa-sisa Tak Terpakai (Scrap)"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46699",
            "nama" => "Perdagangan Besar Produk Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "46900",
            "nama" => "Perdagangan Besar Berbagai Macam Barang"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47111",
            "nama" => "Perdagangan Eceran Berbagai Macam Barang Yang Utamanya Makanan, Minuman Atau Tembakau Di  Minimarket/Supermarket/Hypermarket"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47112",
            "nama" => "Perdagangan Eceran Berbagai Macam Barang Yang Utamanya Makanan, Minuman Atau Tembakau Bukan  Di Minimarket/Supermarket/Hypermarket (Tradisional)"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47191",
            "nama" => "Perdagangan Eceran Berbagai Macam Barang Yang Utamanya Bukan Makanan, Minuman Atau Tembakau  Di Toserba (Department Store)"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47192",
            "nama" => "Perdagangan Eceran Berbagai Macam Barang Yang Utamanya Bukan Makanan, Minuman Atau Tembakau  (barang-barang Kelontong) Bukan Di Toserba (Department Store)"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47211",
            "nama" => "Perdagangan Eceran Padi Dan Palawija"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47212",
            "nama" => "Perdagangan Eceran Buah-buahan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47213",
            "nama" => "Perdagangan Eceran Sayuran"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47214",
            "nama" => "Perdagangan Eceran Hasil Peternakan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47215",
            "nama" => "Perdagangan Eceran Hasil Perikanan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47216",
            "nama" => "Perdagangan Eceran Hasil Kehutanan dan Perburuan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47219",
            "nama" => "Perdagangan Eceran Hasil Pertanian Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47221",
            "nama" => "Perdagangan Eceran Minuman Beralkohol"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47222",
            "nama" => "Perdagangan Eceran Minuman Tidak Beralkohol"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47230",
            "nama" => "Perdagangan Eceran Khusus Rokok dan Tembakau di Toko"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47241",
            "nama" => "Perdagangan Eceran Beras"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47242",
            "nama" => "Perdagangan Eceran Roti, Kue Kering, serta Kue Basah dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47243",
            "nama" => "Perdagangan Eceran Kopi, Gula Pasir dan Gula Merah"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47244",
            "nama" => "Perdagangan Eceran Tahu, Tempe, Tauco dan Oncom"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47245",
            "nama" => "Perdagangan Eceran Daging dan Ikan Olahan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47249",
            "nama" => "Perdagangan Eceran Makanan Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47301",
            "nama" => "Perdagangan Eceran Bahan Bakar Minyak, Bahan Bakar Gas (BBG), dan Liquefied Petroleum Gas (LPG) di  Sarana Pengisian Bahan Bakar Transportasi Darat, Laut, dan Udara"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47302",
            "nama" => "Perdagangan Eceran Bahan Bakar Minyak, Bahan Bakar Gas (BBG), dan Liquefied Petroleum Gas (LPG)  Selain Di Sarana Pengisian Bahan Bakar Transportasi Darat, Laut, dan Udara"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47303",
            "nama" => "Perdagangan Eceran Minyak Pelumas Di Toko"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47411",
            "nama" => "Perdagangan Eceran Komputer Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47412",
            "nama" => "Perdagangan Eceran Peralatan Video Game Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47413",
            "nama" => "Perdagangan Eceran Piranti Lunak (Software)"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47414",
            "nama" => "Perdagangan Eceran Alat Telekomunikasi"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47415",
            "nama" => "Perdagangan Eceran Mesin Kantor"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47420",
            "nama" => "Perdagangan Eceran Khusus Peralatan Audio dan Video di Toko"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47511",
            "nama" => "Perdagangan Eceran Tekstil"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47512",
            "nama" => "Perdagangan Eceran Perlengkapan Rumah Tangga Dari Tekstil"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47513",
            "nama" => "Perdagangan Eceran Perlengkapan Jahit Menjahit"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47521",
            "nama" => "Perdagangan Eceran Barang Logam Untuk Bahan Konstruksi"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47522",
            "nama" => "Perdagangan Eceran Kaca"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47523",
            "nama" => "Perdagangan Eceran Genteng, Batu Bata, Ubin Dan Sejenisnya Dari Tanah Liat, Kapur, Semen Atau Kaca"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47524",
            "nama" => "Perdagangan Eceran Semen, Kapur, Pasir Dan Batu"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47525",
            "nama" => "Perdagangan Eceran Bahan Konstruksi Dari Porselen"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47526",
            "nama" => "Perdagangan Eceran Bahan Konstruksi Dari Kayu"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47527",
            "nama" => "Perdagangan Eceran Cat, Pernis Dan Lak"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47528",
            "nama" => "Perdagangan Eceran Berbagai Macam Material Bangunan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47529",
            "nama" => "Perdagangan Eceran Bahan Dan Barang Konstruksi Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47530",
            "nama" => "Perdagangan Eceran Khusus Karpet, Permadani dan Penutup Dinding dan Lantai di Toko"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47591",
            "nama" => "Perdagangan Eceran Furnitur"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47592",
            "nama" => "Perdagangan Eceran Peralatan Listrik Rumah Tangga Dan Peralatan Penerangan Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47593",
            "nama" => "Perdagangan Eceran Barang Pecah Belah Dan Perlengkapan Dapur Dari Plastik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47594",
            "nama" => "Perdagangan Eceran Barang Pecah Belah Dan Perlengkapan Dapur Dari Batu Atau Tanah Liat"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47595",
            "nama" => "Perdagangan Eceran Barang Pecah Belah Dan Perlengkapan Dapur Dari Kayu, Bambu Atau Rotan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47596",
            "nama" => "Perdagangan Eceran Barang Pecah Belah Dan Perlengkapan Dapur Bukan Dari Plastik, Batu, Tanah Liat, Kayu, Bambu Atau Rotan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47597",
            "nama" => "Perdagangan Eceran Alat Musik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47599",
            "nama" => "Perdagangan Eceran Peralatan Dan Perlengkapan Rumah Tangga Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47611",
            "nama" => "Perdagangan Eceran Alat Tulis Menulis Dan Gambar"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47612",
            "nama" => "Perdagangan Eceran Hasil Pencetakan Dan Penerbitan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47620",
            "nama" => "Perdagangan Eceran Khusus Rekaman Musik dan Video di Toko"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47630",
            "nama" => "Perdagangan Eceran Khusus Peralatan Olahraga di Toko"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47640",
            "nama" => "Perdagangan Eceran Khusus Alat Permainan dan Mainan Anak-anak di Toko"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47650",
            "nama" => "Perdagangan Eceran Kertas, Kertas Karton Dan Barang Dari Kertas/Karton"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47711",
            "nama" => "Perdagangan Eceran Pakaian"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47712",
            "nama" => "Perdagangan Eceran Sepatu, Sandal Dan Alas Kaki Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47713",
            "nama" => "Perdagangan Eceran Pelengkap Pakaian"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47714",
            "nama" => "Perdagangan Eceran Tas, Dompet, Koper, Ransel Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47721",
            "nama" => "Perdagangan Eceran Barang Dan Obat Farmasi Untuk Manusia Di Apotik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47722",
            "nama" => "Perdagangan Eceran Barang Dan Obat Farmasi Untuk Manusia Bukan Di ApotikÂ"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47723",
            "nama" => "Perdagangan Eceran Obat Tradisional Untuk Manusia"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47724",
            "nama" => "Perdagangan Eceran Kosmetik Untuk Manusia"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47725",
            "nama" => "Perdagangan Eceran Alat Laboratorium, Alat Farmasi Dan Alat Kesehatan Untuk Manusia"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47726",
            "nama" => "Perdagangan Eceran Barang Dan Obat Farmasi Untuk Hewan Di Apotik Dan Bukan Di Apotik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47727",
            "nama" => "Perdagangan Eceran Obat Tradisional Untuk Hewan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47728",
            "nama" => "Perdagangan Eceran Kosmetik Untuk Hewan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47729",
            "nama" => "Perdagangan Eceran Khusus Barang Dan Obat Farmasi, Alat Kedokteran, Parfum Dan Kosmetik Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47731",
            "nama" => "Perdagangan Eceran Alat Fotografi Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47732",
            "nama" => "Perdagangan Eceran Alat Optik Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47733",
            "nama" => "Perdagangan Eceran Kaca Mata"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47734",
            "nama" => "Perdagangan Eceran Jam"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47735",
            "nama" => "Perdagangan Eceran Barang Perhiasan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47736",
            "nama" => "Perdagangan Eceran Perlengkapan Pengendara Kendaraan Bermotor"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47737",
            "nama" => "Perdagangan Eceran Pembungkus Dari Plastik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47739",
            "nama" => "Perdagangan eceran khusus barang baru lainnya ytdl"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47741",
            "nama" => "Perdagangan Eceran Barang Bekas Perlengkapan Rumah Tangga"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47742",
            "nama" => "Perdagangan Eceran Pakaian, Alas Kaki Dan Pelengkap Pakaian Bekas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47743",
            "nama" => "Perdagangan Eceran Barang Perlengkapan Pribadi Bekas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47744",
            "nama" => "Perdagangan Eceran Barang Listrik Dan Elektronik Bekas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47745",
            "nama" => "Perdagangan Eceran Bahan Konstruksi Dan Sanitasi Bekas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47746",
            "nama" => "Perdagangan Eceran Barang Antik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47749",
            "nama" => "Perdagangan Eceran Barang Bekas Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47751",
            "nama" => "Perdagangan Eceran Hewan Piaraan (Pet Animals)"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47752",
            "nama" => "Perdagangan Eceran Hewan Ternak"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47753",
            "nama" => "Perdagangan Eceran Ikan Hias"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47754",
            "nama" => "Perdagangan Eceran Pakan Ternak/Unggas/Ikan dan Hewan Piaraan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47761",
            "nama" => "Perdagangan Eceran Bunga Potong/Florist"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47762",
            "nama" => "Perdagangan Eceran Tanaman Dan Bibit Tanaman"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47763",
            "nama" => "Perdagangan Eceran Pupuk Dan Pemberantas Hama"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47764",
            "nama" => "Perdagangan Eceran Perlengkapan Dan Media Tanaman Hias"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47771",
            "nama" => "Perdagangan Eceran Minyak Tanah"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47772",
            "nama" => "Perdagangan Eceran Gas Elpiji"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47773",
            "nama" => "Perdagangan Eceran Bahan Kimia"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47774",
            "nama" => "Perdagangan Eceran Aromatik/Penyegar (Minyak Atsiri)"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47779",
            "nama" => "Perdagangan Eceran Bahan Kimia, dan Aromatik/Penyegar (Minyak Atsiri), Dan Bahan Bakar Bukan Bahan  Bakar Untuk Kendaraan Bermotor Lainnnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47781",
            "nama" => "Perdagangan Eceran Barang Kerajinan Dari Kayu, Bambu, Rotan, Pandan, Rumput Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47782",
            "nama" => "Perdagangan Eceran Barang Kerajinan Dari Kulit, Tulang, Tanduk, Gading, Bulu Dan Binatang/Hewan Yang  Diawetkan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47783",
            "nama" => "Perdagangan Eceran Barang Kerajinan Dari Logam"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47784",
            "nama" => "Perdagangan Eceran Barang Kerajinan Dari Keramik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47785",
            "nama" => "Perdagangan Eceran Lukisan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47789",
            "nama" => "Perdagangan Eceran Barang Kerajinan Dan Lukisan Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47791",
            "nama" => "Perdagangan Eceran Mesin Pertanian Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47792",
            "nama" => "Perdagangan Eceran Mesin Jahit Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47793",
            "nama" => "Perdagangan Eceran Mesin Lainnya Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47794",
            "nama" => "Perdagangan Eceran Alat Transportasi Darat Tidak Bermotor Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47795",
            "nama" => "Perdagangan Eceran Alat Transportasi Air Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47796",
            "nama" => "Perdagangan Eceran Alat-alat Pertanian"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47797",
            "nama" => "Perdagangan Eceran Alat-alat Pertukangan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47811",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Komoditi Padi Dan Palawija"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47812",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Komoditi Buah-buahan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47813",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Komoditi Sayur-sayuran"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47814",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Komoditi Hasil Peternakan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47815",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Komoditi Hasil Perikanan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47816",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Komoditi Hasil Kehutanan Dan Perburuan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47819",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Komoditi Tanaman Hias Dan Hasil Pertanian Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47821",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Beras"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47822",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Roti, Kue Kering, Kue Basah Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47823",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Kopi, Gula Pasir, Gula Merah Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47824",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Tahu, Tempe, Tauco Dan Oncom"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47825",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Daging Olahan Dan Ikan Olahan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47826",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Minuman"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47827",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Rokok Dan Tembakau"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47828",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Pakan Ternak, Pakan Unggas Dan Pakan Ikan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47829",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Komoditi Makanan Dan Minuman Ytdl"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47831",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Tekstil"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47832",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Pakaian"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47833",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Sepatu, Sandal Dan Alas Kaki Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47834",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Pelengkap Pakaian Dan Benang"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47841",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Bahan Kimia"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47842",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Farmasi"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47843",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Obat Tradisional"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47844",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Kosmetik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47845",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Pupuk Dan Pemberantas Hama"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47846",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Aromatik/Penyegar (Minyak Atsiri)"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47849",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Bahan Kimia, Farmasi, Kosmetik Dan Alat Laboratorium dan  Ybdi Ytdl"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47851",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Kaca Mata"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47852",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Perhiasan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47853",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Jam"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47854",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Tas, Dompet, Koper, Ransel Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47855",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Perlengkapan Pengendara Sepeda Motor"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47859",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Keperluan Pribadi Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47861",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Elektronik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47862",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Alat Dan Perlengkapan Listrik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47863",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Pecah Belah Dan Perlengkapan Dapur Dari  Plastik/Melamin"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47864",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Pecah Belah Dan Perlengkapan Dapur Dari Batu Atau  Tanah Liat"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47865",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang dan Perlengkapan Dapur Dari Kayu, Bambu Atau  Rotan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47866",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Pecah Belah Dan Perlengkapan Dapur Bukan Dari  Plastik, Batu, Tanah Liat, Kayu, Bambu Atau Rotan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47867",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Alat Kebersihan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47869",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Perlengkapan Rumah Tangga Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47871",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Kertas, Karton Dan Barang Dari Kertas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47872",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Alat Tulis Menulis Dan Gambar"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47873",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Hasil Pencetakan dan Penerbitan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47874",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Alat Olahraga Dan Alat Musik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47875",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Alat Fotografi, Alat Optik Dan Perlengkapannya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47876",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Mesin Kantor"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47877",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Peralatan Telekomunikasi"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47879",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Campuran Kertas, Karton, Barang Dari Kertas, Alat Tulis-menulis, Alat Gambar, Hasil Pencetakan, Penerbitan Dan Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47881",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Kerajinan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47882",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Mainan Anak-anak"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47883",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Lukisan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47891",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Hewan Hidup"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47892",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Bahan Bakar Minyak, Gas, Minyak Pelumas Dan Bahan Bakar  Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47893",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Antik"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47894",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Bekas Perlengkapan Rumah Tangga"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47895",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Pakaian, Alas Kaki, Perlengkapan Pakaian Dan Barang  Perlengkapan Pribadi Bekas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47896",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Listrik Dan Elektronik Bekas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47897",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Bekas Campuran"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47899",
            "nama" => "Perdagangan Eceran Kaki Lima Dan Los Pasar Barang Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47911",
            "nama" => "Perdagangan Eceran Melalui Media Untuk Komoditi Makanan, Minuman, Tembakau, Kimia, Farmasi,  Kosmetik Dan Alat Laboratorium"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47912",
            "nama" => "Perdagangan Eceran Melalui Media Untuk Komoditi Tekstil, Pakaian, Alas Kaki Dan Barang Keperluan  Pribadi"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47913",
            "nama" => "Perdagangan Eceran Melalui Media Untuk Barang Perlengkapan Rumah Tangga Dan Perlengkapan Dapur"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47914",
            "nama" => "Perdagangan Eceran Melalui Media Untuk Barang Campuran Sebagaimana Tersebut Dalam 47911 S.D.  47913"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47919",
            "nama" => "Perdagangan Eceran Melalui Media Untuk Berbagai Macam Barang Lainnya"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47920",
            "nama" => "Perdagangan Eceran Atas Dasar Balas Jasa (Fee) Atau Kontrak"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47991",
            "nama" => "Perdagangan Eceran Keliling Komoditi Makanan Dari Hasil Pertanian"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47992",
            "nama" => "Perdagangan Eceran Keliling Komoditi Makanan, Minuman Atau Tembakau Hasil Industri Pengolahan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47993",
            "nama" => "Perdagangan Eceran Keliling Bahan Kimia, Farmasi, Kosmetik Dan Alat Laboratorium"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47994",
            "nama" => "Perdagangan Eceran Keliling Tekstil, Pakaian, Alas Kaki Dan Barang Keperluan Pribadi"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47995",
            "nama" => "Perdagangan Eceran Keliling Perlengkapan Rumah Tangga Dan Perlengkapan Dapur"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47996",
            "nama" => "Perdagangan Eceran Keliling Bahan Bakar Dan Minyak Pelumas"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47997",
            "nama" => "Perdagangan Eceran Keliling Kertas, Barang Dari Kertas, Alat Tulis, Barang Cetakan, Alat Olahraga, Alat  Musik, Alat Fotografi Dan Komputer"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47998",
            "nama" => "Perdagangan Eceran Keliling Barang Kerajinan, Mainan Anak-anak Dan Lukisan"
            ],
            [
            "jenis_kbli_id" => 7,
            "kode" => "47999",
            "nama" => "Perdagangan eceran bukan di toko, kios, kaki lima dan los pasar lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49110",
            "nama" => "Angkutan Jalan Rel untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49120",
            "nama" => "Angkutan Jalan Rel untuk Barang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49211",
            "nama" => "Angkutan bus Antarkota Antarprovinsi (AKAP)"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49212",
            "nama" => "Angkutan Bus Perbatasan"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49213",
            "nama" => "Angkutan bus Antarkota Dalam Provinsi (AKDP)"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49214",
            "nama" => "Angkutan Bus Kota"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49215",
            "nama" => "Angkutan Bus Lintas Batas Negara"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49216",
            "nama" => "Angkutan Bus Khusus"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49219",
            "nama" => "Angkutan Bus Dalam Trayek Lainnya"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49221",
            "nama" => "Angkutan Bus Pariwisata"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49229",
            "nama" => "Angkutan Bus Tidak Dalam Trayek Lainnya"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49300",
            "nama" => "Angkutan Melalui Saluran Pipa"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49411",
            "nama" => "Angkutan Perbatasan Bukan Bus, Dalam Trayek"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49412",
            "nama" => "Angkutan Antarkota Dalam Provinsi (AKDP) Bukan Bus, Dalam Trayek"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49413",
            "nama" => "Angkutan Perkotaan Bukan Bus, Dalam Trayek"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49414",
            "nama" => "Angkutan Perdesaan Bukan Bus, Dalam Trayek"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49415",
            "nama" => "Angkutan Darat Khusus Bukan Bus"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49419",
            "nama" => "Angkutan Darat Bukan Bus untuk Penumpang Lainnya, Dalam Trayek"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49421",
            "nama" => "Angkutan Taksi"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49422",
            "nama" => "Angkutan Sewa"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49423",
            "nama" => "Angkutan Tidak Bermotor untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49424",
            "nama" => "Angkutan Ojek Motor"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49425",
            "nama" => "Angkutan Darat Wisata"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49426",
            "nama" => "Angkutan Sewa Khusus"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49429",
            "nama" => "Angkutan Darat Lainnya untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49431",
            "nama" => "Angkutan Bermotor untuk Barang Umum"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49432",
            "nama" => "Angkutan Bermotor untuk Barang Khusus"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49433",
            "nama" => "Angkutan Tidak Bermotor untuk Barang Umum"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49441",
            "nama" => "Angkutan Jalan Rel Perkotaan"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49442",
            "nama" => "Angkutan Jalan Rel Wisata"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "49450",
            "nama" => "Angkutan Jalan Rel Lainnya"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50111",
            "nama" => "Angkutan Laut Dalam Negeri Liner dan Tramper untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50112",
            "nama" => "Angkutan Laut Perairan Pelabuhan Dalam Negeri untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50113",
            "nama" => "Angkutan Laut Dalam Negeri untuk Wisata"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50114",
            "nama" => "Angkutan Laut Dalam Negeri Perintis untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50121",
            "nama" => "Angkutan Laut Luar Negeri Liner dan Tramper untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50122",
            "nama" => "Angkutan Laut Luar Negeri untuk Wisata"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50131",
            "nama" => "Angkutan Laut Dalam Negeri untuk Barang Umum"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50132",
            "nama" => "Angkutan Laut Perairan Pelabuhan Dalam Negeri untuk Barang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50133",
            "nama" => "Angkutan Laut Dalam Negeri untuk Barang Khusus"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50134",
            "nama" => "Angkutan Laut Dalam Negeri Perintis untuk Barang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50135",
            "nama" => "Angkutan Laut Dalam Negeri Pelayaran Rakyat"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50141",
            "nama" => "Angkutan Laut Luar Negeri untuk Barang Umum"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50142",
            "nama" => "Angkutan Laut Luar Negeri untuk Barang Khusus"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50143",
            "nama" => "Angkutan Laut Luar Negeri Pelayaran Rakyat"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50211",
            "nama" => "Angkutan Sungai dan Danau Liner (Trayek Tetap dan Teratur) untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50212",
            "nama" => "Angkutan Sungai dan Danau Tramper (Trayek Tidak Tetap dan Tidak Teratur) untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50213",
            "nama" => "Angkutan Sungai dan Danau untuk Wisata dan YBDI"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50214",
            "nama" => "Angkutan Penyeberangan Antarprovinsi untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50215",
            "nama" => "Angkutan Penyeberangan Perintis Antarprovinsi untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50216",
            "nama" => "Angkutan Penyeberangan Antarkabupaten/kota untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50217",
            "nama" => "Angkutan Penyeberangan Perintis Antarkabupaten/kota untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50218",
            "nama" => "Angkutan Penyeberangan Dalam Kabupaten/kota untuk Penumpang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50219",
            "nama" => "Angkutan Penyeberangan Lainnya untuk Penumpang Termasuk Penyeberangan Antarnegara"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50221",
            "nama" => "Angkutan Sungai dan Danau untuk Barang Umum dan/atau Hewan"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50222",
            "nama" => "Angkutan Sungai dan Danau untuk Barang Khusus"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50223",
            "nama" => "Angkutan Sungai dan Danau untuk Barang Berbahaya"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50224",
            "nama" => "Angkutan Penyeberangan Umum Antarprovinsi untuk Barang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50225",
            "nama" => "Angkutan Penyeberangan Perintis Antarprovinsi untuk Barang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50226",
            "nama" => "Angkutan Penyeberangan Umum Antarkabupaten/kota untuk Barang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50227",
            "nama" => "Angkutan Penyeberangan Perintis Antarkabupaten/kota untuk Barang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50228",
            "nama" => "Angkutan Penyeberangan Umum Dalam Kabupaten/kota untuk Barang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "50229",
            "nama" => "Angkutan Penyeberangan Lainnya untuk Barang Termasuk Penyeberangan Antarnegara"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51101",
            "nama" => "Angkutan Udara Niaga Berjadwal Dalam Negeri untuk Penumpang atau Penumpang dan Kargo"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51102",
            "nama" => "Angkutan Udara Niaga Tidak Berjadwal Dalam Negeri untuk Penumpang atau Penumpang dan Kargo"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51103",
            "nama" => "Angkutan Udara NIaga Berjadwal Luar Negeri untuk Penumpang atau Penumpang dan Kargo"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51104",
            "nama" => "Angkutan Udara Niaga Tidak Berjadwal Luar Negeri untuk Penumpang atau Penumpang dan Kargo"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51105",
            "nama" => "Angkutan Udara Niaga Tidak Berjadwal Lainnya"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51106",
            "nama" => "Angkutan Udara untuk Olahraga"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51107",
            "nama" => "Angkutan Udara untuk Wisata"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51108",
            "nama" => "Angkutan Udara Bukan Niaga"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51109",
            "nama" => "Angkutan Udara untuk Penumpang Lainnya"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51201",
            "nama" => "Angkutan Udara Niaga Berjadwal Dalam Negeri untuk Kargo"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51202",
            "nama" => "Angkutan Udara Niaga Tidak Berjadwal dalam Negeri untuk Kargo"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51203",
            "nama" => "Angkutan Udara Niaga Berjadwal Luar Negeri untuk Kargo"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "51204",
            "nama" => "Angkutan Udara Niaga Tidak Berjadwal Luar Negeri untuk Kargo"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52101",
            "nama" => "Pergudangan dan Penyimpanan"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52102",
            "nama" => "Aktivitas Cold Storage"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52103",
            "nama" => "Aktivitas Bounded Warehousing atau Wilayah Kawasan Berikat"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52104",
            "nama" => "Penyimpanan Minyak dan Gas Bumi"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52105",
            "nama" => "Aktivitas Penyimpanan B3"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52106",
            "nama" => "Fasilitas Penyimpanan Sumber Radiasi Pengion"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52107",
            "nama" => "Penyimpanan yang Termasuk Dalam Naturally Occuring Radioactive Material (NORM)"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52108",
            "nama" => "Pengelola Gudang Sistem Resi Gudang"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52109",
            "nama" => "Pergudangan dan Penyimpanan Lainnya"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52211",
            "nama" => "Aktivitas Terminal Darat"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52212",
            "nama" => "Aktivitas Stasiun Kereta Api"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52213",
            "nama" => "Aktivitas Jalan Tol"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52214",
            "nama" => "Aktivitas Perparkiran di Badan Jalan (On Street Parking)"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52215",
            "nama" => "Aktivitas Perparkiran di Luar Badan Jalan (Off Street Parking)"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52219",
            "nama" => "Aktivitas Penunjang Angkutan Darat Lainnya"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52221",
            "nama" => "Aktivitas Pelayanan Kepelabuhanan Laut"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52222",
            "nama" => "Aktivitas Pelayanan Kepelabuhanan Sungai dan Danau"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52223",
            "nama" => "Aktivitas Pelayanan Kepelabuhanan Penyeberangan"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52224",
            "nama" => "Aktivitas Pelabuhan Perikanan"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52225",
            "nama" => "Aktivitas Pengelolaan Kapal"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52229",
            "nama" => "Aktivitas Penunjang Angkutan Perairan Lainnya"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52231",
            "nama" => "Aktivitas Kebandarudaraan"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52232",
            "nama" => "Jasa Pelayanan Navigasi Penerbangan"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52240",
            "nama" => "Penanganan Kargo (Bongkar Muat Barang)"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52291",
            "nama" => "Jasa Pengurusan Transportasi (JPT)"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52292",
            "nama" => "Aktivitas Ekspedisi Muatan Kereta Api dan Ekspedisi Angkutan Darat (EMKA & EAD)"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52293",
            "nama" => "Aktivitas Ekspedisi Muatan Kapal (EMKL)"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52294",
            "nama" => "Aktivitas Ekspedisi Muatan Pesawat Udara (EMPU)"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52295",
            "nama" => "Angkutan Multimoda"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52296",
            "nama" => "Jasa Penunjang Angkutan Udara"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52297",
            "nama" => "Jasa Keagenan Kapal/Agen Perkapalan Perusahaan Pelayaran"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52298",
            "nama" => "Aktivitas Tally Mandiri"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "52299",
            "nama" => "Aktivitas Penunjang Angkutan Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "53100",
            "nama" => "Aktivitas Pos"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "53201",
            "nama" => "Aktivitas Kurir"
            ],
            [
            "jenis_kbli_id" => 8,
            "kode" => "53202",
            "nama" => "Aktivitas Agen Kurir"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "55110",
            "nama" => "Hotel Bintang"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "55120",
            "nama" => "Hotel Melati"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "55130",
            "nama" => "Pondok Wisata"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "55191",
            "nama" => "Penginapan Remaja (Youth Hostel)"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "55192",
            "nama" => "Bumi Perkemahan, Persinggahan Karavan dan Taman Karavan"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "55193",
            "nama" => "Vila"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "55194",
            "nama" => "Apartemen Hotel"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "55199",
            "nama" => "Penyediaan Akomodasi Jangka Pendek Lainnya"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "55900",
            "nama" => "Penyediaan Akomodasi Lainnya"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56101",
            "nama" => "Restoran"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56102",
            "nama" => "Rumah/Warung Makan"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56103",
            "nama" => "Kedai Makanan"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56104",
            "nama" => "Penyediaan Makanan Keliling/Tempat Tidak Tetap"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56109",
            "nama" => "Restoran dan penyediaan makanan keliling lainnya"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56210",
            "nama" => "Jasa Boga Untuk Suatu Event Tertentu (Event Catering)"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56290",
            "nama" => "Penyediaan Jasa Boga Periode Tertentu"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56301",
            "nama" => "Bar"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56302",
            "nama" => "Kelab Malam Atau Diskotek Yang Utamanya Menyediakan Minuman"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56303",
            "nama" => "Rumah Minum/Kafe"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56304",
            "nama" => "Kedai Minuman"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56305",
            "nama" => "Rumah/Kedai Obat Tradisional"
            ],
            [
            "jenis_kbli_id" => 9,
            "kode" => "56306",
            "nama" => "Penyediaan Minuman Keliling/Tempat Tidak Tetap"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "58110",
            "nama" => "Penerbitan Buku"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "58120",
            "nama" => "Penerbitan Direktori dan Mailing List"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "58130",
            "nama" => "Penerbitan Surat Kabar, Jurnal Dan Buletin Atau Majalah"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "58190",
            "nama" => "Aktivitas Penerbitan lainnya"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "58200",
            "nama" => "Penerbitan piranti lunak (Software)"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "59111",
            "nama" => "Aktivitas Produksi Film, Video dan Program Televisi Oleh Pemerintah"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "59112",
            "nama" => "Aktivitas Produksi Film, Video dan Program Televisi Oleh Swasta"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "59121",
            "nama" => "Aktivitas Pascaproduksi Film, Video dan Program Televisi Oleh Pemerintah"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "59122",
            "nama" => "Aktivitas Pascaproduksi Film, Video dan Program Televisi Oleh Swasta"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "59131",
            "nama" => "Aktivitas Distribusi Film, Video dan Program televisi Oleh Pemerintah"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "59132",
            "nama" => "Aktivitas Distribusi Film, Video dan Program Televisi Oleh Swasta"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "59140",
            "nama" => "Aktivitas Pemutaran Film"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "59201",
            "nama" => "Aktivitas Perekaman Suara"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "59202",
            "nama" => "Aktivitas Penerbitan Musik Dan Buku Musik"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "60101",
            "nama" => "Penyiaran Radio Oleh Pemerintah"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "60102",
            "nama" => "Penyiaran Radio Oleh Swasta"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "60201",
            "nama" => "Aktivitas Penyiaran dan Pemrograman Televisi Oleh Pemerintah"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "60202",
            "nama" => "Aktivitas Penyiaran dan Pemrograman Televisi Oleh Swasta"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61100",
            "nama" => "Aktivitas Telekomunikasi Dengan Kabel"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61200",
            "nama" => "Aktivitas Telekomunikasi Tanpa Kabel"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61300",
            "nama" => "Aktivitas Telekomunikasi Satelit"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61911",
            "nama" => "Jasa Panggilan Premium (Premium Call)"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61912",
            "nama" => "Jasa Konten SMS Premium"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61913",
            "nama" => "Jasa Internet Teleponi Untuk Keperluan Publik (ITKP)"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61914",
            "nama" => "Jasa Panggilan Terkelola (Calling Card)"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61919",
            "nama" => "Jasa Nilai Tambah Teleponi Lainnya"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61921",
            "nama" => "Internet Service Provider"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61922",
            "nama" => "Jasa Sistem Komunikasi Data"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61923",
            "nama" => "Jasa Televisi Protokol Internet (IPTV)"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61924",
            "nama" => "Jasa Interkoneksi Internet (NAP)"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61929",
            "nama" => "Jasa Multimedia Lainnya"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61991",
            "nama" => "Aktivitas Telekomunikasi Khusus Untuk Penyiaran"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61992",
            "nama" => "Aktivitas Telekomunikasi Khusus Untuk Keperluan Sendiri"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61993",
            "nama" => "Aktivitas Telekomunikasi Khusus Untuk Keperluan Pertahanan Keamanan"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61994",
            "nama" => "Jasa Jual Kembali Jasa Telekomunikasi"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "61999",
            "nama" => "Aktivitas Telekomunikasi Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62011",
            "nama" => "Aktivitas Pengembangan Video game"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62012",
            "nama" => "Aktivitas Pengembangan Aplikasi Perdagangan Melalui Internet (E-Commerce)"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62013",
            "nama" => "Aktivitas Pemrograman dan Produksi Konten Media Imersif"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62014",
            "nama" => "Aktivitas Pengembangan Teknologi Blockchain"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62015",
            "nama" => "Aktivitas Pemrograman Berbasis Kecerdasan Artifisial"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62019",
            "nama" => "Aktivitas Pemrograman Komputer Lainnya"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62021",
            "nama" => "Aktivitas Konsultasi Keamanan Informasi"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62022",
            "nama" => "Aktivitas Penyediaan Identitas Digital"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62023",
            "nama" => "Aktivitas Penyediaan Sertifikat Elektronik dan Layanan yang Menggunakan Sertifikat Elektronik"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62024",
            "nama" => "Aktivitas Konsultasi dan Perancangan Internet of Things (IoT)"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62029",
            "nama" => "Aktivitas Konsultasi Komputer dan Manajemen Fasilitas Komputer Lainnya"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "62090",
            "nama" => "Aktivitas Teknologi Informasi Dan Jasa Komputer Lainnya"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "63111",
            "nama" => "Aktivitas Pengolahan Data"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "63112",
            "nama" => "Aktivitas Hosting dan Ybdi"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "63121",
            "nama" => "Portal Web Dan/Atau Platform Digital Tanpa Tujuan Komersial"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "63122",
            "nama" => "Portal Web Dan/Atau Platform Digital Dengan Tujuan Komersial"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "63911",
            "nama" => "Aktivitas Kantor Berita Oleh Pemerintah"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "63912",
            "nama" => "Aktivitas Kantor Berita Oleh Swasta"
            ],
            [
            "jenis_kbli_id" => 10,
            "kode" => "63990",
            "nama" => "Aktivitas Jasa Informasi Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64110",
            "nama" => "Bank Sentral"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64121",
            "nama" => "Bank Umum Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64122",
            "nama" => "Bank Umum Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64123",
            "nama" => "Unit Usaha Syariah Bank Umum"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64131",
            "nama" => "Bank Perkreditan Rakyat"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64132",
            "nama" => "Bank Pembiayaan Rakyat Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64141",
            "nama" => "Koperasi Simpan Pinjam Primer (KSP Primer)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64142",
            "nama" => "Unit Simpan Pinjam Koperasi Primer (USP Koperasi Primer)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64143",
            "nama" => "Koperasi Simpan Pinjam Sekunder (KSP Sekunder)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64144",
            "nama" => "Unit Simpan Pinjam Koperasi Sekunder (USP Koperasi Sekunder)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64145",
            "nama" => "Koperasi Simpan Pinjam dan Pembiayaan Syariah Primer (KSPPS Primer)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64146",
            "nama" => "Unit Simpan Pinjam dan Pembiayaan Syariah Koperasi Primer (USPPS Koperasi Primer)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64147",
            "nama" => "Koperasi Simpan Pinjam dan Pembiayaan Syariah Sekunder (KSPPS Sekunder)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64148",
            "nama" => "Unit Simpan Pinjam dan Pembiayaan Syariah Koperasi Sekunder (USPPS Koperasi Sekunder)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64151",
            "nama" => "Lembaga Keuangan Mikro Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64152",
            "nama" => "Lembaga Keuangan Mikro Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64190",
            "nama" => "Perantara moneter lainnya"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64200",
            "nama" => "Aktivitas Perusahaan Holding"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64300",
            "nama" => "Trust, Pendanaan dan Entitas Keuangan Sejenis"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64400",
            "nama" => "Otoritas Jasa Keuangan (OJK)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64500",
            "nama" => "Lembaga Penjamin Simpanan (LPS)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64911",
            "nama" => "Perusahaan Pembiayaan Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64912",
            "nama" => "Perusahaan Pembiayaan Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64913",
            "nama" => "Unit Usaha Syariah Perusahaan Pembiayaan"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64921",
            "nama" => "Pergadaian Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64922",
            "nama" => "Pergadaian Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64923",
            "nama" => "Unit Usaha Syariah Pergadaian"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64931",
            "nama" => "Perusahaan Modal Ventura Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64932",
            "nama" => "Perusahaan Modal Ventura Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64933",
            "nama" => "Unit Usaha Syariah Modal Ventura"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64941",
            "nama" => "Perusahaan Pembiayaan Infrastruktur Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64942",
            "nama" => "Perusahaan Pembiayaan Infrastruktur Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64943",
            "nama" => "Unit Usaha Syariah Perusahaan Pembiayaan Infrastruktur"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64951",
            "nama" => "Layanan Pinjam Meminjam Uang Berbasis Teknologi Informasi (Fintech P2P Lending) Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64952",
            "nama" => "Layanan Pinjam Meminjam Uang Berbasis Teknologi Informasi (Fintech P2P Lending) Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64953",
            "nama" => "Unit Usaha Syariah Layanan Pinjam Meminjam Uang Berbasis Teknologi Informasi (Fintech P2P Lending)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64991",
            "nama" => "Lembaga Pembiayaan Ekspor Indonesia"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64992",
            "nama" => "Perusahaan Pembiayaan Sekunder Perumahan"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "64999",
            "nama" => "Aktivitas Jasa Keuangan Lainnya Ytdl, Bukan Asuransi dan Dana Pensiun"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65111",
            "nama" => "Asuransi Jiwa Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65112",
            "nama" => "Asuransi Jiwa Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65113",
            "nama" => "Unit Syariah Asuransi Jiwa"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65121",
            "nama" => "Asuransi Umum Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65122",
            "nama" => "Asuransi Umum Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65123",
            "nama" => "Unit Syariah Asuransi Umum"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65131",
            "nama" => "Perusahaan Penjaminan Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65132",
            "nama" => "Perusahaan Penjaminan Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65133",
            "nama" => "Unit Usaha Syariah Perusahaan Penjaminan"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65211",
            "nama" => "Reasuransi Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65212",
            "nama" => "Reasuransi Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65213",
            "nama" => "Unit Syariah Reasuransi"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65221",
            "nama" => "Perusahaan Penjaminan Ulang Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65222",
            "nama" => "Perusahaan Penjaminan Ulang Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65311",
            "nama" => "Dana Pensiun Pemberi Kerja Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65312",
            "nama" => "Dana Pensiun Pemberi Kerja Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65313",
            "nama" => "Unit Syariah Dana Pensiun Pemberi Kerja"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65321",
            "nama" => "Dana Pensiun Lembaga Keuangan Konvensional"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "65322",
            "nama" => "Dana Pensiun Lembaga Keuangan Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66111",
            "nama" => "Bursa Efek"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66112",
            "nama" => "Lembaga Kliring dan Penjaminan Efek"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66113",
            "nama" => "Lembaga Penyimpanan dan Penyelesaian"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66114",
            "nama" => "Lembaga Penilaian Harga Efek (LPHE)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66115",
            "nama" => "Penyelenggara Dana Perlindungan Pemodal (PDPP)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66116",
            "nama" => "Lembaga Pendanaan Efek"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66117",
            "nama" => "Penyelenggara Pasar Alternatif"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66118",
            "nama" => "Penyelenggara Penawaran Efek Melalui Layanan Urun Dana Berbasis Teknologi Informasi (Securities  Crowdfunding)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66119",
            "nama" => "Penyelenggara Infrastruktur Perdagangan di Pasar Modal Lainnya"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66121",
            "nama" => "Bursa Berjangka"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66122",
            "nama" => "Lembaga Kliring dan Penjaminan Berjangka"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66123",
            "nama" => "Bursa Berjangka Penyelenggara Pasar Fisik"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66124",
            "nama" => "Lembaga Kliring dan Penjaminan Berjangka Penyelenggara Pasar Fisik"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66131",
            "nama" => "Penyelenggara Sarana Pelaksanaan Transaksi di Pasar Uang dan Pasar Valuta Asing"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66132",
            "nama" => "Central Counterparty Transaksi Derivatif Suku Bunga dan Nilai Tukar"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66139",
            "nama" => "Penyelenggara Infrastruktur Pasar Uang dan Pasar Valuta Asing Lainnya"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66141",
            "nama" => "Penjamin Emisi Efek (Underwriter)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66142",
            "nama" => "Perantara Pedagang Efek (Broker Dealer)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66143",
            "nama" => "Perusahaan Efek Daerah (PED)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66144",
            "nama" => "Perantara Pedagang Efek Untuk Efek Bersifat Utang dan Sukuk (PPE-EBUS)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66145",
            "nama" => "Agen Perantara Pedagang Efek"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66146",
            "nama" => "Agen Penjual Efek Reksa Dana (APERD)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66147",
            "nama" => "Gerai Penjualan Efek Reksa Dana"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66149",
            "nama" => "Perusahaan Efek Selain Manajemen Investasi Lainnya"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66151",
            "nama" => "Pedagang Berjangka"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66152",
            "nama" => "Pialang Perdagangan Berjangka"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66153",
            "nama" => "Pedagang Fisik Komoditi"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66154",
            "nama" => "Perantara Perdagangan Fisik Komoditi"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66159",
            "nama" => "Perantara Perdagangan Berjangka Komoditi Lainnya"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66160",
            "nama" => "Kegiatan Penukaran Valuta Asing (Money Changer)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66171",
            "nama" => "Penyelenggara Sistem Perdagangan Alternatif"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66172",
            "nama" => "Pengelola Sentra Dana Berjangka"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66173",
            "nama" => "Penasihat Berjangka"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66174",
            "nama" => "Pengelola Tempat Penyimpanan Fisik Komoditi"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66179",
            "nama" => "Aktivitas Penunjang Perdagangan Berjangka Komoditi Lainnya"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66191",
            "nama" => "Biro Administrasi Efek"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66192",
            "nama" => "Kustodian (Custodian)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66193",
            "nama" => "Wali Amanat (Trustee)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66194",
            "nama" => "Perusahaan Pemeringkat Efek"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66195",
            "nama" => "Ahli Syariah Pasar Modal (ASPM)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66199",
            "nama" => "Aktivitas Penunjang Jasa Keuangan Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66211",
            "nama" => "Aktivitas Penilai Risiko Asuransi"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66212",
            "nama" => "Aktivitas Penilai Kerugian Asuransi"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66221",
            "nama" => "Aktivitas Agen Asuransi"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66222",
            "nama" => "Aktivitas Pialang Asuransi"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66223",
            "nama" => "Aktivitas Pialang Reasuransi"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66224",
            "nama" => "Aktivitas Agen Penjamin"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66225",
            "nama" => "Aktivitas Broker Penjaminan"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66226",
            "nama" => "Aktivitas Broker Penjaminan Ulang"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66291",
            "nama" => "Aktivitas Konsultan Aktuaria"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66292",
            "nama" => "Aktivitas Pemeringkat Usaha Mikro, Kecil, Menengah dan Koperasi"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66299",
            "nama" => "Aktivitas Penunjang Asuransi, dan Dana Pensiun Lainnya"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66311",
            "nama" => "Manajer Investasi"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66312",
            "nama" => "Manajer Investasi Syariah"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66321",
            "nama" => "Penasihat Investasi Perorangan"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66322",
            "nama" => "Penasihat Investasi Berbentuk Perusahaan"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66390",
            "nama" => "Aktivitas Manajemen Dana Lainnya"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66411",
            "nama" => "Penyedia Jasa Pembayaran (PJP)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66412",
            "nama" => "Penyelenggara Infrastruktur Sistem Pembayaran (PIP)"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66413",
            "nama" => "Penyelenggara Penunjang Sistem Pembayaran"
            ],
            [
            "jenis_kbli_id" => 11,
            "kode" => "66420",
            "nama" => "Penyelenggara Kegiatan Jasa Pengolahan Uang Rupiah"
            ],
            [
            "jenis_kbli_id" => 12,
            "kode" => "68111",
            "nama" => "Real Estat Yang Dimiliki Sendiri Atau Disewa"
            ],
            [
            "jenis_kbli_id" => 12,
            "kode" => "68112",
            "nama" => "Penyewaan Venue Penyelenggaraan Aktifitas MICE dan Event Khusus"
            ],
            [
            "jenis_kbli_id" => 12,
            "kode" => "68120",
            "nama" => "Kawasan Pariwisata"
            ],
            [
            "jenis_kbli_id" => 12,
            "kode" => "68130",
            "nama" => "Kawasan Industri"
            ],
            [
            "jenis_kbli_id" => 12,
            "kode" => "68200",
            "nama" => "Real Estat Atas Dasar Balas Jasa (Fee) Atau Kontrak"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "69101",
            "nama" => "Aktivitas pengacara"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "69102",
            "nama" => "Aktivitas konsultan hukum"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "69103",
            "nama" => "Aktivitas konsultan kekayaan intelektual"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "69104",
            "nama" => "Aktivitas notaris dan pejabat pembuat akta tanah"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "69109",
            "nama" => "Aktivitas hukum lainnya"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "69201",
            "nama" => "Aktivitas Akuntansi, Pembukuan dan Pemeriksa"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "69202",
            "nama" => "Aktivitas Konsultasi Pajak"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "70100",
            "nama" => "Aktivitas Kantor Pusat"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "70201",
            "nama" => "Aktivitas Konsultansi Pariwisata"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "70202",
            "nama" => "Aktivitas Konsultansi Transportasi"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "70203",
            "nama" => "Aktivitas Kehumasan"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "70204",
            "nama" => "Aktivitas Konsultansi Manajemen Industri"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "70209",
            "nama" => "Aktivitas Konsultasi Manajemen Lainnya"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "71101",
            "nama" => "Aktivitas Arsitektur"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "71102",
            "nama" => "Aktivitas Keinsinyuran dan Konsultasi Teknis YBDI"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "71201",
            "nama" => "Jasa Sertifikasi"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "71202",
            "nama" => "Jasa Pengujian Laboratorium"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "71203",
            "nama" => "Jasa Inspeksi Periodik"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "71204",
            "nama" => "Jasa Inspeksi Teknik Instalasi"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "71205",
            "nama" => "Jasa Kalibrasi/Metrologi"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "71206",
            "nama" => "Jasa Commissioning Proses Industrial, Quality Assurance (QA), dan Quality Control (QC)"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "71207",
            "nama" => "Jasa Klasifikasi Kapal"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "71208",
            "nama" => "Aktivitas Pengujian dan atau Kalibrasi Alat Kesehatan dan Inspeksi Sarana Prasarana Kesehatan"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "71209",
            "nama" => "Analisis Dan Uji Teknis Lainnya"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72101",
            "nama" => "Penelitian Dan Pengembangan Ilmu Pengetahuan Alam"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72102",
            "nama" => "Penelitian Dan Pengembangan Teknologi Dan Rekayasa"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72103",
            "nama" => "Penelitian Dan Pengembangan Ilmu Kedokteran"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72104",
            "nama" => "Penelitian Dan Pengembangan Bioteknologi"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72105",
            "nama" => "Penelitian Dan Pengembangan Ilmu Pertanian, Peternakan, dan Kehutanan"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72106",
            "nama" => "Penelitian Dan Pengembangan Ilmu Perikanan dan Kelautan"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72107",
            "nama" => "Penelitian dan Pengembangan Ketenaganukliran"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72109",
            "nama" => "Penelitian Dan Pengembangan Ilmu Pengetahuan Alam dan Teknologi Rekayasa Lainnya"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72201",
            "nama" => "Penelitian Dan Pengembangan Ilmu Pengetahuan Sosial"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72202",
            "nama" => "Penelitian Dan Pengembangan Linguistik dan Sastra"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72203",
            "nama" => "Penelitian Dan Pengembangan Agama"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72204",
            "nama" => "Penelitian Dan Pengembangan Seni"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72205",
            "nama" => "Penelitian Dan Pengembangan Psikologi"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72206",
            "nama" => "Penelitian Dan Pengembangan Sejarah/Cagar Budaya"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "72209",
            "nama" => "Penelitian Dan Pengembangan Ilmu Pengetahuan Sosial dan Humaniora Lainnya."
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "73100",
            "nama" => "Periklanan"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "73201",
            "nama" => "Penelitian Pasar"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "73202",
            "nama" => "Jajak Pendapat Masyarakat"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74111",
            "nama" => "Aktivitas Desain Alat Transportasi dan Permesinan"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74112",
            "nama" => "Aktivitas Desain Peralatan Rumah Tangga dan Furnitur"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74113",
            "nama" => "Aktivitas Desain Tekstil, Fashion dan Apparel"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74114",
            "nama" => "Aktivitas Desain industri strategis dan pertahanan"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74115",
            "nama" => "Aktivitas Desain Alat Komunikasi dan Elektronika"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74116",
            "nama" => "Aktivitas Desain Peralatan Olahraga dan Permainan"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74117",
            "nama" => "Aktivitas Desain Produk Kesehatan, Kosmetik dan Perlengkapan Laboratorium"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74118",
            "nama" => "Aktivitas Desain Pengemasan"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74119",
            "nama" => "Aktivitas Desain Industri Lainnya"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74120",
            "nama" => "Aktivitas Desain Interior"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74130",
            "nama" => "Aktivitas Desain Komunikasi Visual/ Desain Grafis"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74141",
            "nama" => "Aktivitas Desain Khusus Film, Video, Program TV, Animasi dan Komik"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74142",
            "nama" => "Aktivitas Desain Konten Game"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74149",
            "nama" => "Aktivitas Desain Konten Kreatif Lainya"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74201",
            "nama" => "Aktivitas Fotografi"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74202",
            "nama" => "Aktivitas Angkutan Udara Khusus Pemotretan, Survei Dan Pemetaan"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74311",
            "nama" => "Aktivitas Sertifikasi Profesi Pihak 1"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74312",
            "nama" => "Aktivitas Sertifikasi Profesi Pihak 2"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74321",
            "nama" => "Aktivitas Sertifikasi Profesi Pihak 3"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74322",
            "nama" => "Aktivitas Sertifikasi Personel Independen"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74901",
            "nama" => "Aktivitas Penerjemah Atau Interpreter"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74902",
            "nama" => "Aktivitas Konsultasi Bisnis Dan Broker Bisnis"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "74909",
            "nama" => "Aktivitas Profesional, Ilmiah dan Teknis Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 13,
            "kode" => "75000",
            "nama" => "Aktivitas Kesehatan Hewan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77100",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Mobil, Bus, Truk Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77210",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Alat rekreasi dan Olahraga"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77220",
            "nama" => "Aktivitas Penyewaan Kaset Video, CD, VCD/DVD Dan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77291",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Alat Pesta"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77292",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Barang Keperluan Rumah Tangga Dan Pribadi"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77293",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Barang Hasil Pencetakan Dan Penerbitan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77294",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Bunga Dan Tanaman Hias"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77295",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Alat Musik"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77299",
            "nama" => "Aktivitas penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Barang Keperluan Rumah Tangga Dan Pribadi  Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77311",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Alat Transportasi Darat Bukan Kendaraan  Bermotor Roda Empat Atau Lebih"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77312",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Alat Transportasi Air"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77313",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Alat Transportasi Udara"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77319",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Alat Transportasi Lainnya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77321",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Tanpa Hak Opsi Alat Perekaman Gambar & Editing"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77322",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Tanpa Hak Opsi Alat Alat Bantu Teknologi Digital"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77323",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Tanpa Hak Opsi Alat Kebutuhan MICE"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77329",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Tanpa Hak Opsi Mesin dan Peralatan Industri Kreatif Lainnya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77391",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Mesin dan Peralatan Industri Pengolahan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77392",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Mesin Pertanian Dan Peralatannya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77393",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Mesin Dan Peralatan Konstruksi Dan Teknik  Sipil"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77394",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak opsi Mesin Kantor Dan Peralatannya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77395",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Tanpa Hak Opsi Mesin Pertambangan dan Energi serta Peralatannya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77399",
            "nama" => "Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi Mesin, Peralatan dan Barang Berwujud  Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "77400",
            "nama" => "Sewa Guna Usaha Tanpa Hak Opsi Intelektual Properti, Bukan Karya Hak Cipta"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78101",
            "nama" => "Aktivitas Penyeleksian Dan Penempatan Tenaga Kerja Dalam Negeri"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78102",
            "nama" => "Aktivitas Penyeleksian Dan Penempatan Tenaga Kerja Luar Negeri"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78103",
            "nama" => "Aktivitas Penempatan Pekerja Rumah Tangga"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78104",
            "nama" => "Aktivitas Penempatan Tenaga Kerja Daring (Job portal)"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78200",
            "nama" => "Aktivitas Penyediaan Tenaga Kerja Waktu Tertentu"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78300",
            "nama" => "Penyediaan Sumber Daya Manusia dan Manajemen Fungsi Sumber Daya Manusia"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78411",
            "nama" => "Pelatihan Kerja Teknik Pemerintah"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78412",
            "nama" => "Pelatihan Kerja Teknologi Informasi dan Komunikasi Pemerintah"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78413",
            "nama" => "Pelatihan Kerja Industri Kreatif Pemerintah"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78414",
            "nama" => "Pelatihan Kerja Pariwisata dan Perhotelan Pemerintah"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78415",
            "nama" => "Pelatihan Kerja Bisnis dan Manajemen Pemerintah"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78416",
            "nama" => "Pelatihan Kerja Pekerjaan Domestik Pemerintah"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78417",
            "nama" => "Pelatihan Kerja Pertanian dan Perikanan Pemerintah"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78419",
            "nama" => "Pelatihan Kerja Pemerintah Lainnya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78421",
            "nama" => "Pelatihan Kerja Teknik Swasta"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78422",
            "nama" => "Pelatihan Kerja Teknologi Informasi dan Komunikasi Swasta"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78423",
            "nama" => "Pelatihan Kerja Industri Kreatif Swasta"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78424",
            "nama" => "Pelatihan Kerja Pariwisata dan Perhotelan Swasta"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78425",
            "nama" => "Pelatihan Kerja Bisnis dan Manajemen Swasta"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78426",
            "nama" => "Pelatihan Kerja Pekerjaan Domestik Swasta"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78427",
            "nama" => "Pelatihan Kerja Pertanian dan Perikanan Swasta"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78429",
            "nama" => "Pelatihan Kerja Swasta Lainnya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78431",
            "nama" => "Pelatihan Kerja Teknik Perusahaan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78432",
            "nama" => "Pelatihan Kerja Teknologi Informasi dan Komunikasi Perusahaan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78433",
            "nama" => "Pelatihan Kerja Industri Kreatif Perusahaan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78434",
            "nama" => "Pelatihan Kerja Pariwisata dan Perhotelan Perusahaan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78435",
            "nama" => "Pelatihan Kerja Bisnis dan Manajemen Perusahaan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78436",
            "nama" => "Pelatihan Kerja Pekerjaan Domestik Perusahaan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78437",
            "nama" => "Pelatihan Kerja Pertanian dan Perikanan Perusahaan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "78439",
            "nama" => "Pelatihan Kerja Perusahaan Lainnya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "79111",
            "nama" => "Aktivitas Agen Perjalanan Wisata"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "79112",
            "nama" => "Aktivitas Agen Perjalanan Ibadah Umroh dan Haji Khusus"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "79119",
            "nama" => "Aktivitas Agen Perjalanan Lainnya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "79121",
            "nama" => "Aktivitas Biro Perjalanan Wisata"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "79122",
            "nama" => "Aktivitas Biro Perjalanan Ibadah Umroh dan Haji Khusus"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "79129",
            "nama" => "Aktivitas Biro Perjalanan Lainnya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "79911",
            "nama" => "Jasa Informasi Pariwisata"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "79912",
            "nama" => "Jasa Informasi Daya Tarik Wisata"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "79921",
            "nama" => "Jasa Pramuwisata"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "79922",
            "nama" => "Jasa interpreter wisata"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "79990",
            "nama" => "Jasa Reservasi Lainnya YBDI YTDL"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "80100",
            "nama" => "Aktivitas Keamanan Swasta"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "80200",
            "nama" => "Aktivitas Jasa Sistem Keamanan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "80300",
            "nama" => "Aktivitas Penyelidikan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "81100",
            "nama" => "Aktivitas Penyedia Gabungan Jasa Penunjang Fasilitas"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "81210",
            "nama" => "Aktivitas Kebersihan Umum Bangunan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "81290",
            "nama" => "Aktivitas Kebersihan Bangunan Dan Industri Lainnya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "81300",
            "nama" => "Aktivitas Perawatan dan Pemeliharaan Taman"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "82110",
            "nama" => "Aktivitas Penyedia Gabungan Jasa Administrasi Kantor"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "82190",
            "nama" => "Aktivitas Fotokopi, Penyiapan Dokumen dan Aktivitas Khusus Penunjang Kantor Lainnya"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "82200",
            "nama" => "Aktivitas call centre"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "82301",
            "nama" => "Jasa Penyelenggara Pertemuan, Perjalanan Insentif, Konferensi dan Pameran (MICE)"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "82302",
            "nama" => "Jasa Penyelenggara Event Khusus (Special Event)"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "82911",
            "nama" => "Aktivitas Debt Collection"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "82912",
            "nama" => "Aktivitas Lembaga Pengelola Informasi Perkreditan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "82920",
            "nama" => "Aktivitas Pengepakan"
            ],
            [
            "jenis_kbli_id" => 14,
            "kode" => "82990",
            "nama" => "Aktivitas Jasa Penunjang Usaha Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84113",
            "nama" => "Lembaga Eksekutif Keuangan, Perpajakan Dan Bea Cukai"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84114",
            "nama" => "Lembaga Eksekutif Perencanaan"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84115",
            "nama" => "Lembaga Pemerintah Non Kementrian Dengan Tugas Khusus"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84119",
            "nama" => "Kegiatan Administrasi Pemerintahan Lainnya"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84121",
            "nama" => "Administrasi Pelayanan Pemerintah Bidang Pendidikan"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84122",
            "nama" => "Administrasi Pelayanan Pemerintah Bidang Kesehatan"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84123",
            "nama" => "Administrasi Pelayanan Pemerintah Bidang Perumahan"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84124",
            "nama" => "Administrasi Pelayanan Pemerintah Bidang Kesejahteraan Sosial"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84125",
            "nama" => "Administrasi Pelayanan Pemerintah Bidang Keagamaan"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84126",
            "nama" => "Administrasi Pelayanan Pemerintah Bidang Kebudayaan/Kesenian/Rekreasi/Olahraga"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84127",
            "nama" => "Administrasi Pelayanan Pemerintah Bidang Lingkungan Hidup"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84129",
            "nama" => "Administrasi Pelayanan Pemerintah Bidang Sosial Lainnya Bukan Kesehatan, Pendidikan, Keagamaan Dan  Kebudayaan"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84131",
            "nama" => "Kegiatan Lembaga Pemerintahan Bidang Pertanian"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84132",
            "nama" => "Kegiatan Lembaga Pemerintahan Bidang Pertambangan Dan Penggalian, Listrik, Air dan Gas"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84133",
            "nama" => "Kegiatan Lembaga Pemerintahan Bidang Perindustrian"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84134",
            "nama" => "Kegiatan Lembaga Pemerintahan Bidang Komunikasi Dan Informatika"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84135",
            "nama" => "Kegiatan Lembaga Pemerintahan Bidang Konstruksi"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84136",
            "nama" => "Kegiatan Lembaga Pemerintahan Bidang Perdagangan Dan Pariwisata"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84137",
            "nama" => "Kegiatan Lembaga Pemerintahan Bidang Perhubungan"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84138",
            "nama" => "Kegiatan Lembaga Pemerintahan Bidang Ketenagakerjaan"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84139",
            "nama" => "Kegiatan Lembaga Pemerintahan Untuk Menciptakan Efisiensi Produksi Dan Bisnis Lainnya"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84210",
            "nama" => "Hubungan Luar Negeri"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84221",
            "nama" => "Lembaga Pertahanan Dan Angkatan Bersenjata"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84222",
            "nama" => "Angkatan Darat"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84223",
            "nama" => "Angkatan Udara"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84224",
            "nama" => "Angkatan Laut"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84231",
            "nama" => "Kepolisian"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84232",
            "nama" => "Pertahanan Sipil"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84233",
            "nama" => "Lembaga Peradilan"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84234",
            "nama" => "Badan Nasional Penanggulangan Bencana dan Pemadam Kebakaran"
            ],
            [
            "jenis_kbli_id" => 15,
            "kode" => "84300",
            "nama" => "Jaminan Sosial Wajib"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85111",
            "nama" => "Pendidikan Dasar/Ibtidaiyah Pemerintah"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85112",
            "nama" => "Pendidikan Menengah Pertama/Tsanawiyah Pemerintah"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85121",
            "nama" => "Pendidikan Dasar/Ibtidaiyah Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85122",
            "nama" => "Pendidikan Menengah Pertama/Tsanawiyah Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85131",
            "nama" => "Pendidikan Taman Kanak-kanak Pemerintah"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85132",
            "nama" => "Pendidikan Taman Kanak-kanak Swasta/Raudatul Athfal/Bustanul Athfal"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85133",
            "nama" => "Pendidikan Kelompok Bermain"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85134",
            "nama" => "Pendidikan Taman Penitipan Anak"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85135",
            "nama" => "Pendidikan Taman Kanak-kanak Luar Biasa"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85139",
            "nama" => "Pendidikan anak usia dini sejenis lainnya"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85141",
            "nama" => "Satuan Pendidikan Kerjasama Kelompok Bermain"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85142",
            "nama" => "Satuan Pendidikan Kerjasama Taman Kanak-Kanak"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85143",
            "nama" => "Satuan Pendidikan Kerjasama Pendidikan Dasar"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85144",
            "nama" => "Satuan Pendidikan Kerjasama Pendidikan Menengah Pertama"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85151",
            "nama" => "Satuan Pendidikan Anak Usia Dini/PAUD Al-Quran"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85152",
            "nama" => "Satuan Pendidikan Muadalah/Pendidikan Diniyah Formal Ula"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85153",
            "nama" => "Satuan Pendidikan Muadalah/Pendidikan Diniyah Formal Wustha"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85154",
            "nama" => "Satuan Pendidikan Pesantren Pengkajian Kitab Kuning Ula"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85155",
            "nama" => "Satuan Pendidikan Pesantren Pengkajian Kitab Kuning Wustha"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85161",
            "nama" => "Satuan Pendidikan Keagamaan Anak Usia Dini"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85162",
            "nama" => "Satuan Pendidikan Keagamaan Dasar"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85163",
            "nama" => "Satuan Pendidikan Keagamaan Menengah Pertama"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85210",
            "nama" => "Pendidikan Menengah Atas/Aliyah Pemerintah"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85220",
            "nama" => "Pendidikan Menengah/Aliyah Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85230",
            "nama" => "Pendidikan Menengah Kejuruan dan Teknis/Aliyah Kejuruan Pemerintah"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85240",
            "nama" => "Pendidikan Menengah Kejuruan/Aliyah Kejuruan Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85251",
            "nama" => "Satuan Pendidikan Kerjasama Pendidikan Menengah Atas"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85252",
            "nama" => "Satuan Pendidikan Kerjasama Pendidikan Menengah Kejuruan"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85261",
            "nama" => "Satuan Pendidikan Muadalah/ Pendidikan Diniyah Formal Ulya"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85262",
            "nama" => "Satuan Pendidikan Pesantren Pengkajian Kitab Kuning Ulya"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85263",
            "nama" => "Satuan Pendidikan Muadalah Wustha dan Ulya Berkesinambungan"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85270",
            "nama" => "Satuan Pendidikan Keagamaan Menengah"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85311",
            "nama" => "Pendidikan Tinggi Akademik Pemerintah"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85312",
            "nama" => "Pendidikan Tinggi Vokasi dan Profesi Pemerintah"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85321",
            "nama" => "Pendidikan Tinggi Akademik Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85322",
            "nama" => "Pendidikan Tinggi Vokasi dan Profesi Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85331",
            "nama" => "Pendidikan Tinggi Keagamaan Pemerintah"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85332",
            "nama" => "Pendidikan Tinggi Keagamaan Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85340",
            "nama" => "Pendidikan Pesantren Tinggi (Mahad Aly)"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85410",
            "nama" => "Jasa Pendidikan Olahraga Dan Rekreasi"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85420",
            "nama" => "Pendidikan Kebudayaan"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85430",
            "nama" => "Pendidikan Lainnya Pemerintah"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85440",
            "nama" => "Satuan Pendidikan Kerjasama Pendidikan NonFormal"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85451",
            "nama" => "Pendidikan Pesantren Lainnya"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85452",
            "nama" => "Pendidikan Keagamaan Islam Non Formal"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85459",
            "nama" => "Pendidikan Keagamaan Lainnya YTD"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85491",
            "nama" => "Jasa Pendidikan Manajemen Dan Perbankan"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85492",
            "nama" => "Jasa Pendidikan Komputer (Teknologi Informasi dan Komunikasi) Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85493",
            "nama" => "Pendidikan Bahasa Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85494",
            "nama" => "Pendidikan Kesehatan Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85495",
            "nama" => "Pendidikan Bimbingan Belajar Dan Konseling Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85496",
            "nama" => "Pendidikan Awak Pesawat dan jasa Angkutan Udara Khusus Pendidikan Awak Pesawat"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85497",
            "nama" => "Pendidikan Teknik Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85498",
            "nama" => "Pendidikan Kerajinan Dan Industri"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85499",
            "nama" => "Pendidikan Lainnya Swasta"
            ],
            [
            "jenis_kbli_id" => 16,
            "kode" => "85500",
            "nama" => "Kegiatan Penunjang Pendidikan"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86101",
            "nama" => "Aktivitas Rumah Sakit Pemerintah"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86102",
            "nama" => "Aktivitas Puskesmas"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86103",
            "nama" => "Aktivitas Rumah Sakit Swasta"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86104",
            "nama" => "Aktivitas Klinik Pemerintah"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86105",
            "nama" => "Aktivitas Klinik Swasta"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86109",
            "nama" => "Aktivitas Rumah Sakit Lainnya"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86201",
            "nama" => "Aktivitas Praktik Dokter"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86202",
            "nama" => "Aktivitas Praktik Dokter Spesialis"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86203",
            "nama" => "Aktivitas Praktik Dokter Gigi"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86901",
            "nama" => "Aktivitas pelayanan kesehatan yang dilakukan oleh tenaga kesehatan selain dokter dan dokter gigi"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86902",
            "nama" => "Aktivitas Pelayanan Kesehatan Tradisional"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86903",
            "nama" => "Aktivitas Pelayanan Penunjang Kesehatan"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "86904",
            "nama" => "Aktivitas Angkutan Khusus Pengangkutan Orang Sakit (Medical Evacuation)"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87100",
            "nama" => "Aktivitas sosial di dalam panti untuk perawatan dan pemulihan kesehatan"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87201",
            "nama" => "Aktivitas Sosial di Dalam Panti untuk Penyandang Disabilitas Grahita"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87202",
            "nama" => "Aktivitas Sosial di Dalam Panti untuk Penyandang Disabilitas Laras"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87203",
            "nama" => "Aktivitas Sosial di Dalam Panti untuk Korban Penyalah Gunaan Narkotika, Alkohol , Psikotropika dan Zat  adiktif (NAPZA)"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87301",
            "nama" => "Aktivitas Sosial Pemerintah di Dalam Panti Untuk Lanjut Usia"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87302",
            "nama" => "Aktivitas Sosial Swasta di Dalam Panti Untuk Lanjut Usia"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87303",
            "nama" => "Aktivitas Sosial di Dalam Panti untuk Penyandang Disabilitas Netra"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87304",
            "nama" => "Aktivitas Sosial di Dalam Panti untuk Penyandang Disabilitas Daksa"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87305",
            "nama" => "Aktivitas Sosial di Dalam Panti untuk Penyandang Disabilitas Rungu Wicara"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87901",
            "nama" => "Aktivitas Panti Asuhan Pemerintah"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87902",
            "nama" => "Aktivitas Panti Asuhan Swasta"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87903",
            "nama" => "Aktivitas Sosial di Dalam Panti untuk Anak yang Berhadapan dengan Hukum"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87904",
            "nama" => "Aktivitas Sosial di Dalam Panti untuk Bina Remaja"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87905",
            "nama" => "Aktivitas Sosial di Dalam Panti untuk Petirahan anak"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87906",
            "nama" => "Aktivitas Sosial di Dalam Panti Sosial Karya Wanita"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87907",
            "nama" => "Aktivitas Sosial di Dalam Panti Gelandangan dan Pengemis"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "87909",
            "nama" => "Aktivitas Sosial Di Dalam Panti Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "88101",
            "nama" => "Aktivitas Sosial Pemerintah Tanpa Akomodasi Untuk Lanjut Usia Dan Penyandang Disabilitas"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "88102",
            "nama" => "Aktivitas Sosial Swasta Tanpa Akomodasi Untuk Lanjut Usia Dan Penyandang Disabilitas"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "88911",
            "nama" => "Aktivitas Sosial Pengumpulan Dana Keislaman"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "88919",
            "nama" => "Aktivitas Sosial Pengumpulan Dana Lainnya"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "88991",
            "nama" => "Aktivitas Sosial Pemerintah Tanpa Akomodasi Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 17,
            "kode" => "88992",
            "nama" => "Aktivitas Sosial Swasta Tanpa Akomodasi Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "90011",
            "nama" => "Aktivitas Seni Pertunjukan"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "90012",
            "nama" => "Aktivitas Penunjang Seni Pertunjukan"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "90021",
            "nama" => "Pelaku Kreatif Seni Pertunjukan"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "90022",
            "nama" => "Pelaku Kreatif Seni Musik"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "90023",
            "nama" => "Aktivitas Pelaku Kreatif Seni Rupa"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "90024",
            "nama" => "Aktivitas Penulis dan Pekerja Sastra"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "90025",
            "nama" => "Jurnalis Berita Independen"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "90030",
            "nama" => "Aktivitas Impresariat Bidang Seni dan Festival Seni"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "90029",
            "nama" => "Aktivitas Pekerja Seni dan Pekerja Kreatif Lainnya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "90040",
            "nama" => "Aktivitas Operasional Fasilitas Seni"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "90090",
            "nama" => "Aktivitas Hiburan, Seni dan Kreativitas Lainnya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91011",
            "nama" => "Perpustakaan Dan Arsip Pemerintah"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91012",
            "nama" => "Perpustakaan dan Arsip Swasta"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91021",
            "nama" => "Museum Yang Dikelola Pemerintah"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91022",
            "nama" => "Museum Yang Dikelola Swasta"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91023",
            "nama" => "Peninggalan Sejarah/Cagar Budaya Yang Dikelola Pemerintah"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91024",
            "nama" => "Peninggalan Sejarah/Cagar Budaya Yang Dikelola Swasta"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91025",
            "nama" => "Taman Budaya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91029",
            "nama" => "Wisata Budaya Lainnya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91031",
            "nama" => "Taman Konservasi Di Luar Habitat Alami (Ex -Situ)"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91032",
            "nama" => "Taman Nasional"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91033",
            "nama" => "Taman Hutan Raya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91034",
            "nama" => "Taman Wisata Alam"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91036",
            "nama" => "Taman Laut"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91037",
            "nama" => "Kawasan Buru"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91038",
            "nama" => "Hutan Lindung"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "91039",
            "nama" => "Aktivitas Kawasan Alam Lainnya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "92000",
            "nama" => "Aktivitas Perjudian Dan Pertaruhan"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93111",
            "nama" => "Fasilitas Stadion"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93112",
            "nama" => "Fasilitas Sirkuit"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93113",
            "nama" => "Fasilitas Gelanggang/Arena"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93114",
            "nama" => "Fasilitas Lapangan"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93115",
            "nama" => "Fasilitas Olahraga Beladiri"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93116",
            "nama" => "Fasilitas Pusat Kebugaran/ Fitness Center"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93119",
            "nama" => "Pengelolaan Fasilitas Olah raga Lainnya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93121",
            "nama" => "Klub Sepak Bola"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93122",
            "nama" => "Klub Golf"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93123",
            "nama" => "Klub Renang"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93124",
            "nama" => "Klub Tenis Lapangan"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93125",
            "nama" => "Klub Tinju"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93126",
            "nama" => "Klub Bela Diri"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93127",
            "nama" => "Klub Kebugaran/Fitness Dan Binaraga"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93128",
            "nama" => "Klub Bowling"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93129",
            "nama" => "Klub Olahraga Lainnya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93191",
            "nama" => "Promotor Kegiatan Olahraga"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93192",
            "nama" => "Olahragawan, Juri dan Wasit Profesional"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93193",
            "nama" => "Aktivitas Perburuan"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93194",
            "nama" => "Badan Regulasi Dan Liga Olahraga"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93195",
            "nama" => "Aktivitas Olahraga Tradisional"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93199",
            "nama" => "Aktivitas Lainnya Yang Berkaitan Dengan Olahraga"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93211",
            "nama" => "Taman Rekreasi"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93219",
            "nama" => "Aktivitas taman bertema atau taman hiburan lainnya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93221",
            "nama" => "Pemandian Alam"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93222",
            "nama" => "Wisata Gua"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93223",
            "nama" => "Wisata Petualangan Alam"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93224",
            "nama" => "Wisata Pantai"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93229",
            "nama" => "Daya Tarik Wisata Alam Lainnya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93231",
            "nama" => "Wisata Agro"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93232",
            "nama" => "Taman Rekreasi/Taman Wisata"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93233",
            "nama" => "Kolam Pemancingan"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93239",
            "nama" => "Daya Tarik Wisata Buatan/Binaan Manusia Lainnya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93241",
            "nama" => "Arung Jeram"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93242",
            "nama" => "Wisata Selam"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93243",
            "nama" => "Dermaga Marina"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93245",
            "nama" => "Wisata Memancing"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93244",
            "nama" => "Kolam Pemancingan."
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93246",
            "nama" => "Aktivitas Wisata Air"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93249",
            "nama" => "Wisata Tirta Lainnya"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93291",
            "nama" => "Klub Malam"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93292",
            "nama" => "Karaoke"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93293",
            "nama" => "Usaha Arena Permainan"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93294",
            "nama" => "Diskotek"
            ],
            [
            "jenis_kbli_id" => 18,
            "kode" => "93299",
            "nama" => "Aktivitas Hiburan dan Rekreasi Lainnya Ytdl"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "94110",
            "nama" => "Aktivitas Organisasi Bisnis Dan Pengusaha"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "94121",
            "nama" => "Aktivitas Organisasi Ilmu Pengetahuan Sosial Dan Masyarakat"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "94122",
            "nama" => "Aktivitas Organisasi Ilmu Pengetahuan Alam Dan Teknologi"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "94200",
            "nama" => "Aktivitas Organisasi Buruh"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "94910",
            "nama" => "Aktivitas Organisasi Keagamaan"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "94920",
            "nama" => "Aktivitas Organisasi Politik"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "94990",
            "nama" => "Aktivitas Organisasi Keanggotaan Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "95110",
            "nama" => "Reparasi Komputer dan Peralatan Sejenisnya"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "95120",
            "nama" => "Reparasi Peralatan Komunikasi"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "95210",
            "nama" => "Reparasi Alat-alat Elektronik Konsumen"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "95220",
            "nama" => "Reparasi Peralatan Rumah Tangga Dan Peralatan Rumah Dan Kebun"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "95230",
            "nama" => "Reparasi Alas Kaki Dan Barang Dari Kulit"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "95240",
            "nama" => "Reparasi Furnitur Dan Perlengkapan Rumah"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "95291",
            "nama" => "Aktivitas Vermak Pakaian"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "95299",
            "nama" => "Reparasi Barang Rumah Tangga Dan Pribadi Lainnya"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "96111",
            "nama" => "Aktivitas Pangkas Rambut"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "96112",
            "nama" => "Aktivitas Salon Kecantikan"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "96121",
            "nama" => "Rumah Pijat"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "96122",
            "nama" => "Aktivitas SPA (Sante Par Aqua)"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "96129",
            "nama" => "Aktivitas Kebugaran Lainnya"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "96200",
            "nama" => "Aktivitas penatu"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "96910",
            "nama" => "Aktivitas Pemakaman Dan Kegiatan YBDI"
            ],
            [
            "jenis_kbli_id" => 19,
            "kode" => "96990",
            "nama" => "Aktivitas Jasa Perorangan Lainnya YTDL"
            ],
            [
            "jenis_kbli_id" => 20,
            "kode" => "97000",
            "nama" => "Aktivitas Rumah Tangga Sebagai Pemberi Kerja Dari Personil Domestik"
            ],
            [
            "jenis_kbli_id" => 20,
            "kode" => "98100",
            "nama" => "Aktivitas Yang Menghasilkan Barang Oleh Rumah Tangga Yang Digunakan Untuk Memenuhi Kebutuhan  Sendiri"
            ],
            [
            "jenis_kbli_id" => 20,
            "kode" => "98200",
            "nama" => "Aktivitas yang menghasilkan jasa oleh rumah tangga yang digunakan untuk memenuhi kebutuhan sendiri"
            ],
            [
            "jenis_kbli_id" => 21,
            "kode" => "99000",
            "nama" => "Aktivitas Badan Internasional Dan Badan Ekstra Internasional Lainnya"
            ]
        );
        $day = array(
            [
                'd' => '1'
            ],
            [
                'd' => '2'
            ],
            [
                'd' => '3'
            ],
            [
                'd' => '4'
            ],
            [
                'd' => '5'
            ],
            [
                'd' => '6'
            ],
            [
                'd' => '7'
            ],
            [
                'd' => '8'
            ],
            [
                'd' => '9'
            ],
            [
                'd' => '10'
            ],
            [
                'd' => '11'
            ],
            [
                'd' => '12'
            ],
            [
                'd' => '13'
            ],
            [
                'd' => '14'
            ],
            [
                'd' => '15'
            ],
            [
                'd' => '16'
            ],
            [
                'd' => '17'
            ],
            [
                'd' => '18'
            ],
            [
                'd' => '19'
            ],
            [
                'd' => '20'
            ],
            [
                'd' => '21'
            ],
            [
                'd' => '22'
            ],
            [
                'd' => '23'
            ],
            [
                'd' => '24'
            ],
            [
                'd' => '25'
            ],
            [
                'd' => '26'
            ],
            [
                'd' => '27'
            ],
            [
                'd' => '28'
            ],
            [
                'd' => '29'
            ],
            [
                'd' => '30'
            ],
            [
                'd' => '31'
            ],
        );
        $bank = array(
            [
                "nama" => "AGRONIAGA BANK"
            ],
            [
            "nama" => "ANGLOMAS INTERNATIONAL BANK"
            ],
            [
            "nama" => "ANZ PANIN BANK "
            ],
            [
            "nama" => "BANK AGRIS"
            ],
            [
            "nama" => "BANK ANDARA"
            ],
            [
            "nama" => "BANK ANTAR DAERAH"
            ],
            [
            "nama" => "BANK ARTHA GRAHA INTERNASIONAL "
            ],
            [
            "nama" => "BANK ARTOS INDONESIA"
            ],
            [
            "nama" => "BANK BCA SYARIAH"
            ],
            [
            "nama" => "BANK BISNIS INTERNATIONAL"
            ],
            [
            "nama" => "BANK BNI SYARIAH"
            ],
            [
            "nama" => "BANK BNP PARIBAS INDONESIA"
            ],
            [
            "nama" => "BANK BUMI ARTA"
            ],
            [
            "nama" => "BANK CAPITAL INDONESIA"
            ],
            [
            "nama" => "BANK CENTRAL ASIA "
            ],
            [
            "nama" => "BANK CHINATRUST INDONESIA"
            ],
            [
            "nama" => "BANK CIMB NIAGA "
            ],
            [
            "nama" => "BANK CIMB NIAGA SYARIAH"
            ],
            [
            "nama" => "BANK COMMONWEALTH"
            ],
            [
            "nama" => "BANK DANAMON INDONESIA "
            ],
            [
            "nama" => "BANK DANAMON INDONESIA INDONESIA SYARIAH"
            ],
            [
            "nama" => "BANK DBS INDONESIA"
            ],
            [
            "nama" => "BANK DIPO INTERNATIONAL"
            ],
            [
            "nama" => "BANK DKI JAKARTA"
            ],
            [
            "nama" => "BANK DKI JAKARTA SYARIAH"
            ],
            [
            "nama" => "BANK EKONOMI RAHARJA"
            ],
            [
            "nama" => "BANK FAMA INTERNATIONAL"
            ],
            [
            "nama" => "BANK GANESHA"
            ],
            [
            "nama" => "BANK HANA"
            ],
            [
            "nama" => "BANK HARDA INTERNASIONAL"
            ],
            [
            "nama" => "BANK HS 1906"
            ],
            [
            "nama" => "BANK ICB BUMIPUTERA "
            ],
            [
            "nama" => "BANK ICBC INDONESIA"
            ],
            [
            "nama" => "BANK INA PERDANA"
            ],
            [
            "nama" => "BANK INDEX SELINDO"
            ],
            [
            "nama" => "BANK INTERNATIONAL INDONESIA "
            ],
            [
            "nama" => "BANK INTERNATIONAL INDONESIA SYARIAH"
            ],
            [
            "nama" => "BANK JABAR BANTEN SYARIAH"
            ],
            [
            "nama" => "BANK JABAR DAN BANTEN"
            ],
            [
            "nama" => "BANK JASA JAKARTA"
            ],
            [
            "nama" => "BANK KEB INDONESIA"
            ],
            [
            "nama" => "BANK KESAWAN"
            ],
            [
            "nama" => "BANK KESEJAHTERAAN EKONOMI"
            ],
            [
            "nama" => "BANK LIMAN INTERNATIONAL"
            ],
            [
            "nama" => "BANK MAHKOTA"
            ],
            [
            "nama" => "BANK MANDIRI (PERSERO) "
            ],
            [
            "nama" => "BANK MASPION INDONESIA"
            ],
            [
            "nama" => "BANK MAYAPADA"
            ],
            [
            "nama" => "BANK MAYBANK SYARIAH INDONESIA"
            ],
            [
            "nama" => "BANK MAYORA INDONESIA"
            ],
            [
            "nama" => "BANK MEGA "
            ],
            [
            "nama" => "BANK MESTIKA DHARMA"
            ],
            [
            "nama" => "BANK METRO EKSPRESS"
            ],
            [
            "nama" => "BANK MITRANIAGA"
            ],
            [
            "nama" => "BANK MIZUHO INDONESIA"
            ],
            [
            "nama" => "BANK MUAMALAT INDONESIA"
            ],
            [
            "nama" => "BANK MULTIARTA SENTOSA"
            ],
            [
            "nama" => "BANK MUTIARA, "
            ],
            [
            "nama" => "BANK NATIONALNOBU"
            ],
            [
            "nama" => "BANK NEGARA INDONESIA 1946 (Persero) "
            ],
            [
            "nama" => "BANK NUSANTARA PARAHYANGAN"
            ],
            [
            "nama" => "BANK OCBC NISP "
            ],
            [
            "nama" => "BANK OCBC NISP SYARIAH"
            ],
            [
            "nama" => "BANK OF AMERICA NA "
            ],
            [
            "nama" => "BANK OF CHINA LIMITED"
            ],
            [
            "nama" => "BANK PAN INDONESIA "
            ],
            [
            "nama" => "BANK PANIN SYARIAH"
            ],
            [
            "nama" => "BANK PEMBANGUAN DAERAH ISTIMEWA ACEH SYARIAH"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH JATIM"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH JATIM SYARIAH"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH BALI"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH BENGKULU"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH DIY"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH ISTIMEWA ACEH"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH JAMBI"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH JATENG SYARIAH"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH JAWA TENGAH"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH KALIMANTAN BARAT"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH KALIMANTAN BARAT SYARIAH"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH KALIMANTAN SELATAN"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH KALIMANTAN SELATAN SYARIAH"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH KALIMANTAN TIMUR"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH KALTENG"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH KALTIM SYARIAH"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH LAMPUNG"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH MALUKU"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH NUSA TENGGARA BARAT"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH NUSA TENGGARA TIMUR"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH PAPUA"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH RIAU"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH SULAWESI SELATAN"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH SULAWESI TENGAH"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH SULAWESI TENGGARA"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH SULAWESI UTARA"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH SUMATERA BARAT (BANK NAGARI)"
            ],
            [
            "nama" => "BANK PEMBANGUNAN DAERAH SUMATERA UTARA"
            ],
            [
            "nama" => "BANK PERMATA "
            ],
            [
            "nama" => "BANK PERMATA SYARIAH"
            ],
            [
            "nama" => "BANK PUNDI INDONESIA "
            ],
            [
            "nama" => "BANK RABOBANK INTERNATIONAL INDONESIA"
            ],
            [
            "nama" => "BANK RAKYAT INDONESIA (Persero) "
            ],
            [
            "nama" => "BANK RESONA PERDANIA"
            ],
            [
            "nama" => "BANK ROYAL INDONESIA"
            ],
            [
            "nama" => "BANK SAHABAT PURBA DANARTA"
            ],
            [
            "nama" => "BANK SBI INDONESIA"
            ],
            [
            "nama" => "BANK SINAR HARAPAN BALI"
            ],
            [
            "nama" => "BANK SINARMAS"
            ],
            [
            "nama" => "BANK SINARMAS SYARIAH"
            ],
            [
            "nama" => "BANK SULSELBAR SYARIAH"
            ],
            [
            "nama" => "BANK SUMITOMO MITSUI INDONESIA"
            ],
            [
            "nama" => "BANK SWADESI "
            ],
            [
            "nama" => "BANK SYARIAH BRI"
            ],
            [
            "nama" => "BANK SYARIAH BUKOPIN"
            ],
            [
            "nama" => "BANK SYARIAH MANDIRI"
            ],
            [
            "nama" => "BANK SYARIAH MEGA INDONESIA"
            ],
            [
            "nama" => "BANK TABUNGAN NEGARA (Persero)"
            ],
            [
            "nama" => "BANK TABUNGAN NEGARA (Persero) SYARIAH"
            ],
            [
            "nama" => "BANK TABUNGAN PENSIUNAN NEGARA"
            ],
            [
            "nama" => "BANK TABUNGAN PENSIUNAN NEGARA SYARIAH"
            ],
            [
            "nama" => "BANK UMUM KOPERASI INDONESIA (BUKOPIN)"
            ],
            [
            "nama" => "BANK UOB INDONESIA"
            ],
            [
            "nama" => "BANK VICTORIA INTERNATIONAL"
            ],
            [
            "nama" => "BANK VICTORIA SYARIAH"
            ],
            [
            "nama" => "BANK WINDU KENTJANA INTERNATIONAL "
            ],
            [
            "nama" => "BANK WOORI INDONESIA"
            ],
            [
            "nama" => "BANK YUDHA BHAKTI"
            ],
            [
            "nama" => "BPD DIY SYARIAH"
            ],
            [
            "nama" => "BPD SUMSEL DAN BABEL"
            ],
            [
            "nama" => "BPD SUMSEL DAN BABEL SYARIAH"
            ],
            [
            "nama" => "BPD SUMUT SYARIAH"
            ],
            [
            "nama" => "CENTRATAMA NASIONAL BANK"
            ],
            [
            "nama" => "CHINA CONSTRUCTION BANK"
            ],
            [
            "nama" => "CITIBANK NA"
            ],
            [
            "nama" => "DEUTSCHE BANK AG "
            ],
            [
            "nama" => "JPMORGAN CHASE BANK, NA"
            ],
            [
            "nama" => "Lloyd Bank PLC"
            ],
            [
            "nama" => "MAYBANK INDONESIA"
            ],
            [
            "nama" => "PRIMA MASTER BANK "
            ],
            [
            "nama" => "STANDARD CHARTERED BANK"
            ],
            [
            "nama" => "Skandinaviska Enskilda Banken"
            ],
            [
            "nama" => "THE BANGKOK BANK PCL"
            ],
            [
            "nama" => "THE BANK OF TOKYO MITSUBISHI UFJ LTD."
            ],
            [
            "nama" => "THE HONGKONG AND SHANGHAI BC (HSBC)"
            ],
            [
            "nama" => "THE HONGKONG AND SHANGHAI BC (HSBC) SYARIAH"
            ],
            [
            "nama" => "Wells Fergo Bank"
            ]
        );
        foreach($company AS $d){
            Company::create([
                "name" => $d['name'],
                "address" => $d['address'],
                "phone" => $d['phone'],
                "email" => $d['email'],
                "web_url" => $d['web_url'],
                "instagram_url" => $d['instagram_url'],
                "linkedin_url" => $d['linkedin_url'],
                "facebook_url" => $d['facebook_url'],
                "twitter_url" => $d['twitter_url'],
            ]);
        }
        foreach($company_address AS $d){
            CompanyAddress::create([
                "company_id" => $d['company_id'],
                "name" => $d['name'],
                "address" => $d['address'],
                "is_primary" => $d['is_primary'],
            ]);
        }
        foreach($day AS $d){
            Day::create([
                'id' => $d['d']
            ]);
        }
        foreach($bank AS $b){
            Bank::create([
                'name' => $b['nama'],
                'is_activated' => false
            ]);
        }
        foreach($jenis_kbli AS $jk){
            IsicType::create([
                'name' => $jk['nama']
            ]);
        }
        foreach($kbli AS $k){
            Isic::create([
                'isic_type_id' => $k['jenis_kbli_id'],
                'code' => $k['kode'],
                'name' => $k['nama']
            ]);
        }
    }
}
