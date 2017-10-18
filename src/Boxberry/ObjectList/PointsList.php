<?php

namespace Domatskiy\Boxberry\ObjectList;

use Domatskiy\Boxberry\ObjectList;
use Domatskiy\Boxberry\Type;

class PointsList extends ObjectList
{
    /**
     * @var Type\Point[]
     */
    public $data = [];

    /**
     * CityList constructor.
     * @param array $data
     */
    function __construct(array $data)
    {
        foreach ($data as $city)
            $this->data[] = new Type\Point($city);
    }

}