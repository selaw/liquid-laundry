<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('temp/header');
  $this->load->view('temp/layout');
  $this->load->view('temp/sidebar');
?>

        <div class="main-content">
                <section class="section">
                  <div class="section-header">
                <h1 class="page-head-line" >Lokasi</h1>&nbsp; &nbsp; <?= $this->session->flashdata('flash'); ?>
            </div>

   <div class="section-body">  
    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 line" >
                            <div class="panel panel-default">
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left" action="<?= base_url('admin/input_lokasi'); ?>">

                                        <div class="form-group">
                                            <input type="hidden" name="id_lokasi" class="form-control" value="<?php echo $kode; ?>"  readonly>
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Parkir <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select class="form-control" name="id_target" id="id_target">
                                                    <option value="0">--Pilih Jenis Parkir--</option>
                                                     <?php foreach($target as $t) : ?>
                                                    <option value="<?= $t['id_target']; ?>"><?= $t['target']; ?></option>
                                                <?php endforeach; ?>
                                                </select>
                                                 <?= form_error('id_target',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                 
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Peralatan <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">

                                                <select class="form-control" name="id_peralatan" id="id_peralatan">
                                                    <option value="0">--Pilih Jenis--</option>
                                                     <?php foreach($peralatan as $p) : ?>
                                                    <option value="<?= $p['id_peralatan'];?>"><?= $p['peralatan']; ?></option>
                                                <?php endforeach; ?>
                                   </select>
                                    <?= form_error('id_peralatan',' <small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lokasi <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="lokasi" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="save" class="btn btn-success" title="Tambah Lokasi Baru">Submit</button>
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
                                            <th>Kode Lokasi</th>
                                            <th>Jenis Parkir</th>
                                            <th>Nama Tempat</th>
                                            <th>Lokasi</th>
                                        </tr>
                                    </thead>
                                        <?php foreach($lokasi as $l) : ?>
                                        <tr>
                                            <td><?php echo $l['id_lokasi']; ?></td>
                                            <td><?php echo $l['id_target']; ?></td>
                                            <td><?php echo $l['id_peralatan']; ?></td>
                                            <td><?php echo $l['lokasi']; ?></td>
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

