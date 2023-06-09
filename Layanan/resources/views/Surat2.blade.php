@include('layouts.app-master')

<head>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<div class="bg-light p-5 rounded">
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container">
            <h1 class="display-4"><h1 class="text-center">Sistem Informasi Surat</h1>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="container text-center">
                <div class="text-center">
                    <form action="/Tsarjana/store" method="post">
                        {{ csrf_field() }}

                        <div class="ts1form-group">
                            <div class="input-box">
                                <label for="jenis_tabungan">Jenis Surat</label>
                                <select name="jenis_tabungan" required="required" class="form-control">
									<option value="">Pilih Jenis</option>
                                    <option value="paket1">Surat Keterangan Aktif Anggota Koperasi</option>
                                    <option value="paket2">Surat Keterangan & Pinjaman</option>
                                </select>
                            </div>
                        </div>

						<div class="ts1form-group">
                            <div class="input-box">
                                <label for="status">Jabatan</label>
                                <select name="status" required="required" class="form-control">
									<option value="">Pilih Role</option>
                                    <option value="paket1">Admin</option>
                                    <option value="paket2">Anggota</option>
                                </select>
                            </div>

                        <div class="ts1form-group">
                                <div class="input-box">
                                    <label for="tgl_awal">Tanggal Bergabung Koperasi</label>
                                    <input type="text" name="tgl_awal" id="tgl_awal" required="required" class="form-control">
                                </div>
                            </div>

						<div class="ts1form-group">
                            <div class="input-box">
                                <label for="desc_surat">Deskripsi Penggunaan Surat</label>
                                <input type="text" name="desc_surat" id="desc_surat" required="required" class="form-control">
                            </div>

                            <div class="ts1btn-submit-container">
                                <input type="submit" value="Simpan Data" class="ts1btn-submit">
                            </div>

                            <script>
                                $(function() {
                                    $("#tgl_awal").datepicker({
                                        dateFormat: "yy-mm-dd",
                                        showButtonPanel: true
                                    });
                                });
                            </script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


