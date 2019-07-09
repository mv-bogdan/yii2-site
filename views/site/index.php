<?php

/* @var $this yii\web\View */

use antkaz\vue\Vue;
use yii\helpers\Html;
use \yii\web\JsExpression;
use yii\widgets\LinkPager;

$this->title = 'My Yii Application';
?>
<div class="site-index" xmlns:v-on="http://www.w3.org/1999/xhtml">
    <div class="vue">
        <?php Vue::begin([
            'clientOptions' => [
                'data' => [
                    'message' => 'you died'
                ],
                'methods' => [
                    'reverseMessage' => new JsExpression("function() {this.message = this.message.split('').reverse().join('')}")
                ]
            ]
        ]) ?>
    <div class="jumbotron">
        <h1>{{ message }}</h1>


        <p><a class="btn btn-lg btn-success" href="https://www.yanagikari.ga">Ressurection by erection</a></p>
    </div>



        <p>{{ message }}</p>
        <button v-on:click="reverseMessage">Reverse Message</button>
        <?php Vue::end() ?>



    </div>
</div>
