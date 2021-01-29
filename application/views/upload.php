<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> DATA CALON
        <small>Tambah / Edit Berkas Persyaratan</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Masukkan Berkas Persyaratan</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>upload/add" method="post" enctype="multipart/form-data" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload</label>
                                        <input type="file" class="form-control required" id="image"  name="image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" class="form-control required" id="upload_ket"  name="upload_ket" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Gambar</label>
                                        <input type="file" class="form-control required" id="gmb"  name="gmb">
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">IMG</label>
                                        <input type="file" class="form-control required" id="img"  name="img">
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->            
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->
        <!-- <div class="row">
        <div class="col-xs-12">
        <div class="box">
        <div class="box-header">
          <h3 class="box-title">List Persyaratan</h3>
        </div>
        <div class="box-body">
          <table id="example2" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>File Upload</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php
                foreach ($upload as $result) {
              ?>
              <tr>
                <td><?=$result['id_upload']?></td>
                <td><?=$result['image']?></td>
                <td><?=$result['upload_ket']?></td>
                <td>
                  <a href="<?=$this->config->base_url()?>upload/detail/<?=$result['id_upload']?>" target="_blank" type="submit" class="btn btn-success btn-md">Detail</a>
                  <a href="<?=$this->config->base_url()?>upload/edit/<?=$result['id_upload']?>" type="submit" class="btn btn-primary btn-md">Edit</a>
                  <a href="<?=$this->config->base_url()?>upload/delete/<?=$result['id_upload']?>" type = "submit" class="btn btn-danger btn-md" id="btn-chat">Hapus</a>
                </td>
              </tr>
              <?php } ?>
              </tbody>
          </table>
        </div>
      </div> </div> </div> -->

        </div>    
    </section>
</div>

    <script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
    <script>
    $(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
    });
    </script>

  