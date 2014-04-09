<?php

class m140408_141458_add_table_product_content extends CDbMigration
{
	public function up()
	{
        $this->createTable('product_content',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'product_id'  =>'varchar(15)',
            'product_1С_id'  =>'varchar(15)',
            'article'    =>'varchar(100)',
            'color_id'  =>'varchar(15)',
            'min_value' =>'float(3)',

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
        $this->dropTable('product_content');
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