<?php
// Include file koneksi database
include_once("config.php");

// Query untuk mengambil data peminjaman dari tabel peminjaman
$result = mysqli_query($mysqli, "SELECT * FROM peminjaman ORDER BY id DESC");

?>

<html>
<head>    
    <title>Daftar Peminjaman Koperasi</title>
</head>

<body>
    <a href="add.php">Tambah Peminjaman Baru</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Nama Peminjam</th> <th>Tanggal Pinjam</th> <th>Tanggal Kembali</th> <th>Jumlah Pinjaman</th> <th>Update</th>
    </tr>
    <?php  
    // Membaca setiap baris data dari tabel peminjaman
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>".$data['nama_peminjam']."</td>";
        echo "<td>".$data['tanggal_pinjam']."</td>";
        echo "<td>".$data['tanggal_kembali']."</td>";
        echo "<td>".$data['jumlah_pinjaman']."</td>";    
        echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
