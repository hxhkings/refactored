<?php
	
	/**
	 * The News Model
	 *
	 * PHP version 7
	 */
	declare(strict_types = 1);

	namespace App\Models;

	/**
	 * Holds the functions
	 * that manipulates the news table
	 *
	 */
	class NewsModel extends DB 
	{
		/**
		 *
		 * @var string name of the model
		 *
		 */
		private static $name = 'news';

		use \App\Traits\ModelTrait;
	}


?>