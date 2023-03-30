<?php
// Include file koneksi database
include_once("config.php");

// Cek apakah form telah disubmit
if(isset($_POST['submit'])) {
    $nama_peminjam = $_POST['nama_peminjam'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $jumlah_pinjaman = $_POST['jumlah_pinjaman'];

    // Query untuk menambahkan data peminjaman baru
    $result = mysqli_query($mysqli, "INSERT INTO peminjaman(nama_peminjam,tanggal_pinjam,tanggal_kembali,jumlah_pinjaman) VALUES('$nama_peminjam','$tanggal_pinjam','$tanggal_kembali','$jumlah_pinjaman')");

    // Redirect ke halaman utama setelah query selesai
    header("Location: index.php");

    // Tutup koneksi
    mysqli_close($mysqli);
}
?>

<html>
<head>
    <title>Tambah Peminjaman Baru</title>
</head>

<body>
    <a href="index.php">Kembali ke Daftar Peminjaman</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Peminjam</td>
                <td><input type="text" name="nama_peminjam"></td>
            </tr>
            <tr> 
                <td>Tanggal Pinjam</td>
                <td><input type="date" name="tanggal_pinjam"></td>
            </tr>
            <tr> 
                <td>Tanggal Kembali</td>
                <td><input type="date" name="tanggal_kembali"></td>
            </tr>
            <tr> 
                <td>Jumlah Pinjaman</td>
                <td><input type="number" name="jumlah_pinjaman"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Tambahkan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
