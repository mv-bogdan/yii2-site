<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Money;

$this->title = 'Деньга';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'countfec') ?>

<?= $form->field($model, 'countbl') ?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    <?=
     $money = new Money();
    $money->Name = $model->name;
    $money->CountFec = $model->countfec;
    $money->CountBl = $model->countbl;
    $money->save();
    ?>
</div>

<?php ActiveForm::end(); ?>
<!-- <div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Troll
    </p>


</div>
-->
