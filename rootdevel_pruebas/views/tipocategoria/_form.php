<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tipocategoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipocategoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_tcat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc_tcat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria_id_categoria')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
