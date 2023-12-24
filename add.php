<?php
require 'functions.php';

$galerii = query("SELECT * FROM galeri");

if( isset($_POST["submit"]) ){
        if( addd($_POST) > 0) {
        echo "
      <script>
      alert('Gambar berhasil ditambahkan! ');
      </script>
      ";
      } else {
        echo "
      <script>
      alert('Gambar TIDAK berhasil ditambahkan');
      </script>
      ";
        echo mysqli_error($conn);
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles/addStyle.css">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
	 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Roboto+Mono:wght@700&family=Sometype+Mono:ital,wght@1,700&family=Oswald:wght@500&family=Bebas+Neue&family=Playpen+Sans:wght@500&family=Anton&family=Courgette&family=Permanent+Marker&display=swap"
	 rel="stylesheet">
    <title>X~3 Grade || Upload your file!</title>
    <link rel="icon" href="assets/icon.jpg">
    <script src="main.js"></script>
    <script src="https://unpkg.com/typeit@8.0.1/dist/index.umd.js"></script>
</head>

<body onload="galiatPass();">
  <div id="uploadFile">
    
	     <div class="upForm">
	       <h3 class="exit" onclick="window.open('index.php#gallery', '_parent');">X</h3>
	       <h2>Upload your <br/> images here!</h2>
	      
	      <div class="formDiv">
	         <form action="" method="post" enctype="multipart/form-data">
	         
	         <li>
	         <label for="password">Password: </label>
	         <img id="toggle" src="assets/closedEye.png" alt="*hidden" onclick="visiblePass()"/>
	         </li>
	         
	         <li>
	         <input type="password" name="password" id="password" placeholder="password yang telah diberikan.." required="required"/>
	         </li>

	         <li>
	         <label for="caption">Caption: </label>
	         </li>
	         
	         <li>
	         <input type="text" name="caption" id="caption" placeholder="beri caption gambar..! (maximal 200 karakter)"/>
	         </li>
	         
	         <li>
	           <button type="button">
	         <label class="imageButton" for="image">Upload</label>
	         <input type="file" name="image" id="image"/>
	           </button>
	         <button type="submit" name="submit">Submit!</button>
	         </li>

	       </form>
	      </div> 
	       
  </div>
	   	       </div>
  
</body>