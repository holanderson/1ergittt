<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PrestamoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prestamo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_prestamo') ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'fecha_prestamo') ?>

    <?= $form->field($model, 'fecha_devolucion') ?>

    <?= $form->field($model, 'cantidad_solicitada') ?>

    <?php // echo $form->field($model, 'persona_id_persona') ?>

    <?php // echo $form->field($model, 'objeto_id_objeto') ?>

    <?php // echo $form->field($model, 'estado_id_estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
