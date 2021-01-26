<!DOCTYPE html>
<html>
<head>
	<!-- require meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">

	<!-- tittle bar website -->
	<title>KOS IDAMAN V.1</title>
	<style type="text/css">
	.btn-menu a{
		margin-right: 20px;
	}
	.navbar{
		border-bottom: 1px solid #d1d1d1;
		background-color: white;
	}
	.jumbotron{
		background: url('asset/img/banner-sample.jpg');
	}
	.bg-color{
		background-color: rgba(13, 13, 13, 0.4);
		padding: 20px;
		color: white;
	}
	.filter-form{
		background-color: #007bff;
		padding: 20px 30px;
		color :white;
		font-size: 12;
	}
	.form-lokasi select{
		margin-bottom: 20px;
	}
	.form-group{
		margin-bottom: 20px;
	}
	.btn-cari{
		width: 100%;
		border-radius: 5px;
		border: none;
		cursor: pointer;
	}
	.clear{
		clear: both;
	}
	.garis{
		margin: 50px 10px;
	}
	.info{
		padding: 20px 50px;
	}
	.align-justify{
		text-align: justify;
	}
	.sosmed a{
		padding: 20px 20px;
	}
	.sosmed a img{
		margin: 20px;
	}
	.privacy{
		background-color: #f7f7f7;
		padding: 30px 50px;
	}
	.bot-logo{
		text-align: center;
	}
	.copyright{
		padding: 15px 50px;
		background-color: #818a91;
		color: whitesmoke;
		font-weight: bold;
		font-variant: small-caps;
		font-style: italic;
		font-size: 20px;
	}
	</style>
</head>
<body>

	<div class="container-fluid">
	<!-- menu -->
		<!-- Image and text -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-light justify-content-between">
  			<a class="navbar-brand" href="#">
  			<img src="asset/img/logo/sample.png" width="60" class="d-inline-block align-center" alt="logo">
  			Kos Idaman
  			</a>
  			<div class="btn-menu">
				<a href="#" class="btn btn-primary">Login</a>
				<a href="#" class="btn btn-primary">Register</a>
			</div>
		</nav>
	</div>
	<div class="container" style="margin-top: 10%">
		<!-- banner and form layout -->
		<div class="row ">
			<div class="col col-md-7 col-sm-12">
				<div class="jumbotron">
					<div class="bg-color">
						<h1 class="display-4">Selamat Datang</h1>
  						<p class="lead"><strong>KOS IDAMAN</strong> merupakan aplikasi yang digunakan untuk mencari kos yang sesuai keinginan kamu</p>
  						<hr class="my-4">
  						<p>Temukan Kos Idaman mu disini</p>
  						<p class="lead">
    						<a class="btn btn-primary btn-lg" href="#" role="button">Rekomendasi</a>
  						</p>
					</div>
				</div>
			</div>
			<div class="col col-md-5 col-sm-12 filter-form">
				<h3>Filter Kos</h3>
				<form action="" method="POST">
					<div class="form-group row form-lokasi">
						<div class="col-sm-12">
							<label>Lokasi</label>	
						</div>
    					<div class="col-sm-6">
    						<select class="form-control" id="kabupaten">
      							<option>Tulungagung</option>
      							<option selected="selected">Kab / Kota</option>
      							<option>Blitar</option>
      							<option>Kab. Blitar</option>
    						</select>
						</div>
						<div class="col-sm-6">
							<select class="form-control" id="kecamatan">
								<option selected="selected">Kecamatan</option>
      							<option>Rejotangan</option>
      							<option>Sananwetan</option>
      							<option>Talun</option>
    						</select>	
						</div>
    					<div class="col-sm-12">
    						<select class="form-control" id="kelurahan">
    							<option selected="selected">Kelurahan</option>
      							<option>Banjarejo</option>
      							<option>Klampok</option>
      							<option>Talun</option>
    						</select>
    					</div>
    					<div class="col-sm-4">
							<label>Kapasitas Kos</label>
						</div>
						<div class="col-sm-6">
							<select class="form-control" id="kelurahan">
    							<option selected="selected">1</option>
      							<option>2</option>
      							<option>3</option>
      							<option>4</option>
    						</select>
						</div>
						<div class="col-sm-12">
							<label>Fasilitas</label>
						</div>
						<div class="col-sm-12">
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" value="" id="tv">
  								<label class="form-check-label" for="tv">
  									TV
  								</label>
							</div>
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" value="" id="ac">
  								<label class="form-check-label" for="ac">
  									AC
  								</label>
							</div>
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" value="" id="wifi">
  								<label class="form-check-label" for="wifi">
  									WiFi
  								</label>
							</div>
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" value="" id="km-in">
  								<label class="form-check-label" for="km-in">
  									Kamar mandi dalam
  								</label>
							</div>
							<div class="form-check form-check-inline">
  								<input class="form-check-input" type="checkbox" value="" id="lemari">
  								<label class="form-check-label" for="lemari">
  									Lemari
  								</label>
							</div>
						</div>
					</div>
					<div class="form-inline">
						<div class="form-group mb-2">
							<label style="margin-right:10px">Harga</label>
						
							<input type="text" name="hargaMin" placeholder="Harga terendah" style="margin-right:10px;width: 35%;">
						
							- 
							<input type="text" name="hargaMax" placeholder="Harga tertinggi" style="margin-left:10px;width: 35%;">
						</div>
					</div>

					<div class="form-inline" style="margin:20px 0">
						<div class="form-group mb-2" style="margin-right:10px">
							<label>Pembayaran</label>
						</div>
						<div class="form-group mb-2">
							<select class="form-control" id="jenisPembayaran">
    							<option selected="selected">Bulanan</option>
      							<option>Harian</option>
      							<option>Tahunan</option>
    						</select>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<input type="submit" name="submit" value="Cari" class="btn-cari">	
						</div>
					</div>
				</form>
			</div>
		</div>
		
		<!-- Rekomendasi Page -->
		<h2>Rekomendasi Kos</h2>
		<div class="card-deck">
  			<div class="card">
  				<a href="#">
    				<img class="card-img-top" src="asset/img/1.jpg" alt="kost">
    				<div class="card-body">
      					<h5 class="card-title">Kos Rich Man</h5>
      					<p class="card-text">Lokasi Blitar</p>
      					<p class="card-text"><small class="text-muted">Kasur WiFi</small></p>
    				</div>
    			</a>
  			</div>
  			<div class="card">
  				<a href="#">
    				<img class="card-img-top" src="asset/img/2.jpg" alt="kost">
    				<div class="card-body">
      					<h5 class="card-title">Kos Rich Man</h5>
      					<p class="card-text">Lokasi Blitar</p>
      					<p class="card-text"><small class="text-muted">Kasur WiFi</small></p>
    				</div>
    			</a>
  			</div>
  			<div class="card">
  				<a href="#">
    				<img class="card-img-top" src="asset/img/3.jpg" alt="kost">
    				<div class="card-body">
      					<h5 class="card-title">Kos Rich Man</h5>
      					<p class="card-text">Lokasi Blitar</p>
      					<p class="card-text"><small class="text-muted">Kasur WiFi</small></p>
    				</div>
    			</a>
  			</div>
		</div>
	</div>
	<div class="container-fluid">
		<hr class="garis">
		<!-- footer -->
		<footer>
			<div class="row info">
				<div class="col-md-8 col-sm-10 align-justify">
					<span style="font-size:25px;font-weight:bolder">Kos Idaman</span> adalah aplikasi penyedia informasi mengenai kos di Jawa timur. Aplikasi masih dalam tahap pengembangan.Pembuatan aplikasi ini bertujuan agar memudahkan pengguna dalam mencari kost di sekitar wilayah Jawa Timur. Pembuat berharap agar aplikasi ini bisa bermanfaat bagi para mahasiswa atau siswa dari luar kota yang mencari kost dengan harga yang sesuai dengan kantong mereka.
				</div>
				<div class="col-md-4 col-sm-2 sosmed">
					<a href="#"><img src="asset/img/fb.png" class="img-responsive" width="40" alt="fb"></a>
					<a href="#"><img src="asset/img/gmail.png" class="img-responsive" width="40" alt="gmail"></a>
					<a href="#"><img src="asset/img/ig.png" class="img-responsive" width="40" alt="ig"></a>
				</div>
			</div>
			<div class="row privacy">
				<div class="col-md-3 col-sm-12 bot-logo">
					<img src="asset/img/logo/sample.png" width="100" class="d-inline-block align-center" alt="logo"><br>
					<strong>KOS IDAMAN</strong>
				</div>
				<div class="col-md-3 offset-md-1 col-sm-12">
					<h6>Kamu dapat menemukan kami di :</h6>
					<ul class="list-unstyled">
						<li><b>Alamat:</b> Jl. Majapahit No.2- 4, Sananwetan, Kec. Sananwetan, Kota Blitar, Jawa Timur 66137</li>
						<li><b>Telepon:</b> (0342) 813145</li>
						<li><b>Provinsi:</b> Jawa Timur</li>

					</ul>
				</div>
				<div class="col-md-3 col-sm-12">
					<a href="https://www.google.com/maps/place/Universitas+Islam+Balitar/@-8.0985584,112.1839676,15z/data=!4m5!3m4!1s0x2e78ec64baf88d45:0xf356d9dd9e6b3a31!8m2!3d-8.0985589!4d112.183966"><img src="asset/img/peta.png" width="400" alt="peta unisba"></a>
				</div>
			</div>
			<div class="row copyright">
				<div class="col-md-12 text-right">
					&copy;Kos Idaman 2021
				</div>
			</div>
		</footer>
	</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>