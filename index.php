<?php
require "functions.php";

$galerii = query("SELECT * FROM galeri");
$pilihan = query("SELECT * FROM selectform");
$tugas = query("SELECT * FROM tugas ORDER BY tanggal");
$select = 1;
if (isset($_POST["select"])) {
  $select = $_POST["select"];
}

$test = bacaHari($select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles/style.css">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
	 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Roboto+Mono:wght@700&family=Sometype+Mono:ital,wght@1,700&family=Oswald:wght@500&family=Bebas+Neue&family=Playpen+Sans:wght@500&family=Anton&family=Courgette&family=Permanent+Marker&family=Satisfy&family=Poppins:wght@800&family=Flavors&display=swap"
	 rel="stylesheet">
    <title>X-3 Grade</title>
    <link rel="icon" href="assets/icon.jpg">
    <script src="main.js"></script>
    <script src="https://unpkg.com/typeit@8.0.1/dist/index.umd.js"></script>
</head>
<body onload="startTime(); piket(); menunonAktif();">


<!-- HEADERNYA-->	
	<div id="freezeHeader">
	  <span class="ceputiga">
	    <h1 id="cepu">Cepu</h1>
	    <h1 id="luh">luh</h1>
	    <h1 class="tg">3</h1>
	  </span>
	  
	  <div id="menu" onclick="ubahMenu();">
	     <span class="s2"></span>
	     <span class="s1"></span>
	     <span class="s3"></span>
	  </div>
	  
	  <ul id="links">
	    <li><a href="#">home</a></li>
	    <li><a href="#contact">contact</a></li>
	    <li><a href="#gallery">memories</a></li>
	    <li><a href="#structure">struktur</a></li>
	    <li><a href="#schedule">jadwal</a></li>
	    <li><a href="#assignment">tugas</a></li>
	  </ul>
	</div>
	
	<div id="footer">
	  <span id="jam"></span>
	</div>
	  
	  
	  <div id="home">
	      <div class="homeText">
	          <h3 class="hai">Hi Visitor!</h3>
	          <h4 class="welcome">welcome to our website</h4>
	          <div class="homeKotak">
	              <h3 class="selamatDtg">selamat datang di kelas X-3</h3>
	              <h4 id="typing"></h4>
	              <p class="deskripsi">kelas yang beranggotakan 25 orang, 7 orang laki-laki dan 18 orang perempuan. Mereka semua memiliki sifat yang berbeda-beda. Jika ingin tahu lebih detail tentang kelas ini klik tombol dibawah!</p>
	              <img class="hape" src="assets/hape.png" alt="a handphone"/>
	              <button onclick="window.open ('nothing.php', '_blank');" class="aboutButton">about</button>
	          </div>
	      </div>
	      <div class="homeImage">
	          <img class="kerja" src="assets/working.png" alt="a group making a 'work' word"/>
	      </div>
	  </div>
    <div id="contact" class="reveal">
	    <div class="con">
	      <h2 class="judul">Contact</h2>
        <div class="containerCon">
          <div class="download" onclick="window.open('nothing.php', '_parent');">
	        <h3>Instagram</h3>
	        <img class="loadFoto" src="assets/ig.png" alt="up"/>
	        </div>
          <div class="download" onclick="window.open('nothing.php', '_parent');">
	        <h3>Tiktok</h3>
	        <img class="loadFoto" src="assets/tk.png" alt="up"/>
	        </div>
          <div class="download" onclick="window.open('comment.php', '_parent');">
	        <h3>Anonymous</h3>
	        <img class="loadFoto" src="assets/anonymous.png" alt="up"/>
	        </div>
	        </div>
	    </div>
    </div>
	  <div id="gallery" class="reveal"> 
	  
	    <div class="glr">
	      <h2 class="judul">Memories</h2>
	      
	      
	      <div class="galleryContainer">
	 
	       <?php foreach ($galerii as $row): ?>
	        <div class="myslides">
	          <img class="potoo" src="foto/<?= $row["image"] ?>" alt="contohh" />
	          
	          <div class="fotoInfo"><p><?= $row["caption"] ?></p></div>
	        </div>
	       <?php endforeach; ?> 

	      </div>
	      
	    <div class="loadContainer">
	      
	      <div class="upload" onclick="window.open('add.php', '_parent');">
	      <h3>UPLOAD YOUR FILE!</h3>
	      <img class="loadFoto" src="assets/upload.png" alt="dowb"/>
	    </div>
	    
	    
	      <div class="download" onclick="window.open('nothing.php', '_parent');">
	        <h3>EDIT, REMOVE, DOWNLOAD FILES!</h3>
	      <img class="loadFoto" src="assets/downloads.png" alt="up"/>
	      </div>
	      </div>
	    </div>
	   
	   </div>
	   <div id="structure"  class="reveal"> 
	  
	    <div class="struc">
	      <h2 class="judul">Struktur organisasi</h2>
	      
	      <div class="tree">
					<ul>
						<li> <a href="#"><img src="assets/profil/anonym.jpg"><span><h6>Wali Kelas</h6><p>Bpk. Adrian Yudabangsa, M.Pd</p></span></a>
						<ul>
							<li><a href="#"><img src="assets/profil/anonym.jpg"><span><h6>Ketua Kelas</h6><p>M. Sultan Firdaus</p></span></a>
							<ul>
							 <li> <a href="#"><img src="assets/profil/anonym.jpg"><span><h6>Wakil Ketua</h6><p>Rian Permana</p></span></a>
						<ul>
							<li> <a href="#"><img src="assets/profil/anonym.jpg"><span><h6>Selretaris 1</h6><p>Silmi Dwi Rahayu</p></span></a>
							<ul>
							  <li> <a href="#"><img src="assets/profil/anonym.jpg"><span><h6>Sekretsris 2</h6><p>Syahrani Nuraeni</p></span></a> </li>
							  
							</ul>
							</li>
							<li> <a href="#"><img src="assets/profil/anonym.jpg"><span><h6>Bendahara 1</h6><p>Athira Ega Arsyiliiani</p></span></a>
							<ul>
							  <li> <a href="#"><img src="assets/profil/anonym.jpg"><span><h6>Bendahara 2</h6><p>Sulistia Safitri</p></span></a> </li>
							  
							</ul>
							</li>
						</ul>
					</li>
							</ul>
						</li>
				</ul>
			</li>
		</ul>
	</div>
	      
	    </div>
	   
	   </div>
	 <div id="schedule"  class="reveal">
	     
	     <div class="sche">
	       
	       <h2 class="judul">Jadwal</h2>
	       <span class="judul">
	         <h2 id="piket" onclick="piket()">Piket </h2>
	         <h2>& </h2>
	         <h2 id="pelajar" onclick="pelajar()">Pelajaran</h2>
	       </span>
	       
	       <form action="#schedule" method="post">
	         <select name="select" id="select" onchange="this.form.submit();">
	           <?php foreach ($pilihan as $ph): ?>
	           <option value="<?= $ph["id"] ?>"
	           <?php if ($_POST["select"] == $ph["id"]) {
              echo "selected";
            } ?>
	           ><?= $ph["opsi"] ?></option>
	           <?php endforeach; ?> 
	         </select>
	       </form>
	       
	       <div id="jadwalPiket">
	         <h3>Jadwal piket hari 
	         <?php if ($test == 1): ?>senin</h3>
	         <table>
	           <tr>
	             <th style="width: 10%;">no.</th>
	             <th style="width: 90%;">nama</th>
	           </tr>
	           <tr>
	             <td>02.</td>
	             <td>Andini Lathifa Zahra</td>
	           </tr>
	           <tr>
	             <td>03.</td>
	             <td>Athira Ega Arsyiliiani</td>
	           </tr>
	           <tr>
	             <td>04.</td>
	             <td>Azzahra Ghefira Ramadhani</td>
	           </tr>
	           <tr>
	             <td>11.</td>
	             <td>M. Sultan Firdaus</td>
	           </tr>
	           <tr>
	             <td>17.</td>
	             <td>Rian Permana</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 2): ?>selasa</h3>
	         <table>
	           <tr>
	             <th style="width: 10%;">no.</th>
	             <th style="width: 90%;">nama</th>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>selasa gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>selasa gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>selasa gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>selasa gtw</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 3): ?>rabu</h3>
	         <table>
	           <tr>
	             <th style="width: 10%;">no.</th>
	             <th style="width: 90%;">nama</th>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>rabu gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>rabu gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>rabu gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>rabu gtw</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 4): ?>kamis</h3>
	         <table>
	           <tr>
	             <th style="width: 10%;">no.</th>
	             <th style="width: 90%;">nama</th>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>kamis gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>kamis gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>kamis gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>kamis gtw</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 5): ?>jum'at</h3>
	         <table>
	           <tr>
	             <th style="width: 10%;">no.</th>
	             <th style="width: 90%;">nama</th>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>jum'at gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>jum'at gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>jum'at gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>jum'at gtw</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 6): ?>sabtu</h3>
	         <table>
	           <tr>
	             <th style="width: 10%;">no.</th>
	             <th style="width: 90%;">nama</th>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>sabtu gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>sabtu gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>sabtu gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>sabtu gtw</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 0): ?>minggu </h3>
	         <p>tidak ada yang piket hari ini</p>
	         <?php endif; ?>
	       </div>
	       
	       <div id="jadwalPelajar">
	         <h3>Jadwal pelajaran hari 
	         <?php if ($test == 1): ?>senin</h3>
	         <table>
	           <tr>
	             <th style="width: 15%;">kode guru</th>
	             <th style="width: 15%;">jam ke</th>
	             <th style="width: 45%;">mata pelajaran</th>
	             <th style="width: 25%;">waktu</th>
	           </tr>
	           <tr>
	             <td rowspan="2">00</td>
	             <td>1</td>
	             <td rowspan="2">Upacara</td>
	             <td rowspan="2">06.50-08.00</td>
	           </tr>
	           <tr>
	             <td>2</td>
	           </tr>
	           <tr>
	             <td rowspan="2">xx</td>
	             <td>3</td>
	             <td rowspan="2">Al-qur'an Hadits</td>
	             <td rowspan="2">08.00-09.10</td>
	           </tr>
	           <tr>
	             <td>4</td>
	           </tr>
	           <tr>
	             <td rowspan="2">xx</td>
	             <td>5</td>
	             <td rowspan="2">Kimia</td>
	             <td rowspan="2">10.05-11.15</td>
	           </tr>
	           <tr>
	             <td>6</td>
	           </tr>
	           <tr>
	             <td rowspan="2">xx</td>
	             <td>7</td>
	             <td rowspan="2">Sejarah</td>
	             <td rowspan="2">11.20-13.00</td>
	           </tr>
	           <tr>
	             <td>4</td>
	           </tr>
	           <tr>
	             <td rowspan="2">69</td>
	             <td>9</td>
	             <td rowspan="2">P5</td>
	             <td rowspan="2">13.00-14.10</td>
	           </tr>
	           <tr>
	             <td>10</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 2): ?>selasa</h3>
	         <table>
	           <tr>
	             <th style="width: 15%;">kode guru</th>
	             <th style="width: 15%;">jam ke</th>
	             <th style="width: 45%;">mata pelajaran</th>
	             <th style="width: 25%;">waktu</th>
	           </tr>
	           <tr>
	             <td rowspan="2">xx</td>
	             <td>1</td>
	             <td rowspan="2">Ekonomi</td>
	             <td rowspan="2">06.50-08.00</td>
	           </tr>
	           <tr>
	             <td>2</td>
	           </tr>
	           <tr>
	             <td>xx</td>
	             <td>3</td>
	             <td>Prakarya</td>
	             <td>08.00-08.35</td>
	           </tr>
	           <tr>
	             <td>xx</td>
	             <td>4</td>
	             <td>Matematika</td>
	             <td>08.35-09.10</td>
	           </tr>
	           <tr>
	             <td rowspan="2">xx</td>
	             <td>5</td>
	             <td rowspan="2">Akidah Ahlak</td>
	             <td rowspan="2">10.10-11.20</td>
	           </tr>
	           <tr>
	             <td>6</td>
	           </tr>
	           <tr>
	             <td rowspan="2">xx</td>
	             <td>7</td>
	             <td rowspan="2">Sejarah Kebudayaan Islam</td>
	             <td rowspan="2">11.20-13.00</td>
	           </tr>
	           <tr>
	             <td>4</td>
	           </tr>
	           <tr>
	             <td rowspan="2">01</td>
	             <td>9</td>
	             <td rowspan="2">Fikih</td>
	             <td rowspan="2">13.00-14.10</td>
	           </tr>
	           <tr>
	             <td>10</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 3): ?>rabu</h3>
	         <table>
	           <tr>
	             <th style="width: 15%;">kode guru</th>
	             <th style="width: 15%;">jam ke</th>
	             <th style="width: 45%;">mata pelajaran</th>
	             <th style="width: 25%;">waktu</th>
	           </tr>
	           <tr>
	             <td rowspan="2">xx</td>
	             <td>1</td>
	             <td rowspan="2">Seni</td>
	             <td rowspan="2">06.50-08.00</td>
	           </tr>
	           <tr>
	             <td>2</td>
	           </tr>
	           <tr>
	             <td>xx</td>
	             <td>3</td>
	             <td>Bahasa Indonesia</td>
	             <td>08.00-08.35</td>
	           </tr>
	           <tr>
	             <td>xx</td>
	             <td>4</td>
	             <td>Basa Sunda</td>
	             <td>08.35-09.10</td>
	           </tr>
	           <tr>
	             <td rowspan="3">xx</td>
	             <td>5</td>
	             <td rowspan="3">Bahasa Arab</td>
	             <td rowspan="3">10.05-11.50</td>
	           </tr>
	           <tr>
	             <td>6</td>
	           </tr>
	           <tr>
	             <td rowspan="3">69</td>
	             <td>7</td>
	             <td rowspan="3">P5</td>
	             <td rowspan="3">12.20-14.10</td>
	           </tr>
	           <tr>
	             <td>8</td>
	           </tr>
	           <tr>
	             <td>9</td>
	           </tr>
	           <tr>
	             <td>10</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 4): ?>kamis</h3>
	         <table>
	           <tr>
	             <th style="width: 15%;">kode guru</th>
	             <th style="width: 15%;">jam ke</th>
	             <th style="width: 45%;">mata pelajaran</th>
	             <th style="width: 25%;">waktu</th>
	           </tr>
	           <tr>
	             <td rowspan="2">00</td>
	             <td>1</td>
	             <td rowspan="2">Matematika</td>
	             <td rowspan="2">06.50-08.00</td>
	           </tr>
	           <tr>
	             <td>2</td>
	           </tr>
	           <tr>
	             <td rowspan="2">xx</td>
	             <td>3</td>
	             <td rowspan="2">Penjas</td>
	             <td rowspan="2">08.00-09.10</td>
	           </tr>
	           <tr>
	             <td>4</td>
	           </tr>
	           <tr>
	             <td rowspan="2">xx</td>
	             <td>5</td>
	             <td rowspan="2">Fisika</td>
	             <td rowspan="2">10.05-11.15</td>
	           </tr>
	           <tr>
	             <td>6</td>
	           </tr>
	           <tr>
	             <td rowspan="2">xx</td>
	             <td>7</td>
	             <td rowspan="2">`Bahasa Indonesia</td>
	             <td rowspan="2">11.20-13.00</td>
	           </tr>
	           <tr>
	             <td>4</td>
	           </tr>
	           <tr>
	             <td rowspan="2">68</td>
	             <td>9</td>
	             <td rowspan="2">Tahfidz</td>
	             <td rowspan="2">13.00-14.10</td>
	           </tr>
	           <tr>
	             <td>10</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 5): ?>jum'at</h3>
	         <table>
	           <tr>
	             <th style="width: 10%;">no.</th>
	             <th style="width: 90%;">nama</th>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>jum'at gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>jum'at gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>jum'at gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>jum'at gtw</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 6): ?>sabtu</h3>
	         <table>
	           <tr>
	             <th style="width: 10%;">no.</th>
	             <th style="width: 90%;">nama</th>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>sabtu gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>sabtu gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>sabtu gtw</td>
	           </tr>
	           <tr>
	             <td>00.</td>
	             <td>sabtu gtw</td>
	           </tr>
	         </table>
	         <?php endif; ?>
	         <?php if ($test == 0): ?>minggu </h3>
	         <p>tidak ada yang piket hari ini</p>
	         <?php endif; ?>
	       </div>
	   </div>
	 </div>
	 <div id="assignment" class="reveal">
	   <div class="ass">
	     <h2 class="judul">Tugas</h2>
	     <div class="tugass">
	       <?php 
	       foreach ($tugas as $tgs):
	       ?>
	       <div class="tugas">
	         <h3 class="mapel"><?= $tgs['mapel']?></h3>
	         <p class="infoTugas"><?= $tgs['info']?></p>
	         <button>hapus</button>
	         <p class="tanggalTugas"><?= $tgs['tanggal']?></p>
	         <p>(<?= hitung($tgs['tanggal']); ?> hari lagi)</p>
	       </div>
	       <?php endforeach; ?>
	       <div class="tugas plus" onclick="window.open('tugas.php', '_parent');">+</div>
	     </div>
	   </div>
	 </div>
	<div id="akhir">
	   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#649fe8" fill-opacity="1" d="M0,96L40,85.3C80,75,160,53,240,74.7C320,96,400,160,480,186.7C560,213,640,203,720,186.7C800,171,880,149,960,144C1040,139,1120,149,1200,133.3C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
  <div class="akhir">
    <h5>thank you guys..!</h5>
    <p>Copyright by: X-3 || r, 2023</p>
  </div>
</svg>
	 </div>
</body>
</html>