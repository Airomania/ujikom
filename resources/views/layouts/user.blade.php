<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>peminjaman ruangan di gedung perpustakaan</title>  
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
    <div id="preloader">
		<div class="preloader pulse">
			<i class="fa fa-heartbeat" aria-hidden="true"></i>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="{{asset('asset_admin/images/logo.jpg')}}" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Beranda</a></li>
                        <!-- <li><a class="nav-link" href="#about">About Us</a></li> -->
                        <li><a class="nav-link" href="#story">Cara Meminjam</a></li> 
                        <!-- <li><a class="nav-link" href="#family">Family</a></li> -->
                        <li><a class="nav-link" href="#gallery">Galeri</a></li>
                        <li><a class="nav-link" href="#events">Peminjaman</a></li>
						<li><a class="nav-link" href="#contact">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	
	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider" style="background-image:url({{asset('asset_admin/images/slider-01.jpg);')}}" width="10"; height="100";>
						<div class="lbox-caption">
							<div class="lbox-details">
							    <h2>PERPUSTAKAAN</h2>
								<h2>UIN SUNAN GUNUNG DJATI BANDUNG</h2>
								<h2>Peminjaman Ruangan Multimedia & Ruangan Diskusi</h3>
								<p>Website by Ai Romania smk assalaam bandung</p>
								<!-- <a href="#" class="btn ">Contact</a> -->
							</div>
						</div>
					</div>
					<!-- <div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500" style="background-image:url({{asset('asset_admin/images/slider-02.jpg);')}}">
						<div class="lbox-caption">
							<div class="lbox-details">
								<h1>#Leida & #Dominic</h1>
								<h2>We're getting married</h3>
								<p>Save The Date <strong>20 June 2018</strong></p>
								<a href="#" class="btn ">Contact</a>
							</div>
						</div>
					</div> -->
					<!-- <div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="2000" style="background-image:url({{asset('asset_admin/images/slider-03.jpg);')}}">
						<div class="lbox-caption">
							<div class="lbox-details">
								<h1>#Leida & #Dominic</h1>
								<h2>We're getting married</h3>
								<p>Save The Date <strong>20 June 2018</strong></p>
								<a href="#" class="btn">Contact</a>
							</div>
						</div>
						
					</div> --> 
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->
	
	<!-- Start About us -->
	<!-- <div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>Leida <span>&</span> Dominic</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-8 col-md-6 col-sm-12">
								<h2> About <span>Leida</span></h2>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-img">
									<img class="img-fluid rounded" src="{{asset('asset_admin/images/about-img-01.jpg')}}" alt="" />
								</div>
							</div>
						</div>
						<div class="row align-items-center about-main-info">
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-img">
									<img class="img-fluid rounded" src="{{asset('asset_admin/images/about-img-02.jpg')}}" alt="" />
								</div>
							</div>
							<div class="col-lg-8 col-md-6 col-sm-12">
								<h2> About <span>Dominic</span></h2>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End About us -->
	
	<!-- Start Story -->
	<div id="story" class="story-box main-timeline-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Cara Meminjam</h2>
						<p>Silahkan IKuti Tata Cara Peminjamannya</p>
					</div>
				</div>
			</div>
			<div class="row timeline-element separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">         
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            Pertama  
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-left">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">ONE</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
						Klik Peminjaman Jika Akan Meminjam Ruangan
						</p>
					 </div>
				</div>
			</div>
			<div class="row timeline-element reverse separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">         
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            Kedua  
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-right">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">TWO</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
						Pilih Ruangan Yang Akan Di Pinjam
						</p>
					 </div>
				</div>
			</div>
			<div class="row timeline-element separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">         
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            Ketiga  
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-left">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">THREE</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
						Klik Meminjam Dan Langsung Isi Form Yang Sudah Ada Di Sana 
						</p>
					 </div>
				</div>
			</div>
			<div class="row timeline-element reverse separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">         
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            Keempat  
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-right">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">FOUR</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
						   Setelah Mengisi Lalu Tanyakan Ke Petugas Apakah Sudah Ada Data Dia Masuk Apa Belum
						</p>
					 </div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Story -->
	
	<!-- Start Family -->
	<!-- <div id="family" class="family-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Family</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="{{asset('asset_admin/images/family-01.jpg')}}" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Alonso Wiles </h4>
							<p>{ Leida’s Father }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="{{asset('asset_admin/images/family-02.jpg')}}" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Evon Wiles </h4>
							<p>{ Leida’s Mother }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="{{asset('asset_admin/images/family-03.jpg')}}" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Chris Wiles </h4>
							<p>{ Leida’s Brother }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="{{asset('asset_admin/images/family-04.jpg')}}" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Adina Wiles </h4>
							<p>{ Leida’s Sister }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="{{asset('asset_admin/images/family-05.jpg')}}" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Annetta Wiles </h4>
							<p>{ Leida’s Sister }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="{{asset('asset_admin/images/family-06.jpg')}}" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Ladonna Wiles </h4>
							<p>{ Leida’s Sister }</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Family -->
	
	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Gallery</h2>
						<p>Disini ada beberapa poto gedung rahmat djatika atau gedung perpustakaan</p>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class="popup-gallery clearfix">
					<li>
						<a href="images/gallery-01.jpg">
							<img class="img-fluid" src="{{asset('asset_admin/images/gallery-01.jpg')}}" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-02.jpg">
							<img class="img-fluid" src="{{asset('asset_admin/images/gallery-02.jpg')}}" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<!-- <li>
						<a href="images/gallery-03.jpg">
							<img class="img-fluid" src="{{asset('asset_admin/images/gallery-03.jpg')}}" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li> -->
					<li>
						<a href="images/gallery-04.jpg">
							<img class="img-fluid" src="{{asset('asset_admin/images/gallery-04.jpg')}}" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-05.jpg">
							<img class="img-fluid" src="{{asset('asset_admin/images/gallery-05.jpg')}}" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<!-- <li>
						<a href="images/gallery-06.jpg">
							<img class="img-fluid" src="{{asset('asset_admin/images/gallery-06.jpg')}}" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-07.jpg">
							<img class="img-fluid" src="{{asset('asset_admin/images/gallery-07.jpg')}}" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-08.jpg">
							<img class="img-fluid" src="{{asset('asset_admin/images/gallery-08.jpg')}}" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li> -->
				</ul>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Events -->
	<div id="events" class="events-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Peminjaman</h2>
						<p>Silahkan Pilih Ruangan Yang Akan Kalian Pinjam </p>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="{{asset('asset_admin/images/event-img-01.jpg')}}" alt="" />
						</div>
						<h2>Ruanga Multimedia </h2>
						<p>Diruangan Multimedia ini banyak komputer yang bisa kalian gunakan, untuk kepintingan kalian seperti mengerjakan tugas ataupun hal lain. dan kalian akan di beri waktu maksimal penggunaan nya selama 2 jam  </p>
						<a href="multimedia">Meminjam </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="{{asset('asset_admin/images/event-img-02.jpg')}}" alt="" />
						</div>
						<h2>Ruangan Diskusi </h2>
						<p>Di ruangan Diskusi ini kalian bisa menggunakan nya jika kalian membutuhan ruangan untuk berdiskusi dengan kelompok.</p>
						<a href="diskusi">Meminjam </a>
					</div>
				</div>
				<!-- <div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="{{asset('asset_admin/images/event-img-03.jpg')}}" alt="" />
						</div>
						<h2>4 June 2018 Wedding party </h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a href="#">See location ></a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!-- End Events -->
	
	<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>kontak</h2>
						<p>jika kalian ada masalah bisa kalian hubungi kami dengan mengisi form yang ada di bawah </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm">
					  <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<!-- <div class="col-md-12">
							<div class="form-group">
								<select class="custom-select d-block form-control" id="guest" required data-error="Please select an item in the list.">
								  <option disabled selected>Number Of Guest*</option>
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								</select>
								<div class="help-block with-errors"></div>
							</div> 
						</div> -->
						<!-- <div class="col-md-12">
							<div class="form-group">
								<select class="custom-select d-block form-control" id="event" required data-error="Please select an item in the list.">
								  <option disabled selected>I Am Attending*</option>
								  <option value="1">All events</option>
								  <option value="2">Wedding ceremony</option>
								  <option value="3">Reception party</option>
								</select>
								<div class="help-block with-errors"></div>
							</div> 
						</div> -->
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Send Message</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
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