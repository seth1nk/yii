<?php

use yii\db\Migration;

class m251112_112641_create_dispet_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('dispet', [
            'id_avto' => $this->integer()->notNull(),
            'time_prib' => $this->dateTime()->notNull(),
            'time_otb' => $this->dateTime(),
            'id_vod' => $this->integer()->notNull(),
            'pytevka' => $this->integer()->notNull(),
            'tovar' => $this->integer()->notNull(),
        ]);

        $this->addPrimaryKey('pk-dispet-id_avto', 'dispet', 'id_avto');

        $this->addForeignKey(
            'fk-dispet-id_avto',
            'dispet',
            'id_avto',
            'avto',
            'id_avto',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-dispet-id_vod',
            'dispet',
            'id_vod',
            'voditeli',
            'id_vod',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-dispet-tovar',
            'dispet',
            'tovar',
            'tovar',
            'id_tovar',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-dispet-pytevka',
            'dispet',
            'pytevka',
            'marh',
            'id_marh',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-dispet-id_avto', 'dispet');
        $this->dropForeignKey('fk-dispet-id_vod', 'dispet');
        $this->dropForeignKey('fk-dispet-tovar', 'dispet');
        $this->dropForeignKey('fk-dispet-pytevka', 'dispet');
        $this->dropTable('dispet');
    }
}