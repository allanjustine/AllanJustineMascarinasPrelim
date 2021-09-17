<?php

namespace App\Repositories;

use App\Models\Hotels;
use App\Repositories\BaseRepository;

/**
 * Class HotelsRepository
 * @package App\Repositories
 * @version September 17, 2021, 6:55 am UTC
*/

class HotelsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'yourName',
        'yourAddress',
        'hotelName',
        'hotelNumber',
        'hotelAddress',
        'dateAttended'
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
        return Hotels::class;
    }
}
