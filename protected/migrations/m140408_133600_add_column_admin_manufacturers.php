<?php

class m140408_133600_add_column_admin_manufacturers extends CDbMigration
{
	public function up()
	{
        $this->addColumn('manufacturers','create_user_id','int(11)');
        $this->addColumn('manufacturers','create_time','datetime');
        $this->addColumn('manufacturers','change_user_id','int(11)');
        $this->addColumn('manufacturers','change_time','datetime');
        $this->addColumn('manufacturers','delete_denied','tinyint(1) DEFAULT 0');
        $this->addColumn('manufacturers','deleted','tinyint(1) DEFAULT 0');
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