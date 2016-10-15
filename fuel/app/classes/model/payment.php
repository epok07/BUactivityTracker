<?php
use Orm\Model;

class Model_Payment extends Model
{
	protected static $_properties = array(
		'id',
		'amount',
		'client_id',
		'order_id',
		'summary',
		'status_id',
		'bank_id',
		'company_id',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('amount', 'Amount', 'required');
		$val->add_field('client_id', 'Client Id', 'required|valid_string[numeric]');
		$val->add_field('order_id', 'Order Id', 'required|valid_string[numeric]');
		$val->add_field('summary', 'Summary', 'required');
		$val->add_field('status_id', 'Status Id', 'required|valid_string[numeric]');
		$val->add_field('bank_id', 'Bank Id', 'required|valid_string[numeric]');
		$val->add_field('company_id', 'Company Id', 'required|valid_string[numeric]');

		return $val;
	}

}
