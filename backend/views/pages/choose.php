<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \backend\models\TemplateList */

$this->title = 'My Yii Application';

?>

        <!-- /.col-lg-6 (nested) -->
        <?php $form = ActiveForm::begin(); ?>
        <div class="form-group">
            <?= $form->field($model, 'template')->dropDownList(\common\narci\Narci::getTemplateDroplist()); ?>

        </div>

        <?= Html::submitButton('Submit', ['class' => 'btn btn-lg btn-success btn-block']) ?>
        <?php ActiveForm::end(); ?>

