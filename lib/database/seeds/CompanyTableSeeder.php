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
        	'username'=>'thanh',
        	'email'=>'ncthanh0411@gmail.com',
        	'password'=>bcrypt('123456'),
        	'phone'=>'0907986613',
        	'companyname'=>'Syberzu',
        	'location'=>'District 9',
        	'introduction'=>'This is for syberzu company ',
            'logo'=>'',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ];
        DB::table('company_users')->insert($data);
    }
}
