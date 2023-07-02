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
          <input type="text" id="nis" name="nis">
        
          <label for="email">Nama:</label>
          <input type="text" id="nama" name="nama">
       
          <label for="nilai1">Nilai 1:</label>
          <input type="text" id="nilai1" name="nilai1">

          <label for="nilai2">Nilai 2:</label>
          <input type="text" id="nilai2" name="nilai2">

          <label for="nilai3">Nilai 3:</label>
          <input type="text" id="nilai3" name="nilai3">

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

      $conn = mysqli_connect("localhost", "root", "", "uas_212101218");
      
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO nilai (nis, nama, nilai1, nilai2, nilai3, rata, keterangan)
      VALUES ('$nis', '$nama', '$nilai1', '$nilai2', '$nilai3', '$rata', '$keterangan')";

      $conn->query($sql);

      header('Location: ../index.php');
    }
  }
?>