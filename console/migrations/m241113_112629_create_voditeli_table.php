<?php

use yii\db\Migration;

class m241113_112629_create_voditeli_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('voditeli', [
            'Код_водителя' => $this->primaryKey(),
            'ФИО_водителя' => $this->string()->notNull(),
            'Стаж' => $this->integer()->notNull(),
            'N_паспорта' => $this->string()->notNull(),
            'Место_прописки' => $this->string()->notNull(),
            'Телефон' => $this->string()->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('voditeli');
    }
}