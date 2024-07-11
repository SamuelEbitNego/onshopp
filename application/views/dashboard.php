<div class="user">
    <center>
        <h1>Selamat Datang User!</h1>
        <h1>Semoga Harimu Menyenangkan!</h1>
    </center>
</div>
<style>
    .user {
        font-weight: bold;
        color: black;
    }
</style>

<center>
    <br>
    <br>
    <h2>WAKTU SEKARANG</h2>
</center>
<center>
    <h2 style="font-size: 30px; font-family: arial; color: blue; " id="jam"></h2>
</center>
<script>
    window.onload = function() {
        jam();
    }

    function jam() {
        var e = document.getElementById('jam'),
            d = new Date(),
            h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

        e.innerHTML = h + ':' + m + ':' + s;

        setTimeout('jam()', 1000);
    }

    function set(e) {
        e = e < 10 ? '0' + e : e;
        return e;
    }
</script>


<div class="container-fluid">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active mb-0 ml-0">
            </div>
        </div>
    </div>

    <div class="row text-center mt-3 mb-4">

        <?php foreach ($barang as $brg) : ?>

            <div class="card ml-3 mb-4" style="width: 10em;">
                <img src="<?php echo base_url() . '/foto/' . $brg->gambar ?> " class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title mb-3"><?php echo $brg->nama_brg ?></h5>
                    <small><?php echo $brg->spesifikasi_produk ?></small>
                    <br>
                    <span class="btn btn-sm btn-success mb-3">Rp.<?php echo number_format($brg->harga, 0, ',', '.') ?></span>
                    <br>
                    <?php echo anchor('dashboard/tambah_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah Keranjang</div>') ?>
                    <br>
                    <br>
                    <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-secondary">Detail</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>