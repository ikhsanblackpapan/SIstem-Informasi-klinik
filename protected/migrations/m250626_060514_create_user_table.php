<?php

class m250626_060514_create_user_table extends CDbMigration
{
	public function up()
{
    $this->createTable('user', array(
        'id' => 'pk',
        'username' => 'string NOT NULL',
        'password' => 'string NOT NULL',
        'role' => 'string NOT NULL', // admin, petugas, dokter, kasir
        'pegawai_id' => 'integer',
        'created_at' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
    ));
    
    // Insert admin default
    $this->insert('user', array(
        'username' => 'admin',
        'password' => md5('admin123'),
        'role' => 'admin',
        'created_at' => new CDbExpression('NOW()'),
    ));
}

public function down()
{
    $this->dropTable('user');
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