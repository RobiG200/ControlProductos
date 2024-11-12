<?php

namespace App\Repositories;

use App\Models\categoria;
use App\Repositories\BaseRepository;

/**
 * Class categoriaRepository
 * @package App\Repositories
 * @version November 1, 2024, 3:27 am UTC
*/

class categoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return categoria::class;
    }
}
