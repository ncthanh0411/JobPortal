<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
        	'username'=>'minh',
        	'email'=>'2018minh@gmail.com',
        	'password'=>bcrypt('123456'),
        	'phone'=>'',
        	'companyname'=>'Fsoft',
        	'location'=>'District 9',
        	'introduction'=>'',
        	'logo'=>''
        ];
        DB::table('company_users')->insert($data);
    }
}
