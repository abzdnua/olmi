<?php

class m140409_055035_add_table_1c_groups extends CDbMigration
{
	public function up()
	{
        $this->createTable('1c_groups',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'name'  =>'varchar(100)',
            'parent_id'=>'varchar(15)',
        ));
	}

	public function down()
	{
        $this->dropTable('1c_groups');
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