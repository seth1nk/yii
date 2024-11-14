<?php

use yii\db\Migration;

class m241113_112647_create_tovar_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('tovar', [
            'Код_товара' => $this->primaryKey(),
            'Наименование_товара' => $this->string()->notNull(),
            'Количество_товара' => $this->integer()->notNull(),
            'Цена_товара' => $this->decimal(10, 2)->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('tovar');
    }
}