<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sale}}`.
 */
class m220916_114307_create_sale_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sale}}', [
            'id' => $this->primaryKey(),
            'cost' => $this->integer(25),
            'info_uz' => $this->string(25),
            'info_ru' => $this->string(25),
            'surface' => $this->integer(11),
            'bedrooms' => $this->integer(11),
            'bathrooms' => $this->integer(11),
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
        $this->dropTable('{{%sale}}');
    }
}
