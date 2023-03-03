<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\JbelanjaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jbelanja-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="input-group d-flex">
        <?= $form->field($model, 'jenis_belanja')->textInput(['placeholder' => "Cari Jenis Belanja",'class' => 'border rounded-left h-100 px-3'])->label(false) ?>
        <div class="form-group input-group-append align-self-center">
            <?= Html::submitButton('<i class="fas fa-search"></i>', ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>