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
                            <div id="details-container" class="details-container">
                                <div id="paket1-details" class="details">Detail Paket 1</div>
                                <div id="paket2-details" class="details">Detail Paket 2</div>
                                <div id="paket3-details" class="details">Detail Paket 3</div>
                            </div>
                        </div>

                        <style>
                            .details-container {
                                display: none;
                            }

                            .details {
                                display: none;
                                background-color: #f9f9f9;
                                padding: 10px;
                                margin-top: 10px;
                            }
                        </style>

                        <script>
                            function showDetails(selectElement) {
                                var selectedValue = selectElement.value;
                                var detailsContainer = document.getElementById('details-container');
                                var detailsElements = detailsContainer.getElementsByClassName('details');

                                // Hide all detail elements
                                for (var i = 0; i < detailsElements.length; i++) {
                                    detailsElements[i].style.display = 'none';
                                }

                                // Show the selected detail element
                                if (selectedValue !== '') {
                                    var selectedDetailsElement = document.getElementById(selectedValue + '-details');
                                    selectedDetailsElement.style.display = 'block';
                                }
                            }

                            // Show details when hovering over select element
                            var selectElement = document.getElementById('paket');
                            selectElement.addEventListener('mouseover', function () {
                                showDetails(this);
                            });

                            // Hide details when not hovering over select element
                            selectElement.addEventListener('mouseout', function () {
                                var detailsContainer = document.getElementById('details-container');
                                detailsContainer.style.display = 'none';
                            });
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


