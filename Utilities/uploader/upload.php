<?php 

use Aws\S3\Exception\S3Exception;
require 'start.php';

if(isset($_FILES['file'])) {

	$file = $_FILES['file'];

	//File Details
	$name = $file['name'];
	$tmp_name = $file['tmp_name'];

	$extension = explode('.', $name);
	$extension = strtolower(end($extension));

	//Temp Details
	$key = md5(uniqid());
	$tmp_file_name = "{$key}.{$extension}";
	$tmp_file_path = "files/{$tmp_file_name}";

	//Move the file
	move_uploaded_file($tmp_name, $tmp_file_path);

	try {

		//Move temp file from our server to the bucket
		$s3->putObject([
			'Bucket' => $config['s3']['bucket'],
			'Key' => "uploads/{$name}",
			'Body' => fopen($tmp_file_path, 'rb'),
			'ACL' => 'public-read'
		]);

		//Link to image to be stored in db
		header("location: https://s3-us-west-2.amazonaws.com/webmediaconcepts.com/uploads/".$name);//Add auto increment from db after name.

		//Removes temp file from our server
		unlink($tmp_file_path);

	} catch(S3Exception $e) {
		die("Error uploading file");
	}

}
?>


<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" value="Upload">
</form>
