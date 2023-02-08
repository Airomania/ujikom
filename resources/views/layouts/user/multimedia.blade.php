<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Perpustakaan</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('asset_admin/css/bootstrap.min.css')}}">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{asset('asset_admin/css/pogo-slider.min.css')}}">
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('asset_admin/css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('asset_admin/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('asset_admin/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->

    <!-- END LOADER -->

    <br>
    <center><h2>Ruangan multimedia</h2></center>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data peminjaman
                    </div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" class="form-control  @error('tanggal') is-invalid @enderror"
                                    name="tanggal">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nim Mahasiswa</label>
                                <input type="text" class="form-control  @error('nim') is-invalid @enderror"
                                    name="nim">
                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Tujuan</label>
                                <input type="text" class="form-control  @error('tujuan') is-invalid @enderror"
                                    name="tujuan">
                                @error('tujuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label class="form-label">No Hp</label>
                                <input type="text" class="form-control  @error('no_hp') is-invalid @enderror"
                                    name="no_hp">
                                @error('no hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label class="form-label">waktu</label>
                                <input type="text" class="form-control  @error('waktu') is-invalid @enderror"
                                    name="waktu">
                                @error('waktu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label class="form-label">No Pc</label>
                                <input type="text" class="form-control  @error('no_pc') is-invalid @enderror"
                                    name="no_pc">
                                @error('no pc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">COPY RIGHT &copy; 2023 peminjaman ruangan</a> Design By : <a href="https://html.design/">Ai Romania smk assalaam</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<!-- ALL JS FILES -->
	<script src="{{asset('asset_admin/js/jquery.min.js')}}"></script>
	<script src="{{asset('asset_admin/js/popper.min.js')}}"></script>
	<script src="{{asset('asset_admin/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{asset('asset_admin/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('asset_admin/js/jquery.pogo-slider.min.js')}}"></script> 
	<script src="{{asset('asset_admin/js/slider-index.js')}}"></script>
	<script src="{{asset('asset_admin/js/smoothscroll.js')}}"></script>
	<script src="{{asset('asset_admin/js/form-validator.min.js')}}"></script>
    <script src="{{asset('asset_admin/js/contact-form-script.js')}}"></script>
    <script src="{{asset('asset_admin/js/custom.js')}}"></script>
</body>
</html>