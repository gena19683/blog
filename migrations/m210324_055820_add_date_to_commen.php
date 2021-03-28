<?php

use yii\db\Migration;

/**
 * Class m210324_055820_add_date_to_commen
 */
class m210324_055820_add_date_to_commen extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->addColumn('comment','date', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('comment','date');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210324_055820_add_date_to_commen cannot be reverted.\n";

        return false;
    }
    */
}
