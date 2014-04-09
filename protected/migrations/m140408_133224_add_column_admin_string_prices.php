<?php

class m140408_133224_add_column_admin_string_prices extends CDbMigration
{
	public function up()
	{
        $this->addColumn('string_prices','create_user_id','int(11)');
        $this->addColumn('string_prices','create_time','datetime');
        $this->addColumn('string_prices','change_user_id','int(11)');
        $this->addColumn('string_prices','change_time','datetime');
        $this->addColumn('string_prices','delete_denied','tinyint(1) DEFAULT 0');
        $this->addColumn('string_prices','deleted','tinyint(1) DEFAULT 0');
	}

	public function down()
	{
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