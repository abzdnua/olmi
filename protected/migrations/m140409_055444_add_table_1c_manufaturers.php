<?php

class m140409_055444_add_table_1c_manufaturers extends CDbMigration
{
	public function up()
	{
        $this->createTable('1c_manufaturers',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'name'  =>'varchar(100)',
        ));
	}

	public function down()
	{
        $this->dropTable('1c_manufaturers');
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