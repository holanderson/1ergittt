<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Objeto */

$this->title = 'Update Objeto: ' . $model->id_objeto;
$this->params['breadcrumbs'][] = ['label' => 'Objetos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_objeto, 'url' => ['view', 'id' => $model->id_objeto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="objeto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
