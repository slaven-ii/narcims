<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 25/03/15
 * Time: 19:03
 */
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(['id' => 'my-form']); ?>


<?php

//var_dump($model->rules());
foreach ($model->getDataAtributes() as $data) {
    var_dump($data);
    echo $form->field($model, $data)->textarea();
}

?>
<?= Html::submitButton('Submit') ?>
<?php ActiveForm::end(); ?>