<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Nilai</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <h1> FORM DATA MAHASISWA </h1>
        
        <fieldset>
          
          <legend>INPUT DATA </legend>
        
          <label for="name">NIS:</label>
          <input type="text" id="nis" name="nis" pattern="\d{8,}" required oninvalid="setCustomValidity('Isi NIM Dengan Benar!')">
        
          <label for="email">Nama:</label>
          <input type="text" id="nama" name="nama" pattern="\w{1,}" required oninvalid="setCustomValidity('Isi Nama Dengan Benar!')">
       
          <label for="nilai1">Nilai 1:</label>
          <input type="text" id="nilai1" name="nilai1" pattern="\d{1,3}" maxlength="3" required oninvalid="setCustomValidity('Isi Nilai Dengan Benar!')">

          <label for="nilai2">Nilai 2:</label>
          <input type="text" id="nilai2" name="nilai2" pattern="\d{1,3}" maxlength="3" required oninvalid="setCustomValidity('Isi Nilai Dengan Benar!')">

          <label for="nilai3">Nilai 3:</label>
          <input type="text" id="nilai3" name="nilai3" pattern="\d{1,3}" maxlength="3" required oninvalid="setCustomValidity('Isi Nilai Dengan Benar!')">

          <input type="hidden" name="simpan" value="true">
                  
        </fieldset>
       
        <button type="submit">SIMPAN</button>
        <a class="button" href="../index.php">
          BATAL
        </a>

      </form> 
        </div>
      </div>
      
    </body>
</html>

<?php
  if (isset($_POST['simpan'])) {
    if ($_POST['simpan'] == 'true') {
      $nis = $_POST['nis'];
      $nama = $_POST['nama'];
      $nilai1 = $_POST['nilai1'];
      $nilai2 = $_POST['nilai2'];
      $nilai3 = $_POST['nilai3'];
      $rata = ($nilai1 + $nilai2 + $nilai3) / 3;

      if ($rata > 59) {
        $keterangan = 'LULUS';
      } else {
        $keterangan = 'TIDAK LULUS';
      }

      print_r("INI ADALAH ");
      print_r($keterangan);
    }
  }
?>