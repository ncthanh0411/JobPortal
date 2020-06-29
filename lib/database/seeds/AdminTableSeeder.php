<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
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
        	
        	'email'=>'2018admin@gmail.com',
            'password'=>bcrypt('123456'),
            'manage_apply_id'=>'1'
        	
        ];
        DB::table('admins')->insert($data);
    }
}
