<?php

namespace Fuel\Migrations;

class Create_deliveries
{
	public function up()
	{
		\DBUtil::create_table('deliveries', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'hash' => array('constraint' => 255, 'type' => 'varchar'),
			'client_id' => array('constraint' => 11, 'type' => 'int'),
			'order_id' => array('constraint' => 11, 'type' => 'int'),
			'issuer_id' => array('type' => 'int'),
			'status_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('deliveries');
	}
}