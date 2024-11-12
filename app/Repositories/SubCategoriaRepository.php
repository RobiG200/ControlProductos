<?php

namespace App\Repositories;

use App\Models\SubCategoria;
use App\Repositories\BaseRepository;

/**
 * Class SubCategoriaRepository
 * @package App\Repositories
 * @version November 1, 2024, 5:05 am UTC
*/

class SubCategoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'category_id'
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
        return SubCategoria::class;
    }
}
