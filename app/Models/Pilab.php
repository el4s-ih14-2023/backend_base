<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Pilab
 *
 * @property int $id
 * @property string $parts_name
 * @property float $Upper_limit
 * @property float $Lower_limit
 * @property float $ohm
 * @property string $imgPath
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Pilab newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pilab newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pilab query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pilab whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pilab whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pilab whereImgPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pilab whereLowerLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pilab whereOhm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pilab wherePartsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pilab whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pilab whereUpperLimit($value)
 *
 * @mixin \Eloquent
 */
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
