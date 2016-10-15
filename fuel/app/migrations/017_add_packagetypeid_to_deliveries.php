<?php

namespace Fuel\Migrations;

class Add_packagetypeid_to_deliveries
{
	public function up()
	{
		\DBUtil::add_fields('deliveries', array(
			'packagetype_id' => array('constraint' => 11, 'type' => 'int'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('deliveries', array(
			'packagetype_id'

		));
	}
}