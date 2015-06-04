<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Icd101 */

$this->title = 'Update Icd101: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Icd101s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="icd101-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
