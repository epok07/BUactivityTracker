<?php

namespace Fuel\Migrations;

class Create_expenses
{
	public function up()
	{
		\DBUtil::create_table('expenses', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'amount' => array('constraint' => '15,3', 'type' => 'decimal'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'owner_id' => array('constraint' => 11, 'type' => 'int'),
			'summary' => array('type' => 'text'),
			'status_id' => array('constraint' => 11, 'type' => 'int'),
			'paymentcategory_id' => array('constraint' => 11, 'type' => 'int'),
			'bank_id' => array('constraint' => 11, 'type' => 'int'),
			'company_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('expenses');
	}
}