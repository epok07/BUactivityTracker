<?php

namespace Fuel\Migrations;

class Create_payments
{
	public function up()
	{
		\DBUtil::create_table('payments', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'amount' => array('constraint' => '15,3', 'type' => 'decimal'),
			'client_id' => array('constraint' => 11, 'type' => 'int'),
			'order_id' => array('constraint' => 11, 'type' => 'int'),
			'summary' => array('type' => 'text'),
			'status_id' => array('constraint' => 11, 'type' => 'int'),
			'bank_id' => array('constraint' => 11, 'type' => 'int'),
			'company_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('payments');
	}
}