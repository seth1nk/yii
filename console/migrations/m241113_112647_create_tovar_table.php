<?php

use yii\db\Migration;

class m241113_112647_create_tovar_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('tovar', [
            'id_tovar' => $this->primaryKey(),
            'name_tovar' => $this->string()->notNull(),
            'kolvo_tovar' => $this->integer()->notNull(),
            'cena_tovar' => $this->decimal(10, 2)->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('tovar');
    }
}