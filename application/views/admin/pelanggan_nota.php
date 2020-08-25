<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('temp/header');
  $this->load->view('temp/layout');
  $this->load->view('temp/sidebar');
?>

        <div class="main-content">
                <section class="section">
                  <div class="section-header">
                <h1 class="page-head-line" >Kirim Notifikasi</h1>
            </div>

   <div class="section-body">  
    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 line" >
                            <div class="panel panel-default">
                                <div class="x_content">
                                    <br />
                                       <form method="post" action="<?= base_url('admin/email_validation') ?>">

                                        <input type="hidden" name="id" value="<?= $pelanggan['id_pelanggan']; ?>">

                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="nama" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nama Pelanggan" value="<?= $pelanggan['nama']; ?>">
                                                 <?= form_error('nama',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="Email Pelanggan"  value="<?= $pelanggan['email']; ?>">
                                                 <?= form_error('email',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="nota" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nota Pelanggan"  value="<?= $pelanggan['nota']; ?>">
                                                 <?= form_error('no_hp',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Status <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="status" id="status">
                                                    <?php foreach($status as $s) : ?>
                                                    <?php if ($s == $pelangan['status']) : ?>
                                                    <option value="<?= $s ?>" selected><?= $s ?></option>
                                                     <?php else : ?>
                                                        <option value="<?= $s ?>"><?= $s ?></option>
                                                     <?php  endif; ?>
                                                <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tanggal Laundry Masuk <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input  data-date-format="dd-mm-yyyy" type="date" name="tgl_masuk" required="required" class="form-control col-md-7 col-xs-12" placeholder="Tanggal Masuk" v value="<?= $pelanggan['tgl_masuk']; ?>">
                                                 <?= form_error('tgl_masuk',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tanggal Perkiraan Selesai <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input  data-date-format="dd-mm-yyyy" type="date" name="tgl_keluar" required="required" class="form-control col-md-7 col-xs-12" placeholder="Tanggal Keluar"  value="<?= $pelanggan['tgl_keluar']; ?>">
                                                 <?= form_error('tgl_keluar',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="save" class="btn btn-success" title="Ubah Data User">Kirim Email</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </section>
</div>
<?php $this->load->view('temp/footer'); ?>

