# lightbox-auto-image-adder
Script to add Image to lightbox jQuery plugin without writing any HTML

## Where to use it?
When you use Lightbox in your Webpage, sometimes you need to show a large number of images.
In that case, you have to write all the ```<img>``` tags and the image file names.
You can use this script to grab all the images from a folder nad show them
in Lightbox.<br>
###[Check Out The Demo](http://itsnzsaad.github.io/lightbox-auto-image-adder/)

## How To Use it?
###1. At first call the Lightbox Stylesheet from CDN inside ```<head>``` and ```</head>```
```
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">  
```

###2.  Call the jQuery and Lightbox Script from CDN between ```</body>``` and ```</html>```
```
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type="text/javascript" 
  src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js">    
  </script>
```

###3. Put The Script Below in your index.php file and Keep The Images in a Folder named "lb_gallery"

```
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
```
###4. Use CSS to Stylize
```
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
```

###5. Remember to rename your index.html file to index.php

DONE!

