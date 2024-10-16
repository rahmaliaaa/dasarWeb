<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/"; 
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
    $maxsize = 5 * 1024 * 1024; // 5MB

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah.<br>";
            $thumbnailPath = $targetdir . "thumbnail_" . basename($_FILES["myfile"]["name"]);
            createThumbnail($targetfile, $thumbnailPath, 200);
            echo '<img src="' . $thumbnailPath . '" alt="Thumbnail" /><br>';
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}

// Fungsi untuk membuat thumbnail
function createThumbnail($source, $destination, $width) {
    list($originalWidth, $originalHeight) = getimagesize($source);
    $height = ($originalHeight / $originalWidth) * $width;

    // Membaca gambar sesuai format
    switch (strtolower(pathinfo($source, PATHINFO_EXTENSION))) {
        case 'jpg':
        case 'jpeg':
            $sourceImage = imagecreatefromjpeg($source);
            break;
        case 'png':
            $sourceImage = imagecreatefrompng($source);
            break;
        case 'gif':
            $sourceImage = imagecreatefromgif($source);
            break;
        default:
            return;
    }

    // Membuat dan menyimpan thumbnail
    $thumbnail = imagecreatetruecolor($width, $height);
    imagecopyresampled($thumbnail, $sourceImage, 0, 0, 0, 0, $width, $height, $originalWidth, $originalHeight);
    
    // Menyimpan gambar berdasarkan format
    switch (strtolower(pathinfo($source, PATHINFO_EXTENSION))) {
        case 'jpg':
        case 'jpeg':
            imagejpeg($thumbnail, $destination);
            break;
        case 'png':
            imagepng($thumbnail, $destination);
            break;
        case 'gif':
            imagegif($thumbnail, $destination);
            break;
    }
    // Menghancurkan gambar untuk menghemat memori
    imagedestroy($sourceImage);
    imagedestroy($thumbnail);
}