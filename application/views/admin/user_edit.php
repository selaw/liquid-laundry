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

                                        <input type="hidden" name="id" value="<?= $user['id_user']; ?>">
                                        
                                        <div class="form-group">
                                          <input id="name" type="text" class="form-control" name="name" placeholder="Full Name" value="<?= $user['nama']; ?>" autofocus>
                                         <?= form_error('name',' <small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                         <div class="form-group">
                                        <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="<?= $user['email']; ?>">
                                        <?= form_error('email',' <small class="text-danger pl-3">','</small>');?>
                                      </div> 
                                      <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Level <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="level" id="level">
                                                    <?php foreach($level as $l) : ?>
                                                    <?php if ($l == $user['level']) : ?>
                                                    <option value="<?= $l ?>" selected><?= $l ?></option>
                                                     <?php else : ?>
                                                        <option value="<?= $l ?>"><?= $l ?></option>
                                                     <?php  endif; ?>
                                                <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>  
                                      <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Status <span class="required">* 0 = Not Active 1 = Active </span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="is_active" id="is_active">
                                                     <?php foreach($is_active as $a) : ?>
                                                    <?php if ($a == $user['is_active']) : ?>
                                                    <option value="<?= $a ?>" selected><?= $a ?></option>
                                                     <?php else : ?>
                                                        <option value="<?= $a ?>"><?= $a ?></option>
                                                     <?php  endif; ?>
                                                <?php endforeach; ?>
                                                </select>
                                            </div>
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

