<?php

use yii\db\Migration;

/**
 * Class m240126_101740_fill_transactions_table
 */
class m240126_101740_fill_transactions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('transactions', ['Date', 'Amount', 'Type', 'Description', 'EmployeeID'], [
            ['2024-01-01', 10000, 'Доход', 'Продажа продукта', 1],
            ['2024-01-02', -5000, 'Расход', 'Аренда офиса', 2],
            ['2024-01-03', 15000, 'Доход', 'Продажа продукта', 3],
            ['2024-01-04', -3000, 'Расход', 'Канцелярские товары', 4],
            ['2024-01-05', 20000, 'Доход', 'Инвестиции', 5],
            ['2024-01-06', -7000, 'Расход', 'Ремонт оборудования', 6],
            ['2024-01-07', 30000, 'Доход', 'Продажа продукта', 7],
            ['2024-01-08', -8000, 'Расход', 'Корпоративное мероприятие', 8],
            ['2024-01-09', 25000, 'Доход', 'Продажа продукта', 9],
            ['2024-01-10', -1000, 'Расход', 'Подписка на сервисы', 10]
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240126_101740_fill_transactions_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240126_101740_fill_transactions_table cannot be reverted.\n";

        return false;
    }
    */
}
