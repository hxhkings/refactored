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


/**
 * Holds the same setters and getters
 * of data for/from the comment 
 * and news table
 *
 */
 trait BuilderTrait
 {
 	/**
	 * Setting parameters to private
	 * limits the exposure of parameter values
	 * to this class only
	 *
	 */
 	private $id, $body, $createdAt;

 	/**
	 *
	 * Sets the id
	 * @param int $id
	 * @return object $this object
	 */
 	public function setId(int $id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 *
	 * Gets the id
	 * @param void
	 * @return int $id
	 */
	public function getId(): int
	{
		
		return $this->id;
	}

	/**
	 *
	 * Sets the body
	 * @param string $body
	 * @return object $this object
	 */
	public function setBody(string $body)
	{
		$this->body = $body;

		return $this;
	}

	/**
	 *
	 * Gets the body
	 * @param void
	 * @return string $body
	 */
	public function getBody(): string
	{
		return $this->body;
	}

	/**
	 *
	 * Sets the createdAt
	 * @param string $createdAt
	 * @return object $this object
	 */
	public function setCreatedAt(string $createdAt)
	{
		$this->createdAt = $createdAt;

		return $this;
	}

	/**
	 *
	 * Gets the createdAt
	 * @param void
	 * @return string $createdAt
	 */
	public function getCreatedAt(): string
	{
		return $this->createdAt;
	}
 }





?>