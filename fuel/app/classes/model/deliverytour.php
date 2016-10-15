<?php
use Orm\Model;

class Model_Deliverytour extends Model
{
	protected static $_properties = array(
		'id',
		'product_id',
		'delivery_id',
		'quantity',
		'packagetype_id',
		'user_id',
		'order_id',
		'summary',
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

	protected static $_belongs_to = array(
		'delivery' => array(
			 'key_from' => 'delivery_id',
		        'model_to' => 'Model_Delivery',
		        'key_to' => 'id',
		        'cascade_save' => true,
		        'cascade_delete' => false,
		),
		'product' => array(
			 'key_from' => 'product_id',
		        'model_to' => 'Model_Product',
		        'key_to' => 'id',
		        'cascade_save' => true,
		        'cascade_delete' => false,
		),
		'package' => array(
			 'key_from' => 'packagetype_id',
		        'model_to' => 'Model_Packagetype',
		        'key_to' => 'id',
		        'cascade_save' => true,
		        'cascade_delete' => false,
		),
		'status' => array(
			 'key_from' => 'status_id',
		        'model_to' => 'Model_Status',
		        'key_to' => 'id',
		        'cascade_save' => true,
		        'cascade_delete' => false,
		),
		'company' => array(
			 'key_from' => 'company_id',
		        'model_to' => 'Model_Company',
		        'key_to' => 'id',
		        'cascade_save' => true,
		        'cascade_delete' => false,
		),


	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('product_id', 'Product Id', 'required|valid_string[numeric]');
		$val->add_field('quantity', 'Quantity', 'required|valid_string[numeric]');
		$val->add_field('packagetype_id', 'Packagetype Id', 'required|valid_string[numeric]');
		$val->add_field('user_id', 'User Id', 'required|valid_string[numeric]');
		$val->add_field('order_id', 'Order Id', 'required|valid_string[numeric]');
		$val->add_field('summary', 'Summary', 'required');
		$val->add_field('status_id', 'Status Id', 'required|valid_string[numeric]');
		$val->add_field('company_id', 'Company Id', 'required|valid_string[numeric]');

		return $val;
	}

}
