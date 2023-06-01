@include('layouts.app-master')

<head>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        .ts1form-group {
            margin-bottom: 20px;
        }
    </style>
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
                        
                        <div class="ts1container">
                            <div class="ts1select-container">
                                <label for="paket">Pilih Paket:</label>
                                <select name="paket" id="paket" required="required" class="form-control" onchange="showDetails(this)">
                                    <option value="" disabled selected>Pilih Paket</option>
                                    <option value="paket1">Paket 1</option>
                                    <option value="paket2">Paket 2</option>
                                    <option value="paket3">Paket 3</option>
                                </select>
                            </div>

                            <div class="ts1detail-container" id="detailPaket">
                                <!-- Detail paket akan ditampilkan di sini -->
                            </div>
                        </div>

                        <script>
                            function showDetails(selectElement) {
                                var detailDiv = document.getElementById('detailPaket');
                                detailDiv.innerHTML = '';

                                var selectedOption = selectElement.options[selectElement.selectedIndex];
                                var selectedValue = selectedOption.value;

                                if (selectedValue !== '') {
                                    // Ganti dengan logika Anda untuk menampilkan detail paket berdasarkan nilai yang dipilih
                                    var detailText = getDetailPaket(selectedValue);
                                    detailDiv.innerHTML = detailText;
                                }

                                detailDiv.style.display = 'block';
                            }

                            function getDetailPaket(paket) {
                                // Ganti dengan logika Anda untuk mendapatkan detail paket berdasarkan nilai yang dipilih
                                var detailText = '';

                                if (paket === 'paket1') {
                                    detailText = 'Ini adalah detail Paket 1';
                                } else if (paket === 'paket2') {
                                    detailText = 'Ini adalah detail Paket 2';
                                } else if (paket === 'paket3') {
                                    detailText = 'Ini adalah detail Paket 3';
                                }

                                return detailText;
                            }

                            var selectElement = document.getElementById('paket');
                            selectElement.onmouseout = function() {
                                var detailDiv = document.getElementById('detailPaket');
                                detailDiv.style.display = 'none';
                            };
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


