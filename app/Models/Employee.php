<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'first_name',
        'last_name'
    ];
    protected $casts = [
        'id' => 'int',
        'first_name' => 'string',
        'last_name' => 'string',
    ];

}
