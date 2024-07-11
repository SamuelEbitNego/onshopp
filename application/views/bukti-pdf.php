<!DOCTYPE html>
<html>

<head>
    <title>Bukti Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <h1>Bukti Pembayaran</h1>
    <p>Terima kasih telah melakukan pembayaran. Berikut adalah rincian pembayaran:</p>
    <table border="1">

        <tr>
            <th>No.</th>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Jumlah Bayar</th>
        </tr>
        <?php
        $no = 1;
        $sub_total = 0;
        foreach ($tb_pesanan as $tb_pesanan) :
            $sub_total += $tb_pesanan->harga;
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $tb_pesanan->id_brg; ?></td>
                <td><?php echo $tb_pesanan->nama_brg; ?></td>
                <td><?php echo $tb_pesanan->jumlah; ?></td>
                <td>Rp. <?php echo number_format($tb_pesanan->harga); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <th colspan="4">Sub Total</th>
            <td>Rp. <?php echo number_format($sub_total); ?></td>
        </tr>
    </table>
</body>

</html>