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

    <!-- Main -->
    <div class="container-fluid">
        <!-- about -->
        <div class="row pt70 pb70" id="about">
            <div class="col-sm-12 text-center">
                <h1 class="my-font pb40">Hasil Pencarian</h1> 
            </div>
            <div class="col-sm-6 col-md-4 m-auto">
                <h4 class="my-font">Result</h4>
            </div>
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php if(empty($pelanggan)) : ?>
                                        <div class="alert alert-danger" role="alert">
                                           <p align="center"> Data Tidak Di temukan !!! </p>
                                        </div>
                                    <?php else : ?>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Resi Laundry</th>
                                            <th>Pelanggan</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Laundry </th>
                                            <th>Status</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Keluar</th>
                                        </tr>
                                    </thead>                                   
                                  <tbody>
                                        <?php foreach($pelanggan as $p) : ?>
                                        <tr>
                                            <td><?php echo $p['nota']; ?></td>
                                            <td><?php echo $p['nama']; ?></td>
                                            <td><?php echo $p['nama_barang']; ?></td>
                                            <td><?php echo $p['id_jenis_barang']; ?></td>
                                            <td><?php if ($p['status']=="Selesai"){
                                              echo ('<div class="badge badge-success">Completed</div>');
                                            } else {
                                              echo ('<div class="badge badge-warning">In Progress</div>');
                                            } ?> </td>
                                 <?php 
                                 $tgl_masuk = DateTime::createFromFormat('Y-m-d', $p['tgl_masuk']);
                                 $newA = $tgl_masuk->format('d-m-Y');
                                 $tgl_keluar = DateTime::createFromFormat('Y-m-d', $p['tgl_keluar']);
                                 $newB = $tgl_keluar->format('d-m-Y'); ?>
                                            <td><?php echo $newA; ?></td>
                                            <td><?php echo $newB; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <p>* Tanggal Keluar saat status <i>in progres</i> adalah Tanggal perkiraan estimasi dari kami dan akan di update setelah Laundry selesai.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <!-- End  Hover Rows  -->
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

    </div>
        
        
        
        <!-- Footer -->
        <div class="row bg-light">
            <div class="col-xs-10 col-sm-10 text-center m-auto pt20 pb30">
				<p class="wow fadeIn" data-wow-delay="2s">&copy; Copyright <script>document.write(new Date().getFullYear())</script></p>
				<p class=" wow fadeIn" data-wow-delay="2.2s">Bootstrap<sup>4</sup> Theme By <a href="http://devcrud.com" class="text-">DevCRUD</a></p>
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