<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
           <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/img/logo/icon.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-secondary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="post" action="<?= base_url('auth/register'); ?>">
                    <div class="form-group">
                      <input id="name" type="alpha_spaces" class="form-control" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>" autofocus>
                     <?= form_error('name',' <small class="text-danger pl-3">','</small>'); ?>
                    </div>

                  <div class="form-group">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                    <?= form_error('email',' <small class="text-danger pl-3">','</small>');?>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <input id="password1" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password1" placeholder="Password">
                      <?= form_error('password1',' <small class="text-danger pl-3">','</small>');?>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <input id="password2" type="password" class="form-control" name="password2" placeholder="Password Confirmation">
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Do You have an account? <a href="<?php echo base_url('auth'); ?>">Login</a>
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