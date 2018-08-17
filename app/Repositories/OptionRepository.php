<?php

namespace App\Repositories;

use App\Models\Option;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OptionRepository
 * @package App\Repositories
 * @version August 15, 2018, 4:19 am UTC
 *
 * @method Option findWithoutFail($id, $columns = ['*'])
 * @method Option find($id, $columns = ['*'])
 * @method Option first($columns = ['*'])
*/
class OptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'option_name',
        'option_value',
        'option_data',
        'created_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Option::class;
    }
}
