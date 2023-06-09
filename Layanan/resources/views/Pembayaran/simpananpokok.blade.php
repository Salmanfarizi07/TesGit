@include('layouts.app-master')

<div class="bg-light p-5 rounded">
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container">
            <h1 class="display-4">Simpanan Pokok</h1>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container2">
            <div class="container2 text-center">
                <div class="text-center">
                    <form action="/Tsarjana/store" method="post">
                        {{ csrf_field() }}
                        <div class="container2">
                            <div class="bluebox">
                                <h3>Data Anggota</h3>
                                ID Anggota: 
                                
                                <!-- Konten untuk data anggota -->
                            </div>
                            <div class="bluebox">
                                <h3>Total Tagihan</h3>
                                <!-- Konten untuk total anggota -->
                            </div>
                        </div>
                        <div class="text">
                            <p>Metode pembayaran:</p>

                                <input type="radio" name="metode" value="metode1">
                                <label for="metode1"></label><br>

                                <input type="radio" name="metode" value="metode2">
                                <label for="metode2"></label><br>

                                <input type="radio" name="metode" value="metode3">
                                <label for="metode3"></label><br>
                        </div>
                        
                            <input type="submit" value="Konfirmasi Pembayaran" class="ts1btn-konfirmasipembayaran">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


