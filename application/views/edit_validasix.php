<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-envelope-o"></i> VALIDASI
        <small>EDIT</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><strong><?=$validator->nama?> ( <?=$validator->kk?> )</strong></h3>
                    </div>
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>validatorq/tambah" method="post" enctype="multipart/form-data" role="form">
                        <div class="box-body">
                            <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group" style="display:none;">
                                            <label>No</label>
                                            <input type="text" class="form-control required" value="<?=$validator->no?>" id="no" name="no" maxlength="20" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                
                                        <div class="form-group" style="display:none;">
                                            <label>Nama</label>
                                            <input type="text" class="form-control required" value="<?=$validator->nama?>" id="nama" name="nama" maxlength="16" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="display:none;">
                                            <label for="email">KK</label>
                                            <input type="text" class="form-control required" value="<?=$validator->kk?>" id="kk"  name="kk" maxlength="128" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                
                                        <div class="form-group" style="display:none;">
                                            <label>NIK</label>
                                            <input type="text" class="form-control required" value="<?=$validator->nik?>" id="nik" name="nik" maxlength="30" readonly />
                                        </div>
                                    </div>
                                </div>
                              <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="display:none;">
                                            <label>Kecamatan</label>
                                            <input type="text" class="form-control required" value="<?=$validator->kecamatan?>" id="kecamatan"  name="kecamatan" maxlength="30" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                
                                        <div class="form-group" style="display:none;">
                                            <label>Kelurahan</label>
                                            <input type="text" class="form-control required" value="<?=$validator->kelurahan?>" id="kelurahan" name="kelurahan" maxlength="30" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="display:none;">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control required" value="<?=$validator->alamat?>" id="alamat"  name="alamat" maxlength="30" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <!-- <label for="exampleInputFile">Keterangan</label>
                                        <input type="text" class="form-control required" id="ket"  name="ket"> -->
                                    <label>Kategori</label>
                                    <select class="form-control select2" style="width: 100%;" id="ket" name="ket">
                                    <option><?=$validator->ket?></option>
                                    <option>LENGKAP</option>
                                    <option>MAMPU</option>
                                    <option>PINDAH</option>
                                    <option>ALAMAT TIDAK DITEMUKAN</option>
                                    <option>RESPONDEN TIDAK MAU DISURVEY</option>
                                    <option>BELUM</option>
                                    </select>
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="exampleInputFile">Catatan</label>
                                        <input type="text" class="form-control required" id="catatan" value="<?=$validator->catatan?>" name="catatan">
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
        </div>    
    </section>
</div>