<?php

class m140408_133058_add_column_admin_delivery_messages extends CDbMigration
{
	public function up()
	{
        $this->addColumn('delivery_messages','create_user_id','int(11)');
        $this->addColumn('delivery_messages','create_time','datetime');
        $this->addColumn('delivery_messages','change_user_id','int(11)');
        $this->addColumn('delivery_messages','change_time','datetime');
        $this->addColumn('delivery_messages','delete_denied','tinyint(1) DEFAULT 0');
        $this->addColumn('delivery_messages','deleted','tinyint(1) DEFAULT 0');
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