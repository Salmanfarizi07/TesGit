<?php
// Koneksi database
include 'config.php';

// Mengambil data dari tabel peminjaman
$sql = "SELECT * FROM peminjaman";
$result = mysqli_query($conn, $sql);

// Menampilkan data dalam tabel
echo "<table>
        <tr>
            <th>No.</th>
            <th>Nama Peminjam</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Jumlah Pinjaman</th>
            <th>Aksi</th>
        </tr>";
$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>" . $no . "</td>
            <td>" . $row["nama_peminjam"] . "</td>
            <td>" . $row["tanggal_pinjam"] . "</td>
            <td>" . $row["tanggal_kembali"] . "</td>
            <td>" . $row["jumlah_pinjaman"] . "</td>
            <td>
                <a href='edit.php?id=" . $row["id"] . "'>Edit</a> |
                <a href='delete.php?id=" . $row["id"] . "'>Delete</a>
            </td>
        </tr>";
    $no++;
}
echo "</table>";

// Menutup koneksi database
mysqli_close($conn);
?>
