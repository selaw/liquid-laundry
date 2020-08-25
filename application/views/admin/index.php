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
            <h1> Welcome Admin to Liquid-Laundry.com </h1>

          </div>

          <div class="section-body">
          </div>
        </section>
      </div>
<?php $this->load->view('temp/footer'); ?>