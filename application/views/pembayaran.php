<div class="container-fluid">

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<center><div class="btn btn-sm btn-info">
				<?php 
				$grandtotal = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grandtotal = $grandtotal + $item['subtotal'];
					}

					echo "Total Belanja Anda: Rp. ".number_format($grandtotal, 0, ',','.');
					?>
				</div></center>
				<br><br><br>
				<h3 align="center">Input Halaman Pengiriman & Pembayaran</h3>
				<form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" placeholder="Nama Anda" class="form-control">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" placeholder="Email Anda" class="form-control">
					</div>

					<div class="form-group">
						<label>Nomor Telp</label>
						<input type="text" name="nama" placeholder="Nomor Anda" class="form-control">
					</div>

					<div class="form-group">
						<label>Alamat Lengkap</label>
						<input type="text" name="alamat" placeholder="Alamat Anda" class="form-control">
					</div>

					<div class="form-group">
						<label>Jasa Pengiriman</label>
						<select>
							<option>JNE</option>
							<option>TIKI</option>
							<option>POS</option>
							<option>GOJEK</option>
							<option>GRAB</option>
						</select>
					</div>

					<div class="form-group">
						<label>Bank Pembayaran</label>
						<select>
							<option>BCA - xxxxx</option>
							<option>MANDIRI - xxxxx</option>
							<option>BRI - xxxxx</option>
							<option>BNI - xxxxx</option>
						</select>
					</div>

					<button type="submit" class="btn btn-sm btn-primary">Pesan</button>
					<br>
					<br>
					<br>
				</form>

				<?php
			} else{
				echo "Keranjang Anda Tidak Terisi";
			}  
			?>
			<div class="col-md-2"></div>
		</div>

		
		<div class="col-md-8"></div>

	</div>