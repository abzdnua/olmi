<?php

class m140408_141128_add_table_product_technical_characteristics extends CDbMigration
{
	public function up()
	{
        $this->createTable('product_technical_characteristics',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'product_id'  =>'varchar(15) NOT NULL',
            'order'    =>'int(6) NOT NULL',
            'value'    =>'varchar(100)',
            'name'  =>'varchar(100)',

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
        $this->dropTable('product_technical_characteristics');
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