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

	trait ModelTrait 
	{

		public function __construct()
		{
			parent::__construct();
		}

		/**
		 * List all comments
		 *
		 * @param void
		 * @return array List of all 
		 * created comment instances
		 */
		public function getName(): string
		{
			return self::$name;
		}
	}




?>