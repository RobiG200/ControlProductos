<?php

namespace App\Repositories;

use App\Models\producto;
use App\Repositories\BaseRepository;

/**
 * Class productoRepository
 * @package App\Repositories
 * @version October 31, 2024, 10:13 pm UTC
*/

class productoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'stock',
        'price',
        'category_id',
        'subcategory_id',
        'creation_date',
        'last_modified',
        'image',
        'created_by',
        'modified_by'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return producto::class;
    }
}
