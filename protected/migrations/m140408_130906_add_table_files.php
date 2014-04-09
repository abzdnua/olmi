<?php

class m140408_130906_add_table_files extends CDbMigration
{
	public function up()
	{
        $this->createTable('files',array(
            'id'=>'varchar(15) NOT NULL PRIMARY KEY',

            'filename'  =>'varchar(500)',
            'is_used'   =>'tinyint(1)'
        ));
	}

	public function down()
	{
        $this->dropTable('files');
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