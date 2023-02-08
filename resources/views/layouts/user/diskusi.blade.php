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
    <center><h2>Ruangan Diskusi</h2></center>
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
                        <form action="{{ route('peminjaman2.store') }}" method="post">
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
                                <label class="form-label">Nama penanggung jawab Ruangan</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label class="form-label">fakultas</label>
                                <select class="form-control  @error('fakultas') is-invalid @enderror"name="fakultas">
                                <option selected>pilih salah satu</option>
                                <option value="Ushuluddin">Ushuluddin</option>
                                <option value="Tarbiyah dan Keguruan">Tarbiyah dan Keguruan.</option>
                                <option value="Syariah dan Hukum">Syariah dan Hukum</option>
                                <option value="Dakwah dan Komunikasi">Dakwah dan Komunikasi.</option>
                                <option value="Adab dan Humaniora">Adab dan Humaniora</option>
                                <option value="Psikologi">Psikologi</option>
                                <option value="Sains dan Teknologi">Sains dan Teknologi</option>
                                <option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
                                </select>
                                @error('fakultas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                                <select class="form-control  @error('jurusan') is-invalid @enderror"name="jurusan">
                                <option selected>pilih salah satu</option>
                                <option value="Ilmu Hukum">Ilmu Hukum</option>
                                <option value="Ilmu Agama Islam">Ilmu Agama Islam</option>
                                <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                                <option value="Keguruan & Pendidikan">Keguruan & Pendidikan</option>
                                <option value="Manajemen Pendidikan">Manajemen Pendidikan</option>
                                <option value="Fisika">Fisika</option>
                                <option value="Kimia">Kimia</option>
                                <option value="Biologi">Biologi</option>
                                <option value="Sastra Arab">Sastra Arab</option>
                                <option value="Sastra Inggris">Sastra Inggris</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="Psikologi">Psikologi</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Agroteknologi">Agroteknologi</option>
                                <option value="Sosiologi">Sosiologi</option>
                                <option value="Ilmu Politik">Ilmu Politik</option>
                                <option value="Administrasi Negara (Publik)">Administrasi Negara (Publik)</option>
                                <option value="Filsafat">Filsafat</option>
                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Ekonomi Syariah">Ekonomi Syariah</option>
                                <option value="Manajemen Keuangan">Manajemen Keuangan</option>
                                </select>
                                @error('jurusan')
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
                            <label class="form-label">Waktu Mulai</label>
                                <input type="text" class="form-control  @error('waktu_mulai') is-invalid @enderror"
                                    name="waktu_mulai">
                                @error('waktu_mulai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label class="form-label">Waktu Selesai</label>
                                <input type="text" class="form-control  @error('waktu_selesai') is-invalid @enderror"
                                    name="waktu_selesai">
                                @error('waktu_selesai')
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