<?php

class m140408_131434_add_table_stocks extends CDbMigration
{
	public function up()
	{
        $this->createTable('stocks',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'name'  =>'varchar(100) NOT NULL',
            'back_color_id'   =>'varchar(15)',
            'description'  =>'text',
            'begin_date'    =>'datetime NOT NULL',
            'end_date'      =>'datetime NOT NULL',
            'banner_id'     =>'varchar(15) NOT NULL',
            'show_back'     =>'tinyint(1)',
            'target'        =>'tinyint(1)',
            'link'          =>'varchar(200)',
            'priority'      =>'int(5)',
            'is_active'     =>'tinyint(1)',

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
        $this->dropTable('stocks');
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