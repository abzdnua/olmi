<?php

class m140408_135108_add_table_technical_characteristics_templates_items extends CDbMigration
{
	public function up()
	{
        $this->createTable('technical_characteristics_templates_items',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'template_id'=>'varchar(15)',
            'item_name'  =>'varchar(100)',

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
        $this->dropTable('technical_characteristics_templates_items');
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