<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tag}}`.
 */
class m210324_055642_create_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeup()
    {
        $this->createTable('tag', [
            'id' => $this->primaryKey(),
            'title'=>$this->string()
        ]);
    }
    

    /**
     * {@inheritdoc}
     */
    public function safedown()
    {
        $this->dropTable('{{%tag}}');
    }
}
