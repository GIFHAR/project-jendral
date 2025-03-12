@extends('services.masterservice')

@section('content')
<div class="service-container">
    <div class="image-section">
        <img src="assets/img/servicejendral/Transfer RMB.png" alt="Transfer RMB">
    </div>
    <div>
        <div class="content-section">
            <div class="heading-container">
                <h2>TRANSFER RMB</h2>
            </div>
        
            <p>Tim kami menyediakan layanan transfer RMB ke supplier di China dengan aman, untuk mempermudah proses transaksi Anda. Cukup lakukan pembayaran dalam rupiah, dan kami akan mengurus pembayaran langsung ke rekening supplier di China. Setelahnya, kami akan memberikan bukti pembayaran yang lengkap dan transparan.</p>
        </div>
        
        <div class="transfer-container">
            <div class="transfer-box">
                <h3>Hitung Transfer RMB</h3>
                <p>Silakan masukkan jumlah RMB yang ingin di transfer</p>
                
                <div class="input-group">
                    <input type="number" id="rmbInput" placeholder="Masukkan jumlah RMB">
                    <button class="calculate-button" onclick="calculateIDR()">Hitung Biaya</button>
                </div>

                <input type="text" id="idrOutput" placeholder="Hasil dalam Rupiah" readonly>
            </div>
        </div>
        <div class="contact-section">
            <button class="contact-button" onclick="window.location.href='https://wa.link/mkbx1j'">Hubungi Kami</button>
            <p class="consultation-text">Untuk konsultasi & pembelanjaan</p>
        </div>
    </div>
</div>

<script>
    function calculateIDR() {
        const exchangeRate = 2200; // 1 RMB = 2200 IDR
        let rmbValue = document.getElementById('rmbInput').value;
        let idrValue = rmbValue * exchangeRate;

        // Format output with thousands separator
        document.getElementById('idrOutput').value = idrValue.toLocaleString('id-ID') + " IDR";
    }
</script>

<style>
    .transfer-container {
        margin-top: 40px;
    }
    .transfer-box {
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
    }
    .input-group {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    input {
        flex: 1;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .calculate-button {
        background-color: #114020;
        color: white;
        border: none;
        cursor: pointer;
        padding: 10px 15px;
        font-size: 16px;
        border-radius: 5px;
    }
    .calculate-button:hover {
        background-color: #0d3018;
    }
    #idrOutput {
        width: 100%;
        margin-top: 10px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
    }
</style>
@endsection
