<?php

class Model_User extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'username',
		'password',
		'group',
		'email',
		'last_login',
		'login_hash',
		'profile_fields',
		'created_at',
		'updated_at',
	);

	protected static $_has_many = array(
		'payments' => array(
		        'key_from' => 'id',
		        'model_to' => 'Model_Payment',
		        'key_to' => 'author_id',
		        'cascade_save' => true,
		        'cascade_delete' => false,
		    ), 
		'expenses' => array(
		        'key_from' => 'id',
		        'model_to' => 'Model_Expense',
		        'key_to' => 'owner_id',
		        'cascade_save' => true,
		        'cascade_delete' => false,
		    ), 
		// 'books' => array(
		//         'key_from' => 'id',
		//         'model_to' => 'Model_Book',
		//         'key_to' => 'owner_id',
		//         'cascade_save' => true,
		//         'cascade_delete' => false,
		//     ), 
		// 'testamonials' => array(
		//         'key_from' => 'id',
		//         'model_to' => 'Model_Testamonial',
		//         'key_to' => 'owner_id',
		//         'cascade_save' => true,
		//         'cascade_delete' => false,
		//     ), 
		);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'users';

}
