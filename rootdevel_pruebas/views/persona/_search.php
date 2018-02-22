<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_persona') ?>

    <?= $form->field($model, 'nombre_persona') ?>

    <?= $form->field($model, 'apellido_persona') ?>

    <?= $form->field($model, 'celular') ?>

    <?= $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'tipo_documento_id_idtipo_documento') ?>

    <?php // echo $form->field($model, 'numero_doc_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
