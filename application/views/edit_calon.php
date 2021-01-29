<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> DATA CALON
        <small>Edit Calon</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Calon Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>calon/edit" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display:none;">
                                        <label>ID</label>
                                        <input type="text" class="form-control required" value="<?=$calon->id_calon?>" id="id_calon" name="id_calon" maxlength="20" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" class="form-control required" value="<?=$calon->calon_nik?>" id="calon_nik" name="calon_nik" maxlength="16">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Nama</label>
                                        <input type="text" class="form-control required" value="<?=$calon->calon_nama?>" id="calon_nama"  name="calon_nama" maxlength="128">
                                    </div>
                                </div>
                            </div>
                          <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" class="form-control required" value="<?=$calon->calon_kec?>" id="calon_kec" name="calon_kec" maxlength="30">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kelurahan</label>
                                        <input type="text" class="form-control required" value="<?=$calon->calon_kel?>" id="calon_kel"  name="calon_kel" maxlength="30">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" class="form-control required" value="<?=$calon->rt?>" id="rt" name="rt" maxlength="30">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>RW</label>
                                        <input type="text" class="form-control required" value="<?=$calon->rw?>" id="rw"  name="rw" maxlength="30">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea type="text" class="form-control required" value="<?=$calon->calon_alamat?>" id="calon_alamat" name="calon_alamat" maxlength="128" rows="3"><?=$calon->calon_alamat?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <a href="<?=$this->config->base_url()?>calon" type="submit" class="btn btn-success btn-md">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </section>
</div>