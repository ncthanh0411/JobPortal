<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    // table name
    protected $table = 'categories';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
