<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TipocategoriaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipocategoria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tipo_categoria') ?>

    <?= $form->field($model, 'nombre_tcat') ?>

    <?= $form->field($model, 'desc_tcat') ?>

    <?= $form->field($model, 'categoria_id_categoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
