<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objeto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objeto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_objeto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion_obj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidad_disponible')->textInput() ?>

    <?= $form->field($model, 'estado_id_estado')->textInput() ?>

    <?= $form->field($model, 'categoria_id_categoria')->textInput() ?>

    <?= $form->field($model, 'tipo_categoria_id_tipo_categoria')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
