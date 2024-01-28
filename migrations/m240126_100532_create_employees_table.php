<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employees}}`.
 */
class m240126_100532_create_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employees', [
            'EmployeeID' => $this->primaryKey(),
            'FirstName' => $this->string(255)->notNull(),
            'LastName' => $this->string(255)->notNull(),
            'Position' => $this->string(255)->notNull(),
            'Department' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employees}}');
    }
}
