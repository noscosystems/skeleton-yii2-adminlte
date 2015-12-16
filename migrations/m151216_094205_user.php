<?php

use yii\db\Schema;
use yii\db\Migration;

class m151216_094205_user extends Migration
{
    public function up()
    {
        $this->createTable(
            '{{user}}',
            array(
                'id'          => $this->primaryKey(),
                'title'       => $this->string(20)->notNull(),
                'firstname'   => $this->string(128)->notNull(),
                'lastname'    => $this->string(128)->notNull(),
                'contact'     => $this->string(20)->notNull(),
                'security'    => $this->string(128),
                'username'    => $this->string(128)->notNull(),
                'password'    => $this->string(128)->notNull(),
                'authKey'     => $this->text(),
                'accessToken' => $this->text(),
                'admin'       => $this->integer()->notNull()->defaultValue(10),
                'branch'      => $this->string()->notNull(),
                'created'     => $this->integer()->notNull(),

            ),
            implode(' ', array(
                'ENGINE          = InnoDB',
                'DEFAULT CHARSET = utf8',
                'COLLATE         = utf8_general_ci',
                'COMMENT         = ""',
                'AUTO_INCREMENT  = 1',
            ))
        );
    }

    public function down()
    {
        
        $this->dropTable("{{user}}");

        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
