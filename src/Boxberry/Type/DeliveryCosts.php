<?php
/**
 * Created by PhpStorm.
 * User: evgenyi
 * Date: 18.10.2017
 * Time: 17:26
 */

namespace Domatskiy\Boxberry\Type;

class DeliveryCosts extends \Domatskiy\Boxberry\Type
{
    public $price;
    public $price_base;
    public $price_service;
    public $delivery_period;  // срок доставки (дней).
}