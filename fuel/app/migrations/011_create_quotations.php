<?php

namespace Fuel\Migrations;

class Create_quotations
{
	public function up()
	{
		\DBUtil::create_table('quotations', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'price' => array('constraint' => '10,2', 'type' => 'decimal'),
			'product_id' => array('constraint' => 11, 'type' => 'int'),
			'owner_id' => array('constraint' => 11, 'type' => 'int'),
			'company_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('quotations');
	}
}