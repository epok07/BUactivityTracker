<?php

namespace Fuel\Migrations;

class Add_deliveryid_to_deliverytours
{
	public function up()
	{
		\DBUtil::add_fields('deliverytours', array(
			'delivery_id' => array('constraint' => 11, 'type' => 'int'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('deliverytours', array(
			'delivery_id'

		));
	}
}