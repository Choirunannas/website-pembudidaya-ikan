<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PembudidayaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembudidayas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembudidaya-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pembudidaya', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'no_hp',
            'hasil_budidaya:ntext',
            'provinsi',
            'kota',
            'kecamatan',
            'alamat:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
