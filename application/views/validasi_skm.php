<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-envelope-o"></i> VALIDASI SKM
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
                                <h3 class="box-title"><strong>Calon : <?=$validator[0]->nama?></strong></h3>
                               <?php 
                                    $tot_surveyor = count($surveyor);
                                    if($tot_surveyor==0){
                                        $survey = $survey;
                                    }else{
                                        $survey = $surveyor;
                                    }
                                ?> 
                            </div>
                            <div class="col-md-6">  
                                <h3 class="box-title"><strong>Validator : <?=$name?></h3>
                            </div>
                        </div>
                    </div>
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>validatorqSKM/input" method="post" enctype="multipart/form-data" role="form">
                        <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group" style="display: none;">
                                            <label>ID SKM</label>
                                            <input type="text" class="form-control required" value="<?=$validator[0]->nik?>" id="nik_skm" name="nik_skm" maxlength="20" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                
                                        <div class="form-group" style="display: none;">
                                            <label>nik_rt</label>
                                            <input type="text" class="form-control required" value="<?=$validator[0]->nik_rt?>" id="nik_rt" name="nik_rt" maxlength="20" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                
                                        <div class="form-group" style="display: none;">
                                            <label>Tgl Pengajuan</label>
                                            <input type="text" class="form-control required" value="<?=$validator[0]->tgl_pengajuan?>" id="tgl_pengajuan" name="tgl_pengajuan" maxlength="20" readonly />
                                        </div>
                                    </div>
                                     <div class="col-md-6">                                
                                        <div class="form-group" style="display: none;">
                                            <label>Jadwal Survey</label>
                                            <input type="text" class="form-control required" value="<?=$validator[0]->jadwal_survey?>" id="jadwal_survey" name="jadwal_survey" maxlength="20" readonly />
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
                                                <option>SUDAH DESIL</option>
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
                                            <!-- <input type="text" class="form-control required" value="<?=$validator[0]->jadwal_survey?>" id="tgl_survey"  name="tgl_survey" maxlength="30" readonly /> -->
                                            <input type="date" name="tgl_survey" id="tgl_survey" value="<?php echo date('Y-m-d', strtotime($validator[0]->jadwal_survey)); ?>" class="form-control required" placeholder="Tanggal Survey"/>
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

  