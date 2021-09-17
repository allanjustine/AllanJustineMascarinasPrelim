<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Hotels
 * @package App\Models
 * @version September 17, 2021, 6:55 am UTC
 *
 * @property string $yourName
 * @property string $yourAddress
 * @property string $hotelName
 * @property string $hotelNumber
 * @property string $hotelAddress
 * @property string $dateAttended
 */
class Hotels extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'hotels';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'yourName',
        'yourAddress',
        'hotelName',
        'hotelNumber',
        'hotelAddress',
        'dateAttended'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'yourName' => 'string',
        'yourAddress' => 'string',
        'hotelName' => 'string',
        'hotelNumber' => 'string',
        'hotelAddress' => 'string',
        'dateAttended' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'yourName' => 'required|string|max:100',
        'yourAddress' => 'required|string|max:100',
        'hotelName' => 'required|string|max:100',
        'hotelNumber' => 'required|string|max:100',
        'hotelAddress' => 'required|string|max:100',
        'dateAttended' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
