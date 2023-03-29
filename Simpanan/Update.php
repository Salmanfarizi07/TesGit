<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Simpanan Koperasi</title>
</head>

<body>
  <div class="container">
    <center>
      <h2>
        Simpanan
      </h2>
    </center>
    <!-- <a href="create_barang.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Tambah Data</a> -->
    <table class="table table-hover-dark">
      <thead class="thead-dark">
        <tr>
        <th>No</th>
          <th>ID Simpanan</th>
          <th>ID User</th>
          <th>Jenis Simpanan</th>
          <th>Tanggal Awal</th>
          <th>Jumlah Simpanan</th>
          <!-- <th scope="col">Action</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
        require 'connectionkurir.php';
        $id_kurir = $_GET['id_user'];
        $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_kurir WHERE id_kurir='$id_kurir'");
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['id_kurir'] . "</td>";
          echo "<td>" . $data['nama_kurir'] . "</td>";
          echo "<td>" . $data['noHp_kurir'] . "</td>";
          echo "<td>" . $data['id_gudang'] . "</td>";
        //     <a href='edit_barang.php?id_barang=$data[id_barang]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>|
        //     <a href='delete_barang.php?id_barang=$data[id_barang] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
        //     </td>";
          echo "</tr>";
          $no++;
          $id_kurir = $data['id_kurir'];
          $nama_kurir = $data['nama_kurir'];
          $noHp_kurir = $data['noHp_kurir'];
          $id_gudang = $data['id_gudang'];
        }

        ?>
      </tbody>
    </table>

    <hr>

    <form action="submitkurir.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Kurir</label>
            <input type="hidden" class="form-control" id="exampleInputEmail1" name="id_kurir" value="<?php echo $id_kurir; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Kurir</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kurir" value="<?php echo $nama_kurir; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">no HP Kurir</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="noHp_kurir" value="<?php echo $noHp_kurir; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Gudang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="id_gudang" value="<?php echo $id_gudang; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
      //   $no = 1;
      //   while ($data = mysqli_fetch_array($hasil)) {
      //     <form action="edit.php">
      //         <div class="mb-3">
      //             <label for="exampleInputEmail1" class="form-label">Nama</label>
      //             <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="$data['nama']">
      //         </div>
      //         <div class="mb-3">
      //             <label for="exampleInputEmail1" class="form-label">Harga</label>
      //             <input type="text" class="form-control" id="exampleInputEmail1" name="harga" value="$data['harga']">
      //         </div>
      //         <div class="mb-3">
      //             <label for="exampleInputEmail1" class="form-label">Stok</label>
      //             <input type="text" class="form-control" id="exampleInputEmail1" name="stok" value="$data['stok']">
      //         </div>
      //         <div class="mb-3">
      //             <label for="exampleInputEmail1" class="form-label">Jenis</label>
      //             <input type="text" class="form-control" id="exampleInputEmail1" name="jenis" value="$data['jenis']">
      //         </div>
      //         <div class="mb-3">
      //             <label for="exampleInputEmail1" class="form-label">Jenis</label>
      //             <input type="text" class="form-control" id="exampleInputEmail1" name="jenis" value="hahaha">
      //         </div>
      //         <button type="submit" class="btn btn-primary">Submit</button>
      //     </form>
      //     $no++;
      // }
    ?>
  </div>

</body>

</html>