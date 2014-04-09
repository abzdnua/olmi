<?php

class m140409_053549_add_table_1c_orders extends CDbMigration
{
	public function up()
	{
        $this->createTable('1c_orders',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'number'  =>'varchar(50)',
            'order_date' =>'datetime',
            'user_id'=>'varchar(15) NOT NULL',
            'discount_id'=>'varchar(15)',
            'comment'=>'text',
            'shipping'=>'varchar(500)',
            'payment'=>'varchar(500)'
        ));
	}

	public function down()
	{
        $this->dropTable('1c_orders');
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