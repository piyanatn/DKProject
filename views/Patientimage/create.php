<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Patientimage */

$this->title = 'Create Patientimage';
$this->params['breadcrumbs'][] = ['label' => 'Patientimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patientimage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
