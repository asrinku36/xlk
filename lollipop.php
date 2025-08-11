<?php

function getTitle() {
    $defaultTitle = 'XXX Sex';
    if (isset($_GET['t'])) {
        return htmlspecialchars($_GET['t']);
    } else {
        return $defaultTitle; 
    }
}

function getImage() {
    $defaultImage = 'https://xlek.netlify.app/picture/default_image.jpg';
    if (isset($_GET['p'])) {
        $imageName = strtolower(htmlspecialchars($_GET['p'])) . '.jpg';
        $imagePath = 'picture/' . $imageName;
        
        if (file_exists($imagePath)) {
            return $imagePath;
        } else {
            return $defaultImage; 
        }
    } else {
        return $defaultImage; 
    }
}

$title = getTitle();
$image = getImage();
?>
