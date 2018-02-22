<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipocategoria */

$this->title = 'Create Tipocategoria';
$this->params['breadcrumbs'][] = ['label' => 'Tipocategorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipocategoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
