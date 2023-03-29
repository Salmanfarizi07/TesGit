<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "pinjamaset";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Proses form peminjaman
if (isset($_POST['pinjam'])) {
    $id_user = $_POST['id_user'];
    $id_aset = $_POST['id_aset'];
    $tgl_peminjaman = $_POST['tgl_peminjaman'];
    $tgl_pengembalian = $_POST['tgl_pengembalian'];

    // Query SQL untuk menambahkan data peminjaman ke tabel pinjamaset
    $sql = "INSERT INTO pinjamaset (id_user, id_aset, tgl_peminjaman, tgl_pengembalian) VALUES ('$id_user', '$id_aset', '$tgl_peminjaman', '$tgl_pengembalian')";

    if (mysqli_query($conn, $sql)) {
        echo "Data peminjaman berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Query SQL untuk mengambil data user
$sql_user = "SELECT * FROM user";
$result_user = mysqli_query($conn, $sql_user);

// Query SQL untuk mengambil data aset
$sql_aset = "SELECT * FROM aset";
$result_aset = mysqli_query($conn, $sql_aset);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Peminjaman Koperasi</title>
</head>
<body>
    <h1>Form Peminjaman</h1>
    <form method="POST">
        <label for="id_user">User</label>
        <select name="id_user">
            <?php while ($row_user = mysqli_fetch_assoc($result_user)) { ?>
            <option value="<?php echo $row_user['id']; ?>"><?php echo $row_user['nama']; ?></option>
            <?php } ?>
        </select><br><br>

        <label for="id_aset">Aset</label>
        <select name="id_aset">
            <?php while ($row_aset = mysqli_fetch_assoc($result_aset)) { ?>
            <option value="<?php echo $row_aset['id']; ?>"><?php echo $row_aset['nama']; ?></option>
            <?php } ?>
        </select><br><br>

        <label for="tgl_peminjaman">Tanggal Peminjaman</label>
        <input type="date" name="tgl_peminjaman"><br><br>

        <label for="tgl_pengembalian">Tanggal Pengembalian</label>
        <input type="date" name="tgl_pengembalian"><br><br>

        <input type="submit" name="pinjam" value="Pinjam">
    </form>
</body>
</html>

<?php
// Tutup koneksi database
mysqli_close($conn);
?>
