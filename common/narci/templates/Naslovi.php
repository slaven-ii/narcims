<?php
/**
 * Template name: Naslovi
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 22/03/15
 * Time: 16:16
 *
 */

/* @var $this common\components\View */


$this->item(
    array(
        'name' => 'naslov',
        'validation' => [['naslov'], 'required'],
        'size' => '12'
    )
);

$this->item(
    array(
        'name' => 'paragraf1',
        'validation' => [['paragraf1'], 'required'],
        'size' => '6'
    )
);

