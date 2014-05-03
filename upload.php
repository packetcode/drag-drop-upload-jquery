<?php
/** APP: Drag and Drop Image uploader with progress bar
    Website:packetcode.com
    Author: Krishna TEja G S
    Date: 3rd May 2014
***/

// an array of allowed extensions
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

//check if the file type is image and then extension
// store the files to upload folder
//echo '0' if there is an error
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "0";
  } else {
    $target = "upload/";
    move_uploaded_file($_FILES["file"]["tmp_name"], $target. $_FILES["file"]["name"]);
    echo  "upload/" . $_FILES["file"]["name"];
  }
} else {
  echo "0";
}