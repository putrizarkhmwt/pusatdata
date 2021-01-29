<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user"></i> Calon Penerima Manfaat
        <small>Tambah Data</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Masukkan Data</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>calon/tambahData" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" class="form-control required" id="calon_nik" name="calon_nik" maxlength="16">
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Nama</label>
                                        <input type="text" class="form-control required" id="calon_nama"  name="calon_nama" maxlength="128">
                                    </div>
                                </div>
                            </div>
                          <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" class="form-control required" id="calon_kec" name="calon_kec" maxlength="30">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kelurahan</label>
                                        <input type="text" class="form-control required" id="calon_kel"  name="calon_kel" maxlength="30">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" class="form-control required" id="rt" name="rt" maxlength="30">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>RW</label>
                                        <input type="text" class="form-control required" id="rw"  name="rw" maxlength="30">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea type="text" class="form-control required" id="calon_alamat"  name="calon_alamat" maxlength="128" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-success" value="Submit" />
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
        <div class="row">
        <div class="col-xs-12">
        <div class="box">
        <div class="box-header">
          <h3 class="box-title">List Calon</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th style="display:none;">ID</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>RT</th>
                <th>RW</th>
                <th>Alamat</th>
                <!-- <th>Kelengkapan</th> -->
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php
                foreach ($calon as $result) {
              ?>
              <tr>
                <td style="display:none;"><?=$result['id_calon']?></td>
                <td><?=$result['calon_nik']?></td>
                <td><?=$result['calon_nama']?></td>
                <td><?=$result['calon_kec']?></td>
                <td><?=$result['calon_kel']?></td>
                <td><?=$result['rt']?></td>
                <td><?=$result['rw']?></td>
                <td><?=$result['calon_alamat']?></td>
               <!--  <td>
                  <a href="<?=$this->config->base_url()?>calon/syaratq/<?=$result['id_calon']?>" type="submit" class="btn btn-success btn-md">Persyaratan</a>
                  <a href="<?=$this->config->base_url()?>calon/kriteriaq/<?=$result['id_calon']?>" type="submit" class="btn btn-primary btn-md">Kondisi Rumah</a>
                </td> -->
                <td>
                  <a href="<?=$this->config->base_url()?>calon/detail/<?=$result['id_calon']?>" type="submit" class="btn bg-navy btn-md">Detail</a>
                  <a href="<?=$this->config->base_url()?>calon/edit/<?=$result['id_calon']?>" type="submit" class="btn btn-primary btn-md">Edit</a>
                  <a href="<?=$this->config->base_url()?>calon/delete/<?=$result['id_calon']?>" type = "submit" class="btn btn-danger btn-md" id="btn-chat">Hapus</a>
                </td>
              </tr>
              <?php } ?>
              </tbody>
          </table>
        </div>
      </div> </div> </div>
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

  