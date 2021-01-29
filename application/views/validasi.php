<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-envelope-o"></i> VALIDASI
        <small>Tambah</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-6">  
                                <h3 class="box-title"><strong>Calon : <?=$validator->nama?></strong></h3>
                            </div>
                            <div class="col-md-6">  
                                <h3 class="box-title"><strong>Validator : <?=$name?></h3>
                            </div>
                        </div>
                    </div>
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>validatorq/input" method="post" enctype="multipart/form-data" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display: none;">
                                        <label>ID MBR</label>
                                        <input type="text" class="form-control required" value="<?=$validator->no?>" id="id_mbr" name="id_mbr" maxlength="20" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display: none;">
                                        <label>ID Validator</label>
                                        <input type="text" class="form-control required" value="<?=$pengguna?>" id="val_id" name="val_id" maxlength="20" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display: none;">
                                        <label>Validasi Status</label>
                                        <input type="text" class="form-control required" value="baru" id="val_status" name="val_status" maxlength="20" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Katerangan</label>
                                        <select class="form-control select2" style="width: 100%;" id="ket"  name="ket">
                                            <option>ENTRY</option>
                                            <option>RESPONDEN TIDAK DITEMUKAN</option>
                                            <option>PINDAH</option>
                                            <option>MENINGGAL DUNIA</option>
                                            <option>MENOLAK SURVEY</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label>Nama Surveyor</label>
                                        <select class="form-control select2" style="width: 100%;" name='surveyor_id' name="surveyor_id">
                                            <?php
                                                foreach ($survey as $key) {
                                            ?>
                                                <option  value="<?=$key['id_surveyor']?>"><?=$key['nama_surveyor']?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Catatan</label>
                                        <textarea type="text" class="form-control required" id="catatan"  name="catatan" maxlength="128" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Tanggal Survey</label>
                                        <input type="date" name="tgl_survey" id="tgl_survey" class="form-control required" placeholder="Tanggal Survey"/>
                                    </div>
                                </div>
                            </div>
                        </div>
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

  