<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class School
 * @package App\Models
 * @version September 17, 2021, 4:07 pm UTC
 *
 * @property string $schoolName
 * @property string $schoolAddress
 * @property string $principalName
 * @property string $Date
 */
class School extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'school';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'schoolName',
        'schoolAddress',
        'principalName',
        'Date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'schoolName' => 'string',
        'schoolAddress' => 'string',
        'principalName' => 'string',
        'Date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'schoolName' => 'required|string|max:100',
        'schoolAddress' => 'required|string|max:100',
        'principalName' => 'required|string|max:100',
        'Date' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
