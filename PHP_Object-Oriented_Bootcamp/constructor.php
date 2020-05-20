<?php

class Video
{
    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function __construct(string $type = null, float $duration = null, string $title = null)
    {
        $this->type = $type;
        $this->duration = $duration;
        $this->title = $title;
    }

    public function play()
    {
        return $this->published ? "playing" : "not avaliable";
    }

    public function pause()
    {
        return $this->published ? "paused" : "";
    }

    public function __destruct()
    {
        print_r(__CLASS__ . "destoyed");
    }
}

// header('Content-Type:text/plain', true);
$intro = new Video;
var_dump($intro);
$intro->published = true;
$intro->auothor = 'idan';
echo $intro->play() , PHP_EOL , $intro->pause() , PHP_EOL;

$video = new Video("mp5", 3.5, 'tite');
var_dump($video);
echo $video->play() , PHP_EOL , $video->pause() , PHP_EOL;
