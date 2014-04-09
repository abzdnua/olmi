<?php

class m140408_143901_add_table_blocks extends CDbMigration
{
	public function up()
	{
        $this->createTable('blocks',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'product_id'  =>'varchar(15) NOT NULL',
            'block_type'=>'enum("text", "video", "image")',
            'block_title'=>'varchar(100)',

            'create_user_id' =>'int(11)',
            'create_time'    =>'datetime',
            'change_user_id' =>'int(11)',
            'change_time'    =>'datetime',
            'delete_denied'  =>'tinyint(1) DEFAULT 0',
            'deleted'        =>'tinyint(1) DEFAULT 0'
        ));
	}

	public function down()
	{
        $this->dropTable('blocks');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}