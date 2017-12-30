<?php
	
/**
 * Forcing some useful methods
 * to be implemented adds integrity/solidity
 * to your code
 *
 * PHP version 7 
 */ 
	namespace App\Interfaces;


	interface Manager
	{
		public function list(Builder $builder, array $row);
		
		public function delete(int $id, Manager $manager = NULL);
	}







?>
