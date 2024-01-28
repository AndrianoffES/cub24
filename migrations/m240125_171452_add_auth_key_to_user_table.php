<?php

use yii\db\Migration;

/**
 * Class m240125_171452_add_auth_key_to_user_table
 */
class m240125_171452_add_auth_key_to_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'auth_key', $this->string(32)->notNull());
    }

    public function down()
    {
        $this->dropColumn('user', 'auth_key');
    }

}
