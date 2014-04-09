<?php

class m140409_053945_add_table_1c_orders_items extends CDbMigration
{
	public function up()
	{
        $this->createTable('1c_orders_items',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'order_id'  =>'varchar(15)',
            'product_id' =>'varchar(15)',
            'unit_id'=>'varchar(15)',
            'count'=>'int(6)',
            'price'=>'float(6)',
            'discount'=>'float(6)',
        ));
	}

	public function down()
	{
        $this->dropTable('1c_orders_items');
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