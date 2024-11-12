<?php

namespace App\Repositories;

use App\Models\productReport;
use App\Repositories\BaseRepository;

/**
 * Class productReportRepository
 * @package App\Repositories
 * @version November 3, 2024, 9:37 pm UTC
*/

class productReportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_name',
        'product_code',
        'product_stock',
        'product_price',
        'total_price',
        'creation_date',
        'modification_date',
        'category_name',
        'created_by_user',
        'modified_by_user'
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
        return productReport::class;
    }
}
