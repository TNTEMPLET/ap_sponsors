<?php
    $folder = 'path_to_your_folder'; // Update this with the path to your folder
    $files = scandir($folder);
    $imageFiles = array_filter($files, function ($file) {
        return preg_match('/\.(jpg|jpeg|png|gif|svg)$/i', $file);
    });
?>
