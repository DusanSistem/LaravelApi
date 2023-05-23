<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'surname'
    ];
    protected $casts = [
        'id' => 'int',
        'name' => 'string',
        'surname' => 'string',
    ];

}
