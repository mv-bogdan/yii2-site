<?php

namespace app\models;

use yii\base\Model;

class MoneyForm extends Model
{
    public $name;
    public $countfec;
    public $countbl;

    public function rules ()
    {
        return [
            [['name', 'countfec', 'countbl'],'required'],

        ];
    }
    }

