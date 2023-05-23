<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Equipment extends Model
{
    protected $table = 'equipments';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'mouse_id',
        'keyboard_id',
        'pc_id',
        'employee_id',
        'date'
    ];
    protected $casts = [
        'id' => 'int',
        'mouse_id' => 'int',
        'keyboard_id' => 'int',
        'pc_id' => 'int',
        'employee_id' => 'int',
        'date' => 'date:Y-m-d'
    ];
    public function mouses(): HasMany
    {
        return $this->hasMany(Mouse::class);
    }
    public function keyboards(): HasMany
    {
        return $this->hasMany(Keyboard::class);
    }
    public function pcs(): HasMany
    {
        return $this->hasMany(PC::class);
    }

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);
    }
}
