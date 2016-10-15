Install.md 

This is a prototype of the project SODISNI built with FuelPHP 1.7.3

To install the app you need to unzip the archive file into your ##www## OR #htdocs# folder 
depending on your environment, then create a new DB, named : "sodisnidb" and run the 'sodisnidb.sql'.
Finaly you need grant privileges to a user using the same parmeter as the ones dified in the 
__/fuel/app/config/development/db.php__

	return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=sodisnidb',
			'username'   => 'sodisni',
			'password'   => 'Eur3k@',
			),
		),
	);

here, Username : sodisni  and Password : Eur3k@   

Happy Hacking !!!