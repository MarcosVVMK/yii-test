<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%clients}}`.
 */
class m240320_120133_create_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clients}}', [
            'id'            =>  $this->primaryKey(),
            'name'          =>  $this->string(64),
            'cep'           =>  $this->string(10),
            'street'        =>  $this->string(30),
            'number'        =>  $this->string(10),
            'city'          =>  $this->string(10),
            'state'         =>  $this->string(10),
            'complement'    =>  $this->string(10),
            'photo'         =>  $this->string(512),
            'gender'        =>  $this->string(10)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clients}}');
    }
}
