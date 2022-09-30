<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about}}`.
 */
class m220916_114348_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about}}', [
            'id' => $this->primaryKey(),
            'title_uz' => $this->string(255)->notNull(),
            'title_ru' => $this->string(255)->notNull(),
            'icon' => $this->string(25)->notNull(),
            'description_uz' => $this->string(100)->notNull(),
            'description_ru' => $this->string(100)->notNull(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about}}');
    }
}
