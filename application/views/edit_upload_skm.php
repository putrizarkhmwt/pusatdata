<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-camera"></i> Upload Dokumentasi SKM
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
                                <h3 class="box-title"><strong>NIK : <?=$dokumentasi[0]->nik_skm?></strong></h3>
                            </div>
                            <div class="col-md-6">  
                                <h3 class="box-title"><strong>Surveyor : <?=$name?></h3>
                            </div>
                        </div>
                    </div>
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>uploadfoto/updateDokumentasiSkm/<?=$dokumentasi[0]->nik_skm?>/<?=$dokumentasi[0]->nik_rt?>/<?=$dokumentasi[0]->tgl_survey?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display: none;">
                                        <label>ID SKM</label>
                                        <input type="text" class="form-control required" value="<?=$dokumentasi[0]->nik_skm?>" id="nik_skm" name="nik_skm" maxlength="20" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display: none;">
                                        <label>nik_rt</label>
                                        <input type="text" class="form-control required" value="<?=$dokumentasi[0]->nik_rt?>" id="nik_rt" name="nik_rt" maxlength="20" readonly />
                                    </div>
                                </div>
                                 <div class="col-md-6">                                
                                    <div class="form-group" style="display: none;">
                                        <label>Jadwal Survey</label>
                                        <input type="text" class="form-control required" value="<?php echo date('Y-m-d', strtotime($dokumentasi[0]->tgl_survey)); ?>" id="jadwal_survey" name="jadwal_survey" maxlength="20" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display: none;">
                                        <label>ID dokumentasi</label>
                                        <input type="text" class="form-control required" value="<?=$pengguna?>" id="sur_id" name="sur_id" maxlength="20" readonly />
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
                                            <option value="<?php echo $dokumentasi[0]->ket ?>"><?php echo $dokumentasi[0]->ket ?></option>
                                            <option>TERSURVEY</option>
                                            <option>ALAMAT TIDAK DITEMUKAN</option>
                                            <option>PINDAH DOMISILI SURABAYA</option>
                                            <option>MENINGGAL DUNIA</option>
                                            <option>MENOLAK SURVEY</option>
                                            <option>PINDAH DOMISILI LUAR SURABAYA</option>
                                            <option>MAMPU</option>
                                            <option>ALASAN LAIN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Survey</label>
                                        <input type="date" name="tgl_survey" id="tgl_survey" value="<?php echo date('Y-m-d', strtotime($dokumentasi[0]->tgl_survey)); ?>" class="form-control required" placeholder="Tanggal Survey"/>
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
                                        <label>Foto Selfie</label>
                                        <input type="file" class="form-control required" id="image1"  name="image1" maxlength="128" rows="3" placeholder="Enter ..."/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Foto Rumah Tampak Depan</label>
                                        <input type="file" class="form-control required" id="image2"  name="image2" maxlength="128" rows="3" placeholder="Enter ..."/>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Foto Kondisi Dalam Rumah</label>
                                        <input type="file" class="form-control required" id="image3"  name="image3" maxlength="128" rows="3" placeholder="Enter ..."/>
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