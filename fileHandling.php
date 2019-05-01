<?php


function checkFile($inputKey, $AllowedTypes) {
    if ($_FILES[$inputKey]['error'] > 0) {
        echo "<h2 center>We could not complete the upload, please try again</h2>";
        exit();
    } elseif (!in_array($_FILES[$inputKey] ['type'], $AllowedTypes)) {
        echo "<h2>We only accept xml files, please try again</h2>";
        exit();
    } else if (!move_uploaded_file($_FILES[$inputKey]['tmp_name'], 'Uploads/uploadedFile.xml')) {
        echo "<h2 center>We could not complete the upload. There was a problem in handling your file. Please try again</h2>";
    } else {
        header("Location: Index.php");
    }
}
