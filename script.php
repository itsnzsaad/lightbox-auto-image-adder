<!DOCTYPE html>
<html>

<head>
	<title>Lightbox Auto Image Adder</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">



	<!-- At first call the Lightbox Stylesheet from CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">  
	<!-- /At first call the Lightbox Stylesheet from CDN -->

	</head>

<body>


<!-- =========================================  
    Put The Script Below and Keep The 
   Images in a Folder named "lb_gallery"
========================================   -->

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

<!-- =========================================  
   /Put The Script Below and Keep The 
   Images in a Folder named "lb_gallery"
========================================   -->




<!-- =========================================  
            Use CSS to Stylize
========================================   -->
<style>
  .lb_gallery{
  width: 800px;
  margin:auto;
}
.lb_img{
  height: 120px;
  width: 120px;
  margin: 10px;
  border: #fff 3px solid;
}
</style>
<!-- =========================================  
            /Use CSS to Stylize
========================================   -->




</body>


  <!-- Call the jQuery and Lightbox Script from CDN-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type="text/javascript" 
  src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js">    
  </script>
  <!-- /Call the jQuery and Lightbox Script from CDN-->



  <!-- And it's Done! -->

</html>
