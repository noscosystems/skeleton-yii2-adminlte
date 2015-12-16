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
                'id'            => $this->primaryKey(),
                'username'      => $this->string(128)->notNull(),
                'password'      => $this->string(128)->notNull(),
                'admin'         => $this->integer()->notNull()->defaultValue(10),
                'branch'        => $this->integer(),
                'firstname'     => $this->string(128),
                'lastname'      => $this->string(128),
                'contact'       => $this->string(20),
                'email'         => $this->string(128),
                'security'      => $this->string(128),
                'authKey'       => $this->text(),
                'accessToken'   => $this->text(),
                'created'       => $this->integer()->notNull(),

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
}
