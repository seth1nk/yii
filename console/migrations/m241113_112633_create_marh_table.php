<?php

use yii\db\Migration;

class m241113_112633_create_marh_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('marh', [
            'Код_маршрута' => $this->primaryKey(),
            'Пункт_назначения' => $this->string()->notNull(),
            'Расстояние_до_пункта_назначения' => $this->integer()->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('marh');
    }
}