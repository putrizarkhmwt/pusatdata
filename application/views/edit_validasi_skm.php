<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-envelope-o"></i> VALIDASI
        <small>Edit</small>
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
                                <h3 class="box-title"><strong>NIK : <?=$listS[0]->nik_skm?></strong></h3>
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
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>validatorqskm/edit/<?=$listS[0]->nik_skm?>/<?=$listS[0]->nik_rt?>/<?=$valid[0]->jadwal_survey?>/<?=$listS[0]->tgl_survey?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display: none;">
                                        <label>NIK SKM</label>
                                        <input type="text" class="form-control required" value="<?=$listS[0]->nik_skm?>" id="nik_skm" name="nik_skm" maxlength="20" readonly />
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
                                        <input type="text" class="form-control required" value="update" id="val_status" name="val_status" maxlength="20" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display: none;">
                                        <label>NIK RT</label>
                                        <input type="text" class="form-control required" value="<?=$listS[0]->nik_rt?>" id="nik_rt" name="nik_rt" maxlength="20" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display: none;">
                                        <label>JADWAL SURVEY</label>
                                        <input type="text" class="form-control required" value="<?=$listS[0]->tgl_survey?>" id="jadwal_survey" name="jadwal_survey" maxlength="20" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Katerangan</label>
                                        <select class="form-control select2" style="width: 100%;" id="ket"  name="ket">
                                            <option value="<?php echo $listS[0]->ket ?>"><?php echo $listS[0]->ket ?></option>
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
                                        <option value="<?php echo $listS[0]->id_surveyor ?>"><?php echo $listS[0]->nama_surveyor ?></option>
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
                                        <textarea type="text" class="form-control required" id="catatan"  name="catatan" maxlength="128" rows="3" placeholder="Enter ..."><?=$listS[0]->catatan?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Tanggal Survey</label>
                                        <!-- <input type="text" class="form-control required" value="<?=$listS[0]->tgl_survey?>" id="tgl_survey"  name="tgl_survey" maxlength="30" readonly /> -->
                                        <input type="date" name="tgl_survey" id="tgl_survey" value="<?php echo date('Y-m-d', strtotime($listS[0]->tgl_survey)); ?>" class="form-control required" placeholder="Tanggal Survey"/>
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