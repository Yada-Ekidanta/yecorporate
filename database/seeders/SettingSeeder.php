<?php

namespace Database\Seeders;

use App\Models\Setting\Company;
use App\Models\Setting\Content;
use App\Models\Setting\History;
use Illuminate\Database\Seeder;
use App\Models\Setting\MailConfig;
use App\Models\Setting\CompanyBank;
use App\Models\Setting\CompanyBranch;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $company = array(
            [
                'name' => 'CV. Yada Ekidanta',
                'address' => 'Komplek Permata Buah Batu Blok C 15B, Bandung, Jawa Barat, Indonesia 40287',
                'phone' => '0818694745',
                'email' => 'hello@yadaekidanta.com',
                'logo' => 'img/logo.png',
                'icon' => 'img/icon.png',
                "web_url" => "https://yadaekidanta.com",
                "instagram_url" => "https://instagram.com/yadaekidanta",
                "linkedin_url" => "https://linkedin.com/company/yada-ekidanta",
                "facebook_url" => "https://facebook.com/YadaEkidanta",
                "twitter_url" => "https://twitter.com/YadaEkidanta",
            ],
        );
        $company_branch = array(
            [
                "company_id" => 1,
                "name" => "HQ Yada Ekidanta",
                "address" => "Permata Buah Batu Blok C 15B",
                "instruction" => "",
                "province_id" => 32,
                "regency_id" => 3273,
                "district_id" => 0,
                "village_id" => 0,
                "postcode" => "40287",
                "is_primary" => true,
            ],
        );
        $company_bank = array(
            [
                "bank_id" => 15,
                "company_branch_id" => 1,
                "account_number" => "847-0614286",
                "branch_name" => "Bank BCA Batununggal",
                "is_primary" => true,
            ],
        );
        $mail = array(
            [
                'driver' => 'smtp',
                'host' => 'yadaekidanta.com',
                'port' => '465',
                'from_address' => 'noreply@yadaekidanta.com',
                'from_name' => 'Yada Ekidanta',
                'encryption' => 'ssl',
                'username' => 'noreply@yadaekidanta.com',
                'password' => 'yadaekidantadotcom',
            ],
        );
        $history = array(
            [
                'title' => 'Founding',
                'description' => 'Rizky Ramadhan mendirikan kantor dan mempekerjakan empat pengembang untuk mendukung usaha outsourcing programmer baru dengan menggunakan tabungan pribadi sebesar US$4.000.',
                'year' => '2017',
            ],
            [
                'title' => 'Startup Studio',
                'description' => 'Studio Rizky dengan cepat mengembangkan basis pelanggannya melalui situs freelancer, word-of- mouth, dan SEO, menjaring banyak startup di Indonesia sebagai pelanggan.',
                'year' => '2018',
            ],
            [
                'title' => 'YE Established',
                'description' => 'Dengan bertambahnya jumlah karyawan, badan hukum baru didirikan, sehingga membuka jalan untuk mendapatkan pelanggan yang lebih besar di pasar domestik.',
                'year' => '2021',
            ],
            [
                'title' => 'Collaboration',
                'description' => 'YE bercita-cita untuk menjadi platform berbagai pemangku kepentingan teknologi, untuk menyediakan cara yang lebih mudah dan lebih cepat bagi CEO dan CIO generasi mendatang untuk mendapatkan Teknologi Informasi.',
                'year' => '2022',
            ],
        );
        // $content = array(
        //     [
        //         'title' => 'WHAT WE DO?',
        //         'description' => 'The service we offer is specifically designed to meet your needs.',
        //         'type' => 'what_we_do',
        //         'banner' => null,
        //     ],
        //     [
        //         'title' => 'Agile Development',
        //         'description' => "On Extended Team Service, Customer Get The Help From Our Experts As Additional Resource And Has Free Reign Over The Project Management With Flexible Spec.",
        //         'type' => 'what_we_do',
        //         'banner' => null,
        //     ],
        //     [
        //         'title' => 'Project Based',
        //         'description' => "Consult Build All Kind Of Custom Made Apps. For Your Company's Promotional, Operational, And Human Resource Needs.",
        //         'type' => 'what_we_do',
        //         'banner' => null,
        //     ],
        //     [
        //         'title' => 'Managed Services',
        //         'description' => "Our Team Consists Of Experienced And Tech-Savvy Developers. We Can Help You To Maintain Your Application Professionally.",
        //         'type' => 'what_we_do',
        //         'banner' => null,
        //     ],
        //     [
        //         'title' => 'Design Services',
        //         'description' => "Our Design Team Is Design Studio Within A Large Software Company That Will Help You Build An Engaging Product Easily And Quickly.",
        //         'type' => 'what_we_do',
        //         'banner' => null,
        //     ],
        //     [
        //         'title' => 'Technical Writter',
        //         'description' => "This Product Aims To Map Client's Business Process According To The Specifications And Requirements Needed In The Application",
        //         'type' => 'what_we_do',
        //         'banner' => null,
        //     ],
        //     [
        //         'title' => 'Quality Assurance',
        //         'description' => "Testing Is The Process To Ensure Applications Or Websites Meet General Or Specific Quality Standards.",
        //         'type' => 'what_we_do',
        //         'banner' => null,
        //     ],
        //     [
        //         'title' => 'OUR STRATEGY',
        //         'description' => 'The service we offer is specifically designed to meet your needs.',
        //         'type' => 'our_strategy',
        //         'banner' => null,
        //     ],
        //     [
        //         'title' => 'Aware of your Goals',
        //         'description' => "We are eager to hear your story, what's keeping you up at night, your ideas and vision, and how we can help. We will dig the requirements.",
        //         'type' => 'our_process',
        //         'banner' => null,
        //     ],
        //     [
        //         'title' => 'Expect a Proposal from Us',
        //         'description' => "For development request, once the scope of work is understood by both parties, we will estimate the effort and provide you with a solution proposal with a fixed budget and deadline. Or, if you prefer, we can do agile enhancement service with more flexibility in the scope of work. If you're looking for a managed service support for your application, even if it's built by another software house we can help you too. Once we inquire further and get a clearer picture of your application, with the prerequisite preparations completed we will send the service proposal too.",
        //         'type' => 'our_process',
        //         'banner' => null,
        //     ],
        //     [
        //         'title' => 'Enter a formal Contract',
        //         'description' => "Once you conceptually agree, we sign a contract. Always know you are in good hands. We have been here for 12 years and still growing quickly, thus you can be rest assured we can support you long-term.",
        //         'type' => 'our_process',
        //         'banner' => null,
        //     ],
        //     [
        //         'title' => 'Implementation Starts',
        //         'description' => "On project-based service by default WGS will perform a pre-development analysis, consistent progress demo, professional change management practice, testing based on a thorough test plan document - including security and performance tests, and guide you through UAT. Ultimately, our proven processes mitigate risks of delay and remove risks of project failure. You can get all of that too with the agile enhancement, if you request for a complete team.",
        //         'type' => 'our_process',
        //         'banner' => null,
        //     ],
        // );
        foreach($company AS $c){
            Company::create([
                'name' => $c['name'],
                'address' => $c['address'],
                'phone' => $c['phone'],
                'email' => $c['email'],
                'logo' => $c['logo'],
                'icon' => $c['icon'],
                "web_url" => $c['web_url'],
                "instagram_url" => $c['instagram_url'],
                "linkedin_url" => $c['linkedin_url'],
                "facebook_url" => $c['facebook_url'],
                "twitter_url" => $c['twitter_url'],
            ]);
        }
        foreach($company_branch AS $d){
            CompanyBranch::create([
                "company_id" => $d['company_id'],
                "name" => $d['name'],
                "address" => $d['address'],
                "is_primary" => $d['is_primary'],
            ]);
        }
        foreach($company_bank AS $d){
            CompanyBank::create([
                "bank_id" => $d['bank_id'],
                "company_branch_id" => $d['company_branch_id'],
                "account_number" => $d['account_number'],
                "branch_name" => $d['branch_name'],
                "is_primary" => $d['is_primary'],
            ]);
        }
        foreach($mail AS $m){
            MailConfig::create([
                'driver' => $m['driver'],
                'host' => $m['host'],
                'port' => $m['port'],
                'from_address' => $m['from_address'],
                'from_name' => $m['from_name'],
                'encryption' => $m['encryption'],
                'username' => $m['username'],
                'password' => $m['password'],
            ]);
        }
        foreach($history AS $h){
            History::create([
                'title' => $h['title'],
                'description' => $h['description'],
                'year' => $h['year']
            ]);
        }
        // foreach($content AS $c){
        //     Content::create([
        //         'title' => $c['title'],
        //         'description' => $c['description'],
        //         'type' => $c['type'],
        //         'banner' => $c['banner']
        //     ]);
        // }
    }
}
