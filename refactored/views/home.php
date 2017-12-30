<?php 

namespace App;

 




$newsArray = [];
$commentArray = [];
$newsRows = (new Controllers\NewsManager())->select();
$commentRows = (new Controllers\CommentManager())->select();

foreach ($newsRows as $row) {
	$newsArray[] = (new Controllers\NewsManager())->list(new \App\Builders\News, $row);
}

foreach ($commentRows as $row) {
	$commentArray[] = (new Controllers\CommentManager())->list(new \App\Builders\Comment, $row);
}


foreach ($newsArray as $news) {

	echo ('<div class="news col-md-4 col-xs-12 col-sm-6 text-center" >{{ open }}<strong>' . $news->getTitle() . "</strong>{{ close }}<br><br>");
	echo($news->getBody() . '<hr><ul class="text-justify">');

	foreach ($commentArray as $comment) {
		if ($comment->getNewsId() == $news->getId()) {
			echo("<li><em>{{ comment }}" . $comment->getId() . "</em> : " . $comment->getBody() . "\n</li>");
		}
	}
	echo "</ul></div>";
}




?>