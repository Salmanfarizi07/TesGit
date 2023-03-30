<?php
include 'Functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
//Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id_simpanan = isset($_POST['id_simpanan']) ? $_POST['id_simpanan'] : '';
        $id_user = isset($_POST['id_user']) ? $_POST['id_user'] : NULL;
        $jenis_simpanan = isset($_POST['jenis_simpanan']) ? $_POST['jenis_simpanan'] : '';
        $tgl_awal = isset($_POST['tgl_awal']) ? $_POST['tgl_awal'] : '';
        $jumlah_simpanan = isset($_POST['jumlah_simpanan']) ? $_POST['jumlah_simpanan'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE simpanan SET id_simpanan = ?, id_user = ?, jenis_simpanan = ?, tgl_awal = ?, jumlah_simpanan = ? WHERE id = ?');
        $stmt->execute([$id_simpanan, $id_user, $jenis_simpanan, $tgl_awal, $jumlah_simpanan, $_GET['id_simpanan']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM kontak WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>


<div class="content update">
    <h2>Create Simpanan</h2>
    <form action="create.php" method="post">
        <label for="id">ID User</label>
        <input type="index" name="id_user" value="auto" id="id_user">
        <label for="jenis_simpanan">Jenis Simpanan</label>
        <label for="text">tgl_awal</label>
        <input type="text" name="jenis_simpanan" id="jenis_simpanan">
        <input type="date" name="tgl_awal" id="tgl_awal">
        <label for="jumlah_simpanan">Jumlah Simpanan</label>
        <input type="text" name="jumlah_simpanan" id="jumlah_simpanan">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>
