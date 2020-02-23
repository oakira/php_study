<?php
echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
	<meta charset=\"UTF-8\">
	<title>PHP Form Upload</title>
</head>
<body>
<form method=\"post\" action=\"./index.php\" enctype=\"multipart/form-data\">
Select a JPG,GIF,PNG or TIF File:
<input type=\"file\" name=\"filename\" size=\"10\">
<input type=\"submit\" value=\"Upload\">
</form>";

if ($_FILES) {
	$name = $_FILES['filename']['name'];
	$name = strtolower(preg_replace("/[^A-Za-z0-9.]/", "", $name));
	// $name = md5(uniqid(mt_rand(), true)) . '.' . $name;
	switch ($_FILES['filename']['type']) {
		case 'image/jpeg':
			$ext = 'jpg';
			break;
		case 'image/gif':
			$ext = 'gif';
			break;
		case 'image/png':
			$ext = 'png';
			break;
		case 'image/tif':
			$ext = 'tif';
			break;
		default:
			$ext = '';
			break;
	}
	if ($ext) {
		$n = "image.$ext";
		// $n = $name;
		move_uploaded_file($_FILES['filename']['tmp_name'], $n);
		echo "Upload image '$name' as '$n':<br>";
		echo "<img src='$n' alt='test image'>";
	} else {
		echo "'$name' is not an accepted image file";
	}

} else {
	echo "No image has been uploaded";
}
echo "</body></html>";
