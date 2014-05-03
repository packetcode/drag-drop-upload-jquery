<?php
/** APP: Drag and Drop Image uploader with progress bar
    Website:packetcode.com
    Author: Krishna TEja G S
    Date: 3rd May 2014
***/

	$str = file_get_contents('php://input');
	$filename = md5(time()).'.jpg';
	file_put_contents('upload/'.$filename,$str);
	echo 'upload/'.$filename;