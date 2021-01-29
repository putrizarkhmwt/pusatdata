<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-envelope-o"></i> PERSYARATAN
        <small>Tambah / Edit Berkas Persyaratan</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><strong><?=$calon->calon_nama?> ( <?=$calon->calon_nik?> )</strong></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <!-- 'id_syarat','skm','ktp','kk','domisili','surat_tanah','surat_tanah_ket','surat_sengketa','surat_perbaikan','surat_rekom','berita_acara','form_tnp2k' -->
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>syarat/add" method="post" enctype="multipart/form-data" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display:none;">
                                        <label>ID</label>
                                        <input type="text" class="form-control required" value="<?=$calon->id_calon?>" id="id_syarat" name="id_syarat" maxlength="11" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Surat Keterangan Miskin (SKM)</label>
                                        <input type="file" class="form-control required" id="skm"  name="skm">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Kartu Tanda Penduduk (KTP)</label>
                                        <input type="file" class="form-control required" id="ktp"  name="ktp">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Kartu Keluarga (KK)</label>
                                        <input type="file" class="form-control required" id="kk"  name="kk">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Surat Keterangan Domisili</label>
                                        <input type="file" class="form-control required" id="domisili"  name="domisili">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Surat Tanah atau Surat Dasar Penguasaan Tanah</label>
                                        <input type="file" class="form-control required" id="surat_tanah"  name="surat_tanah">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" class="form-control required" id="surat_tanah_ket"  name="surat_tanah_ket" maxlength="128">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Peryataan Rumah / Tanah Tidak Dalam Sengketa</label>
                                        <input type="file" class="form-control required" id="surat_sengketa"  name="surat_sengketa">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Peryataan Belum Pernah Menerima Bantuan</label>
                                        <input type="file" class="form-control required" id="surat_perbaikan"  name="surat_perbaikan">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Surat Rekomendasi</label>
                                        <input type="file" class="form-control required" id="surat_rekom"  name="surat_rekom">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Berita Acara Hasil KRKRS</label>
                                        <input type="file" class="form-control required" id="berita_acara"  name="berita_acara">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Form Blanko TNP2K</label>
                                        <input type="file" class="form-control required" id="form_tnp2k"  name="form_tnp2k">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-success" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                            <a href="javascript:window.history.go(-1);" type="submit" class="btn btn-info btn-md pull-right">Kembali</a>
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

  