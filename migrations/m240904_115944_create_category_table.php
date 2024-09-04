<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m240904_115944_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'alias' => $this->string()->notNull(),
        ]);
        $this->createIndex('{{%idx_category_alias}}', '{{%category}}', 'alias');

        $this->insert('category', [
            'title' => 'test',
            'alias' => 'content',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('{{%idx_category_alias}}', '{{%category}}');
        $this->dropTable('{{%category}}');
    }
}
