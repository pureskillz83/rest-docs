<?php
chdir(__DIR__);
// execute the autoloader
require 'vendor/autoload.php';

// define the files we want to scan
$restRouteFiles = [
    // TAG MODULE
    // '../ambix-server/module/Tag/src/Tag/V1/Rest/Tag/TagResource.php',
    // MEDIA MODULE
    '../ambix-server/module/Media/src/Media/V1/Rest/Media/MediaResource.php',
    '../ambix-server/module/Media/src/Media/V1/Rest/Media/MediaResource.php',
    '../ambix-server/module/Media/src/Media/V1/Rest/MediaDirectory/MediaDirectoryResource.php',
];

echo '<pre>';
$details = [];
foreach ($restRouteFiles as $routeFile) {
    // attempt to load in the file
    if (!file_exists($routeFile)) throw new \Exception('Unable to load file: '.$routeFile);
    // $token = token_get_all(file_get_contents($routeFile));
    //print_r ($token);
    //exit;
    require_once $routeFile;

}

#
print_r ($restRouteFiles);