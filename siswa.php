<?php

$nilai1 =['id'=>1, 'nim'=>'01101', 'uts'=>'90', 'tugas'=>'90'];
$nilai2 =['id'=>2, 'nim'=>'o1102', 'uts'=>'92', 'tugas'=>'92'];
$nilai3 =['id'=>3, 'nim'=>'01103', 'uts'=>'93', 'tugas'=>'93'];
$nilai4 =['id'=>4, 'nim'=>'01104', 'uts'=>'94', 'tugas'=>'94'];

$kumpulan_nilai = [$nilai1,$nilai2,$nilai3,$nilai4];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1 class='text-center'>Daftar Nilai Siswa</h1>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">nim</th>
      <th scope="col">uts</th>
      <th scope="col">uas</th>
      <th scope="col">tugas</th>
      <th scope="col">nilai akhir</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($kumpulan_nilai as $nilai): ?>
        <tr>
            <?php $nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas']) / 3 ; ?>
            <td><?php echo $nilai['id']; ?></td>
            <td><?php echo $nilai['nim']; ?></td>
            <td><?php echo $nilai['uts']; ?></td>
            <td><?php echo $nilai['uas']; ?></td>
            <td><?php echo $nilai['tugas']; ?></td>
            <td><?php echo $nilai_akhir; ?></td>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>