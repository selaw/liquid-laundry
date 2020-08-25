<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('temp/header');
  $this->load->view('temp/layout');
  $this->load->view('temp/sidebar');
?>

        <div class="main-content">
                <section class="section">
                  <div class="section-header">
                <h1 class="page-head-line" >Jenis Kendaraan</h1>&nbsp; &nbsp; <?= $this->session->flashdata('flash'); ?>
            </div>
   <div class="section-body">
        <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 line" >
                            <div class="panel panel-default">
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left" action="<?= base_url('admin/input_jenis'); ?>">

                                        <div class="form-group">
                                            <input type="hidden" name="id_jeniskendaraan" class="form-control"  readonly>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="jenis_kendaraan" required="required" class="form-control col-md-7 col-xs-12" placeholder="Tambah Jenis Kendaraan"> 
                                                <?= form_error('jenis_kendaraan',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="save" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
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
                                            <th>Kode Kendaraan</th>
                                            <th>Jenis Kendaraan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($jenis_kendaraan as $j) : ?>
                                        <tr>
                                            <td><?php echo $j['id_jeniskendaraan']; ?></td>
                                            <td><?php echo $j['jenis_kendaraan']; ?></td>
            
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
        </section>
    </div>
<?php $this->load->view('temp/footer'); ?>