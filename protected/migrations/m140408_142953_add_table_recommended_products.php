<?php

class m140408_142953_add_table_recommended_products extends CDbMigration
{
	public function up()
	{
        $this->createTable('recommended_products',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'product_id'  =>'varchar(15)',
            'recommended_product_id'=>'varchar(15)',

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
        $this->dropTable('recommended_products');
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