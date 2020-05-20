<?php

class Video
{
    private $type;
    private $duration;
    protected $published = false;
    private $title;
    private $playStatus;

   
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(String $title)
    {
        $this->title = $title;
    }

    private function getPublished()
    {
        return $this->published;
    }

    public function setPublished(bool $state)
    {
        $this->published = $state;
    }

    public function play()
    {
        if ($this->getPublished()) {
            $this->playStatus = true;
            return "playing";
        }
        return  "not avaliable";
    }

    public function pause()
    {
        return $this->playStatus ? "paused" : "";
    }
}

 header('Content-Type:text/plain', true);
$intro = new Video;
$intro->setPublished(true);

$intro->setTitle("set title");
echo $intro->getTitle(), PHP_EOL;
echo $intro->play(), PHP_EOL, $intro->pause();
