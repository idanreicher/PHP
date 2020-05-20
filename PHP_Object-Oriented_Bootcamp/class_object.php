<?php

class Video
{
    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function play()
    {
        return $this->published ? "playing" : "not avaliable";
    }

    public function pause()
    {
        return $this->published ? "paused" : "";
    }
}

header('Content-Type:text/plain', true);
$intro = new Video;
$intro->published = true;
$intro->auothor = 'idan';
echo $intro->play() , PHP_EOL , $intro->pause() , PHP_EOL;

$video = new Video;
echo $video->play() , PHP_EOL , $video->pause() , PHP_EOL;
