<?php

class m140408_144617_add_table_block_image extends CDbMigration
{
	public function up()
	{
        $this->createTable('block_image',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'block_id'  =>'varchar(15)',
            'image_id'=>'varchar(15) NOT NULL',

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
        $this->dropTable('block_image');
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