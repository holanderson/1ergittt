<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipousuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipousuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipousuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipousuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_Tipousuario',
            'rol',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
