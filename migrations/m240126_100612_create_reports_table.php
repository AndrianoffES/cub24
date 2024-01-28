<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reports}}`.
 */
class m240126_100612_create_reports_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('reports', [
            'ReportID' => $this->primaryKey(),
            'Title' => $this->string(255)->notNull(),
            'CreationDate' => $this->date()->notNull(),
            'EmployeeID' => $this->integer()->notNull(),
            'Status' => $this->string(100)->notNull(),
        ]);
        $this->addForeignKey('fk_reports_employees', 'reports', 'EmployeeID', 'employees', 'EmployeeID', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reports}}');
    }
}
