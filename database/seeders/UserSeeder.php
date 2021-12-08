<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['first_name' => 'Ahmed',       'last_name' => 'Nasser',        'full_name' => 'Ahmed Abd El Nasser Mohamed',                   'email' => 'anasser@arabhardware.net' ,     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Aziz',          'full_name' => 'Ahmed Aladdin Aziz',                            'email' => 'aaziz@arabhardware.net' ,       'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Mahmoud',       'full_name' => 'Ahmed Amr Mahmoud',                             'email' => 'aamr@arabhardware.net' ,        'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Khaled',        'full_name' => 'Ahmed Khaled Meabed',                           'email' => 'akhaled@arabhardware.net' ,     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Sayed',         'full_name' => 'Ahmed Magdy Sayed',                             'email' => 'amagdy@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Elzarzamony',   'full_name' => 'Ahmed Mohamed Ali Ali Elzarzamony',             'email' => 'amohammed@arabhardware.net' ,   'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Elsayegh',      'full_name' => 'Ahmed Mohamed Ibrahim Ali Elsayegh',            'email' => 'aelsayegh@arabhardware.net' ,   'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Asmaa',       'last_name' => 'Atef',          'full_name' => 'Asmaa Mohammed Atef Saleh',                     'email' => 'aatef@arabhardware.net' ,       'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Aziz',        'last_name' => 'El Adl',        'full_name' => 'Aziz Mohamed Abdl Alim El Adl',                 'email' => 'aeladl@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Hussam',      'last_name' => 'Tantawy',       'full_name' => 'Hussam Abdel-Fattah El-Sayed Tantawy',          'email' => 'htantawy@arabhardware.net',     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Kareem',      'last_name' => 'osama',         'full_name' => 'Kareem osama saleh ibrahim',                    'email' => 'kosama@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mohamad',     'last_name' => 'Yousef',        'full_name' => 'Mohamad Ahmad Yousef',                          'email' => 'myoussef@arabhardware.net' ,    'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mohamed',     'last_name' => 'Hussein',       'full_name' => 'Mohamed Hussein Mahmoud Abdel-Rahman ',         'email' => 'mhuseen@arabhardware.net' ,     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mostafa',     'last_name' => 'Eltaweel',      'full_name' => 'Mostafa Adel Mohamed Ahmed Elsayed Eltaweel',   'email' => 'meltaweel@arabhardware.net' ,   'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mostafa',     'last_name' => 'Yosry',         'full_name' => 'Mostafa Ahmed Yosry',                           'email' => 'myousry@arabhardware.net' ,     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mostafa',     'last_name' => 'ElMarghany',    'full_name' => 'Mostafa Mohamed Mohamed ElMarghany',            'email' => 'mmarghany@arabhardware.net' ,   'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mustafa',     'last_name' => 'Hegazi',        'full_name' => 'Mustafa Magdy Shahata Hegazi',                  'email' => 'mhegazi@arabhardware.net' ,     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Radwa',       'last_name' => 'Abdullah',      'full_name' => 'Radwa Anwar Abdo Abdullah',                     'email' => 'ranwar@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Salma',       'last_name' => 'Edris',         'full_name' => 'Salma Hamdy Ahmed Edris',                       'email' => 'shamdy@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Shady',       'last_name' => 'Botros',        'full_name' => 'Shady Gamal Riad Botros',                       'email' => 'sgamal@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Abdulrhman',  'last_name' => 'Hesham',        'full_name' => 'Abdulrhman Muhammed Hesham Abdulmomem',         'email' => 'ahesham@arabhardware.net' ,     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Mostafa',       'full_name' => 'Ahmed Zakareya Mostafa',                        'email' => 'azakareya@arabhardware.net' ,   'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mohamed',     'last_name' => 'Khalil',        'full_name' => 'Mohamed El Sayed Ahmed Khalil',                 'email' => 'melsayed@arabhardware.net' ,    'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mahmoud',     'last_name' => 'Eid',           'full_name' => 'Mahmoud mohamed mostafa Eid',                   'email' => 'mfouda@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mirna',       'last_name' => 'Ihab',          'full_name' => 'Mirna Ihab Abo-Harga',                          'email' => 'mihab@arabhardware.net' ,       'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mohamed',     'last_name' => 'Rabiea',        'full_name' => 'Mohamed Rabiea Youssef',                        'email' => 'mrabiea@arabhardware.net' ,     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Aya',         'last_name' => 'El-Maghraby',   'full_name' => 'Aya Mokhtar El-Maghraby',                       'email' => 'aelmaghraby@arabhardware.net' , 'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Adel',        'last_name' => 'Fakhry',        'full_name' => 'Adel Mohamed Fakhry Abdelmohsen Ibrahim',       'email' => 'afakhry@arabhardware.net' ,     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Amr',         'last_name' => 'Yasser',        'full_name' => 'Amr Yasser sayed Aboelella',                    'email' => 'ayasser@arabhardware.net' ,     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Kerolous',    'last_name' => 'Nashaat',       'full_name' => 'Kerolous Nashaat Masry Bekheet',                'email' => 'knashaat@arabhardware.net' ,    'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mohamed',     'last_name' => 'Gameel',        'full_name' => 'Mohamed Naguib Ibrahim Gameel',                 'email' => 'mnaguib@arabhardware.net' ,     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Mansour',     'last_name' => 'Ahmed',         'full_name' => 'Mansour Ahmed Mansour',                         'email' => 'mahmed@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Nancy',       'last_name' => 'Ghaly',         'full_name' => 'Nancy Ibrahim Ghaly',                           'email' => 'nghaly@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Omar',        'last_name' => 'ElSayed',       'full_name' => 'Omar Mohamed Mahmoud ElSayed',                  'email' => 'o.elsayed@arabhardware.net' ,   'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Habiba',      'last_name' => 'Salah',         'full_name' => 'Habiba Mostafa Salah',                          'email' => 'hmostafa@arabhardware.net' ,    'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Adham',       'last_name' => 'Hamed',         'full_name' => 'Adham Mohamed Hamed',                           'email' => 'ahamed@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Fathy',         'full_name' => 'Ahmed Fathy Abdel Aal',                         'email' => 'afathy@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Hazem',       'last_name' => 'Salah',         'full_name' => 'Hazem Adel Salah',                              'email' => 'hadel@arabhardware.net' ,       'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Sameh',       'last_name' => 'Bilal',         'full_name' => 'Sameh Ramadan Bilal',                           'email' => 'sbilal@arabhardware.net' ,      'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
            ['first_name' => 'Ibrahim',     'last_name' => 'Hamdy',         'full_name' => 'Ibrahim Hamdy',                                 'email' => 'ibrahim@arabhardware.net' ,     'password' => '$2y$10$/JdOgonPDPTcGCUegmXzz.HWWZ3NKi/IUhsqmIKPIrZO6Z7yMjb5G','created_at' => now()],
        ];

        \Illuminate\Support\Facades\DB::table('users')->insert($users);
    }
}
