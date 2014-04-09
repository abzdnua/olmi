<?php

class m140408_144203_add_table_block_video extends CDbMigration
{
	public function up()
	{
        $this->createTable('block_video',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'block_id'  =>'varchar(15)',
            'link'=>'varchar(200) NOT NULL',

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
        $this->dropTable('block_video');
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