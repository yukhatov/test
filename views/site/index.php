<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerJsFile('operation.js', ['yii\web\JqueryAsset']);
?>

<div class="site-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'firstNumber') ?>

        <div id="second" style="display: none;">
            <?= $form->field($model, 'secondNumber') ?>
        </div>

        <div id="third" class="form-group" style="display: none;">
            <?= Html::submitButton('Add', ['class' => 'btn btn-primary', 'id' => 'button-save']) ?>

            <?= Html::label('Result:', null, ['id' => 'label-result']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>