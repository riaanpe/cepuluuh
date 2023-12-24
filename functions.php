<?php
$conn = mysqli_connect("sql5.freemysqlhosting.net", "sql5672555", "EeWNTvh5TJ", "sql5672555");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function addd($data) {
  global $conn;
  $password = htmlspecialchars($data["password"]);
  
  if ($data["caption"]) {
    $caption = htmlspecialchars($data["caption"]);
  } else {
  $caption = "ini adalah salah satu memori kelas X3";
  }
  
  $image = upImage();
  if( !$image) {
    return false;
  }
  
  $hasil = mysqli_query($conn, "SELECT * FROM user WHERE name = 'upload'");
  
  if ( mysqli_num_rows($hasil) === 1) {
    $row = mysqli_fetch_assoc($hasil);
    
    if ($password == $row['password']) {
      $querii = "INSERT INTO galeri (caption, image) VALUES ('$caption', '$image')";
      
      mysqli_query($conn, $querii);
    }
    else {
      echo "
      <script>
      alert('Password salah! tanyakan operator passwordnyaa!');
      </script>
      ";
      return false;
    }
  }
  
  return mysqli_affected_rows($conn);
}

function upImage() {
  $namaGambar = $_FILES['image']['name'];
  $error = $_FILES['image']['error'];
  $tmpName = $_FILES['image']['tmp_name'];
  
  if ($error === 4) {
    echo "
    <script>
      alert('Upload gambarnya dong zayankkk');
      </script>
    ";
  }
  
  $eksValid = ['jpg', 'jpeg', 'png', 'gif', ];
  $eks = strtolower( pathinfo($namaGambar, PATHINFO_EXTENSION) );
  if ( !in_array($eks, $eksValid) ) {
    echo "
    <script>
      alert('Hanya menerima file jpg, jpeg, png, dan gif');
      </script>
    ";
  }
  
  $namaGambarBaru = uniqid();
  $namaGambarBaru .= ".";
  $namaGambarBaru .= $eks;
  
  move_uploaded_file($tmpName, 'foto/' .$namaGambarBaru);
  
  return $namaGambarBaru;
}

function bacaHari($hari) {
  if($hari == 3) {
    $fixhari = "1";
  }
  if($hari == 4) {
    $fixhari = "2";
  }
  if($hari == 5) {
    $fixhari = "3";
  }
  if($hari == 6) {
    $fixhari = "4";
  }
  if($hari == 7) {
    $fixhari = "5";
  }
  if($hari == 8) {
    $fixhari = "6";
  }
  if($hari == 9) {
    $fixhari = "0";
  }
  
  if($hari == 1) {
    $fixhari = date("w", time()+25200);
  }
  
  if($hari == 2) {
    $fixhari = date("w", time()+25200+86400);
  }
  
    return $fixhari;
}


function tugas($data) {
  global $conn;
  $password = htmlspecialchars($data["password"]);
  $mapel = htmlspecialchars($data["mapel"]);
  $info = htmlspecialchars($data["info"]);
  $tanggal = htmlspecialchars($data["tanggal"]);
  
  $hasil = mysqli_query($conn, "SELECT * FROM user WHERE name = 'tugas'");

    if ( mysqli_num_rows($hasil) === 1) {
    $row = mysqli_fetch_assoc($hasil);
    
    if ($password == $row['password']) {
      $querii = "INSERT INTO tugas (mapel, info, tanggal) VALUES ('$mapel', '$info', '$tanggal')";
      
      mysqli_query($conn, $querii);
    }
    else {
      echo "
      <script>
      alert('Password salah! tanyakan operator passwordnyaa!');
      </script>
      ";
      return false;
    }
  }
  
  return mysqli_affected_rows($conn);
}

function komen($data) {
  global $conn;
  $parentId = htmlspecialchars($data["parentId"]);
  $content = htmlspecialchars($data["content"]);
  
  $kueri = "INSERT INTO komentar (parentId, content) VALUES ('$parentId', '$content')";
      
  mysqli_query($conn, $kueri);
  return mysqli_affected_rows($conn);
}

function hitung($tanggal) {
  $jumlah = strtotime($tanggal) - time();
  $kurang = round((($jumlah/24)/60)/60);
  return $kurang;
}