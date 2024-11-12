<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SubCategoria
 * @package App\Models
 * @version November 1, 2024, 5:05 am UTC
 *
 * @property string $name
 * @property integer $category_id
 */
class SubCategoria extends Model
{
    use SoftDeletes;

    use HasFactory;

   
    protected $table = "subcategories";
    protected $primaryKey = "id";

    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'category_id' => 'required'
    ];

    
}
