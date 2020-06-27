<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
       // table name
       protected $table = 'jobs';
       // Primary key
       public $primaryKey = 'id';
       // Timestamps
       public $timestamps = true;
}
