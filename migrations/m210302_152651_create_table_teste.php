<?php

use yii\db\Migration;

/**
 * Class m210302_152651_create_table_teste
 */
class m210302_152651_create_table_teste extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /*$this->createTable('teste', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()Q*/

        $this->createTable('pessoas', [
            'id' => $this->primaryKey(),
            'idade' => $this->integer(),
            'nome' => $this->string(),
        ]);

        $this->insert('pessoas', [
            'idade' => '23',
            'nome' => 'Bruno'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pessoas');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210302_152651_create_table_teste cannot be reverted.\n";

        return false;
    }
    */
}
