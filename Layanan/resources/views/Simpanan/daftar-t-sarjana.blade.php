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
                                    <option value="" disabled selected>Pilih Paket</option>
                                    <option value="paket1" onmouseover="showDetails('paket1')">Paket 1</option>
                                    <option value="paket2" onmouseover="showDetails('paket2')">Paket 2</option>
                                    <option value="paket3" onmouseover="showDetails('paket3')">Paket 3</option>
                                </select>
                            </div>
                        </div>

                        <div id="detailPaket">
                            <!-- Detail paket akan ditampilkan di sini -->
                        </div>

                        <script>
                            function showDetails(paket) {
                                var detailDiv = document.getElementById('detailPaket');
                                detailDiv.innerHTML = '';

                                // Ganti dengan logika Anda untuk menampilkan detail paket berdasarkan nilai yang dipilih
                                var detailText = 'Detail Paket ' + paket;
                                detailDiv.innerHTML = detailText;
                            }
                        </script>



                        <div class="ts1form-group">
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


