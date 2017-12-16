<?php

	namespace App\Config;

	/**
	 * Abstracting important data
	 * to protect the data
	 * and prevent indecent exposure
	 *
	 */
	abstract class DBConfig
	{

		protected $dsn = 'mysql:dbname=phptests;host=127.0.0.1';

		protected $user = 'hxhking';

		protected $password = 'hunter1hunter';

		protected $pdo;

		
	}





?>