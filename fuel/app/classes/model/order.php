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

	protected static $_belongs_to = array(
		'company' => array(
			 'key_from' => 'company_id',
		        'model_to' => 'Model_Company',
		        'key_to' => 'id',
		        'cascade_save' => true,
		        'cascade_delete' => false,
		),
		'client' => array(
			 'key_from' => 'client_id',
		        'model_to' => 'Model_Client',
		        'key_to' => 'id',
		        'cascade_save' => true,
		        'cascade_delete' => false,
		),
	);

	



	protected static $_has_many = array(
		'operations' => array(
				'key_from'       => 'id',
				'model_to'       => 'Model_Operation',
				'key_to'         => 'order_id',
				'cascade_save'   => true,
				'cascade_delete' => false,
		    ) ,
		'deliveries' => array(
				'key_from'       => 'id',
				'model_to'       => 'Model_Delivery',
				'key_to'         => 'order_id',
				'cascade_save'   => true,
				'cascade_delete' => false,
		    ) ,
	   //  'payments' => array(
				// 'key_from'       => 'id',
				// 'model_to'       => 'Model_Payment',
				// 'key_to'         => 'order_id',
				// 'cascade_save'   => true,
				// 'cascade_delete' => false,
	   //  )      
	);

	public static function struuid($entropy = false)
    {
        $s=uniqid("",$entropy);
        $num= hexdec(str_replace(".","",(string)$s));
        $index = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $base= strlen($index);
        $out = '';
            for($t = floor(log10($num) / log10($base)); $t >= 0; $t--) {
                $a = floor($num / pow($base,$t));
                $out = $out.substr($index,$a,1);
                $num = $num-($a*pow($base,$t));
            }
        return $out;
    }

}
