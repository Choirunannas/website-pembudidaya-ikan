<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PembinaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembina-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pembina', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pembina',
            'nama',
            'no_hp',
            'provinsi',
            'kota',
            'kecamatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
