<?php
use Orm\Model;

class Model_Client extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'city',
		'country',
		'address',
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

	

	protected static $_has_many = array(
		'contacts' => array(
				'key_from'       => 'id',
				'model_to'       => 'Model_Person',
				'key_to'         => 'client_id',
				'cascade_save'   => true,
				'cascade_delete' => false,
		    ),
		'orders' => array(
				'key_from'       => 'id',
				'model_to'       => 'Model_Client',
				'key_to'         => 'client_id',
				'cascade_save'   => true,
				'cascade_delete' => false,
		    ),

	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('city', 'City', 'required|max_length[255]');
		$val->add_field('country', 'Country', 'required|max_length[255]');
		$val->add_field('address', 'Address', 'required');

		return $val;
	}

}
