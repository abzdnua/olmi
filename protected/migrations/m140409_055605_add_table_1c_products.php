<?php

class m140409_055605_add_table_1c_products extends CDbMigration
{
	public function up()
	{
        $this->createTable('1c_products',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'name'  =>'varchar(100)',
            'group_id'=>'varchar(15)',
            'unit_id'=>'varchar(15)',
            'unit_name'=>'varchar(15)',
            'article' =>'varchar(15)',
        ));
	}

	public function down()
	{
        $this->dropTable('1c_products');
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