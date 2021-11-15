<?php
use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m211115_002256_produto
 */
class m211115_002256_produto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /**
         * atributos not null para evitar dados em branco
         */
        $this->createTable('produtos', [
            'id' => 'pk',
            'product_id' => Schema::TYPE_STRING . '(60) NOT NULL',
            'box_cod' => Schema::TYPE_STRING . '(30) NOT NULL',
            'detail' => Schema::TYPE_JSON . ' NOT NULL',
            'status' => Schema::TYPE_SMALLINT . ' NOT NULL',
            'is_gs' => Schema::TYPE_BOOLEAN . ' NOT NULL',
            'is_rma' => Schema::TYPE_BOOLEAN . ' NOT NULL',
            'started_at' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
            'packed_at' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('produtos');
    }
}
