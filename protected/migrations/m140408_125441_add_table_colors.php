<?php

class m140408_125441_add_table_colors extends CDbMigration
{
	public function up()
	{
        $this->createTable('colors',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'name'  =>'varchar(50) NOT NULL',
            'rgb'   =>'int(4) NOT NULL'
        ));
	}

	public function down()
	{
        $this->dropTable('colors');
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