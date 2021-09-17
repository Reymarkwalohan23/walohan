<?php

namespace App\Repositories;

use App\Models\School;
use App\Repositories\BaseRepository;

/**
 * Class SchoolRepository
 * @package App\Repositories
 * @version September 17, 2021, 4:07 pm UTC
*/

class SchoolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'schoolName',
        'schoolAddress',
        'principalName',
        'Date'
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
        return School::class;
    }
}
