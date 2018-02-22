<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ObjetoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Objetos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objeto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Objeto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_objeto',
            'nombre_objeto',
            'descripcion_obj',
            'cantidad_disponible',
            'estado_id_estado',
            // 'categoria_id_categoria',
            // 'tipo_categoria_id_tipo_categoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
