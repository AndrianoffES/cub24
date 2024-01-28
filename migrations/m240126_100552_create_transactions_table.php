<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transactions}}`.
 */
class m240126_100552_create_transactions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('transactions', [
            'TransactionID' => $this->primaryKey(),
            'Date' => $this->date()->notNull(),
            'Amount' => $this->decimal(10,2)->notNull(),
            'Type' => $this->string(100)->notNull(),
            'Description' => $this->text(),
            'EmployeeID' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk_transactions_employees', 'transactions', 'EmployeeID', 'employees', 'EmployeeID', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transactions}}');
    }
}
