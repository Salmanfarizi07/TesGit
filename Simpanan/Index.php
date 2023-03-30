<?php

    include "Functions.php";

?>
<h2>DAFTAR SIMPANAN</h2>
<table border="1">
    <tr>
        <td>ID Simpanan</td>
        <td>ID User</td>
        <td>Jenis Simpanan</td>
        <td>Tanggal Masuk</td>
        <td>Jumlah Simpanan</td>
		<td>Edit/Hapus Simpanan</td>
    </tr>
	<?php

        $tampil = mysqli_query($mysqli, "SELECT * FROM simpanan");
        while($hasil = mysqli_fetch_array($tampil)){
    ?>
    <tr>
        <td><?php echo $hasil['id_simpanan']; ?></td>
		<td><?php echo $hasil['id_user']; ?></td>
        <td><?php echo $hasil['jenis_simpanan']; ?></td>
		<td><?php echo $hasil['tgl_awal']; ?></td>
        <td><?php echo $hasil['jumlah_simpanan']; ?></td>
        <td>
            <a href="Update.php?id=<?php echo $hasil['id_user']; ?>">edit</a>|
            <a href="Delete.php?id=<?php echo $hasil['id_user']; ?>">hapus</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>
</body>
</html>
