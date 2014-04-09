<?php

class m140408_143235_add_table_delivery_types extends CDbMigration
{
	public function up()
	{
        $this->createTable('delivery_types',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'name'  =>'varchar(100) NOT NULL',
            'recommended_product_id'=>'varchar(15)',
            'is_active'=>'tinyint(1)',
            'overprice'=>'int(5)',

            'create_user_id' =>'int(11)',
            'create_time'    =>'datetime',
            'change_user_id' =>'int(11)',
            'change_time'    =>'datetime',
            'delete_denied'  =>'tinyint(1) DEFAULT 0',
            'deleted'        =>'tinyint(1) DEFAULT 0'
        ));
	}

	public function down()
	{
        $this->dropTable('delivery_types');
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