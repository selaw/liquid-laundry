<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('temp/header');
  $this->load->view('temp/layout');
  $this->load->view('temp/sidebar');

?>
    <div class="main-content">
                <section class="section">
                  <div class="section-header">
                <h1 class="page-head-line" >Outlet Cabang</h1> &nbsp; &nbsp; <?= $this->session->flashdata('flash'); ?>
            </div>
   <div class="section-body">  
    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 line" >
                            <div class="panel panel-default">
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left" action="<?= base_url('admin/input_cabang'); ?>">
 
                                        <div class="form-group">
                                            <input type="hidden" name="id_cabang" class="form-control" value="<?php echo $kode; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="nama_cabang" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nama Cabang">
                                                <?= form_error('nama_cabang',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="alamat_cabang" required="required" class="form-control col-md-7 col-xs-12" placeholder="Alamat Cabang">
                                                <?= form_error('alamat_cabang',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="tel" name="no_telp" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nomor Telpon Cabang">
                                                <?= form_error('no_telp',' <small class="text-danger pl-3">','</small>'); ?>
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
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode Cabang</th>
                                            <th>Nama Cabang</th>
                                            <th>Alamat Cabang</th>
                                            <th>Nomor Telpon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>
                                        <?php foreach($cabang as $c) : ?>
                                        <tr>
                                            <td><?php echo $c['id_cabang']; ?></td>
                                            <td><?php echo $c['nama_cabang']; ?></td>
                                            <td><?php echo $c['alamat_cabang']; ?></td>
                                            <td><?php echo "0".$c['no_telp']; ?></td>
                                             <td>
                                              <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit" href="<?= base_url('admin/cabang_edit/');echo $c['id_cabang']; ?>"><i class="fas fa-pencil-alt"></i></a>
                                              <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="location.href='<?= base_url('admin/hapus_cabang/');echo $c['id_cabang']; ?>';"><i class="fas fa-trash"></i></a>
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
<?php $this->load->view('temp/footer'); ?>