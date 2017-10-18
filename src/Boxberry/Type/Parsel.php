<?php
/**
 * Created by PhpStorm.
 * User: evgenyi
 * Date: 18.10.2017
 * Time: 17:31
 */

namespace Domatskiy\Boxberry\Type;


class Parsel
{
    function __construct()
    {
        $SDATA['updateByTrack']='Трекинг-код ранее созданной посылки';
        $SDATA['order_id']='ID заказа в ИМ';
        $SDATA['PalletNumber']='Номер палеты';
        $SDATA['barcode']='Штрих-код заказа';
        $SDATA['price']='Объявленная стоимость';
        $SDATA['payment_sum']='Сумма к оплате';
        $SDATA['delivery_sum']='Стоимость доставки';
        $SDATA['vid']='Тип доставки (1/2)';

        $SDATA['shop']=array(
            'name'=>'Код ПВЗ',
            'name1'=>'Код пункта поступления'
        );
        $SDATA['customer']=array(
            'fio'=>'ФИО получателя',
            'phone'=>'Номер телефона',
            'phone2'=>'Доп. номер телефона',
            'email'=>'E-mail для оповещений',
            'name'=>'Наименование организации',
            'address'=>'Адрес',
            'inn'=>'ИНН',
            'kpp'=>'КПП',
            'r_s'=>'Расчетный счет',
            'bank'=>'Наименование банка',
            'kor_s'=>'Кор. счет',
            'bik'=>'БИК'
        );

        $SDATA['kurdost'] = array(
            'index' => 'Индекс',
            'citi' => 'Город',
            'addressp' => 'Адрес получателя',
            'timesfrom1' => 'Время доставки, от',
            'timesto1' => 'Время доставки, до',
            'timesfrom2' => 'Альтернативное время, от',
            'timesto2' => 'Альтернативное время, до',
            'timep' => 'Время доставки текстовый формат',
            'comentk' => 'Комментарий'
        );

        $SDATA['items']=array(
            array(
                'id'=>'Артикул товара в БД',
                'name'=>'Наименование товара',
                'UnitName'=>'Единица измерения',
                'nds'=>'Процент НДС',
                'price'=>'Цена товара',
                'quantity'=>'Количество'
            )
        );
        $SDATA['weights']=array(
            'weight'=>'Вес 1-ого места',
            'barcode'=>'Баркод 1-го места',
            'weight2'=>'Вес 2-ого места',
            'barcode2'=>'Баркод 2-го места',
            'weight3'=>'Вес 3-его места',
            'barcode3'=>'Баркод 3-го места',
            'weight4'=>'Вес 4-ого места',
            'barcode4'=>'Баркод 4-го места',
            'weight5'=>'Вес 5-ого места',
            'barcode5'=>'Баркод 5-го места'
        );
    }
}