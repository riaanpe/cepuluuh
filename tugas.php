<?php
require 'functions.php';

$mapels = ["Lainnya", "Al-qur'an Hadits", "Fikih", "Aqidah Akhlak", "SKI", "Balaghah", "Tahfidz", "Bahasa Arab", "Bahasa Inggris", "Basa Sunda", "Bahasa Indonesia", "Matematika", "Fisika", "Kimia", "Biologi","Geografi", "Sosiologi", "Ekonomi", "Sejarah", "Pendidikan Pancasila", "Informatika", "Seni", "Penjas", "Prakarya", "P5"];

if( isset($_POST["submit"]) ){
        if( tugas($_POST) > 0) {
        echo "
      <script>
      alert('Data tugas berhasil ditambahkan!');
      </script>
      ";
      } else {
        echo "
      <script>
      alert('Data tugas TIDAK berhasil ditambahkan');
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
    <title>X-3 Grade || add assignment</title>
    <link rel="icon" href="assets/icon.jpg">
    <script src="main.js"></script>
    <script src="https://unpkg.com/typeit@8.0.1/dist/index.umd.js"></script>
</head>

<body onload="galiatPass">
  
    <div id="uploadFile">
    
	     <div class="upForm">
	       <h3 class="exit" onclick="window.open('index.php#assignment', '_parent');">X</h3>
	       <h2>Make our<br/>new assignment!</h2>
	      
	      <div class="formDiv">
	         <form action="" method="post">
	         <li>
	         <label for="password">Password: </label>
	         <img id="toggle" src="assets/closedEye.png" alt="*hidden" onclick="visiblePass()"/>
	         </li>
	         
	         <li>
	         <input type="password" name="password" id="password" placeholder="password yang telah diberikan.." required="required"/>
	         </li>

	         <li>
	         <label for="mapel">Mata pelajaran: </label>
	         </li>
	         
	         <li>
	           <select name="mapel" id="mapel">
	             <?php foreach ($mapels as $mapel):?>
	             <option value="<?= $mapel ?>"><?= $mapel ?></option>
	             <?php endforeach; ?>
	           </select>
	         </li>
	         
	         <li>
	         <label for="info">Tugasnya: </label>
	         </li>
	         
	         <li>
	         <input type="text" name="info" id="info" placeholder="beri penjelasan singkat mengenai tugas ini" required="required"/>
	         </li>
	         
          <li>
	         <label for="tanggal">Tanggal dikumpulkan: </label>
	         </li>
	         <li>
	           <input type="date" name="tanggal" id="tanggal" pattern="\d{4}-\d{2}-\d{2}" required="required"/>
	         </li> 
	         
	         <li>
	         <button type="submit" name="submit">Submit!</button>
	         </li>

	       </form>
	      </div> 
	       
  </div>
	   	       </div>
</body>