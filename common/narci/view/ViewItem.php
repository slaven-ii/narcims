<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 22/03/15
 * Time: 15:00
 */

namespace common\narci\view;


class ViewItem {

    public $data = array();
    
    public function __construct($array)
    {
        $this->data = $array;
    }

    public function getName(){
        return $this->data['name'];
    }

    public function getValidation(){
        return $this->data['validation'];

    }
    public function render(){
        echo 'evo mee';
    }
}