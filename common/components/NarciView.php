<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 24/03/15
 * Time: 20:17
 */

namespace common\components;

use common\narci\view\ViewItem;

abstract class NarciView extends \yii\web\View {

    private $items = array();


    public function getItems()
    {
        return $this->items;
    }

    protected function addItem($array)
    {
        $item = new ViewItem($array);
        $this->items[] = $item;

        return $item;
    }

    abstract public function item(array $array);

}