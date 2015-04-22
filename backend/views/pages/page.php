<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 25/03/15
 * Time: 19:03
 */
use common\narci\form\NarciActiveForm;
use yii\helpers\Html;
?>

<?php $form = NarciActiveForm::begin(['id' => 'my-form']); ?>


<?php

//var_dump($model->getItems()); die();
foreach ($model->getItems() as $data) {
    echo $form->field($model)->textarea();
}

?>
<?= Html::submitButton('Submit') ?>
<?php NarciActiveForm::end(); ?>