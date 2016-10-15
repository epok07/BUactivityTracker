<?php
use Orm\Model;

class Model_Activity extends Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'action',
		'entity',
		'payload',
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
		$val->add_field('user_id', 'User Id', 'required|valid_string[numeric]');
		$val->add_field('action', 'Action', 'required|max_length[255]');
		$val->add_field('entity', 'Entity', 'required|max_length[255]');
		$val->add_field('payload', 'Payload', 'required');

		return $val;
	}

}
