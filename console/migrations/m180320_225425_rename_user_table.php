<?php

use yii\db\Migration;

/**
 * Class m180320_225425_rename_user_table
 */
class m180320_225425_rename_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('{{%user}}', '{{%users}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameTable('{{%user}}', '{{%users}}');
    }
}
