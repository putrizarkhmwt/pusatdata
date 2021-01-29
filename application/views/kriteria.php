<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-home"></i> Foto Kondisi Rumah Existing
        <small>Tambah / Edit Data</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Masukkan Data</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>kriteria/add" method="post" enctype="multipart/form-data" role="form">
                        <div class="box-body">
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input type="text" class="form-control value="<?php echo $iden_calon; ?>" required" id="id_kriteria"  name="id_kriteria" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div> -->
                            <div cl
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto 1</label>
                                        <input type="file" class="form-control required" id="gmb_1"  name="gmb_1">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi Kerusakan Foto 1</label>
                                        <input type="text" class="form-control required" id="ket_1"  name="ket_1" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto 2</label>
                                        <input type="file" class="form-control required" id="gmb_2"  name="gmb_2">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi Kerusakan Foto 2</label>
                                        <input type="text" class="form-control required" id="ket_2"  name="ket_2" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto 3</label>
                                        <input type="file" class="form-control required" id="gmb_3"  name="gmb_3">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi Kerusakan Foto 3</label>
                                        <input type="text" class="form-control required" id="ket_3"  name="ket_3" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto 4</label>
                                        <input type="file" class="form-control required" id="gmb_4"  name="gmb_4">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi Kerusakan Foto 4</label>
                                        <input type="text" class="form-control required" id="ket_4"  name="ket_4" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto 5</label>
                                        <input type="file" class="form-control required" id="gmb_5"  name="gmb_5">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi Kerusakan Foto 5</label>
                                        <input type="text" class="form-control required" id="ket_5"  name="ket_5" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto 6</label>
                                        <input type="file" class="form-control required" id="gmb_6"  name="gmb_6">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi Kerusakan Foto 6</label>
                                        <input type="text" class="form-control required" id="ket_6"  name="ket_6" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto 7</label>
                                        <input type="file" class="form-control required" id="gmb_7"  name="gmb_7">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi Kerusakan Foto 7</label>
                                        <input type="text" class="form-control required" id="ket_7"  name="ket_7" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto 8</label>
                                        <input type="file" class="form-control required" id="gmb_8"  name="gmb_8">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi Kerusakan Foto 8</label>
                                        <input type="text" class="form-control required" id="ket_8"  name="ket_8" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto 9</label>
                                        <input type="file" class="form-control required" id="gmb_9"  name="gmb_9">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi Kerusakan Foto 9</label>
                                        <input type="text" class="form-control required" id="ket_9"  name="ket_9" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto 10</label>
                                        <input type="file" class="form-control required" id="gmb_10"  name="gmb_10">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi Kerusakan Foto 10</label>
                                        <input type="text" class="form-control required" id="ket_10"  name="ket_10" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
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

  