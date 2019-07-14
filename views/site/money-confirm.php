<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>
    <ul>
        <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
<li><label>Fecess</label>: <?= Html::encode($model->countfec) ?></li>
<li><label>Blad</label>: <?= Html::encode($model->countbl) ?></li>
</ul>