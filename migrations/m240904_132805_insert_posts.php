<?php

use yii\db\Migration;

/**
 * Class m240904_132805_insert_posts
 */
class m240904_132805_insert_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->update('category', [
            'title' => 'Technology',
            'alias' => 'content',
        ], ['title' => 'test']);

        $this->insert('category', [
            'title' => 'Health & Wellness',
            'alias' => 'health-wellness',
        ]);

        $this->insert('category', [
            'title' => 'Travel',
            'alias' => 'travel',
        ]);

        $this->insert('category', [
            'title' => 'Lifestyle',
            'alias' => 'lifestyle',
        ]);

        $this->batchInsert('post',
            ['category_id', 'title', 'excerpt', 'content', 'img', 'created_at','keywords','description'], [
            ['The Rise of Artificial Intelligence', 'Exploring the advancements in AI technology.', 'Artificial Intelligence (AI) is transforming various industries, from healthcare to 
            finance. This post explores the recent advancements in AI technology and its impact on the future.', 'ai-technology.jpg', '2024-08-22 10:00:00', '', 'AI, technology, advancements', 'An overview of how AI is evolving and changing industries.'],
            ['Lifas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas'],
                ['Lifas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas'],
                ['Lifas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas'],
                ['Lifas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas'],
                ['Lifas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas'],
                ['Lifas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas', 'fsafas'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('category', ['alias' => []]);
    }
}
