<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Producto
 * @package App\Models
 * @version November 2, 2024
 *
 * @property string $name
 * @property string $code
 * @property integer $stock
 * @property number $price
 * @property integer $category_id
 * @property integer $subcategory_id
 * @property string $image
 * @property integer $created_by
 * @property integer $modified_by
 * @property integer|null $deleted_by  // Asegúrate de incluir este campo
 * @property \Illuminate\Support\Carbon|null $created_at  // Cambiar a tipo de fecha correcto
 * @property \Illuminate\Support\Carbon|null $updated_at  // Cambiar a tipo de fecha correcto
 * @property \Illuminate\Support\Carbon|null $deleted_at  // Cambiar a tipo de fecha correcto
 */
class Producto extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = "products";
    protected $primaryKey = "id";

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'code',
        'stock',
        'price',
        'category_id',
        'subcategory_id',
        'image',
        'created_by',
        'modified_by',
        'deleted_by', 
        'created_at',
        'updated_at',
        'deleted_at',
        'id_subcategories'
    ];

    protected $casts = [
        'name' => 'string',
        'code' => 'string',
        'stock' => 'integer',
        'price' => 'decimal:2',
        'category_id' => 'integer',
        'subcategory_id' => 'integer',
        'image' => 'string',
        'created_by' => 'integer',
        'modified_by' => 'integer',
        'deleted_by' => 'integer',
        'id_subcategories'=>'integer'
    ];

    public static $rules = [
        'name' => 'required',
        'code' => 'required',
        'stock' => 'required',
        'price' => 'required',
        'category_id' => 'nullable',
        'subcategory_id' => 'nullable',
        'image' => 'required',
        'created_by' => 'nullable',
        'modified_by' => 'nullable',
        'id_subcategories'=>'required'
    ];

    protected static function booted()
    {
        static::creating(function ($product) {
            $product->created_by = auth()->id();
            $product->modified_by = auth()->id();
        });

        static::updating(function ($product) {
            $product->modified_by = auth()->id();
        });
        
        static::deleting(function ($product) {
            $product->deleted_by = auth()->id();
            $product->save();
        });
    }
}