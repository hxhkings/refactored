<?php

/**
 * The CommentManager Controller
 *
 * PHP version 7
 */
declare(strict_types = 1);

namespace App\Controllers;

require("../vendor/autoload.php");


use \App\Interfaces\Manager;

/**
 * Holds the functions
 * that manipulate the comment table
 */
class CommentManager implements Manager
{
	
	use \App\Traits\ModelAdapterTrait;

	/**
	 * List all comments
	 *
	 * @param void
	 * @return array List of all 
	 * created comment instances
	 */
	public function list(\App\Interfaces\Builder $builder, array $row)
	{
		
				
		return $builder->setId((int)$row['id'])
			  ->setBody($row['body'])
			  ->setCreatedAt($row['created_at'])
			  ->setNewsId((int)$row['news_id']);
		
		
	}

	/**
	 * Add a record in comment table
	 *
	 * @param string $body body of the comment
	 * @param int $newsId id of the news
	 * the comment belongs to
	 *
	 * @return string id of the 
	 * last inserted row
	 */
	public function addCommentForNews(string $body, int $newsId)
	{
		
		$sql = "INSERT INTO `comment` (`body`, `created_at`, `news_id`) 
				VALUES('". $body . "','" . date('Y-m-d') . "','" . $newsId . "')";
		self::$db->exec($sql);
		return self::$db->lastInsertId($sql);
	}

	/**
	 * Deletes a comment
	 *
	 * @param int $id comment id
	 * @param object $manager which data to delete (extendable)
	 * @return mixed returns FALSE or 0 
	 * if execution fails or the number 
	 * of affected rows if execution succeeds
	 *
	 */
	public function delete(int $id, Manager $manager = NULL)
	{
		
		$sql = "DELETE FROM `comment` WHERE `id`=" . $id;
		return self::$db->exec($sql);
	}
}