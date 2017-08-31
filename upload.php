<?php 

if (isset($_POST['submit'])) {
	$filename = $_FILES['filetoupload']['name'];
	$filetmp = $_FILES['filetoupload']['tmp_name'];
	$filesize = $_FILES['filetoupload']['size'];
	$file_basename =basename($_FILES['filetoupload']['name']);

	$dir = "upload/";
	$final_dir = $dir.$file_basename;

	move_uploaded_file($filetmp, $final_dir);
}

// Inserting into db
// <img src="upload/xyz.jpg">
/*

	img_name = '$file_basename'
	final_path = '$final_dir';



*/
?>