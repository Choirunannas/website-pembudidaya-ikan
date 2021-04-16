<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pembina */

$this->title = 'Update Pembina: ' . $model->id_pembina;
$this->params['breadcrumbs'][] = ['label' => 'Pembinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pembina, 'url' => ['view', 'id' => $model->id_pembina]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembina-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
