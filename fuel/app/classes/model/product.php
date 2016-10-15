<?php
use Orm\Model;

class Model_Product extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'price',
		'description',
		'metadata',
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
		'operation' => array(
			 'key_from' => 'operation_id',
		        'model_to' => 'Model_Operation',
		        'key_to' => 'id',
		        'cascade_save' => true,
		        'cascade_delete' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('price', 'Price', 'required');
		$val->add_field('description', 'Description', 'required');
		$val->add_field('metadata', 'Metadata', 'required');

		return $val;
	}

}
