<?php

/* @var $this yii\web\View */

use antkaz\vue\Vue;
use yii\helpers\Html;
use \yii\web\JsExpression;
use yii\widgets\LinkPager;

$this->title = 'My Yii Application';
?>
<div class="site-index" xmlns:v-on="http://www.w3.org/1999/xhtml">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="vue">
        <?php Vue::begin([
            'clientOptions' => [
                'data' => [
                    'message' => 'Hello Vue!'
                ],
                'methods' => [
                    'reverseMessage' => new JsExpression("function() {this.message = this.message.split('').reverse().join('')}")
                ]
            ]
        ]) ?>

        <p>{{ message }}</p>
        <button v-on:click="reverseMessage">Reverse Message</button>
        <?php Vue::end() ?>

        <h1>Countries</h1>
        <ul>
            <?php foreach ($countries as $country): ?>
                <li>
                    <?= Html::encode("{$country->code} ({$country->name})") ?>:
                    <?= $country->population ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <?= LinkPager::widget(['pagination' => $pagination]) ?>

    </div>
</div>
