@include('layouts.app-master')

<head>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

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

                        <div class="ts1form-group">
                            <div class="input-box">
                                <label for="id_user">Id User:</label>
                                <input type="text" name="id_user" id="id_user" required="required" class="form-control">
                            </div>
                        </div>
                        
                        <div class="ts1form-group">
                            <div class="input-box">
                                <label for="paket">Pilih Paket:</label>
                                <select name="paket" id="paket" required="required" class="form-control">
                                    <option value="">Pilih Paket</option>
                                    <option value="paket1">Paket 1 - 15.000/Bulan selama 4 tahun</option>
                                    <option value="paket2">Paket 2 - 20.000/Bulan selama 3 tahun</option>
                                    <option value="paket3">Paket 3 - 30.000/Bulan selama 2 tahun</option>
                                </select>
                            </div>
                        </div> 
                        

                        <div class="ts1form-group">
                                <div class="input-box">
                                    <label for="tgl_awal">Tanggal:</label>
                                    <input type="text" name="tgl_awal" id="tgl_awal" required="required" class="form-control">
                                </div>
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


