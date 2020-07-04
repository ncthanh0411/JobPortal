<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
     // table name
     protected $table = 'jobs';
     // Primary key
     public $primaryKey = 'id_job';
     // Timestamps
     public $timestamps = true;
     protected $fillable = ['title', 'Salary', 'Job_Description', 'Requirement', 'Expired_date', 'company_id' , 'categories_id'];

}
