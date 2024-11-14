<?php

use yii\db\Migration;

class m241113_112703_create_garage_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('garage', [
            'Код_авто' => $this->integer()->notNull(),
            'Тип_поломки' => $this->string()->notNull(),
            'Вид_запчасти' => $this->string()->notNull(),
            'Цена_запчасти' => $this->decimal(10, 2)->notNull(),
            'Дата_начала_ремонта' => $this->date()->notNull(),
            'Дата_конца_ремонта' => $this->date(),
        ]);

        $this->addPrimaryKey('pk-garage-Код_авто', 'garage', 'Код_авто');

        $this->addForeignKey(
            'fk-garage-Код_авто',
            'garage',
            'Код_авто',
            'avto',
            'Код_авто',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-garage-Код_авто', 'garage');
        $this->dropTable('garage');
    }
}