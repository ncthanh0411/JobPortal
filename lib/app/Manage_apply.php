<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manage_apply extends Model
{
     // table name
     protected $table = 'manage_applies';
     // Primary key
     public $primaryKey = 'id_apply';
     // Timestamps
     public $timestamps = true;
     protected $fillable = ['jobs_id', 'student_id'];

}
