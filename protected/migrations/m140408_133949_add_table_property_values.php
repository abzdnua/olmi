<?php

class m140408_133949_add_table_property_values extends CDbMigration
{
	public function up()
	{
        $this->createTable('property_values',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'property_id'  =>'varchar(15) NOT NULL',
            'property_value'=>'varchar(15) NOT NULL',

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
        $this->dropTable('property_values');
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