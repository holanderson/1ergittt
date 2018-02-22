<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prestamo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prestamo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_prestamo')->textInput() ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?= $form->field($model, 'fecha_prestamo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_devolucion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidad_solicitada')->textInput() ?>

    <?= $form->field($model, 'persona_id_persona')->textInput() ?>

    <?= $form->field($model, 'objeto_id_objeto')->textInput() ?>

    <?= $form->field($model, 'estado_id_estado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
