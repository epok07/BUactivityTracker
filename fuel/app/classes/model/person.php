<?php
use Orm\Model;

class Model_Person extends Model
{
	protected static $_properties = array(
		'id',
		'firtname',
		'lastname',
		'email',
		'tel',
		'client_id',
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

	protected static $_belongs_to = array(
		'client' 
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('firtname', 'Firtname', 'required|max_length[255]');
		$val->add_field('lastname', 'Lastname', 'required|max_length[255]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('tel', 'Tel', 'required|max_length[255]');
		$val->add_field('client_id', 'Client Id', 'required|valid_string[numeric]');

		return $val;
	}

}
