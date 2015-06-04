<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Labitems */

$this->title = 'Create Labitems';
$this->params['breadcrumbs'][] = ['label' => 'Labitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labitems-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
