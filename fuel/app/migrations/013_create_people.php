<?php

namespace Fuel\Migrations;

class Create_people
{
	public function up()
	{
		\DBUtil::create_table('people', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'firtname' => array('constraint' => 255, 'type' => 'varchar'),
			'lastname' => array('constraint' => 255, 'type' => 'varchar'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'tel' => array('constraint' => 255, 'type' => 'varchar'),
			'client_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('people');
	}
}