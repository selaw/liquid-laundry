<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('temp/header');
  $this->load->view('temp/layout');
  $this->load->view('temp/sidebar');
?>

        <div class="main-content">
                <section class="section">
                  <div class="section-header">
                <h1 class="page-head-line" >Edit Data User</h1>
            </div>

   <div class="section-body">  
    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 line" >
                            <div class="panel panel-default">
                                <div class="x_content">
                                    <br />
                                       <form method="post" action="">

                                        <input type="hidden" name="id" value="<?= $cabang['id_cabang']; ?>">
                                        
                                        <div class="form-group">
                                          <input id="nama_cabang" type="text" class="form-control" name="nama_cabang" placeholder="Nama Cabang" value="<?= $cabang['nama_cabang']; ?>" autofocus>
                                         <?= form_error('nama_cabang',' <small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                         <div class="form-group">
                                        <input id="alamat_cabang" type="text" class="form-control" name="alamat_cabang" placeholder="Alamat Cabang" value="<?= $cabang['alamat_cabang']; ?>">
                                        <?= form_error('alamat_cabang',' <small class="text-danger pl-3">','</small>');?>
                                      </div> 
                                      <div class="form-group">
                                        <input id="no_telp" type="tel" class="form-control" name="no_telp" placeholder="No Telpon" value="<?= '0'.$cabang['no_telp']; ?>">
                                        <?= form_error('no_telp',' <small class="text-danger pl-3">','</small>');?>
                                      </div> 
                                      
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" name="save" class="btn btn-success" title="Ubah Data User">Ubah Data</button>
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

