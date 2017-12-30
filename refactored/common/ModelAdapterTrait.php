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
 * The idea of separating this model adapter
 * into a trait makes it more convenient
 * to just use this trait in case
 * another class dependent on a certain model
 * is added in the future
 *
 *
 */


 trait ModelAdapterTrait
 {
 	/**
 	 * @var not needed since singleton
 	 * is omitted
 	 *
 	 * private static $instance = null;
 	 */


 	

	public function select(\App\Models\DB $model)
	{
		$name = $model->getName();
		return $model->select("SELECT * FROM `$name`");
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