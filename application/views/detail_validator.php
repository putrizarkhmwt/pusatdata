<?php
    for($i=0; $i<count($valval); $i++){
        if($valval[$i]['userId'] == $banding_dokumentasi->sur_id){
            $surv = $valval[$i]['name'];
            $surv_id = $valval[$i]['userId'];
        }
        if($valval[$i]['userId'] == $banding->val_id){
            $validnama = $valval[$i]['name'];
        }
    }
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Data MBR
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
                        <h3 class="box-title"><strong>DATA MBR</strong></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->                   
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>No</label>
                                        <input type="text" class="form-control required" value="<?=$validator->no?>" id="no" name="no" maxlength="20" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control required" value="<?=$validator->nama?>" id="nama" name="nama" maxlength="16" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">KK</label>
                                        <input type="text" class="form-control required" value="<?=$validator->kk?>" id="kk"  name="kk" maxlength="128" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" class="form-control required" value="<?=$validator->nik?>" id="nik" name="nik" maxlength="30" readonly />
                                    </div>
                                </div>
                            </div>
                          <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" class="form-control required" value="<?=$validator->kecamatan?>" id="kecamatan"  name="kecamatan" maxlength="30" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Kelurahan</label>
                                        <input type="text" class="form-control required" value="<?=$validator->kelurahan?>" id="kelurahan" name="kelurahan" maxlength="30" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control required" value="<?=$validator->alamat?>" id="alamat"  name="alamat" maxlength="30" readonly />
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
                        if ($validator->no != $banding_dokumentasi->id_mbr) {
                ?>
                            <a href="<?=$this->config->base_url()?>uploadfoto/tambahDokumenMBR/<?=$validator->no?>" type="submit" class="btn bg-maroon btn-md">Upload Dokumentasi</a>
                    <?php
                        }
                        else{
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
                                                <input type="text" class="form-control required" value="<?=$dokumentasi_mbr[0]['ket']?>" id="ket" name="ket" maxlength="16" readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Catatan</label>
                                                <input type="text" class="form-control required" value="<?=$dokumentasi_mbr[0]['catatan']?>" id="catatan"  name="catatan" maxlength="128" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Nama Surveyor</label>
                                                <input type="text" class="form-control required" value="<?=$surv?>" id="nama_surveyor"  name="nama_surveyor" maxlength="128" readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-6">                      
                                            <div class="form-group">
                                                <label>Tanggal Survey</label>
                                                <input type="text" class="form-control required" value="<?=$dokumentasi_mbr[0]['tgl_survey']?>" id="tgl_survey" name="tgl_survey" maxlength="128" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">                      
                                            <div class="form-group">
                                                <label>Tanggal Upload Dokumentasi</label>
                                                <input type="text" class="form-control" value="<?=$dokumentasi_mbr[0]['tgl_upload']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">                      
                                            <div class="form-group">
                                                <label>Tanggal Update Terakhir</label>
                                                <input type="text" class="form-control" value="<?=$dokumentasi_mbr[0]['update_tgl']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">                                
                                            <div class="form-group">
                                                <label>Foto Selfie</label>
                                                <br>
                                                <?php
                                                    if($dokumentasi_mbr[0]['foto_selfie'] == null){
                                                ?>
                                                        <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                <?php
                                                    }else{
                                                ?>
                                                        <a href="<?php echo base_url($dokumentasi_mbr[0]['foto_selfie']); ?>" target="blank_"><img src="<?php echo base_url($dokumentasi_mbr[0]['foto_selfie']); ?>" alt="" style="width: 180px;height:180px;" /></a>
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
                                                    if($dokumentasi_mbr[0]['foto_depan_rumah'] == null){
                                                ?>
                                                        <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                <?php
                                                    }else{
                                                ?>
                                                        <a href="<?php echo base_url($dokumentasi_mbr[0]['foto_depan_rumah']); ?>" target="blank_"><img src="<?php echo base_url($dokumentasi_mbr[0]['foto_depan_rumah']); ?>" alt="" style="width: 180px;height:180px;" /></a>
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
                                                    if($dokumentasi_mbr[0]['foto_kondisi_rumah'] == null){
                                                ?>
                                                        <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                <?php
                                                    }else{
                                                ?>
                                                        <a href="<?php echo base_url($dokumentasi_mbr[0]['foto_kondisi_rumah']); ?>" target="blank_"><img src="<?php echo base_url($dokumentasi_mbr[0]['foto_kondisi_rumah']); ?>" alt="" style="width: 180px;height:180px;" /></a>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                        <?php 
                                            if($surv == $name){
                                        ?>
                                                <a href="<?=$this->config->base_url()?>uploadfoto/editDokumenMBR/<?=$validator->no?>" type="submit" class="btn btn-primary btn-md">Edit</a>
                                                <a href="<?=$this->config->base_url()?>uploadfoto/deleteDokumenMBR/<?=$validator->no?>" type="submit" class="btn btn-danger btn-md">Delete</a>
                                        <?php
                                            }
                                        ?>
                                </div><!-- /.box-body -->
                            </form>
                        </div>
                <?php
                        }
                    }else{
                        if ($validator->no != $banding_dokumentasi->id_mbr) {
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
                            <!-- form start -->
                            <form role="form" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">                                
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control required" value="<?=$dokumentasi_mbr[0]['ket']?>" id="ket" name="ket" maxlength="16" readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Catatan</label>
                                                <input type="text" class="form-control required" value="<?=$dokumentasi_mbr[0]['catatan']?>" id="catatan"  name="catatan" maxlength="128" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Nama Surveyor</label>
                                                <input type="text" class="form-control required" value="<?=$surv?>" id="nama_surveyor"  name="nama_surveyor" maxlength="128" readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-6">                      
                                            <div class="form-group">
                                                <label>Tanggal Survey</label>
                                                <input type="text" class="form-control required" value="<?=$dokumentasi_mbr[0]['tgl_survey']?>" id="tgl_survey" name="tgl_survey" maxlength="128" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">                      
                                            <div class="form-group">
                                                <label>Tanggal dokumentasi_mbr Awal</label>
                                                <input type="text" class="form-control" value="<?=$dokumentasi_mbr[0]['tgl_upload']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">                      
                                            <div class="form-group">
                                                <label>Tanggal Update Terakhir</label>
                                                <input type="text" class="form-control" value="<?=$dokumentasi_mbr[0]['update_tgl']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">                                
                                            <div class="form-group">
                                                <label>Foto Selfie</label>
                                                <br>
                                                <?php
                                                    if($dokumentasi_mbr[0]['foto_selfie'] == null){
                                                ?>
                                                        <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                <?php
                                                    }else{
                                                ?>
                                                        <a href="<?php echo base_url($dokumentasi_mbr[0]['foto_selfie']); ?>" target="blank_"><img src="<?php echo base_url('assets/img/NOV5_foto_selfie.jpg'); ?>" alt="" style="width: 180px;height:180px;" /></a>
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
                                                    if($dokumentasi_mbr[0]['foto_depan_rumah'] == null){
                                                ?>
                                                        <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                <?php
                                                    }else{
                                                ?>
                                                        <a href="<?php echo base_url($dokumentasi_mbr[0]['foto_depan_rumah']); ?>" target="blank_"><img src="<?php echo base_url('assets/img/NOV5_foto_selfie.jpg'); ?>" alt="" style="width: 180px;height:180px;" /></a>
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
                                                    if($dokumentasi_mbr[0]['foto_kondisi_rumah'] == null){
                                                ?>
                                                        <input type="text" class="form-control" value="TIDAK ADA DOKUMENTASI" data-mask readonly>
                                                <?php
                                                    }else{
                                                ?>
                                                        <a href="<?php echo base_url($dokumentasi_mbr[0]['foto_kondisi_rumah']); ?>" target="blank_"><img src="<?php echo base_url('assets/img/NOV5_foto_selfie.jpg'); ?>" alt="" style="width: 180px;height:180px;" /></a>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </form>
                        </div>
                    <?php
                        }
                        /*if (is_null($validator->ket)) {*/
                        if ($validator->no != $banding->id_mbr) {
                        ?>
                         <a href="<?=$this->config->base_url()?>validatorq/validasi/<?=$validator->no?>" type="submit" class="btn bg-maroon btn-md">Tambah Validasi</a>
                        <?php
                        }
                        else{
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
                                            if($valval[$i]['userId'] == $banding->val_id){
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
                                        <a href="<?=$this->config->base_url()?>validatorq/validasiE/<?=$validator->no?>" type="submit" class="btn btn-primary btn-md">Edit</a>
                                        <a href="<?=$this->config->base_url()?>validatorq/delete/<?=$validator->no?>" type="submit" class="btn btn-danger btn-md">Delete</a>
                                    </div><!-- /.box-body -->
                                </form>
                            </div>
                        <?php
                        }
                    
                        /*if (is_null($validator->ket)) {*/
                        if ($validator->no != $duplicate->id_mbr) {
                        ?>
                         <a href="<?=$this->config->base_url()?>validatorq/validasiduplicate/<?=$validator->no?>" type="submit" class="btn bg-maroon btn-md">Tambah Validasi Duplicate</a>
                        <?php
                        }
                        else{
                        ?>
                        <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"><strong>DATA VALIDASI DUPLICATE</strong></h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">                                
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control required" value="<?=$validasi_duplicate[0]['ket']?>" id="ket" name="ket" maxlength="16" readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Catatan</label>
                                                <input type="text" class="form-control required" value="<?=$validasi_duplicate[0]['catatan']?>" id="catatan"  name="catatan" maxlength="128" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Nama Surveyor</label>
                                                <input type="text" class="form-control required" value="<?=$listduplicateS[0]->nama_surveyor?>" id="nama_surveyor"  name="nama_surveyor" maxlength="128" readonly />
                                            </div>
                                        </div>
                                        <div class="col-md-6">                      
                                            <div class="form-group">
                                                <label>Tanggal Survey</label>
                                                <input type="text" class="form-control required" value="<?=$validasi_duplicate[0]['tgl_survey']?>" id="tgl_survey" name="tgl_survey" maxlength="128" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">                      
                                            <div class="form-group">
                                                <label>Tanggal Validasi Awal</label>
                                                <input type="text" class="form-control" value="<?=$validasi_duplicate[0]['val_tgl']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">                      
                                            <div class="form-group">
                                                <label>Tanggal Update Terakhir</label>
                                                <input type="text" class="form-control" value="<?=$validasi_duplicate[0]['update_tgl']?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        for($i=0; $i<count($valval); $i++){
                                            if($valval[$i]['userId'] == $duplicate->val_id){
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
                                        <a href="<?=$this->config->base_url()?>validatorq/validasiDuplicateE/<?=$validator->no?>" type="submit" class="btn btn-primary btn-md">Edit</a>
                                        <a href="<?=$this->config->base_url()?>validatorq/deleteDuplicate/<?=$validator->no?>" type="submit" class="btn btn-danger btn-md">Delete</a>
                                    </div><!-- /.box-body -->
                                </form>
                            </div>
                        <?php
                        }
                    }
                ?>
                <a href="<?=$this->config->base_url()?>validator/validatorListing" type="submit" class="btn btn-info btn-md pull-right">Kembali</a>
            </div>
        </div>    
    </section>
</div>