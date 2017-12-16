<?php

/**
 * The Comment Class
 *
 * PHP version 7
 */
declare(strict_types = 1);

namespace App\Builders;

require("../vendor/autoload.php");

use \App\Interfaces\Builder;

/**
 * Holds the setters and getters
 * of data for/from the comment table
 *
 */
class Comment implements Builder
{
	/**
	 * Setting parameters to private
	 * limits the exposure of parameter values
	 * to this class only
	 *
	 */
	private $newsId;

	use \App\Traits\BuilderTrait;

	/**
	 *
	 * Gets the newsId
	 * @param void
	 * @return string $newsId
	 */
	public function getNewsId(): int
	{
		return $this->newsId;
	}

	/**
	 *
	 * Sets the newsId
	 * @param int $newsId
	 * @return object $this object
	 */
	public function setNewsId(int $newsId)
	{
		$this->newsId = $newsId;

		return $this;
	}
}