<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article}}`.
 */
class m220916_114646_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'title_uz' => $this->string(255)->notNull(),
            'title_ru' => $this->string(255)->notNull(),
            'description_uz' => $this->string(255)->notNull(),
            'description_ru' => $this->string(255)->notNull(),
            'image' => $this->string(2000)->notNull(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%article}}');
    }
}
