<?php

use yii\db\Migration;

class m241113_112619_create_avto_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('avto', [
            'Код_авто' => $this->primaryKey(),
            'Регистрационный_N_авто' => $this->string()->notNull(),
            'Название_авто' => $this->string()->notNull(),
            'Год_выпуска' => $this->integer()->notNull(),
            'Пробег' => $this->integer()->notNull(),
            'Категория' => $this->string()->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('avto');
    }
}