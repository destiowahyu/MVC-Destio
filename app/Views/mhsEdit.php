<html>
<head>
	<title>Native MVC Example</title>
	<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
	<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4">&nbsp;</div>
			<div class="col-md-4"><h3>Ubah data Anda di sini</h3>
				<form method="post" action="/mvc-example/?act=update">
					<div class="form-group">
						<label for="exampleInputNim">NIM</label>
						<input type="hidden" name="id" value="<?= $rs['id'] ?>">
						<input type="text" class="form-control" id="exampleInputNim" name="nim" placeholder="NIM" value="<?= $rs['nim'] ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputNama">Nama</label>
						<input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama" value="<?= $rs['nama'] ?>">
					</div>

					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<br/>
				<a href="/mvc-example/?act=tampil-data">Kembali</a>
			</div>
			<div class="col-md-4">&nbsp;</div>
		</div>
	</div>
</body>
</html>