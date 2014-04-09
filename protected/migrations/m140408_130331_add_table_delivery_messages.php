<?php

class m140408_130331_add_table_delivery_messages extends CDbMigration
{
	public function up()
    {
        $this->createTable('delivery_messages',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'message'  =>'varchar(500) NOT NULL',

        ));
    }

	public function down()
	{
        $this->dropTable('delivery_messages');
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