<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tipocategoria */

$this->title = $model->id_tipo_categoria;
$this->params['breadcrumbs'][] = ['label' => 'Tipocategorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipocategoria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_tipo_categoria], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_tipo_categoria], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_tipo_categoria',
            'nombre_tcat',
            'desc_tcat',
            'categoria_id_categoria',
        ],
    ]) ?>

</div>
