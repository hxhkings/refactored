<?php

/**
 * Separating similar traits on a different file
 * for better maintainability
 * and to be less prone from errors
 *
 * PHP version 7 
 */ 
 declare(strict_types = 1);

 namespace App\Traits;

 require("../vendor/autoload.php");

/*
 * The idea of separating this instanciation
 * into a trait makes it more convenient
 * to just use this trait in case
 * another class dependent on DB instance
 * is added in the future
 *
 *
 */

/*
 * Holds the private static $db variable\
 * and constructor function of each utility object
 */

 trait InstanceTrait
 {
 	/**
 	 * @var not needed since singleton
 	 * is omitted
 	 *
 	 * private static $instance = null;
 	 */

 	/**
 	 *
 	 * @var object holds DB instance
 	 */
 	private static $db; 


 	/**
 	 * Assigns PDO instance for DB Class
 	 * or assigns a DB Class to $db
 	 *
 	 * @param void
 	 * @return void
 	 */
 	public function __construct()
	{
		if ( __CLASS__ === 'App\Models\DB'){

			/**
			 * Using try/catch avoids
			 * indecent exposure of code errors
			 * on the client
			 *
			 */
			try{

				$this->pdo = new \PDO($this->dsn, $this->user, $this->password);

			} catch (PDOException $e) {
				
				exit($e->getMessage());
			}

		} else {
			
			self::$db = new \App\Models\DB;
		}


	}

	/**
	 |--------------------------------------------------
	 |					SINGLETON
	 |--------------------------------------------------
	 */
	/**
	 * A class' instantiation tightly coupled with it's
	 * method complicates unit testing.
	 *
	 * Adding the responsibility of instantiating
	 * itself to it's main responsibility
	 * violates the Single Responsibility Principle.
	 * 
	 * Singleton should be avoided for more convenient
	 * testing, maintainance
	 * and for better dependency flow analysis.
	 * 
	 * It's better to stick with dependency injection
	 * than using a singleton.
	 */	 

 	/*	
	 	public static function getInstance()
		{
			if (null === self::$instance) {
				$c = __CLASS__;
				self::$instance = new $c;
			}
			return self::$instance;
		} 
	*/
 }




?>