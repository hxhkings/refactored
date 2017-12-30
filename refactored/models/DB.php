<?php


/**
 * The DB Utility
 *
 * PHP version 7
 */
declare(strict_types = 1);

namespace App\Models;

require("../vendor/autoload.php");

use \App\Config\DBConfig;

/**
 * DB Class holding 
 * PDO commands
 *
 */
class DB extends DBConfig
{

	/**
 	 * Assigns PDO instance for DB Class
 	 *
 	 * @param void
 	 * @return void
 	 */
 	public function __construct()
	{	

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


	}

	/**
	 * Queries the database
	 *
	 * @param string $sql SQL command
	 * @return object fetched data 
	 * from the database
	 *
	 */
	public function select(string $sql)
	{
		$sth = $this->pdo->query($sql);
		return $sth->fetchAll();
	}
	
	/**
	 * Executes the SQL command
	 *
	 * @param string $sql SQL command
	 * @return mixed returns FALSE or 0 
	 * if execution fails or the number 
	 * of affected rows if execution succeeds
	 *
	 */
	public function exec(string $sql)
	{
		return $this->pdo->exec($sql);
	}

	/**
	 * Gets the id of the 
	 * last inserted row
	 *
	 * @param void
	 * @return string id of the 
	 * last inserted row
	 */
	public function lastInsertId()
	{
		return $this->pdo->lastInsertId();
	}
}