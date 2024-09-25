<?php

// Define the VideoInterface in PHP
interface VideoInterface
{
    /**
     * Get the name of the video.
     *
     * @return string The name of the video.
     */
    public function getName(): string;

    /**
     * Get the source or platform of the video (e.g., "YouTube").
     *
     * @return string The source of the video.
     */
    public function getSource(): string;

    /**
     * Get the HTML code for embedding the video.
     *
     * @return string The embed HTML code.
     */
    public function getEmbedCode(): string;
}

