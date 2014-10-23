<?php
//connect to database
mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_selectdb("InBe-Prototype") or die(mysql_error());

//file properties
$file = $_FILES['image']['tempName'];
if (!isset($file)) {
    echo "Please select an image";
} else {
    $image = addslashes(file_get_contents($_FILES['image']['tempName']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tempName']);
    
    if ($image_size==FALSE) {
        echo "That's not an image";
    } else {
    }
}



?>
