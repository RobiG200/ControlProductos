<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class categoria
 * @package App\Models
 * @version November 1, 2024, 3:27 am UTC
 *
 * @property string $name
 */
class categoria extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = "categories";
    protected $primaryKey = "id";
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
