<?php
use Orm\Model;

class Model_Order extends Model
{
	protected static $_properties = array(
		'id',
		'hash',
		'client_id',
		'issuer_id',
		'status_id',
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
		$val->add_field('hash', 'Hash', 'required|max_length[255]');
		$val->add_field('client_id', 'Client Id', 'required|valid_string[numeric]');
		$val->add_field('issuer_id', 'Issuer Id', 'required');
		$val->add_field('status_id', 'Status Id', 'required|valid_string[numeric]');
		$val->add_field('company_id', 'Company Id', 'required|valid_string[numeric]');

		return $val;
	}

}
