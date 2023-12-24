<?php
require "functions.php" ;

if( isset($_POST["submit"]) ){
  if( komen($_POST) <= 0) {
        echo "
      <script>
      alert('Komentar TIDAK berhasil ditambahkan');
      </script>
      ";
        echo mysqli_error($conn);  
        }
}

$komenParent = query("SELECT * FROM komentar WHERE parentid = '0'");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles/commentStyle.css">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
	 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Roboto+Mono:wght@700&family=Sometype+Mono:ital,wght@1,700&family=Oswald:wght@500&family=Bebas+Neue&family=Playpen+Sans:wght@500&family=Anton&family=Courgette&family=Permanent+Marker&family=Satisfy&family=Poppins:wght@800&display=swap"
	 rel="stylesheet">
    <title>X-3 Grade || Anonymous</title>
    <link rel="icon" href="assets/icon.jpg">
    <script src="main.js"></script>
    <script src="https://unpkg.com/typeit@8.0.1/dist/index.umd.js"></script>
</head>
<body>
  
  <div id="freezeHeader">
  	<span class="back" onclick="window.open ('index.php#contact', '_parent');"><</span>
	  <span class="ceputiga">
	    <h1 id="cepu">Cepu</h1>
	    <h1 id="luh">luh</h1>
	    <h1 class="tg">3</h1>
	  </span>
	</div>
	
	<div id="footer">
	</div>
  
  <div id="komentar">
    <?php
    foreach ($komenParent as $komen):
      $bId = "b" . $komen['id'];
    ?>
    <div id="<?= $komen['id'] ?>" class="komPar">
      <p class="content"><?= $komen['content'] ?></p>
      <p class="date">diunggah pada <i> <b><?= $komen['date'] ?> </b> </i></p>
      <button onclick="balas('<?= $komen['id'] ?>', '<?= $bId ?>')" id="<?= $bId ?>">balas</button>
    </div>
        <?php
        $kId = $komen['id'];
        $komenChild = query(("SELECT * FROM komentar WHERE parentid =$kId"));
        foreach ($komenChild as $komenc):
          ?>
          <div class="komenBocah">
            <p class="content"><?= $komenc['content'] ?></p>
            <p class="date">diunggah pada <i> <b><?= $komenc['date'] ?> </b> </i></p>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
  </div>
  
  <div class="commentForm">
    <form method="post">
      <textarea name="content" placeholder="tulis komentar disini!" required="required"></textarea>
      <input type="hidden" name="parentId" value="0" id="parent" />
      <button type="submit" name="submit">[></button>
    </form>
  </div>
</body>
</html>