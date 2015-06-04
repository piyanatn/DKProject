<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vnstat */

$this->title = 'Update Vnstat: ' . ' ' . $model->vn;
$this->params['breadcrumbs'][] = ['label' => 'Vnstats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vn, 'url' => ['view', 'id' => $model->vn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vnstat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
