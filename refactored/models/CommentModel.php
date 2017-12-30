<?php
	
	/**
	 * The Comment Model
	 *
	 * PHP version 7
	 */
	declare(strict_types = 1);

	namespace App\Models;

	/**
	 * Holds the functions
	 * that manipulates the comment table
	 *
	 */
	class CommentModel extends DB 
	{	
		/**
		 *
		 * @var string name of the model
		 *
		 */
		private static $name = 'comment';

		use \App\Traits\ModelTrait;
	}


?>