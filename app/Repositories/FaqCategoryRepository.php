<?php

namespace App\Repositories;

use App\Models\FaqCategory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FaqCategoryRepository
 * @package App\Repositories
 * @version May 23, 2018, 2:14 pm UTC
 *
 * @method FaqCategory findWithoutFail($id, $columns = ['*'])
 * @method FaqCategory find($id, $columns = ['*'])
 * @method FaqCategory first($columns = ['*'])
*/
class FaqCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FaqCategory::class;
    }
}
