<?php

class VimeoVideo extends AbstractVideo
{
    private $videoId;

    public function __construct(string $name, string $videoId)
    {
        parent::__construct($name, "Vimeo");
        $this->videoId = $videoId;
    }

    // Implementing the abstract method to get the embed code
    public function getEmbedCode(): string
    {
        return '<iframe width="560" height="315" src="https://player.vimeo.com/video/' . $this->videoId . '" frameborder="0" allowfullscreen></iframe>';
    }
}