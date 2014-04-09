<?php

class m140408_130703_add_table_string_prices extends CDbMigration
{
	public function up()
	{
        $this->createTable('string_prices',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'message'  =>'varchar(500) NOT NULL',

        ));
	}

	public function down()
	{
        $this->dropTable('string_prices');
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