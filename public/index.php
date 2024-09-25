<?php

require_once __DIR__ . '/../src/VideoInterface.php';
require_once __DIR__ . '/../src/AbstractVideo.php';
require_once __DIR__ . '/../src/YouTubeVideo.php';
require_once __DIR__ . '/../src/VimeoVideo.php';

// Create 5 YouTube video previews
$youtubeVideos = [
    new YouTubeVideo("YouTube Video 1", "dQw4w9WgXcQ"),
    new YouTubeVideo("YouTube Video 2", "2Vv-BfVoq4g"),
    new YouTubeVideo("YouTube Video 3", "RgKAFK5djSk"),
    new YouTubeVideo("YouTube Video 4", "JGwWNGJdvx8"),
    new YouTubeVideo("YouTube Video 5", "fRh_vgS2dFE"),
];

// Create 5 Vimeo video previews
$vimeoVideos = [
    new VimeoVideo("Vimeo Video 1", "76979871"),
    new VimeoVideo("Vimeo Video 2", "22439234"),
    new VimeoVideo("Vimeo Video 3", "54283542"),
    new VimeoVideo("Vimeo Video 4", "101451144"),
    new VimeoVideo("Vimeo Video 5", "126220786"),
];

// Render the videos
foreach ($youtubeVideos as $video) {
    echo '<h3>' . $video->getName() . '</h3>';
    echo $video->getEmbedCode();
}

foreach ($vimeoVideos as $video) {
    echo '<h3>' . $video->getName() . '</h3>';
    echo $video->getEmbedCode();
}
