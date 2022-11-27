<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $form_id
 * @property int $type
 * @property string $meta_title
 * @property string $meta_description
 * @property string $guide
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Landing extends Model
{
    use HasFactory;

    public const TYPE_ONE_CODE = 1;
    public const TYPE_ONE = 'one';
    public const TYPE_TWO_CODE = 2;
    public const TYPE_TWO = 'two';
    public const TYPE_THREE_CODE = 3;
    public const TYPE_THREE = 'three';
    public const TYPE_MAPPING = [
        self::TYPE_ONE_CODE => self::TYPE_ONE,
        self::TYPE_TWO_CODE => self::TYPE_TWO,
        self::TYPE_THREE_CODE => self::TYPE_THREE,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'form_id',
        'type',
        'meta_title',
        'meta_description',
        'guide'
    ];
}
