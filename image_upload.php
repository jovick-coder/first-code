<?php
 //session_start();
 
include ('php/process.php');
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--<section>
		<h1> image upload</h1>
		<div class="">
			<form enctype="" method="POST" action="image_upload.php">
				<div><?php 
					//echo $msg;
				 ?></div>
				<input type="file" id="file" style="display: none;" name="send_image">
				<label for="file" class="btn btn-primary ">Upload image</label>
				<input type="submit" class="btn btn-primary" name="submit" name="submit">
				
			</form>
		</div>

	</section>

-->




<form method="post" action="" enctype='multipart/form-data'>
<div class="flexbox space-around form">
	
	<div>
		<div class="alert <?php echo $css_class ?>">
			<?php if (!empty($msg)) {
				# code...
				echo $msg;
			} ?>
		</div>
	<?php //endif(); ?>
	<div >
			<img src="upload/placeholder.jpg"   id="showimage" width = "300" >

	</div>
	<?php //header() ?>
	<div style="margin-top:  30px;">	
		<textarea placeholder="say something about image" name="bio"></textarea>
</div>
	<input accept="image/*" type='file' id="file" style="display: none;" name='file' onchange="viewimage(this)" />
	<div><label  for="file">Upload image</label></div>
	
	<div>
 	 <input type='submit'  value='Save image'  name='btn_upload' class="btn btn-primary">
		
	</div>
	</div>
	
</div>
</form>

<script type="text/javascript" src="js/viewimage.js"></script>

</body>
</html>