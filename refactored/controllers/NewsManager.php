<?php

/**
 * The NewsManager Utility
 *
 * PHP version 7
 */
declare(strict_types = 1);

namespace App\Controllers;

require("../vendor/autoload.php");

use \App\Builders\News;
use \App\Interfaces\Manager;

/**
 * Holds the functions
 * that manipulate the news table
 */
class NewsManager implements Manager
{


	use \App\Traits\InstanceTrait;

	/**
	 * List all news
	 *
	 * @param void
	 * @return array List of all 
	 * created news instances
	 */
	public function list()
	{
		
		$rows = self::$db->select('SELECT * FROM `news`');

		$news = [];

		foreach($rows as $row) {
			$n = new News();
			$news[] = $n->setId((int)$row['id'])
			  ->setTitle($row['title'])
			  ->setBody($row['body'])
			  ->setCreatedAt($row['created_at']);
		}

		return $news;
	}

	/**
	 * Add a record in news table
	 *
	 * @param string $title title of the news
	 * @param string $body body of the news
	 * @return string id of the 
	 * last inserted row
	 */
	public function addNews(string $title, string $body)
	{
		
		$sql = "INSERT INTO `news` (`title`, `body`, `created_at`) 
				VALUES('". $title . "','" . $body . "','" . date('Y-m-d') . "')";
		self::$db->exec($sql);
		return self::$db->lastInsertId($sql);
	}

	/**
	 * Deletes a news, and also linked comments
	 *
	 * @param int $id news id
	 * @param object $manager which data to delete
	 * @return mixed returns FALSE or 0 
	 * if execution fails or the number 
	 * of affected rows if execution succeeds
	 *
	 */
	public function delete(int $id, Manager $manager)
	{
		$comments = $manager->list();
		$idsToDelete = [];

		foreach ($comments as $comment) {
			if ($comment->getNewsId() == $id) {
				$idsToDelete[] = $comment->getId();
			}
		}

		foreach($idsToDelete as $id) {
			$manager->delete($id);
		}

		
		$sql = "DELETE FROM `news` WHERE `id`=" . $id;
		return self::$db->exec($sql);
	}
}