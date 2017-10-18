<?php

namespace Domatskiy\Boxberry\Type;

class Point extends \Domatskiy\Boxberry\Type
{
    public $Code;
    public $Name;
    public $Address;
    public $Phone;
    public $WorkSchedule;
    public $TripDescription;
    public $DeliveryPeriod;
    public $CityCode;
    public $CityName;
    public $TariffZone;
    public $Settlement;
    public $Area;
    public $Country;
    public $GPS;
    public $OnlyPrepaidOrders; # Если значение "Yes" - точка работает только с полностью оплаченными заказами
    public $Acquiring; # Если значение "Yes" - Есть возможность оплаты  платежными (банковскими) картами',
    public $DigitalSignature; #'Если значение "Yes" - Подпись получателя будет хранится в системе boxberry в электронном виде'
}