@include('layouts.app-master')

<div class="bg-light p-5 rounded">
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container">
            <h1 class="display-4">Pendaftaran Tabungan Sarjana</h1>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="container text-center">
                <div class="text-center">
                    <form action="/Tsarjana/store" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="input-box">
                                <label for="id_user">Id User:</label>
                                <input type="text" name="id_user" id="id_user" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-box">
                                <label for="paket">Pilih Paket:</label>
                                <input type="text" name="paket" id="paket" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-box">
                                <label for="tgl_awal">Tanggal:</label>
                                <input type="text" name="tgl_awal" id="tgl_awal" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="ts1btn-submit-container">
                            <input type="submit" value="Simpan Data" class="ts1btn-submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


