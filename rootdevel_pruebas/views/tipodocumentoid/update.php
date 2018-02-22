<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipodocumentoid */

$this->title = 'Update Tipodocumentoid: ' . $model->idtipo_documento;
$this->params['breadcrumbs'][] = ['label' => 'Tipodocumentoids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtipo_documento, 'url' => ['view', 'id' => $model->idtipo_documento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipodocumentoid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
