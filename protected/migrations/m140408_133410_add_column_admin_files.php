<?php

class m140408_133410_add_column_admin_files extends CDbMigration
{
	public function up()
	{
        $this->addColumn('files','create_user_id','int(11)');
        $this->addColumn('files','create_time','datetime');
        $this->addColumn('files','change_user_id','int(11)');
        $this->addColumn('files','change_time','datetime');
        $this->addColumn('files','delete_denied','tinyint(1) DEFAULT 0');
        $this->addColumn('files','deleted','tinyint(1) DEFAULT 0');
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