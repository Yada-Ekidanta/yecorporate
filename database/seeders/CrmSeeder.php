<?php

namespace Database\Seeders;

use App\Models\Master\Tax;
use Illuminate\Support\Str;
use App\Models\Master\CaseType;
use Illuminate\Database\Seeder;
use App\Models\Master\TaskStage;
use App\Models\Master\ClientType;
use App\Models\Master\LeadSource;
use App\Models\Master\TargetList;
use App\Models\Master\CampaignType;
use App\Models\Master\DocumentType;
use App\Models\Master\OpportunityStage;
use App\Models\Master\ShippingProvider;
use App\Models\Setting\CompanyIndustry;

class CrmSeeder extends Seeder
{
    public function run()
    {
        $client_type = array(
            [
                'name' => 'Customer'
            ],
            [
                'name' => 'Investor'
            ],
            [
                'name' => 'Partner'
            ],
        );
        foreach($client_type AS $i){
            ClientType::create([
                'name' => $i['name']
            ]);
        }
        $case_type = array(
            [
                'name' => 'Question'
            ],
            [
                'name' => 'Incident'
            ],
            [
                'name' => 'Problem'
            ],
        );
        foreach($case_type AS $i){
            CaseType::create([
                'name' => $i['name']
            ]);
        }
        $document_type = array(
            [
                'name' => 'Contract'
            ],
            [
                'name' => 'EULA'
            ],
            [
                'name' => 'License Agreement'
            ],
            [
                'name' => 'NDA'
            ],
        );
        foreach($document_type AS $i){
            DocumentType::create([
                'name' => $i['name']
            ]);
        }
        $target_list = array(
            [
                'name' => 'Company Growth Rate',
            ],
            [
                'name' => 'Industry Growth Rate.'
            ],
            [
                'name' => 'Age of Business'
            ],
            [
                'name' => 'Industry type'
            ],
            [
                'name' => 'Geography (Region)'
            ],
        );
        foreach($target_list AS $i){
            TargetList::create([
                'name' => $i['name']
            ]);
        }
        $campaign_type = array(
            [
                'name' => 'Email'
            ],
            [
                'name' => 'Newsletter'
            ],
            [
                'name' => 'Web'
            ],
            [
                'name' => 'Television'
            ],
            [
                'name' => 'Radio'
            ],
        );
        foreach($campaign_type AS $i){
            CampaignType::create([
                'name' => $i['name']
            ]);
        }
        $tax = array(
            [
                'name' => 'SGST',
                'rates' => '10',
            ],
            [
                'name' => 'CGST',
                'rates' => '10',
            ],
        );
        foreach($tax AS $i){
            Tax::create([
                'name' => $i['name'],
                'rates' => $i['rates']
            ]);
        }
        $lead_source = array(
            [
                'name' => 'Call',
            ],
            [
                'name' => 'Email',
            ],
            [
                'name' => 'Existing Customer',
            ],
            [
                'name' => 'Partner',
            ],
            [
                'name' => 'Public Relations',
            ],
            [
                'name' => 'Web Site',
            ],
            [
                'name' => 'Campaign',
            ],
        );
        foreach($lead_source AS $i){
            LeadSource::create([
                'name' => $i['name']
            ]);
        }
        $opportunity_stage = array(
            [
                'name' => 'Prospecting',
            ],
            [
                'name' => 'Qualification',
            ],
            [
                'name' => 'Proposal',
            ],
            [
                'name' => 'Negotiation',
            ],
            [
                'name' => 'Closed Won',
            ],
            [
                'name' => 'Closed Lost',
            ],
        );
        foreach($opportunity_stage AS $i){
            OpportunityStage::create([
                'name' => $i['name']
            ]);
        }
        $shipping_provider = array(
            [
                'name' => 'POS Indonesia (POS)',
                'nick' => 'POS',
            ],
            [
                'name' => 'Lion Parcel',
                'nick' => 'LION',
            ],
            [
                'name' => 'Ninja Xpress (NINJA)',
                'nick' => 'NINJA',
            ],
            [
                'name' => 'ID Express',
                'nick' => 'IDE',
            ],
            [
                'name' => 'SiCepat Express',
                'nick' => 'SICEPAT',
            ],
            [
                'name' => 'SAP Express',
                'nick' => 'SAP',
            ],
            [
                'name' => 'Nusantara Card Semesta',
                'nick' => 'NCS',
            ],
            [
                'name' => 'AnterAja',
                'nick' => 'ANTERAJA',
            ],
            [
                'name' => 'Royal Express Indonesia',
                'nick' => 'REX',
            ],
            [
                'name' => 'JTL Express',
                'nick' => 'JTL',
            ],
            [
                'name' => 'Sentral Cargo',
                'nick' => 'SENTRAL',
            ],
            [
                'name' => 'Jalur Nugraha Ekakurir',
                'nick' => 'JNE',
            ],
            [
                'name' => 'Citra Van Titipan Kilat',
                'nick' => 'TIKI',
            ],
            [
                'name' => 'RPX Holding',
                'nick' => 'RPX',
            ],
            [
                'name' => 'Pandu Logistics',
                'nick' => 'PANDU',
            ],
            [
                'name' => 'Wahana Prestasi Logistik',
                'nick' => 'WAHANA',
            ],
            [
                'name' => 'J&T Express',
                'nick' => 'J&T',
            ],
            [
                'name' => 'Pahala Kencana Express',
                'nick' => 'PAHALA',
            ],
            [
                'name' => 'JET Express',
                'nick' => 'JET',
            ],
            [
                'name' => 'Solusi Ekspres',
                'nick' => 'SLIS',
            ],
            [
                'name' => 'Expedito',
                'nick' => 'EXPEDITO',
            ],
            [
                'name' => 'Ray Speed',
                'nick' => 'RAY',
            ],
            [
                'name' => '21 Express',
                'nick' => 'DSE',
            ],
            [
                'name' => 'First Logistics',
                'nick' => 'FIRST',
            ],
            [
                'name' => 'Star Cargo',
                'nick' => 'STAR',
            ],
            [
                'name' => 'IDL Cargo',
                'nick' => 'IDL',
            ],
        );
        foreach($shipping_provider AS $i){
            ShippingProvider::create([
                'name' => $i['name'],
                'nick' => $i['nick']
            ]);
        }
        $task_stage = array(
            [
                'name' => 'To Do',
            ],
            [
                'name' => 'In Progress',
            ],
            [
                'name' => 'Bugs',
            ],
            [
                'name' => 'Done',
            ],
        );
        foreach($task_stage AS $i){
            TaskStage::create([
                'name' => $i['name']
            ]);
        }
        $industry = array(
            [
                'name' => 'Automotive'
            ],
            [
                'name' => 'Accomodation & Food Service'
            ],
            [
                'name' => 'Banking & Finance'
            ],
            [
                'name' => 'Consumer Goods Mfg.'
            ],
            [
                'name' => 'Design & Marketing'
            ],
            [
                'name' => 'Educational Services'
            ],
            [
                'name' => 'Government'
            ],
            [
                'name' => 'Health Care'
            ],
            [
                'name' => 'Industrial Goods & Services'
            ],
            [
                'name' => 'Media'
            ],
            [
                'name' => 'Natural Resources & Energy'
            ],
            [
                'name' => 'Real Estate'
            ],
            [
                'name' => 'Telecommunication Services'
            ],
            [
                'name' => 'Transporation & Logistics'
            ],
            [
                'name' => 'Wholesale, Retail, Distributor'
            ],
            [
                'name' => 'Others'
            ],
        );
        foreach($industry AS $i){
            CompanyIndustry::create([
                'name' => $i['name']
            ]);
        }
        // $clients = array(
        //     [
        //         'company_industry_id' => '11',
        //         'company_name' => 'PT. Perkebunan Sumatera Utara',
        //         'company_logo' => 'client_company/psu.png',
        //         'title' => 'Direktur Keuangan & Umum',
        //         'name' => 'Hidayat Nasution',
        //         'username' => 'hidayatnst',
        //         'phone' => '',
        //         'email' => '',
        //         'email_verified_at' => now(),
        //         'address' => '',
        //         'password' => '',
        //         'date_birth' => null,
        //         'lead_referral_source' => 'Relationship',
        //         'website' => 'ptpsumut.com',
        //         'google_id' => '',
        //         'type' => 'Client',
        //         'category' => 'Offline',
        //         'st' => 'Active',
        //         'avatar' => 'client_avatar/hidayat.jpeg',
        //     ],
        //     [
        //         'company_industry_id' => '7',
        //         'company_name' => 'Kementerian Pekerjaan Umum dan Perumahan Rakyat',
        //         'company_logo' => 'client_company/pu.jpg',
        //         'title' => 'KA Subdit',
        //         'name' => 'Erni',
        //         'username' => 'sayembaraikn',
        //         'phone' => '',
        //         'email' => '',
        //         'email_verified_at' => now(),
        //         'address' => '',
        //         'password' => '',
        //         'date_birth' => null,
        //         'lead_referral_source' => 'Relationship',
        //         'website' => 'ptpsumut.com',
        //         'google_id' => '',
        //         'type' => 'Client',
        //         'category' => 'Offline',
        //         'st' => 'Active',
        //         'avatar' => null,
        //     ],
        //     [
        //         'company_industry_id' => '13',
        //         'company_name' => 'Republik Defence',
        //         'company_logo' => 'client_company/rdi.png',
        //         'title' => 'Founder',
        //         'name' => 'Norman Joesoef',
        //         'username' => 'republikdefence',
        //         'phone' => '',
        //         'email' => '',
        //         'email_verified_at' => now(),
        //         'address' => '',
        //         'password' => '',
        //         'date_birth' => null,
        //         'lead_referral_source' => 'Relationship',
        //         'website' => 'republikdefence.com',
        //         'google_id' => '',
        //         'type' => 'Client',
        //         'category' => 'Offline',
        //         'st' => 'Active',
        //         'avatar' => 'client_avatar/norman.png',
        //     ],
        // );
        // $project = array(
        //     [
        //         'employee_id' => '0',
        //         'client_id' => '1',
        //         'title' => 'Company Profile',
        //         'description' => 'PT Perkebunan Sumatera Utara (Persero) merupakan salah satu badan usaha milik daerah Provinsi Sumatera Utara, didirikan berdasarkan Peraturan Daerah Tingkat I Sumatera Utara Nomor 16 Tahun 1979 dengan bentuk badan hukum yang pertama sekali berupa Perusahaan Daerah (PD). Kemudian disempurnakan dengan Peraturan Daerah Nomor 24 tahun 1985 yang disahkan dengan Keputusan Menteri Dalam Negeri Nomor 539.22-1434 tanggal 16 Oktober 1985 dan diundangkan dalam lembaran daerah Provinsi Sumatera Utara tanggal 29 Januari 1986. Dalam rangka mengantisipasi era globalisasi (perdagangan bebas) dan turut serta membantu Pemerintah dalam menggerakkan ekonomi kerakyatan, dipandang perlu meningkatkan peran dan fungsi Perusahaan Daerah Perkebunan Sumatera Utara sehingga mampu menarik minat investor baru untuk turut serta dalam penyertaan modal. Berdasarkan pertimbangan tersebut, bentuk badan hukum perusahaan dirubah dari PD. Perkebunan Sumatera Utara menjadi PT. Perkebunan Sumatera Utara, berdasarkan Peraturan Daerah No. 4 Tahun 2004 tanggal 17 Juni 2004 tentang Perubahan Bentuk Badan Hukum Perusahaan Daerah Perkebunan menjadi Perseroan Terbatas (PT) Perkebunan Sumatera Utara dengan Akta Pendirian Perseroan Terbatas No. 98 tanggal 29 Agustus 2005 yang telah disahkan oleh Menteri Hukum dan HAM Republik Indonesia No. C-14712 HT.01.01 TH 2006 tanggal 18 Mei 2006 dan telah diumumkan dalam Berita Negara Republik Indonesia No. 63 tanggal 8 Agustus 2006, Tambahan Berita Negara No.8420/2006 tanggal 24 Juli 2006. Anggaran Dasar Perusahaan mengalami perubahan sesuai dengan UU No. 40 tahun 2007 tentang perseroan terbatas, dengan Akta Penegasan Berita Acara Rapat Umum Luar Biasa Pemegang Saham PT. Perkebunan Sumatera Utara No. 10 tanggal 26 Nopember 2008 yang dibuat dihadapan Notaris Alina Hanum, SH di Medan.',
        //         'thumbnail' => 'project/psu.png',
        //         'website' => 'https://ptpsumut.com',
        //         'amount' => '10000000',
        //         'total_payment' => '10000000',
        //         'total_spend' => '10000000',
        //         'start_at' => '2021-08-21',
        //         'due_at' => '2021-09-21',
        //         'st' => 'Finish',
        //     ],
        //     [
        //         'employee_id' => '0',
        //         'client_id' => '1',
        //         'title' => 'e-Procurement',
        //         'description' => 'PT Perkebunan Sumatera Utara (Persero) merupakan salah satu badan usaha milik daerah Provinsi Sumatera Utara, didirikan berdasarkan Peraturan Daerah Tingkat I Sumatera Utara Nomor 16 Tahun 1979 dengan bentuk badan hukum yang pertama sekali berupa Perusahaan Daerah (PD). Kemudian disempurnakan dengan Peraturan Daerah Nomor 24 tahun 1985 yang disahkan dengan Keputusan Menteri Dalam Negeri Nomor 539.22-1434 tanggal 16 Oktober 1985 dan diundangkan dalam lembaran daerah Provinsi Sumatera Utara tanggal 29 Januari 1986. Dalam rangka mengantisipasi era globalisasi (perdagangan bebas) dan turut serta membantu Pemerintah dalam menggerakkan ekonomi kerakyatan, dipandang perlu meningkatkan peran dan fungsi Perusahaan Daerah Perkebunan Sumatera Utara sehingga mampu menarik minat investor baru untuk turut serta dalam penyertaan modal. Berdasarkan pertimbangan tersebut, bentuk badan hukum perusahaan dirubah dari PD. Perkebunan Sumatera Utara menjadi PT. Perkebunan Sumatera Utara, berdasarkan Peraturan Daerah No. 4 Tahun 2004 tanggal 17 Juni 2004 tentang Perubahan Bentuk Badan Hukum Perusahaan Daerah Perkebunan menjadi Perseroan Terbatas (PT) Perkebunan Sumatera Utara dengan Akta Pendirian Perseroan Terbatas No. 98 tanggal 29 Agustus 2005 yang telah disahkan oleh Menteri Hukum dan HAM Republik Indonesia No. C-14712 HT.01.01 TH 2006 tanggal 18 Mei 2006 dan telah diumumkan dalam Berita Negara Republik Indonesia No. 63 tanggal 8 Agustus 2006, Tambahan Berita Negara No.8420/2006 tanggal 24 Juli 2006. Anggaran Dasar Perusahaan mengalami perubahan sesuai dengan UU No. 40 tahun 2007 tentang perseroan terbatas, dengan Akta Penegasan Berita Acara Rapat Umum Luar Biasa Pemegang Saham PT. Perkebunan Sumatera Utara No. 10 tanggal 26 Nopember 2008 yang dibuat dihadapan Notaris Alina Hanum, SH di Medan.',
        //         'thumbnail' => 'project/eproc_psu.png',
        //         'website' => 'https://eproc.ptpsumut.com',
        //         'amount' => '10000000',
        //         'total_payment' => '10000000',
        //         'total_spend' => '10000000',
        //         'start_at' => '2021-08-21',
        //         'due_at' => '2021-09-21',
        //         'st' => 'Finish',
        //     ],
        //     [
        //         'employee_id' => '0',
        //         'client_id' => '1',
        //         'title' => 'e-Office',
        //         'description' => 'PT Perkebunan Sumatera Utara (Persero) merupakan salah satu badan usaha milik daerah Provinsi Sumatera Utara, didirikan berdasarkan Peraturan Daerah Tingkat I Sumatera Utara Nomor 16 Tahun 1979 dengan bentuk badan hukum yang pertama sekali berupa Perusahaan Daerah (PD). Kemudian disempurnakan dengan Peraturan Daerah Nomor 24 tahun 1985 yang disahkan dengan Keputusan Menteri Dalam Negeri Nomor 539.22-1434 tanggal 16 Oktober 1985 dan diundangkan dalam lembaran daerah Provinsi Sumatera Utara tanggal 29 Januari 1986. Dalam rangka mengantisipasi era globalisasi (perdagangan bebas) dan turut serta membantu Pemerintah dalam menggerakkan ekonomi kerakyatan, dipandang perlu meningkatkan peran dan fungsi Perusahaan Daerah Perkebunan Sumatera Utara sehingga mampu menarik minat investor baru untuk turut serta dalam penyertaan modal. Berdasarkan pertimbangan tersebut, bentuk badan hukum perusahaan dirubah dari PD. Perkebunan Sumatera Utara menjadi PT. Perkebunan Sumatera Utara, berdasarkan Peraturan Daerah No. 4 Tahun 2004 tanggal 17 Juni 2004 tentang Perubahan Bentuk Badan Hukum Perusahaan Daerah Perkebunan menjadi Perseroan Terbatas (PT) Perkebunan Sumatera Utara dengan Akta Pendirian Perseroan Terbatas No. 98 tanggal 29 Agustus 2005 yang telah disahkan oleh Menteri Hukum dan HAM Republik Indonesia No. C-14712 HT.01.01 TH 2006 tanggal 18 Mei 2006 dan telah diumumkan dalam Berita Negara Republik Indonesia No. 63 tanggal 8 Agustus 2006, Tambahan Berita Negara No.8420/2006 tanggal 24 Juli 2006. Anggaran Dasar Perusahaan mengalami perubahan sesuai dengan UU No. 40 tahun 2007 tentang perseroan terbatas, dengan Akta Penegasan Berita Acara Rapat Umum Luar Biasa Pemegang Saham PT. Perkebunan Sumatera Utara No. 10 tanggal 26 Nopember 2008 yang dibuat dihadapan Notaris Alina Hanum, SH di Medan.',
        //         'thumbnail' => 'project/eoffice_psu.png',
        //         'website' => 'https://office.ptpsumut.com',
        //         'amount' => '10000000',
        //         'total_payment' => '10000000',
        //         'total_spend' => '10000000',
        //         'start_at' => '2021-08-21',
        //         'due_at' => '2021-09-21',
        //         'st' => 'Finish',
        //     ],
        //     [
        //         'employee_id' => '0',
        //         'client_id' => '2',
        //         'title' => 'Sayembara Konsep Perancangan Kawasan dan Bangunan Gedung di Ibu Kota Nusantara',
        //         'description' => 'Kementerian PUPR telah memulai proses perencanaan IKN mengundang keterlibatan masyarakat umum dalam proses perwujudan IKN yang baru melalui Sayembara Gagasan Desain Kawasan Ibu Kota Negara.',
        //         'thumbnail' => 'project/ikn.png',
        //         'website' => 'https://sayembaraikn.pu.go.id',
        //         'amount' => '100000000',
        //         'total_payment' => '100000000',
        //         'total_spend' => '100000000',
        //         'start_at' => '2022-03-16',
        //         'due_at' => null,
        //         'st' => 'On Going',
        //     ],
        //     [
        //         'employee_id' => '0',
        //         'client_id' => '3',
        //         'title' => 'Company Profile',
        //         'description' => 'Republik Defence is a private industries focusing on design, innovation, and production of defense equipment systems.',
        //         'thumbnail' => 'project/rdi.png',
        //         'website' => 'https://republikdefence.com',
        //         'amount' => '100000000',
        //         'total_payment' => '100000000',
        //         'total_spend' => '100000000',
        //         'start_at' => '2022-05-16',
        //         'due_at' => null,
        //         'st' => 'On Going',
        //     ],
        // );
        // foreach($clients AS $c){
        //     Client::create([
        //         'company_industry_id' => $c['company_industry_id'],
        //         'company_name' => $c['company_name'],
        //         'company_logo' => $c['company_logo'],
        //         'title' => $c['title'],
        //         'name' => $c['name'],
        //         'username' => $c['username'],
        //         'phone' => $c['phone'],
        //         'email' => $c['email'],
        //         'email_verified_at' => $c['email_verified_at'],
        //         'address' => $c['address'],
        //         'password' => $c['password'],
        //         'date_birth' => $c['date_birth'],
        //         'lead_referral_source' => $c['lead_referral_source'],
        //         'website' => $c['website'],
        //         'google_id' => $c['google_id'],
        //         'type' => $c['type'],
        //         'category' => $c['category'],
        //         'st' => $c['st'],
        //         'avatar' => $c['avatar'],
        //     ]);
        // }
        // foreach($project AS $p){
        //     Project::create([
        //         'employee_id' => $p['employee_id'],
        //         'client_id' => $p['client_id'],
        //         'title' => $p['title'],
        //         'slug' => Str::slug($p['title']).'-'.Str::slug(Client::where('id',$p['client_id'])->first()->company_name),
        //         'description' => $p['description'],
        //         'thumbnail' => $p['thumbnail'],
        //         'website' => $p['website'],
        //         'amount' => $p['amount'],
        //         'total_payment' => $p['total_payment'],
        //         'total_spend' => $p['total_spend'],
        //         'start_at' => $p['start_at'],
        //         'due_at' => $p['due_at'],
        //         'st' => $p['st'],
        //     ]);
        // }
    }
}
