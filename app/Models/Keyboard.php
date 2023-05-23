<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keyboard extends Model
{
    protected $table = 'keyboards';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name'
    ];
    protected $casts = [
        'id' => 'int',
        'name' => 'string'
    ];
    public function equipment(): BelongsTo
    {
        return $this->belongsTo(Equipment::class);
    }

}
