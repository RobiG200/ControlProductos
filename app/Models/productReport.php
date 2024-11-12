<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class productReport
 * @package App\Models
 * @version November 3, 2024, 9:37 pm UTC
 *
 * @property string $product_name
 * @property string $product_code
 * @property interger $product_stock
 * @property number $product_price
 * @property number $total_price
 * @property string $creation_date
 * @property string $modification_date
 * @property string $category_name
 * @property string $created_by_user
 * @property string $modified_by_user
 */
class productReport extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = "subcategories";
    protected $primaryKey = "product_id";

    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_name',
        'product_code',
        'product_stock',
        'product_price',
        'total_price',
        'creation_date',
        'modification_date',
        'category_name',
        'subcategory_name',
        'created_by_user',
        'modified_by_user'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_name' => 'string',
        'product_code' => 'string',
        'product_price' => 'decimal:2',
        'total_price' => 'decimal:2',
        'category_name' => 'string',
        'subcategory_name' => 'string',
        'created_by_user' => 'string',
        'modified_by_user' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'required',
        'product_code' => 'required',
        'product_stock' => 'required',
        'product_price' => 'required'
    ];

    
}
