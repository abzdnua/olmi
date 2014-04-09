<?php

class m140409_055951_add_table_1c_prices extends CDbMigration
{
	public function up()
	{
        $this->createTable('1c_prices',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'product_id'  =>'varchar(15) NOT NULL',
            'price_type' =>'int(2)',
            'price'=>'float(6)',
        ));
	}

	public function down()
	{
        $this->dropTable('1c_prices');
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