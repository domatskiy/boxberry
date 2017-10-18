<?php

namespace Domatskiy;

use Domatskiy\Boxberry\Request;
use Domatskiy\Boxberry\Type;
use Domatskiy\Boxberry\ObjectList;

class Boxberry extends Request
{
    /**
     * @return ObjectList\CityList
     */
    function ListCities()
    {
        return $this->ListCitiesFull(1, null);
    }

    /**
     * @param int $prepeaid
     * @param string $city_code
     * @return ObjectList\CityList
     */
    function ListCitiesFull($prepeaid = 1, $city_code = '')
    {
        /**
         * @var $rs ObjectList\CityList
         */
        $rs = $this->__request(self::METHOD_GET, 'ListCities', ObjectList\CityList::class, array(
            'prepeaid' => $prepeaid,
            'CityCode' => $city_code
            ));

        return $rs;
    }

    /**
     * @param int $prepeaid
     * @param string $city_code
     * @return ObjectList\PointsList
     */
    function ListPoints($prepeaid = 1, $city_code = '')
    {

        /**
         * @var $rs ObjectList\PointsList
         */
        $rs = $this->__request(self::METHOD_GET, 'ListPoints', ObjectList\PointsList::class, array(
            'prepeaid' => $prepeaid,
            'CityCode' => $city_code
            ));

        return $rs;
    }

    function ListPointsShort($city_code = '')
    {
        /**
         * @var $rs ObjectList\PointsList
         */
        $rs = $this->__request(self::METHOD_GET, 'ListPointsShort', ObjectList\PointsList::class, array(
            'CityCode' => $city_code
            ));

        return $rs;
    }

    #function ListZips(){}
    #function ZipCheck(){}

    /**
     * @desk Позволяет получить список городов в которых осуществляется курьерская доставка
     * @return ObjectList\CityList
     */
    function CourierListCities()
    {
        /**
         * @var $rs ObjectList\CityList
         */

        $rs = $this->__request(self::METHOD_GET, 'CourierListCities', Type\CityList::class);

        return $rs;
    }

    /**
     * @desc Данный метод позволяет узнать стоимость доставки посылки до ПВЗ или клиента(курьерская доставка). Описание полей смотрите в примере интеграции.
     * @param $weight
     * @param $target
     * @param $ordersum
     * @param $deliverysum
     * @param $targetstart
     * @param $height
     * @param $width
     * @param $depth
     * @param $zip
     * @param $paysum
     * @return Type\DeliveryCosts
     */
    function DeliveryCosts($weight, $target, $ordersum, $deliverysum, $targetstart, $height, $width, $depth, $zip, $paysum)
    {
        /**
         * @var $rs Type\DeliveryCosts
         */
        $rs = $this->__request(self::METHOD_GET, 'DeliveryCosts', Type\CityList::class);

        return $rs;
    }

    public function ParselCreate()
    {

    }
}