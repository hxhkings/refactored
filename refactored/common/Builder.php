<?php

/**
 * Forcing some useful methods
 * to be implemented adds integrity/solidity
 * to your code
 *
 * PHP version 7 
 */ 
	namespace App\Interfaces;


	interface Builder 
	{
		public function setId(int $id);
	
		public function getId(): int;

		public function setCreatedAt(string $createdAt);
		
		public function getCreatedAt(): string;

	}



?>