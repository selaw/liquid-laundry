<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('temp/header');
  $this->load->view('temp/layout');
  $this->load->view('temp/sidebar');
?>

        <div class="main-content">
                <section class="section">
                  <div class="section-header">
                <h1 class="page-head-line" >Data Pelanggan</h1> &nbsp; &nbsp; <?= $this->session->flashdata('flash'); ?>
            </div>

   <div class="section-body">  
    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 line" >
                            <div class="panel panel-default">
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left" action="<?= base_url('admin/input_pelanggan'); ?>">

                                        <div class="form-group">
                                            <input type="hidden" name="nota" class="form-control"  value="<?= $kode; ?>"  readonly> 

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="nama" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nama Pelanggan" value="<?= set_value('nama'); ?>">
                                                 <?= form_error('nama',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="Email Pelanggan"value="<?= set_value('email'); ?>">
                                                 <?= form_error('email',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="tel" name="no_hp" required="required" class="form-control col-md-7 col-xs-12" placeholder="No Telpon Pelanggan"value="<?= set_value('no_hp'); ?>">
                                                 <?= form_error('no_hp',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="nama_barang" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nama Barang"value="<?= set_value('nama_barang'); ?>">
                                                 <?= form_error('nama_barang',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="berat_barang" required="required" class="form-control col-md-7 col-xs-12" placeholder="Berat Barang [KG]" value="<?= set_value('berat_barang'); ?>">
                                                 <?= form_error('berat_barang',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Jenis Laundry <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <select class="form-control" name="id_jenis_barang" id="jenis_barang">
                                                    <option value="1" selected="selected">--Pilih Jenis--</option>
                                                     <?php foreach($jenis_barang as $j) : ?>
                                                    <option value="<?= $j['id_jenis_barang']; ?>"><?= $j['jenis_barang'];?></option>
                                                <?php endforeach; ?>
                                            </select>
                                             <?= form_error('jenis_barang',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Outlet / Cabang <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <select class="form-control" name="kode_cabang" id="kode_cabang">
                                                    <option value="1" selected="selected">--Pilih Jenis--</option>
                                                     <?php foreach($cabang as $c) : ?>
                                                    <option value="<?= $c['id_cabang']; ?>"><?= $c['nama_cabang']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                             <?= form_error('kode_cabang',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tanggal Laundry Masuk <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input  data-date-format="dd-mm-yyyy" type="date" name="tgl_masuk" required="required" class="form-control col-md-7 col-xs-12" placeholder="Tanggal Masuk" value="<?= set_value('tgl_masuk'); ?>">
                                                 <?= form_error('tgl_masuk',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tanggal Perkiraan Selesai <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input  data-date-format="dd-mm-yyyy" type="date" name="tgl_keluar" required="required" class="form-control col-md-7 col-xs-12" placeholder="Tanggal Keluar" value="<?= set_value('tgl_keluar'); ?>">
                                                 <?= form_error('tgl_keluar',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>

                                       <hr>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="save" class="btn btn-success" title="Tambah Target Baru">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

<div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nota Laundry</th>
                                            <th>Pelanggan</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Laundry </th>
                                            <th>Status</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Keluar</th>
                                            <th>Action</th>
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
                                            <td>
                                              <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit" href="<?= base_url('admin/pelanggan_edit/');echo $p['id_pelanggan']; ?>"><i class="fas fa-pencil-alt"></i></a>
                                              <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="location.href='<?= base_url('admin/hapus_pelanggan/');echo $p['id_pelanggan']; ?>';"><i class="fas fa-trash"></i></a>
                                               <a class="btn btn-warning btn-action mr-1" data-toggle="tooltip" title="Notifikasi" href="<?= base_url('admin/pelanggan_nota/');echo $p['id_pelanggan']; ?>"><i class="fas fa-bell"></i></a>
                                               <a class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="Whatsapp" href="<?= base_url('admin/WA'); ?>"><i class="fas fa-phone"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>

<?php $this->load->view('temp/footer'); ?>