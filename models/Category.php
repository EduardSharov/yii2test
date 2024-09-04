<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends  ActiveRecord
{
    public static function tableName()

    {
        return 'category';
    }


}

$this->createIndex('{{%idx_category_alias}}', '{{%category}}', 'alias');