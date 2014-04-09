<?php

class m140408_140800_add_table_product_images extends CDbMigration
{
	public function up()
	{
        $this->createTable('product_images',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'product_id'  =>'varchar(15) NOT NULL',
            'image_id'    =>'varchar(15) NOT NULL',

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
        $this->dropTable('product_images');
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