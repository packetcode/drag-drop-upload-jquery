<!--APP: Drag and Drop Image uploader with progress bar
    Website:packetcode.com
    Author: Krishna TEja G S
    Date: 3rd May 2014
	-->
<html>
<head>
	<title>Drag and Drop Image Upload | Packetcode</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css" >
	<link rel="stylesheet" href="drop.css" >
	<Script src="http://code.jquery.com/jquery-2.1.1-rc2.min.js" ></script>
	<script src="http://malsup.github.com/jquery.form.js"></script> 
	<script src="script.js"></script>
	<script src="drop.js"></script>
</head>	
<body>
	<div class="container-main">
<h1>Darg-Drop Uploader</h1>
<p>A simple tutorial to explain image uploading with drag and drop using jquery xhr and php</p>
<div class="well">
<div class="drop"> Drop files here</div>
<form action="upload.php" method="post" id="myForm"
enctype="multipart/form-data">
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" class="btn btn-success" value="Upload Image">
</form>

<div class="progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="0" aria-valuemin="0" 
  aria-valuemax="100" style="width: 0%">
    <span class="sr-only">0% Complete</span>
  </div>
</div>
</div>
<div class="image"></div>
<hr>
<div> A <a href="http://www.packetcode.com">packetcode</a> production
<div class="pull-right"><a href="
	https://twitter.com/shaadomanthra">Krishna Teja</a></div>
</div>
</div>

</body>
</html>