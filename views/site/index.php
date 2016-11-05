<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerJsFile('operation.js', ['yii\web\JqueryAsset']);
?>

<div class="site-index">

    <div class="container">
        <div class="row">

            <?php $form = ActiveForm::begin(); ?>

                <div id="first" class="col-sm-6 col-md-4">
                    <?= $form->field($model, 'firstNumber') ?>
                </div>

                <div id="second" style="display: none;" class="col-sm-6 col-md-4">
                    <?= $form->field($model, 'secondNumber') ?>
                </div>

                <div id="third" class="form-group" style="display: none;" class="col-sm-6 col-md-4">
                    <?= Html::submitButton('Add', ['class' => 'btn btn-primary', 'id' => 'button-save']) ?>

                    <?= Html::label('Result:', null, ['id' => 'label-result']) ?>
                </div>

            <?php ActiveForm::end(); ?>

         </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>