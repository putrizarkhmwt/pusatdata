<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Data SKM
        <small>Detail</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><strong>DATA SKM</strong></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->                   
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" class="form-control required" value="<?=$validator[0]->nik?>" id="nik" name="nik" maxlength="20" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control required" value="<?=$validator[0]->nama?>" id="nama" name="nama" maxlength="16" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">NIK Kepala Keluarga</label>
                                        <input type="text" class="form-control required" value="<?=$validator[0]->nik_rt?>" id="nik_rt"  name="nik_rt" maxlength="128" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Nama Kepala Keluarga</label>
                                        <input type="text" class="form-control required" value="<?=$validator[0]->nama_kk?>" id="nama_kk" name="nama_kk" maxlength="30" readonly />
                                    </div>
                                </div>
                            </div>
                          <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" class="form-control required" value="<?=$validator[0]->kecamatan?>" id="kecamatan"  name="kecamatan" maxlength="30" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Kelurahan</label>
                                        <input type="text" class="form-control required" value="<?=$validator[0]->kelurahan?>" id="kelurahan" name="kelurahan" maxlength="30" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control required" value="<?=$validator[0]->alamat?>" id="alamat"  name="alamat" maxlength="30" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tgl Survey</label>
                                        <input type="text" class="form-control required" value="<?=$validator[0]->jadwal_survey?>" id="kecamatan"  name="kecamatan" maxlength="30" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Surveyor</label>
                                        <input type="text" class="form-control required" value="<?=$validator[0]->surveyor?>" id="surveyor"  name="surveyor" maxlength="30" readonly />
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea type="text" class="form-control required" value="<?=$validator->calon_alamat?>" id="calon_alamat" name="calon_alamat" maxlength="128" rows="3" readonly /><?=$validator->calon_alamat?></textarea>
                                    </div>
                                </div>
                            </div> -->
                        </div><!-- /.box-body -->
                    </form>
                </div>
                <?php
                    if($role == ROLE_SUR){
                        if (!isset($banding_dokumentasi[0]->nik_skm) && !isset($banding_dokumentasi[0]->tgl_survey)) {
                ?>
                        <a href="<?=$this->config->base_url()?>uploadfoto/tambahDokumenSKM/<?=$validator[0]->nik?>/<?=$validator[0]->nik_rt?>/<?=$validator[0]->jadwal_survey?>" type="submit" class="btn bg-maroon btn-md">Upload Dokumentasi</a>
                    <?php
                        }else{
                            if ($validator[0]->nik == $banding_dokumentasi[0]->nik_skm && $validator[0]->jadwal_survey == $banding_dokumentasi[0]->tgl_survey && $validator[0]->nik_rt == $banding_dokumentasi[0]->nik_rt) {
                    ?>
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title"><strong>DOKUMENTASI SURVEY</strong></h3>
                                    </div><!-- /.box-header -->
                                    <!-- form start -->
                                    <form role="form" enctype="multipart/form-data">
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-6">                                
                                                    <div class="form-group">
                                                        <label>Keterangan</label>
                                                        <input type="text" class="form-control required" value="<?=$dokumentasi_skm[0]['ket']?>" id="ket" name="ket" maxlength="16" readonly />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Catatan</label>
                                                        <input type="text" class="form-control required" value="<?=$dokumentasi_skm[0]['catatan']?>" id="catatan"  name="catatan" maxlength="128" readonly />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Nama Surveyor</label>
                                                        <?php
                                                            for($i=0; $i<count($valval); $i++){
                                                                if($valval[$i]['userId'] == $banding_dokumentasi[0]->sur_id){
                                                                    $surv = $valval[$i]['name'];
                                                                    $surv_id = $valval[$i]['userId'];
                                                                }
                                                            }
                                                        ?>
                                                        <input type="text" class="form-control required" value="<?=$surv?>" id="nama_surveyor"  name="nama_surveyor" maxlength="128" readonly />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">                      
                                                    <div class="form-group">
                                                        <label>Tanggal Survey</label>
                                                        <input type="text" class="form-control required" value="<?=$dokumentasi_skm[0]['tgl_survey']?>" id="tgl_survey" name="tgl_survey" maxlength="128" readonly />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">                      
                                                    <div class="form-group">
                                                        <label>Tanggal Upload Dokumentasi</label>
                                                        <input type="text" class="form-control" value="<?=$dokumentasi_skm[0]['tgl_upload']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">                      
                                                    <div class="form-group">
                                                        <label>Tanggal Update Terakhir</label>
                                                        <input type="text" class="form-control" value="<?=$dokumentasi_skm[0]['update_tgl']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">                                
                                                    <div class="form-group">
                                                        <label>Foto Selfie</label>
                                                        <br>
                                                        <?php
                                                            if($dokumentasi_skm[0]['foto_selfie'] == null){
                                                        ?>
                                                                <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                        <?php
                                                            }else{
                                                        ?>
                                                                <a href="<?php echo base_url($dokumentasi_skm[0]['foto_selfie']); ?>" target="blank_"><img src="<?php echo base_url($dokumentasi_skm[0]['foto_selfie']); ?>" alt="" style="width: 180px;height:180px;" /></a>
                                                        <?php
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">                                
                                                    <div class="form-group">
                                                        <label>Foto Depan Rumah</label>
                                                        <br>
                                                        <?php
                                                            if($dokumentasi_skm[0]['foto_depan_rumah'] == null){
                                                        ?>
                                                                <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                        <?php
                                                            }else{
                                                        ?>
                                                                <a href="<?php echo base_url($dokumentasi_skm[0]['foto_depan_rumah']); ?>" target="blank_"><img src="<?php echo base_url($dokumentasi_skm[0]['foto_depan_rumah']); ?>" alt="" style="width: 180px;height:180px;" /></a>
                                                        <?php
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">                                
                                                    <div class="form-group">
                                                        <label>Foto Kondisi Rumah</label>
                                                        <br>
                                                        <?php
                                                            if($dokumentasi_skm[0]['foto_kondisi_rumah'] == null){
                                                        ?>
                                                                <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                        <?php
                                                            }else{
                                                        ?>
                                                                <a href="<?php echo base_url($dokumentasi_skm[0]['foto_kondisi_rumah']); ?>" target="blank_"><img src="<?php echo base_url($dokumentasi_skm[0]['foto_kondisi_rumah']); ?>" alt="" style="width: 180px;height:180px;" /></a>
                                                        <?php
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                                <?php 
                                                    if($surv == $name){
                                                ?>
                                                        <a href="<?=$this->config->base_url()?>uploadfoto/editDokumenSKM/<?=$validator[0]->nik?>/<?=$validator[0]->nik_rt?>/<?=$validator[0]->jadwal_survey?>" type="submit" class="btn btn-primary btn-md">Edit</a>
                                                        <a href="<?=$this->config->base_url()?>uploadfoto/deleteDokumenSKM/<?=$validator[0]->nik?>/<?=$validator[0]->nik_rt?>/<?=$validator[0]->jadwal_survey?>" type="submit" class="btn btn-danger btn-md">Delete</a>
                                                <?php
                                                    }
                                                ?>
                                        </div><!-- /.box-body -->
                                    </form>
                                </div>
                <?php
                            }
                        }
                    }else{
                        if (!isset($banding_dokumentasi[0]->nik_skm) && !isset($banding_dokumentasi[0]->tgl_survey)) {
                ?>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"><strong>BELUM ADA DOKUMENTASI</strong></h3>
                                </div>
                            </div>
                    <?php
                        }
                        else{
                    ?>
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title"><strong>DOKUMENTASI SURVEY</strong></h3>
                            </div><!-- /.box-header -->
                                <form role="form" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">                                
                                                <div class="form-group">
                                                    <label>Keterangan</label>
                                                    <input type="text" class="form-control required" value="<?=$dokumentasi_skm[0]['ket']?>" id="ket" name="ket" maxlength="16" readonly />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Catatan</label>
                                                    <input type="text" class="form-control required" value="<?=$dokumentasi_skm[0]['catatan']?>" id="catatan"  name="catatan" maxlength="128" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Nama Surveyor</label>
                                                    <?php
                                                        for($i=0; $i<count($valval); $i++){
                                                            if($valval[$i]['userId'] == $banding_dokumentasi[0]->sur_id){
                                                                $surv = $valval[$i]['name'];
                                                                $surv_id = $valval[$i]['userId'];
                                                            }
                                                        }
                                                    ?>
                                                    <input type="text" class="form-control required" value="<?=$surv?>" id="nama_surveyor"  name="nama_surveyor" maxlength="128" readonly />
                                                </div>
                                            </div>
                                            <div class="col-md-6">                      
                                                <div class="form-group">
                                                    <label>Tanggal Survey</label>
                                                    <input type="text" class="form-control required" value="<?=$dokumentasi_skm[0]['tgl_survey']?>" id="tgl_survey" name="tgl_survey" maxlength="128" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">                      
                                                <div class="form-group">
                                                    <label>Tanggal Upload Dokumentasi</label>
                                                    <input type="text" class="form-control" value="<?=$dokumentasi_skm[0]['tgl_upload']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">                      
                                                <div class="form-group">
                                                    <label>Tanggal Update Terakhir</label>
                                                    <input type="text" class="form-control" value="<?=$dokumentasi_skm[0]['update_tgl']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">                                
                                                <div class="form-group">
                                                    <label>Foto Selfie</label>
                                                    <br>
                                                    <?php
                                                        if($dokumentasi_skm[0]['foto_selfie'] == null){
                                                    ?>
                                                            <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                    <?php
                                                        }else{
                                                    ?>
                                                            <a href="<?php echo base_url($dokumentasi_skm[0]['foto_selfie']); ?>" target="blank_"><img src="<?php echo base_url($dokumentasi_skm[0]['foto_selfie']); ?>" alt="" style="width: 180px;height:180px;" /></a>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">                                
                                                <div class="form-group">
                                                    <label>Foto Depan Rumah</label>
                                                    <br>
                                                    <?php
                                                        if($dokumentasi_skm[0]['foto_depan_rumah'] == null){
                                                    ?>
                                                            <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                    <?php
                                                        }else{
                                                    ?>
                                                            <a href="<?php echo base_url($dokumentasi_skm[0]['foto_depan_rumah']); ?>" target="blank_"><img src="<?php echo base_url($dokumentasi_skm[0]['foto_depan_rumah']); ?>" alt="" style="width: 180px;height:180px;" /></a>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">                                
                                                <div class="form-group">
                                                    <label>Foto Kondisi Rumah</label>
                                                    <br>
                                                    <?php
                                                        if($dokumentasi_skm[0]['foto_kondisi_rumah'] == null){
                                                    ?>
                                                            <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                    <?php
                                                        }else{
                                                    ?>
                                                            <a href="<?php echo base_url($dokumentasi_skm[0]['foto_kondisi_rumah']); ?>" target="blank_"><img src="<?php echo base_url($dokumentasi_skm[0]['foto_kondisi_rumah']); ?>" alt="" style="width: 180px;height:180px;" /></a>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                            <?php 
                                                if($surv == $name){
                                            ?>
                                                    <a href="<?=$this->config->base_url()?>validatorqskm/validasiE/<?=$validator[0]->nik?>/<?=$validator[0]->nik_rt?>/<?=$validator[0]->jadwal_survey?>" type="submit" class="btn btn-primary btn-md">Edit</a>
                                                    <a href="<?=$this->config->base_url()?>validatorqskm/delete/<?=$validator[0]->nik?>/<?=$validator[0]->nik_rt?>/<?=$validator[0]->jadwal_survey?>" type="submit" class="btn btn-danger btn-md">Delete</a>
                                                <?php
                                                }
                                            ?>
                                    </div><!-- /.box-body -->
                                </form>
                            </div>
                <?php
                        }
                        if (!isset($banding[0]->nik_skm) && !isset($banding[0]->tgl_survey)) {
                        ?>
                         <a href="<?=$this->config->base_url()?>validatorqskm/validasi/<?=$validator[0]->nik?>/<?=$validator[0]->nik_rt?>/<?=$validator[0]->jadwal_survey?>" type="submit" class="btn bg-maroon btn-md">Tambah Validasi</a>
                        <?php
                        }
                        else{
                        
                            if ($validator[0]->nik == $banding[0]->nik_skm && $validator[0]->jadwal_survey == $banding[0]->tgl_survey && $validator[0]->nik_rt == $banding[0]->nik_rt) {
                        ?>
                            <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title"><strong>DATA VALIDASI</strong></h3>
                                    </div><!-- /.box-header -->
                                    <!-- form start -->
                                    <form role="form" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">                                
                                                <div class="form-group">
                                                    <label>Keterangan</label>
                                                    <input type="text" class="form-control required" value="<?=$validasi[0]['ket']?>" id="ket" name="ket" maxlength="16" readonly />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Catatan</label>
                                                    <input type="text" class="form-control required" value="<?=$validasi[0]['catatan']?>" id="catatan"  name="catatan" maxlength="128" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Nama Surveyor</label>
                                                    <input type="text" class="form-control required" value="<?=$listS[0]->nama_surveyor?>" id="nama_surveyor"  name="nama_surveyor" maxlength="128" readonly />
                                                </div>
                                            </div>
                                            <div class="col-md-6">                      
                                                <div class="form-group">
                                                    <label>Tanggal Survey</label>
                                                    <input type="text" class="form-control required" value="<?=$validasi[0]['tgl_survey']?>" id="tgl_survey" name="tgl_survey" maxlength="128" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">                      
                                                <div class="form-group">
                                                    <label>Tanggal Validasi Awal</label>
                                                    <input type="text" class="form-control" value="<?=$validasi[0]['val_tgl']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">                      
                                                <div class="form-group">
                                                    <label>Tanggal Update Terakhir</label>
                                                    <input type="text" class="form-control" value="<?=$validasi[0]['update_tgl']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            for($i=0; $i<count($valval); $i++){
                                                if($valval[$i]['userId'] == $banding[0]->val_id){
                                                    $validnama = $valval[$i]['name'];
                                                }
                                            }
                                        ?>
                                        <div class="row">
                                            <div class="col-md-6">                                
                                                <div class="form-group">
                                                    <label>Validator</label>
                                                    <input type="text" class="form-control required" value="<?=$validnama?>" id="valid" name="valid" maxlength="128" readonly />
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Catatan</label>
                                                    <input type="text" class="form-control required" value="<?=$validasi[0]['catatan']?>" id="catatan"  name="catatan" maxlength="128" readonly />
                                                </div>
                                            </div> -->
                                        </div>
                                            <a href="<?=$this->config->base_url()?>validatorqskm/validasiE/<?=$validator[0]->nik?>/<?=$validator[0]->nik_rt?>/<?=$validator[0]->jadwal_survey?>" type="submit" class="btn btn-primary btn-md">Edit</a>
                                            <a href="<?=$this->config->base_url()?>validatorqskm/delete/<?=$validator[0]->nik?>/<?=$validator[0]->nik_rt?>/<?=$validator[0]->jadwal_survey?>" type="submit" class="btn btn-danger btn-md">Delete</a>
                                        </div><!-- /.box-body -->
                                    </form>
                                </div>
                        <?php
                            }
                        }
                    }
                ?>
                <a href="<?=$this->config->base_url()?>validator/validatorListing" type="submit" class="btn btn-info btn-md pull-right">Kembali</a>
            </div>
        </div>    
    </section>
</div>