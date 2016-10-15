<?php

namespace Fuel\Migrations;

class Create_packagetypes
{
	public function up()
	{
		\DBUtil::create_table('packagetypes', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'quantity' => array('constraint' => 11, 'type' => 'int'),
			'product_id' => array('constraint' => 11, 'type' => 'int'),
			'baseunit_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('packagetypes');
	}
}