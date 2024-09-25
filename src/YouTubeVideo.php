<?php

class YouTubeVideo extends AbstractVideo
{
    private $videoId;

    public function __construct(string $name, string $videoId)
    {
        parent::__construct($name, "YouTube");
        $this->videoId = $videoId;
    }

    // Implement the abstract method getEmbedCode()
    public function getEmbedCode(): string
    {
        return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $this->videoId . '" frameborder="0" allowfullscreen></iframe>';
    }
}