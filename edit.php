<?php
// Include file koneksi database
include_once("config.php");

// Cek apakah ID peminjaman telah diberikan pada URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menampilkan data peminjaman berdasarkan ID
    $result = mysqli_query($mysqli, "SELECT * FROM peminjaman WHERE id=$id");

    while($data = mysqli_fetch_array($result)) {
        $nama_peminjam = $data['nama_peminjam'];
        $tanggal_pinjam = $data['tanggal_pinjam'];
        $tanggal_kembali = $data['tanggal_kembali'];
        $jumlah_pinjaman = $data['jumlah_pinjaman'];
    }
}
?>

<?php
// Proses update data peminjaman
if(isset($_POST['update'])) {
    $id = $_POST['id'];

    $nama_peminjam = $_POST['nama_peminjam'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $jumlah_pinjaman = $_POST['jumlah_pinjaman'];

    // Query untuk mengupdate data peminjaman
    $result = mysqli_query($mysqli, "UPDATE peminjaman SET nama_peminjam='$nama_peminjam',tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali',jumlah_pinjaman='$jumlah_pinjaman' WHERE id=$id");

    // Redirect ke halaman utama setelah query selesai
    header("Location: index.php");
}
?>

<html>
<head>  
    <title>Edit Data Peminjaman</title>
</head>

<body>
    <a href="index.php">Kembali ke Daftar Peminjaman</a>
    <br/><br/>

    <form name="update_peminjaman" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Peminjam</td>
                <td><input type="text" name="nama_peminjam" value=<?php echo $nama_peminjam;?>></td>
            </tr>
            <tr> 
                <td>Tanggal Pinjam</td>
                <td><input type="date" name="tanggal_pinjam" value=<?php echo $tanggal_pinjam;?>></td>
            </tr>
            <tr> 
                <td>Tanggal Kembali</td>
                <td><input type="date" name="tanggal_kembali" value=<?php echo $tanggal_kembali;?>></td>
            </tr>
            <tr> 
                <td>Jumlah Pinjaman</td>
                <td><input type="number" name="jumlah_pinjaman" value=<?php echo $jumlah_pinjaman;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update"
            </tr>
        </table>
    </form>
</body>
</html>
