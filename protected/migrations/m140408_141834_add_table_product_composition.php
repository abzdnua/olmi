<?php

class m140408_141834_add_table_product_composition extends CDbMigration
{
	public function up()
	{
        $this->createTable('product_composition',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'product_conent_id'  =>'varchar(15)',
            'product_1С_id'  =>'varchar(15)',
            'property_id'    =>'varchar(15)',
            'property_value_id'  =>'varchar(15)',

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
        $this->dropTable('product_composition');
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