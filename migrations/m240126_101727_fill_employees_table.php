<?php

use yii\db\Migration;

/**
 * Class m240126_101727_fill_employees_table
 */
class m240126_101727_fill_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('employees', ['FirstName', 'LastName', 'Position', 'Department'], [
            ['Иван', 'Иванов', 'Менеджер', 'Отдел продаж'],
            ['Петр', 'Петров', 'Разработчик', 'IT отдел'],
            ['Сергей', 'Сергеев', 'Аналитик', 'Бухгалтерия'],
            ['Мария', 'Маринина', 'Дизайнер', 'Маркетинг'],
            ['Анна', 'Андреева', 'Тестировщик', 'QA отдел'],
            ['Николай', 'Николаев', 'Директор', 'Управление'],
            ['Ольга', 'Орлова', 'Секретарь', 'Администрация'],
            ['Елена', 'Ленская', 'HR-менеджер', 'Отдел кадров'],
            ['Алексей', 'Алексеев', 'Системный администратор', 'IT отдел'],
            ['Татьяна', 'Тихонова', 'Финансовый директор', 'Бухгалтерия']
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240126_101727_fill_employees_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240126_101727_fill_employees_table cannot be reverted.\n";

        return false;
    }
    */
}
