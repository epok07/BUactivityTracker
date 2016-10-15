<?php
use Orm\Model;

class Model_Company extends Model
{
	protected static $_properties = array(
		'id',
		'title',
		'description',
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
		'orders' => array(
		        'key_from' => 'id',
		        'model_to' => 'Model_Order',
		        'key_to' => 'company_id',
		        'cascade_save' => true,
		        'cascade_delete' => false,
		    )   
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('title', 'Title', 'required|max_length[255]');
		$val->add_field('description', 'Description', 'required');

		return $val;
	}

}
