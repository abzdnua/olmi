<?php

class m140408_132643_add_column_admin_colors extends CDbMigration
{
	public function up()
	{
        $this->addColumn('colors','create_user_id','int(11)');
        $this->addColumn('colors','create_time','datetime');
        $this->addColumn('colors','change_user_id','int(11)');
        $this->addColumn('colors','change_time','datetime');
        $this->addColumn('colors','delete_denied','tinyint(1) DEFAULT 0');
        $this->addColumn('colors','deleted','tinyint(1) DEFAULT 0');
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