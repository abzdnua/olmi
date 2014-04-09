<?php

class m140409_053326_add_table_1c_discount extends CDbMigration
{
	public function up()
	{
        $this->createTable('1c_discount',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'user_id'  =>'varchar(15)',
            'number'  =>'varchar(50)',
            'discount' =>'int(3)',
        ));
	}

	public function down()
	{
        $this->dropTable('1c_discount');
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