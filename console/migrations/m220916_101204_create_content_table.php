<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%content}}`.
 */
class m220916_101204_create_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%content}}', [
            'id' => $this->primaryKey(),
            'title_uz' => $this->text()->notNull(),
            'title_ru' => $this->text()->notNull(),
            'subtitle_uz' => $this->string(255)->notNull(),
            'subtitle_ru' => $this->string(255)->notNull(),
            'image' => $this->string(2000)->notNull(),
            'status' => $this->tinyInteger(2)->notNull(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%content}}');
    }
}
