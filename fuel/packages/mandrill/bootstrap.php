<?php
/**
 * Postmark Email Delivery library for Fuel
 *
 * @package		Mandrill
 * @version		0.1
 * @author      Dan Matthews (dan@danmatthews.me)
 * @link		https://github.com/danmatthews/mandrill-fuel
 *
 */
Autoloader::add_classes(array(
	'Mandrill' => __DIR__.'/classes/Mandrill.php',
	'Mandrill_Messages' => __DIR__.'/classes/Messages.php',
	'Mandrill_Rejects' => __DIR__.'/classes/Rejects.php',
	'Mandrill_Senders' => __DIR__.'/classes/Senders.php',
	'Mandrill_Tags' => __DIR__.'/classes/Tags.php',
	'Mandrill_Templates' => __DIR__.'/classes/Templates.php',
	'Mandrill_Urls' => __DIR__.'/classes/Urls.php',
	'Mandrill_Users' => __DIR__.'/classes/Users.php',
	'Mandrill_Webhooks' => __DIR__.'/classes/Webhooks.php',
	'Mandrill_Error' => __DIR__.'/classes/Exceptions.php',
	'Mandrill_HttpError' => __DIR__.'/classes/Exceptions.php',
	'Mandrill_ValidationError' => __DIR__.'/classes/Exceptions.php',
	'Mandrill_Invalid_Key' => __DIR__.'/classes/Exceptions.php',
	'Mandrill_Unknown_Template' => __DIR__.'/classes/Exceptions.php',
	'Mandrill_Invalid_Tag_Name' => __DIR__.'/classes/Exceptions.php',
	'Mandrill_Invalid_Reject' => __DIR__.'/classes/Exceptions.php',
	'Mandrill_Unknown_Sender' => __DIR__.'/classes/Exceptions.php',
	'Mandrill_Unknown_Url' => __DIR__.'/classes/Exceptions.php',
	'Mandrill_Invalid_Template' => __DIR__.'/classes/Exceptions.php',
	'Mandrill_Unknown_Webhook' => __DIR__.'/classes/Exceptions.php',
));