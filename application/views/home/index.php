<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liquid Laundry</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='subject' content='Light-Sight'>
	<meta name="description" content="Liquid Laundry">
	<meta name='copyright' content='DevCRUD'>
	<meta name='robots' content='index,follow'>
	<meta name='author' content='DevCRUD'>
	<link rel="icon" type="image/png" href="<?= base_url();?>/favicon.png">
    <?php $this->load->view('temp/header'); ?>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/app.css">
</head>

<body id="home" data-spy="scroll" data-target="#sidebar" data-offset="50">
       
    <!--  Sidebar  -->
    <nav id="sidebar" class="bg-dark text-white pt50">
        <div id="dismiss">
            <i class="fa fa-arrow-left"></i>
        </div>
        <img src="<?= base_url();?>assets/img/logo.PNG" alt="Liquid Laundry">
        <ul class="nav flex-column pt50">
            <li class="nav-item first">
                <a class="nav-link active" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#work">Work</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#testimonial">Testimonial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Maps</a>
            </li>
        </ul>       
    </nav>

    <!--  Main-Content -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top bg-light" data-spy="affix" data-offset-top="50">
        <a id="sidebarCollapse">
            <span class="navbar-toggler-icon"></span>
        </a>
        <a href="<?= base_url();?>" class="nav-brand pl60">
            <span class="text-liquid">Liquid Laundry</span>
        </a>
        <a class="navbar-brand m-auto" href="<?= base_url();?>"></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <!--- <a href="#" class="nav-link"><span class="fa fa-user"></span></a> --->
            </li>
        </ul>
    </nav>

    <div class="header-wrapper">
        <div class="header-overlay text-white text-center">
            <div class="row m-auto pt50">
                <div class="col-xs-5 col-sm-6 col-md-5 mr-auto">
                    <img src="<?= base_url();?>/assets/img/logo.PNG" class="w-logo-md" alt="boostrap 4 free templates, bootstrap 4 resume template.">
                </div>
                <div class="col-xs-5 text-center ml-auto col-sm-6 col-md-5">
                    <span class="pr10 text-white">Ikuti Kami</span>
                        <button class="bg-liquid circle-30 ml5"><i class="fa fa-facebook"></i></button>
                        <button class="bg-liquid circle-30 ml5"><a class="text-white"  target="_blank" href="https://www.instagram.com/liquid.laundry/"><i class="fa fa-instagram"></i></a></button>
                        <button class="bg-liquid circle-30 ml5"><i class="fa fa-twitter"></i></button>
                        <button class="bg-liquid circle-30 ml5"><i class="fa fa-youtube"></i></button>
                </div>
            </div>
            <form method="post" action="<?= base_url('home/hasil');?>">
            <h1 class="pt80 font60 pb10"><b>Check Resi Laundry</b></h1>
            <p class="col-xs-10 col-sm-6 m-auto text-white font20 pb30">
            We bring more effecient and clean energy to your fashion.</p>
            <div class="row m0 pt15">
                <div class=" col-xs-8 col-sm-8 col-md-4 m-auto">
                    <div class="input-group input-group-lg">
                        <input type="text" name="keyword" id="keyword" class="form-control rounded-l-b border-black" placeholder="No Resi">
                        <span class="input-group-btn">
                            <button class="btn bg-liquid rounded-r-b pl15 pr15" type="submit">Check Resi</button>
                        </span>
                    </div>
                </div>
            </div>
          </form>
        </div>
    </div>

    <!-- Main -->
    <div class="container-fluid">
        <!-- about -->
        <div class="row pt70 pb70" id="about">
            <div class="col-sm-12 text-center">
                <h1 class="my-font pb40">Who We Are</h1> 
            </div>
            <div class="col-sm-6 col-md-4 m-auto">
                <h4 class="my-font">Liquid Laundry</h4>
                <p class="pt10">Liquid Laundry adalah Jasa Pencucian dengan berbagai jenis penawaran jasa
                beberapa contoh paket kami ada di samping.</p>
            </div>
            <div class="col-sm-5 col-md-4 m-auto">
                <div id="accordion" role="tablist">
                    <div class="card mb2 rounded-0">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" class="accord" href="#One" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-chevron-right chevron font13 mr10"></i><span class="font17 my-font">Paket Reguler</span>
                                </a>
                            </h5>
                        </div>
                        <div id="One" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <img src="<?= base_url();?>assets/img/2.jpg" class="card-img-top">
                        </div>
                    </div>
                    <div class="card mb2 rounded-0">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" class="accord" href="#Two" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-chevron-right chevron font13 mr10"></i><span class="font17 my-font">Paket BedCover</span>
                                </a>
                            </h5>
                        </div>
                        <div id="Two" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <img src="<?= base_url();?>assets/img/3.jpg" class="card-img-top">
                        </div>
                    </div>
                    <div class="card mb2 rounded-0">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" class="accord" href="#Three" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-chevron-right chevron font13 mr10"></i><span class="font17 my-font">Paket Sepatu</span>
                                </a>
                            </h5>
                        </div>
                        <div id="Three" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <img src="<?= base_url();?>assets/img/1.jpg" class="card-img-top">
                        </div>
                    </div>
                    <div class="card mb2 rounded-0">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" class="accord" href="#Four" aria-expanded="false" aria-controls="collapseOne">
                                    <i class="fa fa-chevron-right chevron font13 mr10"></i><span class="font17 my-font">Great Service</span>
                                </a>
                            </h5>
                        </div>
                        <div id="Four" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <img src="<?= base_url();?>assets/img/4.jpg" class="card-img-top">
                        </div>
                    </div>
                </div>
            </div>  
        </div>
         <!-- Work -->
        <div class="row">
            <div class="col-sm-12 text-center" id="work">
                <h1 class="my-font pt70 pb50">Latest Works</h1>
            </div>
            <div class="col-sm-10 col-md-9 m-auto">
               
                <div class="row p10 pb60">
                    <div class="col-sm-4 col-md-3 m0 p0 cont">
                       <img src="<?= base_url();?>assets/img/regis2.jpg" alt="boostrap 4 free templates, bootstrap 4 resume template." class="img-responsive work-img" width="100%" height="auto">
                        <div class="middle">
                            <div class="text">
                                <h4>Liquid Laundry</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 m0 p0 cont">
                       <img src="<?= base_url();?>assets/img/crew.jpg" alt="boostrap 4 free templates, bootstrap 4 resume template." class="img-responsive work-img" width="100%" height="auto">
                        <div class="middle">
                            <div class="text">
                                <h4>Kerjasama Asrama</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 m0 p0 cont">
                        <img src="<?= base_url();?>assets/img/regis.jpg" alt="boostrap 4 free templates, bootstrap 4 resume template." class="img-responsive work-img" width="100%" height="auto">
                        <div class="middle">
                            <div class="text">
                                <h4>Karyawan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 m0 p0 cont">
                         <img src="<?= base_url();?>assets/img/ruangan1.jpg" alt="boostrap 4 free templates, bootstrap 4 resume template." class="img-responsive work-img" width="100%" height="auto">
                        <div class="middle">
                            <div class="text">
                                <h4>Lokasi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 m0 p0 cont">
                         <img src="<?= base_url();?>assets/img/diskon.jpg" alt="boostrap 4 free templates, bootstrap 4 resume template." class="img-responsive work-img" width="100%" height="auto">
                        <div class="middle">
                            <div class="text">
                                <h4>Diskon</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 m0 p0 cont">
                         <img src="<?= base_url();?>assets/img/petugas.jpg" alt="boostrap 4 free templates, bootstrap 4 resume template." class="img-responsive work-img" width="100%" height="auto">
                        <div class="middle">
                            <div class="text">
                                <h4>Petugas</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 m0 p0 cont">
                        <img src="<?= base_url();?>assets/img/mobil.jpg" alt="boostrap 4 free templates, bootstrap 4 resume template." class="img-responsive work-img" width="100%" height="auto">
                        <div class="middle">
                            <div class="text">
                                <h4>Delivery</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 m0 p0 cont">
                       <img src="<?= base_url();?>assets/img/tas.jpg" alt="boostrap 4 free templates, bootstrap 4 resume template." class="img-responsive work-img" width="100%" height="auto">
                        <div class="middle">
                            <div class="text">
                                <h4>Tas</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Testmonial -->
        <div class="row sub-wrapper text-white text-center" id="testimonial">
            <div class="testmonial-overlay col-sm-12">
                <h1 class="p70 my-font">Testimonials</h1>
                <div class="row">
                    <div class="col-md-10 m-auto pb70">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active col-sm-9 col-md-10 m-auto">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsam consequuntur quo debitis perspiciatis tenetur nulla perferendis explicabo, vel exercitationem distinctio. Ea eaque odio minima ipsam tempore modi pariatur officia?</p>
                                    <h4 class="my-font">Nanda Saputra Pradana</h4>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                </div>
                                <div class="carousel-item col-sm-9 col-md-10 m-auto">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsam consequuntur quo debitis perspiciatis tenetur nulla perferendis explicabo, vel exercitationem distinctio. Ea eaque odio minima ipsam tempore modi pariatur officia?</p>
                                    <h4 class="my-font">Ida Bagus Raka Sastra</h4>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                </div>
                                <div class="carousel-item col-sm-9 col-md-10 m-auto">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsam consequuntur quo debitis perspiciatis tenetur nulla perferendis explicabo, vel exercitationem distinctio. Ea eaque odio minima ipsam tempore modi pariatur officia?</p>
                                    <h4 class="my-font">Alyasi</h4>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                </div>
                                <div class="carousel-item col-sm-9 col-md-10 m-auto">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsam consequuntur quo debitis perspiciatis tenetur nulla perferendis explicabo, vel exercitationem distinctio. Ea eaque odio minima ipsam tempore modi pariatur officia?</p>
                                    <h4 class="my-font">I Putu Yuda</h4>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                </div>
                            </div>
                            <div class="carousel-item col-sm-9 col-md-10 m-auto">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsam consequuntur quo debitis perspiciatis tenetur nulla perferendis explicabo, vel exercitationem distinctio. Ea eaque odio minima ipsam tempore modi pariatur officia?</p>
                                    <h4 class="my-font">Christine Yunita</h4>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                    <i class="fa fa-star text-gold"></i>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact -->
        <div class="row pt70 pb70" id="contact">
            <div class="col-sm-5 m-auto center">
                <h3 class="pb40 my-font">Find Us</h3>
                <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.267659829262!2d107.63027131414536!3d-6.977712670264785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9afe854703f%3A0x36bc41b1283bdb2a!2sLiquid+Laundry+Sukabirus!5e0!3m2!1sid!2sid!4v1554806757173!5m2!1sid!2sid" width="100%" height="auto"></iframe></div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="row bg-light">
            <div class="col-xs-10 col-sm-10 text-center m-auto pt20 pb30">
				<p class="wow fadeIn" data-wow-delay="2s">&copy; Copyright <script>document.write(new Date().getFullYear())</script></p>
				<p class=" wow fadeIn" data-wow-delay="2.2s">Bootstrap<sup>4</sup> Theme By <a href="http://devcrud.com" class="text-">DevCRUD</a></p>
			</div>
        </div>
         
    </div>
    
	<script src="<?= base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url();?>assets/js/popper.min.js"></script>
	<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>assets/js/pace.min.js"></script>
	<script src="<?= base_url();?>assets/js/affix.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>
	<script src="<?= base_url();?>assets/js/app.js"></script>
</body>
</html>