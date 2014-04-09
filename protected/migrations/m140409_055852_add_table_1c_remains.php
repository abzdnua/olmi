<?php

class m140409_055852_add_table_1c_remains extends CDbMigration
{
	public function up()
	{
        $this->createTable('1c_remains',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'product_id'  =>'varchar(100)',
            'remain_count' =>'int(6)',
        ));
	}

	public function down()
	{
        $this->dropTable('1c_remains');
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