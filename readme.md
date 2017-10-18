# boxberry API


```
composer require domatskiy/boxberry
```

```php
use Domatskiy\Boxberry;

$CBoxberry = new Boxberry(<token>);
$ListCities = $CBoxberry->ListCities();

foreach($ListCities->data => $city)
{
    /**
    * @var $city Boxberry\Type\City
    */
    
    var_dump($city);
}
```


