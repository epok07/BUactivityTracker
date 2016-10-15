<?php

namespace Fuel\Migrations;

class Create_deliverytours
{
	public function up()
	{
		\DBUtil::create_table('deliverytours', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'product_id' => array('constraint' => 11, 'type' => 'int'),
			'quantity' => array('constraint' => 11, 'type' => 'int'),
			'packagetype_id' => array('constraint' => 11, 'type' => 'int'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'order_id' => array('constraint' => 11, 'type' => 'int'),
			'summary' => array('type' => 'text'),
			'status_id' => array('constraint' => 11, 'type' => 'int'),
			'company_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('deliverytours');
	}
}