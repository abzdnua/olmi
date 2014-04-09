<?php

class m140409_054445_add_table_1c_search extends CDbMigration
{
	public function up()
	{
        $this->createTable('1c_search',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'query'  =>'varchar(250)',
            'search_date' =>'datetime',
            'is_found'=>'tinyint(1)',
        ));
	}

	public function down()
	{
        $this->dropTable('1c_search');
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