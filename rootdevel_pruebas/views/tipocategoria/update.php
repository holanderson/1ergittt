<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipocategoria */

$this->title = 'Update Tipocategoria: ' . $model->id_tipo_categoria;
$this->params['breadcrumbs'][] = ['label' => 'Tipocategorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipo_categoria, 'url' => ['view', 'id' => $model->id_tipo_categoria]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipocategoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
