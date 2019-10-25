<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m191024_093624_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'username'=>$this->string(120)->notNull()->comment('用户名'),
            'password'=>$this->string(120)->notNull()->comment('密码'),
            'salt'=>$this->string(120)->notNull()->comment('加密'),
            'email'=>$this->string(120)->comment('邮箱')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
