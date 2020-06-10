
<?php
$msg= "";
$imagename = "";
$css_class ="";
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "formtest"; /* Database name */

$dbconect=mysqli_connect($host, $user, $password,$dbname);
//mysql_select_db();
// Check connection

if (isset($_POST['btn_upload'])) {
	# code...

$bio = $_POST['bio'];
$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$location = "upload/";
$size = $_FILES['file']['size'];
$file_extension=pathinfo($name);

if ($size > 50000) {
	# code...
	$css_class = "alert-danger";
	$msg = "file_size to large "."<br>"."file_name: " .$name."<br>"."file_size: ".$size;
}else{



if ($file_extension != 'jpg'||'.png') {
	# code...
 echo 	$file_extension['extension'];
	echo "nooooo";
} else {
	# code...
	echo "yessss";
}




$mysql = "insert into image_table(id,imag_path,bio) value('','$name','$bio');" ;
$run= mysqli_query($dbconect,$mysql);

if ($run) {
	# code...
	if (empty($name)) {
		# code...
		$msg = "No Image selected";
		$css_class = "alert-danger";
		return false;
	} else {
		# code...

		$upload =move_uploaded_file($tmp_name, $location.$name);
	$msg = "Image saved and inserted "."<br>" ."file_name: ". $name."<br>"."file_size: ".$size;
		$css_class = "alert-success";
	}
		
} else {
	# code...
	$msg = "Image not saved and not inserted.". "<br>"."Error: ".mysql_error();
		$css_class = "alert-danger";
}


}

}
?>