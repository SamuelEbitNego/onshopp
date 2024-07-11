<div class="container-fluid">

	<h4>Invoices Pesanan Baju</h4>
	<table class="table table-bordered table-hover table-striped">

		<tr>
			<th>Id Invoices</th>
			<th>Nama Pesanan</th>
			<th>Alamat Pengiriman</th>
			<th>Tanggal Pesanan</th>
			<th>Batas Pembayaran</th>
			<th>Detail</th>
			<th>Hapus</th>
		</tr>

		<?php foreach ($invoices as $inv) : ?>
			<tr>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nomor ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php echo anchor('admin/invoices/detail/' . $inv->id, '<div class="btn btn-sm btn-secondary">Detail</div>') ?></td>
				<td><?php echo anchor('admin/invoices/hapus/' . $inv->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>