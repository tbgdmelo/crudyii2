<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m211115_014616_serial
 */
class m211115_014616_serial extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /**
         * atributos not null para evitar dados em branco
         */
        $this->createTable('serial', [
            'id' => 'pk',
            'sn' => Schema::TYPE_STRING . '(30) NOT NULL UNIQUE',
            'type' => Schema::TYPE_STRING . '(30) NOT NULL',
            'product_data_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);
        $this->addForeignKey('product_data_id', 'serial', 'id', 'produtos', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('serial');
    }
}
