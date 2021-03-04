<?php

use yii\db\Migration;

/**
 * Class m210302_170733_create_livros
 */
class m210302_170733_create_livros extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('livros', [
            'id' => $this->primaryKey(),
            'titulo' => $this->string(),
            'author' => $this->string(),
            'preco' => $this->float()
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('livros');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210302_170733_create_livros cannot be reverted.\n";

        return false;
    }
    */
}
