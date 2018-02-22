<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ObjetoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objeto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_objeto') ?>

    <?= $form->field($model, 'nombre_objeto') ?>

    <?= $form->field($model, 'descripcion_obj') ?>

    <?= $form->field($model, 'cantidad_disponible') ?>

    <?= $form->field($model, 'estado_id_estado') ?>

    <?php // echo $form->field($model, 'categoria_id_categoria') ?>

    <?php // echo $form->field($model, 'tipo_categoria_id_tipo_categoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
