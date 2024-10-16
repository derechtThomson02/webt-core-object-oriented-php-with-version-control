<?php

// Set variables for the <head> content
$title = "Video Previews";
$stylesheets = [
    "style.css",
    "another-style.css", // Example of adding another stylesheet
];

$metaTags = [
    '<meta name="description" content="A gallery of video previews from YouTube and Vimeo.">',
    '<meta name="keywords" content="videos, YouTube, Vimeo, gallery">',
    '<meta name="author" content="Your Name">',
];

// Include necessary files (without autoloading)
require_once __DIR__ . '/../src/VideoInterface.php';
require_once __DIR__ . '/../src/AbstractVideo.php';
require_once __DIR__ . '/../src/YouTubeVideo.php';
require_once __DIR__ . '/../src/VimeoVideo.php';

// YouTube video entries
$youtubeVideos = [
    new YouTubeVideo("YouTube Video 1", "dQw4w9WgXcQ"),
    new YouTubeVideo("YouTube Video 2", "2Vv-BfVoq4g"),
    new YouTubeVideo("YouTube Video 3", "RgKAFK5djSk"),
    new YouTubeVideo("YouTube Video 4", "JGwWNGJdvx8"),
    new YouTubeVideo("YouTube Video 5", "fRh_vgS2dFE"),
];

// Vimeo video entries
$vimeoVideos = [
    new VimeoVideo("Vimeo Video 1", "76979871"),
    new VimeoVideo("Vimeo Video 2", "22439234"),
    new VimeoVideo("Vimeo Video 3", "54283542"),
    new VimeoVideo("Vimeo Video 4", "101451144"),
    new VimeoVideo("Vimeo Video 5", "126220786"),
];

// Merge YouTube and Vimeo videos into one list
$videos = array_merge($youtubeVideos, $vimeoVideos);

// Start output buffering
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($title); ?></title>

    <?php
    // Dynamically add meta tags
    foreach ($metaTags as $metaTag) {
        echo $metaTag . "\n";
    }

    // Dynamically include stylesheets
    foreach ($stylesheets as $stylesheet) {
        echo '<link rel="stylesheet" href="' . htmlspecialchars($stylesheet) . '">' . "\n";
    }
    ?>
</head>
<body>
<header>
    <h1>BooTube</h1>
</header>
<main>
    <section class="video-list">
        <?php
        // Render the videos in a loop
        foreach ($videos as $video) {
            echo '<div class="video-item">';
            echo '<h3>' . htmlspecialchars($video->getName()) . '</h3>';
            echo '<p>Source: ' . htmlspecialchars($video->getSource()) . '</p>';
            echo $video->getEmbedCode();  // Outputs the embed code
            echo '</div>';
        }
        ?>
    </section>
</main>
</body>
</html>

<?php
// Flush the output buffer and end the script
ob_end_flush();
?>
