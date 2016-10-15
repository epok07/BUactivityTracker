<?php

namespace Fuel\Migrations;

class Create_activities
{
	public function up()
	{
		\DBUtil::create_table('activities', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'action' => array('constraint' => 255, 'type' => 'varchar'),
			'entity' => array('constraint' => 255, 'type' => 'varchar'),
			'payload' => array('type' => 'longtext'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('activities');
	}
}