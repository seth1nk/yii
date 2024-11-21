<?php

use yii\db\Migration;

class m241113_112629_create_voditeli_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('voditeli', [
            'id_vod' => $this->primaryKey(),
            'name_vod' => $this->string()->notNull(),
            'stazh' => $this->integer()->notNull(),
            'number_pass' => $this->string()->notNull(),
            'adress' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('voditeli');
    }
}