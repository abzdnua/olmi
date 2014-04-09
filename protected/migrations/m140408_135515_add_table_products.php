<?php

class m140408_135515_add_table_products extends CDbMigration
{
	public function up()
	{
        $this->createTable('products',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'stock_id'=>'varchar(15)',
            'name'  =>'varchar(100) NOT NULL',
            'is_active'=>'tinyint(1)',
            'status'=>'enum("rec","new","hit")',
            'parent_id'=>'varchar(15) NOT NULL',
            'is_show_on_main'=>'tinyint(1)',
            'description'=>'text NOT NULL',
            'delivery_message_id'=>'varchar(15) NOT NULL',
            'manufacturer_id'=>'varchar(15) NOT NULL',
            'string_price_id'=>'varchar(15)',
            'search_words'=>'varchar(200) NOT NULL',
            'unit_id'=>'varchar(15) NOT NULL',
            'video_link'=>'varchar(300)',
            'main_image_id'=>'varchar(15) NOT NULL',

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
        $this->dropTable('products');
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