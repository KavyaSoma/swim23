<?php 
include('config/dbconfig.php');
session_start();
$uid=$_SESSION['user_id'];
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
  $imgname = $_FILES['imagefile']['name'];
  $imgsize = $_FILES['imagefile']['size'];
  $name = $imgname;
  $size = $imgsize;
  $file_formats = array("jpg", "png", "gif", "bmp"); // Set File format
		  $filepath = "images/";
			if (strlen($name)) {

			  $extension = substr($name, strrpos($name, '.')+1);
				  if (in_array($extension, $file_formats)) {
					  if ($size < (2048 * 1024)) {

						 $imagename = md5(uniqid().time()).".".$extension;
						 $tmp = $_FILES['imagefile']['tmp_name'];

						  if (move_uploaded_file($tmp, $filepath.$imagename)){
                           echo  $image=$filepath.$imagename;
							}
						  else{
						    echo"<script>alert('Image Not Uploaded , Try Again ');</script>";
						  }
						}
						else{
						     echo"<script>alert('Image Size is too Big ');</script>";
						}
					 }
					 else{
						  echo"<script>alert('Please select only jpg/png/gif/bmp');</script>";
					}
				  }
$sql=$mysqli->query("UPDATE users SET Image='$image' WHERE UserId='$uid'");
 echo"<script>alert('upload sucessfull');</script>";
}
?>