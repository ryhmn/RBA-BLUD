<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DbelanjaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dbelanja-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'detail_belanja_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'belanja_id') ?> -->

    <!-- <?= $form->field($model, 'item_id') ?> -->

    <!-- <?= $form->field($model, 'jumlah_belanja') ?> -->

    <?php // echo $form->field($model, 'satuan_id') ?>

    <?php // echo $form->field($model, 'harga_belanja') ?>

    <div class="input-group d-flex">
        <?= $form->field($model, 'item_id')->textInput(['placeholder' => "Cari Nama Bidang",'class' => 'border rounded-left h-100 px-3'])->label(false) ?>
        <div class="form-group input-group-append align-self-center">
            <?= Html::submitButton('<i class="fas fa-search"></i>', ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>