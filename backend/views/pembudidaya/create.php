<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pembudidaya */

$this->title = 'Create Pembudidaya';
$this->params['breadcrumbs'][] = ['label' => 'Pembudidayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembudidaya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
