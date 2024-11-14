<?php

use yii\db\Migration;

class m251112_112641_create_dispet_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('dispet', [
            'Код_авто' => $this->integer()->notNull(),
            'Время_прибытия' => $this->dateTime()->notNull(),
            'Время_отбытия' => $this->dateTime(),
            'Код_водителя' => $this->integer()->notNull(),
            'Путевка' => $this->integer()->notNull(),
            'Товар' => $this->integer()->notNull(),
        ]);

        $this->addPrimaryKey('pk-dispet-Код_авто', 'dispet', 'Код_авто');

        $this->addForeignKey(
            'fk-dispet-Код_авто',
            'dispet',
            'Код_авто',
            'avto',
            'Код_авто',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-dispet-Код_водителя',
            'dispet',
            'Код_водителя',
            'voditeli',
            'Код_водителя',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-dispet-Товар',
            'dispet',
            'Товар',
            'tovar',
            'Код_товара',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-dispet-Путевка',
            'dispet',
            'Путевка',
            'marh',
            'Код_маршрута',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-dispet-Код_авто', 'dispet');
        $this->dropForeignKey('fk-dispet-Код_водителя', 'dispet');
        $this->dropForeignKey('fk-dispet-Товар', 'dispet');
        $this->dropForeignKey('fk-dispet-Путевка', 'dispet');
        $this->dropTable('dispet');
    }
}