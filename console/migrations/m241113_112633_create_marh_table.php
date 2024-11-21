<?php

use yii\db\Migration;

class m241113_112633_create_marh_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('marh', [
            'id_marh' => $this->primaryKey(),
            'mesto' => $this->string()->notNull(),
            'rasstoyanie' => $this->integer()->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('marh');
    }
}