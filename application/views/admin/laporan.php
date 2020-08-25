<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('temp/header');
  $this->load->view('temp/layout');
  $this->load->view('temp/sidebar');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> Laporan </h1> 
          </div>

          <div class="section-body">
             <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left" action="<?= base_url('Laporanpdf'); ?>">
                  <hr>
                  <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button  type="submit" name="save" class="btn btn-success" title="Cetak">Cetak Laporan</button>
                      </div>
                  </div>
                   <hr>
              </form>
          </div>
        </section>
      </div>

<?php $this->load->view('temp/footer'); ?>