<?php
if(isset($_POST['imageData'])) {
    $imgData = str_replace('data:image/png;base64,', '', $_POST['imageData']);
    $imgData = str_replace(' ', '+', $imgData);
    $imgBinary = base64_decode($imgData);
    $imgName = time() . '.png';
    file_put_contents($imgName, $imgBinary);
    echo 'Image saved as ' . $imgName;
}
?>
