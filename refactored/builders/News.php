<?php

/**
 * The News Class
 *
 * PHP version 7
 */
declare(strict_types = 1);

namespace App\Builders;

require("../vendor/autoload.php");

use \App\Interfaces\Builder;

/**
 * Holds the setters and getters
 * of data for/from the news table
 *
 */
class News implements Builder
{

	/**
	 * Setting parameters to private
	 * limits the exposure of parameter values
	 * to this class only
	 *
	 */
	private $title;

	use \App\Traits\BuilderTrait;

	/**
	 *
	 * Sets the title
	 * @param string $title
	 * @return object $this object
	 */
	public function setTitle(string $title)
	{
		$this->title = $title;

		return $this;
	}

	/**
	 *
	 * Gets the title
	 * @param void
	 * @return string $title
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	
}