<?php

namespace Fuel\Migrations;

class Create_operations
{
	public function up()
	{
		\DBUtil::create_table('operations', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'summary' => array('type' => 'text'),
			'order_id' => array('constraint' => 11, 'type' => 'int'),
			'owner_id' => array('constraint' => 11, 'type' => 'int'),
			'product_id' => array('constraint' => 11, 'type' => 'int'),
			'quantity' => array('constraint' => 11, 'type' => 'int'),
			'unit_id' => array('constraint' => 11, 'type' => 'int'),
			'packagetype_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('operations');
	}
}