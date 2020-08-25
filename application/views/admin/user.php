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
                <h1 class="page-head-line" >User Management </h1> &nbsp; &nbsp; <?= $this->session->flashdata('flash'); ?>
            </div>

                

                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Date Create</th>
                          <th>Status</th>
                          <th>Level</th>
                          <th>Action</th>
                        </tr>
                        <?php $no = $offset;
                              foreach($data as $u) : ?>
                        <tr>
                                            <td><?php echo ++$no; ?></td>
                                            <td><?php echo $u['nama']; ?></td>
                                            <td><?php echo $u['email']; ?></td>
                                            <td><?php echo date('d F Y', $u['date_create']); ?></td>
                                            <td><?php if ($u['is_active']==1){
                                              echo ('<div class="badge badge-success">Active</div>');
                                            } else {
                                              echo ('<div class="badge badge-warning">Not Active</div>');
                                            } ?> </td>
                                            <td><?php echo $u['level']; ?></td>
                                             <td>
                                              <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit" href="<?= base_url('admin/user_edit/');echo $u['id_user']; ?>"><i class="fas fa-pencil-alt"></i></a>
                                              <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="location.href='<?= base_url('admin/hapus_user/');echo $u['id_user']; ?>';"><i class="fas fa-trash"></i></a>
                                            </td>
                          </tr>
                          <?php endforeach; ?>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <?= $halaman; ?>
                    </nav>
                  </div>
          </section>
           </div> 

<?php $this->load->view('temp/footer'); ?>