<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <title>Lihat Nilai</title>
      <link rel="stylesheet" href="../assets/css/lihatNilai.css">
      <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"/>
      <style>
         html {
         font-family: 'Quicksand'; 
         }
         .styled-table {
         border-collapse: collapse;
         margin: 25px 0;
         font-size: 0.9em;
         font-family: 'Quicksand';
         min-width: 400px;
         box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
         }
         .styled-table thead tr {
         background-color: #7aa8b7;
         color: #ffffff;
         text-align: left;
         }
         .styled-table th,
         .styled-table td {
         padding: 12px 15px;
         }
         .styled-table tbody tr {
         border-bottom: 1px solid #dddddd;
         }
         .styled-table tbody tr:nth-of-type(even) {
         background-color: #f3f3f3;
         }
         .styled-table tbody tr:last-of-type {
         border-bottom: 2px solid #009879;
         }
      </style>
   </head>
   <body>
      <h2>DATA NILAI MAHASISWA</h2>
      <?php 
        $conn = mysqli_connect("localhost", "root", "", "uas_212101218");
      
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
  
        $sql = "SELECT * FROM nilai";
  
        $hasil = $conn->query($sql);

        $jumlah_record = mysqli_num_rows($hasil);
      ?>

      Jumlah record = <?=$jumlah_record?>
      <table class="styled-table">
         <thead>
            <tr>
               <th>Nis </th>
               <th>Nama </th>
               <th>Nilai1</th>
               <th>Nilai2</th>
               <th>Nilai3</th>
               <th>Nilai rata-rata</th>
               <th>Keterangan</th>
            </tr>
         </thead>
         <tbody>
            <?php while($row = mysqli_fetch_array($hasil)) : ?>
                <tr>
                    <td><?=$row['nis']?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['nilai1']?></td>
                    <td><?=$row['nilai2']?></td>
                    <td><?=$row['nilai3']?></td>
                    <td><?=$row['rata']?></td>
                    <td><?=$row['keterangan']?></td>
                </tr>
            <?php endwhile ?>
         </tbody>
      </table>
      <a class="button" href="../index.php">
          KEMBALI
      </a>
   </body>
</html>