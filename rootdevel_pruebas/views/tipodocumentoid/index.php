<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipodocumentoidSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipodocumentoids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipodocumentoid-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipodocumentoid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtipo_documento',
            'tip_documento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
