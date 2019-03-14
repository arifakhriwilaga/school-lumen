<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nisn' => str_random(10),
            'firstName' => 'luffy',
            'lastName' => 'mugiwara',
            'fullName' => 'luffy mugiwara',
            'email' => 'student1@gmail.com',
            // 'password' => app('hash')->make('student1'),
            'gender' => 'Male',
            'bornDate' => date('1997-04-10'),
            'address' => 'Jl bunisari kulon rt04 Rw06 ds. gadobangkong kec. ngamprah kab. bandung barat'
        ]);
    }
}
