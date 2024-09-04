<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return'post';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'create_time',
                'updatedAtAttribute' => 'update_time',
                'value' => new Expression('NOW()'),
            ],
        ];
    }



    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id'=> 'category_id']);
    }

}