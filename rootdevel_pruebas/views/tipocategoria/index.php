<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipocategoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipocategorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipocategoria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipocategoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tipo_categoria',
            'nombre_tcat',
            'desc_tcat',
            'categoria_id_categoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
