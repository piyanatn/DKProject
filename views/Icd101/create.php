<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Icd101 */

$this->title = 'Create Icd101';
$this->params['breadcrumbs'][] = ['label' => 'Icd101s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="icd101-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
