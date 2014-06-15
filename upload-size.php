<?php
	if ($_REQUEST[completed] == 1) 
	{
		$newname = uniqid("IMG").".jpg";
		move_uploaded_file($_FILES['mailfile']['tmp_name'],
		"images/$newname");
	} 
?>

<html>
<head>
<title>Upload image</title>
</head>
<body>
<h1>Upload image</h1>
<?php 
if ($_REQUEST[completed] != 1) 
{ 
?>
<b>Please upload an image</b><br>
<form enctype=multipart/form-data method=post>
<input type=hidden name=MAX_FILE_SIZE value=1500000>
<input type=hidden name=completed value=1>
Choose file to send: <input type=file name=mailfile> <br />
<input type=submit></form>
<?php 
}
 else 
{ ?>

<b>Upload complete</b><br />
<? echo "<a href = 'images/$newname'><img height='100' width='100' src='images/$newname'></a>" ?>

<?php } ?>

</body></html>