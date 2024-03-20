<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m240320_123007_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id'        =>  $this->primaryKey(),
            'name'      =>  $this->string(64),
            'price'     =>  $this->decimal(2),
            'client_id' =>  $this->integer()->notNull(),
        ]);

        $this->addForeignKey( 'fk-products-client_id', 'products','client_id', 'clients', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-products-client_id', 'products');

        $this->dropTable('{{%products}}');
    }
}
