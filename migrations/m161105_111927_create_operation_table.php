<?php

use yii\db\Migration;

/**
 * Handles the creation of table `operation`.
 */
class m161105_111927_create_operation_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('operation', [
            'id' => $this->primaryKey(),
            'firstNumber' => $this->integer()->notNull(),
            'secondNumber' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('operation');
    }
}
