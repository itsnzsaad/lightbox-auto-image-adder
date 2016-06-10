<!DOCTYPE html>
<html>

<head>
	<title>Lightbox Auto Image Adder</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

	<!-- Stylesheet Call -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">  
	<!-- Stylesheet Call -->



	<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>

<body>

<div class="ins">
  <h1>Lightbox Auto Image Adder</h1>
  <h2>How To Use?</h2>
  <p>
    <img src="images/css.png" alt=""><br>
    <img src="images/js.png" alt=""><br>
    <img src="images/php.png" alt=""><br>
    <img src="images/csss.png" alt=""><br>
  </p>
</div>


<div class="lb_gallery">
		<?php
      $Folder_Name = "lightbox_images";

      $images = glob("$Folder_Name/*.{jpg,png,gif}", GLOB_BRACE);


      foreach($images as $image){

  					echo '<a href="'.$image.'" data-lightbox="auto_lightbox">
  					<img class="lb_img" src="' .$image. '" alt="">
  					</a>';

  			}
    ?>
</div>


</body>

<!-- =========================================  
====================== /Gallery ==============
========================================   -->

  <!-- jQuery Call -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type="text/javascript" 
  src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js">    
  </script>
  <!-- jQuery Call -->

</html>
