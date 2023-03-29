<?php
include 'Functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id_user = isset($_POST['id_user']) && !empty($_POST['id_user']) && $_POST['id_user'] != 'auto' ? $_POST['id_user'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $jenis_simpanan = isset($_POST['jenis_simpanan']) ? $_POST['jenis_simpanan'] : '';
    $tgl_awal = isset($_POST['tgl_awal']) ? $_POST['tgl_awal'] : '';
    $jumlah_simpanan = isset($_POST['jumlah_simpanan']) ? $_POST['jumlah_simpanan'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO kontak VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id_user, $jenis_simpanan, $tgl_awal, $jumlah_simpanan]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

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

<?=template_footer()?>