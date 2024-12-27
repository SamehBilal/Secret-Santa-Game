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
            ['first_name' => 'Sameh',       'last_name' => 'Bilal',        'full_name' => 'Sameh Bilal',         'email' => 'sbilal@arabhardware.net',    'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Fathy',        'full_name' => 'Ahmed Fathy',         'email' => 'afathy@arabhardware.net',    'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Marina',      'last_name' => 'Mekhael',      'full_name' => 'Marina Mekhael',      'email' => 'mmekhael@arabhardware.net',  'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Rasha',       'last_name' => 'Abdelaziz',    'full_name' => 'Rasha Abdelaziz',     'email' => 'rabdelaziz@arabhardware.net','password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Mohab',       'last_name' => 'Samir',        'full_name' => 'Mohab Samir',         'email' => 'msamir@arabhardware.net',    'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Aya',         'last_name' => 'A7mos',        'full_name' => 'Aya A7mos',           'email' => 'aelahmous@arabhardware.net', 'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Sayegh',       'full_name' => 'Ahmed Sayegh',        'email' => 'aelsayegh@arabhardware.net', 'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Mostafa',     'last_name' => 'Yousry',       'full_name' => 'Mostafa Yousry',      'email' => 'myousry@arabhardware.net',   'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Mega',        'last_name' => 'Ashraf',       'full_name' => 'Mega Ashraf',         'email' => 'sashraf@arabhardware.net',   'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Ghadeer',     'last_name' => 'Tarek',        'full_name' => 'Ghadeer Tarek',       'email' => 'gtarek@arabhardware.net',    'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Mohamed',     'last_name' => 'Hussin',       'full_name' => 'Mohamed Hussin',      'email' => 'mhuseen@arabhardware.net',   'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Zakaria',      'full_name' => 'Ahmed Zakaria',       'email' => 'azakaria@arabhardware.net',  'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Marwan',      'last_name' => 'Khaled',       'full_name' => 'Marwan Khaled',       'email' => 'mkhaled@arabhardware.net',   'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Kareem',      'last_name' => 'Ayman',        'full_name' => 'Kareem Ayman',         'email' => 'kayman@ahw.store',           'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Mahmoud',     'last_name' => 'Walid',        'full_name' => 'Mahmoud Walid',        'email' => 'mwalid@arabhardware.net',    'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Omar',        'last_name' => 'Mahmoud Oraby', 'full_name' => 'Omar Mahmoud Oraby',   'email' => 'omahmoud@ahw.store',         'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Omar',        'last_name' => 'Khaled',       'full_name' => 'Omar Khaled',          'email' => 'okamel@arabhardware.net',    'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Umar',        'last_name' => 'Elbieh',       'full_name' => 'Umar Elbieh',          'email' => 'uelbieh@arabhardware.net',   'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Mirna',       'last_name' => 'Ihab',         'full_name' => 'Mirna Ihab',           'email' => 'mihab@arabhardware.net',     'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Maryam',      'last_name' => 'El Shorbagy',  'full_name' => 'Maryam El Shorbagy',    'email' => 'melshorbagy@arabhardware.net','password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Yara',        'last_name' => 'Sayed',        'full_name' => 'Yara Sayed',          'email' => 'ysayed@arabhardware.net',    'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Salma',       'last_name' => 'Shady',        'full_name' => 'Salma Shady',          'email' => 'sshady@arabhardware.net',    'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Azhoom',      'last_name' => 'Hamed',        'full_name' => 'Azhoom',               'email' => 'ahamed@arabhardware.net',    'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Mohamed',     'last_name' => 'Hamdy',        'full_name' => 'Mohamed Hamdy',        'email' => 'mhamdy@ahw.store',           'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Noran',       'last_name' => 'Waked',        'full_name' => 'Noran Waked',          'email' => 'nwaked@arabhardware.net',    'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Mohamed',     'last_name' => 'Magdi',        'full_name' => 'Mohamed Magdi',        'email' => 'mohamedhamed.kk9@gmail.com', 'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
            ['first_name' => 'Ahmed',       'last_name' => 'Adel',         'full_name' => 'Ahmed Adel',           'email' => 'aadel@ahw.store',           'password' => '$2y$10$5jBp6xj9JMSK2UIfhVCx1Ok18OgKz/p/sbRXq.Zht8ZFVCCYENeF2', 'created_at' => now()],
        ];

        \Illuminate\Support\Facades\DB::table('users')->insert($users);
    }
}
