<?php

use yii\db\Migration;

class m241113_112703_create_garage_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('garage', [
            'id_avto' => $this->integer()->notNull(),
            'polomka' => $this->string()->notNull(),
            'zapchast' => $this->string()->notNull(),
            'cena_zapchast' => $this->decimal(10, 2)->notNull(),
            'data_nachalo' => $this->date()->notNull(),
            'data_konec' => $this->date(),
        ]);

        $this->addPrimaryKey('pk-garage-id_avto', 'garage', 'id_avto');

        $this->addForeignKey(
            'fk-garage-id_avto',
            'garage',
            'id_avto',
            'avto',
            'id_avto',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-garage-id_avto', 'garage');
        $this->dropTable('garage');
    }
}