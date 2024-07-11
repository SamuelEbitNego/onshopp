<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONSHOP</title>
</head>

<body>
	<div class="admin">
		<center>
			<h1>Selamat Datang Kurawa!</h1>
			<h1>Semoga Harimu Menyenangkan!</h1>
		</center>
	</div>
	<style>
		.admin {
			font-weight: bold;
			color: blueviolet;
		}
	</style>

	<center>
		<br>
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
</body>

</html>