<?php

use Illuminate\Database\Seeder;

class Jobs extends Seeder
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
                'title'=>'Job5',
                'salary'=> 2000,
                'Job_description'=>'This is description for job3',
                'Requirement'=>'greater than 3 years experience',
                'Expired_date'=>'Unlimited',
                'company_id'=> 3,
                'categories_id'=> 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ];
            DB::table('jobs')->insert($data);
        
    }
}
