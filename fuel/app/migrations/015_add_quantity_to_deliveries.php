<?php

namespace Fuel\Migrations;

class Add_quantity_to_deliveries
{
	public function up()
	{
		\DBUtil::add_fields('deliveries', array(
			'quantity' => array('constraint' => 11, 'type' => 'int'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('deliveries', array(
			'quantity'

		));
	}
}