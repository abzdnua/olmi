<?php

class m140408_131139_add_table_manufacturers extends CDbMigration
{
	public function up()
	{
        $this->createTable('manufacturers',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'name'  =>'varchar(100) NOT NULL',
            'image_id'   =>'varchar(15)'
        ));
	}

	public function down()
	{
        $this->dropTable('manufacturers');
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