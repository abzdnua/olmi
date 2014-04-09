<?php

class m140409_052703_add_table_1c_users extends CDbMigration
{
	public function up()
	{
        $this->createTable('1c_users',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'name'  =>'varchar(250)',
            'phone'  =>'varchar(20)',
            'email' =>'varchar(250)',
            'delivery_address'=>'varchar(250)',
        ));
	}

	public function down()
	{
        $this->dropTable('1c_users');
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