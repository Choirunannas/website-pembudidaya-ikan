<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pembina */

$this->title = 'Create Pembina';
$this->params['breadcrumbs'][] = ['label' => 'Pembinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembina-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
