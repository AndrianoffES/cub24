<?php

use yii\db\Migration;

/**
 * Class m240126_101751_fill_reports_table
 */
class m240126_101751_fill_reports_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('reports', ['Title', 'CreationDate', 'EmployeeID', 'Status'], [
            ['Ежемесячный отчет', '2024-01-01', 1, 'Опубликован'],
            ['Квартальный отчет', '2024-01-15', 2, 'Черновик'],
            ['Годовой отчет', '2024-02-01', 3, 'Опубликован'],
            ['Отчет по проекту "Альфа"', '2024-02-15', 4, 'Опубликован'],
            ['Отчет по продажам', '2024-03-01', 5, 'Опубликован'],
            ['Отчет по маркетингу', '2024-03-15', 6, 'Черновик'],
            ['Финансовый отчет', '2024-04-01', 7, 'Опубликован'],
            ['Отчет по IT-инфраструктуре', '2024-04-15', 8, 'Черновик'],
            ['Отчет по кадрам', '2024-05-01', 9, 'Опубликован'],
            ['Итоговый отчет', '2024-05-15', 10, 'Черновик']
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240126_101751_fill_reports_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240126_101751_fill_reports_table cannot be reverted.\n";

        return false;
    }
    */
}
