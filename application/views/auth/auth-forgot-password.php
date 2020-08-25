<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/img/logo/icon.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>
              <?= $this->session->flashdata('pesan'); ?> 
            <div class="card card-secondary">
              <div class="card-header"><h4>Forgot Password</h4></div>

              <div class="card-body">
                <p class="text-muted">We will send a link to reset your password</p>
                <form method="POST" action="<?php echo base_url('auth/email_reset_password_validation'); ?>">
                  <div class="form-group">
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" placeholder="Email" required autofocus>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Forgot Password
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Kembali ke >> <a href="<?php echo base_url('auth'); ?>">Login</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php $this->load->view('dist/_partials/js'); ?>