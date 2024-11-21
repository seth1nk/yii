<?php

use yii\db\Migration;

class m241113_112619_create_avto_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('avto', [
            'id_avto' => $this->primaryKey(),
            'registration_number' => $this->string()->notNull(),
            'name_avto' => $this->string()->notNull(),
            'god' => $this->integer()->notNull(),
            'probeg' => $this->integer()->notNull(),
            'category' => $this->string()->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('avto');
    }
}