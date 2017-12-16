<?php 

namespace App;

$newsManager = new Controllers\NewsManager;
$commentManager = new Controllers\CommentManager;


foreach ($newsManager->list() as $news) {
	echo ('<div class="news col-md-4 col-xs-12 col-sm-6 text-center" >{{ open }}<strong>' . $news->getTitle() . "</strong>{{ close }}<br><br>");
	echo($news->getBody() . '<hr><ul class="text-justify">');
	foreach ($commentManager->list() as $comment) {
		if ($comment->getNewsId() == $news->getId()) {
			echo("<li><em>{{ comment }}" . $comment->getId() . "</em> : " . $comment->getBody() . "\n</li>");
		}
	}
	echo "</ul></div>";
}


$c = $commentManager->list();

?>