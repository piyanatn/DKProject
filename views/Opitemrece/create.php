<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Opitemrece */

$this->title = 'Create Opitemrece';
$this->params['breadcrumbs'][] = ['label' => 'Opitemreces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opitemrece-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
