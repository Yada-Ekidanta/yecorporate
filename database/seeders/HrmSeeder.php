<?php

namespace Database\Seeders;

// use App\Models\HRM\Module;
use App\Models\HRM\Employee;
use App\Models\HRM\Position;
use App\Models\HRM\Department;
// use App\Models\HRM\Permission;
use Illuminate\Database\Seeder;
// use App\Models\HRM\ModulePrivilege;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class HrmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'dashboard-default',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission,'guard_name' => 'employees']);
        }
        $department = array(
            [
                'name' => 'Commissioner'
            ],
            [
                'name' => 'Executive'
            ],
            [
                'name' => 'Corporate Secretary'
            ],
            [
                'name' => 'General'
            ],
            [
                'name' => 'Human Resource'
            ],
            [
                'name' => 'Commercial'
            ],
            [
                'name' => 'Finance'
            ],
            [
                'name' => 'Marketing'
            ],
            [
                'name' => 'Technology'
            ],
            [
                'name' => 'Development'
            ],
        );
        $position = array(
            [
                "department_id" => "1",
                "name" => "Commissioners",
            ],
            [
                "department_id" => "1",
                "name" => "Secretary Commissioner",
            ],
            [
                "department_id" => "1",
                "name" => "Audit Committee",
            ],
            [
                "department_id" => "2",
                "name" => "CEO",
            ],
            [
                "department_id" => "2",
                "name" => "COO",
            ],
            [
                "department_id" => "2",
                "name" => "CFO",
            ],
            [
                "department_id" => "2",
                "name" => "CIO",
            ],
            [
                "department_id" => "2",
                "name" => "CTO",
            ],
            [
                "department_id" => "2",
                "name" => "CDO",
            ],
            [
                "department_id" => "2",
                "name" => "CMO",
            ],
            [
                "department_id" => "2",
                "name" => "CHRO",
            ],
            [
                "department_id" => "3",
                "name" => "Head of Corporate Secretary",
            ],
            [
                "department_id" => "3",
                "name" => "Secretary",
            ],
            [
                "department_id" => "4",
                "name" => "Head of Legal",
            ],
            [
                "department_id" => "5",
                "name" => "Head of General Affairs",
            ],
            [
                "department_id" => "5",
                "name" => "Head of Public Relation",
            ],
            [
                "department_id" => "5",
                "name" => "Head of Human Resource",
            ],
            [
                "department_id" => "5",
                "name" => "General Affair",
            ],
            [
                "department_id" => "5",
                "name" => "Human Resource Recruitment",
            ],
            [
                "department_id" => "5",
                "name" => "HRBP",
            ],
            [
                "department_id" => "5",
                "name" => "Organization Development",
            ],
            [
                "department_id" => "5",
                "name" => "Payroll",
            ],
            [
                "department_id" => "5",
                "name" => "Training and Development",
            ],
            [
                "department_id" => "6",
                "name" => "Head of Commercial",
            ],
            [
                "department_id" => "6",
                "name" => "Head of Procurement Sub Division",
            ],
            [
                "department_id" => "6",
                "name" => "Account Manager",
            ],
            [
                "department_id" => "7",
                "name" => "Head of Finance",
            ],
            [
                "department_id" => "7",
                "name" => "Accountant",
            ],
            [
                "department_id" => "7",
                "name" => "Auditor",
            ],
            [
                "department_id" => "7",
                "name" => "Budget analyst",
            ],
            [
                "department_id" => "7",
                "name" => "Finance controller",
            ],
            [
                "department_id" => "7",
                "name" => "Finance administrator",
            ],
            [
                "department_id" => "7",
                "name" => "Payroll officer",
            ],
            [
                "department_id" => "7",
                "name" => "Treasury analyst",
            ],
            [
                "department_id" => "8",
                "name" => "Director of Media",
            ],
            [
                "department_id" => "8",
                "name" => "Director of Public Relation",
            ],
            [
                "department_id" => "8",
                "name" => "Advertising Manager",
            ],
            [
                "department_id" => "8",
                "name" => "Brand Manager",
            ],
            [
                "department_id" => "8",
                "name" => "Community Manager",
            ],
            [
                "department_id" => "8",
                "name" => "Content Manager",
            ],
            [
                "department_id" => "8",
                "name" => "Product Marketing Manager",
            ],
            [
                "department_id" => "8",
                "name" => "Promotions Manager",
            ],
            [
                "department_id" => "8",
                "name" => "Public Relations Manager",
            ],
            [
                "department_id" => "8",
                "name" => "Sales Manager",
            ],
            [
                "department_id" => "8",
                "name" => "Social Media Manager",
            ],
            [
                "department_id" => "8",
                "name" => "Account Coordinator",
            ],
            [
                "department_id" => "8",
                "name" => "Event Marketing Coordinator",
            ],
            [
                "department_id" => "8",
                "name" => "Event Marketing Specialist",
            ],
            [
                "department_id" => "8",
                "name" => "Marketing Coordinator",
            ],
            [
                "department_id" => "8",
                "name" => "Marketing Specialist",
            ],
            [
                "department_id" => "8",
                "name" => "Project Coordinator",
            ],
            [
                "department_id" => "8",
                "name" => "Public Relation Associate",
            ],
            [
                "department_id" => "8",
                "name" => "Social Media Coordinator",
            ],
            [
                "department_id" => "9",
                "name" => "IT Manager",
            ],
            [
                "department_id" => "9",
                "name" => "Product Manager",
            ],
            [
                "department_id" => "9",
                "name" => "Project Manager",
            ],
            [
                "department_id" => "9",
                "name" => "Analyst",
            ],
            [
                "department_id" => "9",
                "name" => "Helpdesk Analyst",
            ],
            [
                "department_id" => "9",
                "name" => "Database Administrator",
            ],
            [
                "department_id" => "9",
                "name" => "Network Administrator",
            ],
            [
                "department_id" => "9",
                "name" => "Backend Developer",
            ],
            [
                "department_id" => "9",
                "name" => "Frontend Developer",
            ],
            [
                "department_id" => "9",
                "name" => "Fullstack Developer",
            ],
            [
                "department_id" => "9",
                "name" => "Mobile App Developer",
            ],
            [
                "department_id" => "9",
                "name" => "Copy Writer",
            ],
            [
                "department_id" => "9",
                "name" => "Content Writer",
            ],
            [
                "department_id" => "9",
                "name" => "IT Support",
            ],
            [
                "department_id" => "9",
                "name" => "UI/UX Design",
            ],
            [
                "department_id" => "10",
                "name" => "Business Development Manager",
            ]
        );
        $employee = array(
            [
                'nip' => '190521111',
                'name' => 'Zulhelmi Nasution',
                'email' => 'zulhelmi@yadaekidanta.com',
                'phone' => '085694798901',
                'jobdesc' => 'as Commissioner, Zulhelmi supervise the Board of Directors in carrying out company activities and provide advice to the Board of Directors. Supervise the implementation of the Company Plan',
                'date_birth' => '1966/07/21',
                'bio' => '',
                'impression' => '',
                'address' => 'Komplek Perhubungan Udara, Jl. Warung Jati',
                'postcode' => '40287',
                'department_id' => '1',
                'position_id' => '1',
                'st' => 'a',
                'password' => Hash::make('password'),
            ],
            [
                'nip' => '190521242',
                'name' => 'Rizky Ramadhan',
                'email' => 'misterrizky@yadaekidanta.com',
                'phone' => '087709020299',
                'jobdesc' => 'as CEO, Rizky manage and provide leadership and insight to the Board of Directors within the Yada Ekidanta',
                'date_birth' => '1996/02/15',
                'bio' => '',
                'impression' => '',
                'address' => 'Permata Buah Batu Residence Block C No. 15B',
                'postcode' => '40287',
                'department_id' => '2',
                'position_id' => '4',
                'st' => 'a',
                'password' => Hash::make('password'),
            ],
            [
                'nip' => '190521263',
                'name' => 'Ahmad Ridwan Ananta',
                'email' => 'anantalubis@yadaekidanta.com',
                'phone' => '081314616393',
                'jobdesc' => 'as CFO, Ananta role are responsible for all day-to-day management decisions and for implementing the YE long and short term plans',
                'date_birth' => '1999/12/03',
                'bio' => '',
                'impression' => '',
                'address' => 'Kp Baru II No. 66',
                'postcode' => '0',
                'department_id' => '2',
                'position_id' => '6',
                'st' => 'a',
                'password' => Hash::make('password'),
            ],
            [
                'nip' => '0611223134',
                'name' => 'Lygia Desthea Rossla Dandel',
                'email' => 'lygiadandel@yadaekidanta.com',
                'phone' => '081312191727',
                'jobdesc' => 'as Secretary, Lygia Role is responsible',
                'date_birth' => '1998/12/17',
                'bio' => '',
                'impression' => '',
                'address' => 'Jl. Cibogo',
                'postcode' => '',
                'department_id' => '3',
                'position_id' => '13',
                'st' => 'a',
                'password' => Hash::make('password'),
            ],
            [
                'nip' => '0107225175',
                'name' => 'Galih Eka Saputri',
                'email' => 'galihekasaputri@yadaekidanta.com',
                'phone' => '083875699019',
                'jobdesc' => 'as HR, Galih Role is responsible to ...',
                'date_birth' => '2003/05/03',
                'bio' => '',
                'impression' => 'Always fun and make it better',
                'address' => 'Jln peninggaran timur 2 rt 04 rw 09 no 5',
                'postcode' => '12240',
                'department_id' => '5',
                'position_id' => '17',
                'st' => 'a',
                'password' => Hash::make('password'),
            ],
            [
                'nip' => '1205225156',
                'name' => 'Afif Derian Kusuma',
                'email' => 'afder@yadaekidanta.com',
                'phone' => '081280702959',
                'jobdesc' => 'as Head of General Affair, Afif Role is',
                'date_birth' => '2000/11/12',
                'bio' => '',
                'impression' => '',
                'address' => 'Aceh',
                'postcode' => '0',
                'department_id' => '4',
                'position_id' => '14',
                'st' => 'a',
                'password' => Hash::make('password'),
            ],
            [
                'nip' => '0106219567',
                'name' => 'Pakhomios Havel Situmorang',
                'email' => 'hvlicious@yadaekidanta.com',
                'phone' => '089651147065',
                'jobdesc' => 'as ',
                'date_birth' => '2000/11/12',
                'bio' => '',
                'impression' => '',
                'address' => '',
                'postcode' => '0',
                'department_id' => '9',
                'position_id' => '63',
                'st' => 'a',
                'password' => Hash::make('password'),
            ],
            [
                'nip' => '0106219638',
                'name' => 'Joshua',
                'email' => 'joshua@yadaekidanta.com',
                'phone' => '081361432123',
                'jobdesc' => 'as ',
                'date_birth' => '2000/11/12',
                'bio' => '',
                'impression' => '',
                'address' => '',
                'postcode' => '0',
                'department_id' => '9',
                'position_id' => '63',
                'st' => 'a',
                'password' => Hash::make('password'),
            ],
            [
                'nip' => '0106219639',
                'name' => 'Ricky',
                'email' => 'ricky@yadaekidanta.com',
                'phone' => '081362926803',
                'jobdesc' => 'as ',
                'date_birth' => '2000/11/12',
                'bio' => '',
                'impression' => '',
                'address' => '',
                'postcode' => '0',
                'department_id' => '9',
                'position_id' => '63',
                'st' => 'a',
                'password' => Hash::make('password'),
            ],
            [
                'nip' => '01072296210',
                'name' => 'Osi',
                'email' => 'osi@yadaekidanta.com',
                'phone' => '081917320977',
                'jobdesc' => 'as ',
                'date_birth' => '2000/11/12',
                'bio' => '',
                'impression' => '',
                'address' => '',
                'postcode' => '0',
                'department_id' => '9',
                'position_id' => '62',
                'st' => 'a',
                'password' => Hash::make('password'),
            ],
        );
        foreach($department AS $d){
            Department::create([
                'name' => $d['name']
            ]);
        }
        $permissions = Permission::pluck('id','id')->all();
        foreach($position AS $r){
            Position::create([
                // 'permission_id' => $r['permission_id'],
                'department_id' => $r['department_id'],
                'name' => $r['name']
            ]);
            Role::create([
                'name' => $r['name'],
                'guard_name' => 'employees'
            ]);
        }
        foreach($employee AS $e){
            Employee::create([
                'nip' => $e['nip'],
                'name' => $e['name'],
                'email' => $e['email'],
                'phone' => $e['phone'],
                'jobdesc' => $e['jobdesc'],
                'impression' => $e['impression'],
                'date_birth' => $e['date_birth'],
                'bio' => $e['bio'],
                'address' => $e['address'],
                'postcode' => $e['postcode'],
                'department_id' => $e['department_id'],
                'position_id' => $e['position_id'],
                'st' => $e['st'],
                'password' => $e['password']
            ]);
        }
        $employees = Employee::where('id',2)->first();
        $position = Position::where('id',$employees->position_id)->first();
        $role = $position->role;
        $role->syncPermissions($permissions);
        $employees->assignRole($employees->position_id);
        // $employees = Employee::get();
        // foreach($employees as $e){
        // }
    }
}