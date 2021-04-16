<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pembudidaya */

$this->title = 'Update Pembudidaya: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pembudidayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembudidaya-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
