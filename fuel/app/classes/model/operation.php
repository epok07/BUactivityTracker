<?php
use Orm\Model;

class Model_Operation extends Model
{
	protected static $_properties = array(
		'id',
		'summary',
		'order_id',
		'owner_id',
		'product_id',
		'quantity',
		'unit_id',
		'packagetype_id',
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
		$val->add_field('summary', 'Summary', 'required');
		$val->add_field('order_id', 'Order Id', 'required|valid_string[numeric]');
		$val->add_field('owner_id', 'Owner Id', 'required|valid_string[numeric]');
		$val->add_field('product_id', 'Product Id', 'required|valid_string[numeric]');
		$val->add_field('quantity', 'Quantity', 'required|valid_string[numeric]');
		$val->add_field('unit_id', 'Unit Id', 'required|valid_string[numeric]');
		$val->add_field('packagetype_id', 'Packagetype Id', 'required|valid_string[numeric]');

		return $val;
	}

}
