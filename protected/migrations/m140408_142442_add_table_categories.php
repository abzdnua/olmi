<?php

class m140408_142442_add_table_categories extends CDbMigration
{
	public function up()
	{
        $this->createTable('categories',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'name'  =>'varchar(100) NOT NULL',
            'parent_id'=>'varchar(15)',

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
        $this->dropTable('categories');
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