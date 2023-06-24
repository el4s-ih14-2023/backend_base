<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilab extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $keyType = 'string';
    protected $primaryKey = 'id';

    protected $guarded = [
        'id',
        'parts_name',
        'allow_volt',
        'allow_current',
        'output_volt',
        'output_current',
        'maker',
        'ohm',
        'created_at',
        'updated_at',
    ];
}
