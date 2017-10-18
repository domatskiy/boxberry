<?php

namespace Domatskiy\Boxberry\ObjectList;

use Domatskiy\Boxberry\ObjectList;
use Domatskiy\Boxberry\Type;

class CityList extends ObjectList
{
    /**
     * @var Type\City[]
     */
    public $data = [];

    /**
     * CityList constructor.
     * @param array $data
     */
    function __construct(array $data)
    {
        foreach ($data as $city)
            $this->data[] = new Type\City($city);
    }
}