<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Calon Penerima Manfaat
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
                        <h3 class="box-title"><strong>DATA CALON</strong></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->                   
                    <form role="form">
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
                                        <input type="text" class="form-control required" value="<?=$calon->calon_nik?>" id="calon_nik" name="calon_nik" maxlength="16" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Nama</label>
                                        <input type="text" class="form-control required" value="<?=$calon->calon_nama?>" id="calon_nama"  name="calon_nama" maxlength="128" readonly />
                                    </div>
                                </div>
                            </div>
                          <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" class="form-control required" value="<?=$calon->calon_kec?>" id="calon_kec" name="calon_kec" maxlength="30" readonly />
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kelurahan</label>
                                        <input type="text" class="form-control required" value="<?=$calon->calon_kel?>" id="calon_kel"  name="calon_kel" maxlength="30" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" class="form-control required" value="<?=$calon->rt?>" id="rt" name="rt" maxlength="30" readonly />
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>RW</label>
                                        <input type="text" class="form-control required" value="<?=$calon->rw?>" id="rw"  name="rw" maxlength="30" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea type="text" class="form-control required" value="<?=$calon->calon_alamat?>" id="calon_alamat" name="calon_alamat" maxlength="128" rows="3" readonly /><?=$calon->calon_alamat?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </form>
                </div>
                <?php
                if ($syarat->id_syarat == $calon->id_calon) {
                ?>
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title"><strong>PERSYARATAN</strong></h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Surat Keterangan Miskin (SKM)</label>
                                            <input type="text" class="form-control required" value="<?=$syarat->skm?>" id="skm"  name="skm" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Kartu Tanda Penduduk (KTP)</label>
                                            <input type="text" class="form-control required" value="<?=$syarat->ktp?>" id="ktp"  name="ktp" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Kartu Keluarga (KK)</label>
                                            <input type="text" class="form-control required" value="<?=$syarat->kk?>" id="kk"  name="kk" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Surat Keterangan Domisili</label>
                                            <input type="text" class="form-control required" value="<?=$syarat->domisili?>" id="domisili"  name="domisili" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Surat Tanah atau Surat Dasar Penguasaan Tanah</label>
                                            <input type="text" class="form-control required" value="<?=$syarat->surat_tanah?>" id="surat_tanah"  name="surat_tanah" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" class="form-control required" value="<?=$syarat->surat_tanah_ket?>" id="surat_tanah_ket"  name="surat_tanah_ket" maxlength="128" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Peryataan Rumah / Tanah Tidak Dalam Sengketa</label>
                                            <input type="text" class="form-control required" value="<?=$syarat->surat_sengketa?>" id="surat_sengketa"  name="surat_sengketa" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Peryataan Belum Pernah Menerima Bantuan</label>
                                            <input type="text" class="form-control required" value="<?=$syarat->surat_perbaikan?>" id="surat_perbaikan"  name="surat_perbaikan" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Surat Rekomendasi</label>
                                            <input type="text" class="form-control required" value="<?=$syarat->surat_rekom?>" id="surat_rekom"  name="surat_rekom" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Berita Acara Hasil KRKRS</label>
                                            <input type="text" class="form-control required" value="<?=$syarat->berita_acara?>" id="berita_acara"  name="berita_acara" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Form Blanko TNP2K</label>
                                            <input type="text" class="form-control required" value="<?=$syarat->form_tnp2k?>" id="form_tnp2k"  name="form_tnp2k" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" type="submit" class="btn btn-primary btn-md">Edit</a>
                                <a href="#" type = "submit" class="btn btn-danger btn-md" id="btn-chat">Hapus</a>
                            </div><!-- /.box-body -->
                        </form>
                    </div>
                    <?php
                    }
                else{
                ?>
                    <a href="<?=$this->config->base_url()?>calon/syaratq/<?=$calon->id_calon?>" type="submit" class="btn bg-maroon btn-md">Tambah Data : Persyaratan</a>
                <?php
                }
                ?>
                        
                <?php
                if ($kriteria->id_kriteria == $calon->id_calon) {
                ?>
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title"><strong>KONDISI RUMAH EXISTING</strong></h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group" style="display:none;">
                                            <label>ID</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->id_kriteria?>" id="id_kriteria" name="id_kriteria" maxlength="11" readonly />
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 1</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->gmb_1?>" id="gmb_1"  name="gmb_1" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deskripsi Kerusakan Foto 1</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->ket_1?>" id="ket_1"  name="ket_1" maxlength="128" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 2</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->gmb_2?>" id="gmb_2"  name="gmb_2"readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deskripsi Kerusakan Foto 2</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->ket_2?>" id="ket_2"  name="ket_2" maxlength="128" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 3</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->gmb_3?>" id="gmb_3"  name="gmb_3" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deskripsi Kerusakan Foto 3</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->ket_3?>" id="ket_3"  name="ket_3" maxlength="128" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 4</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->gmb_4?>" id="gmb_4"  name="gmb_4" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deskripsi Kerusakan Foto 4</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->ket_4?>" id="ket_4"  name="ket_4" maxlength="128" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 5</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->gmb_5?>" id="gmb_5"  name="gmb_5"  readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deskripsi Kerusakan Foto 5</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->ket_5?>" id="ket_5"  name="ket_5" maxlength="128"  readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 6</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->gmb_6?>" id="gmb_6"  name="gmb_6" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deskripsi Kerusakan Foto 6</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->ket_6?>" id="ket_6"  name="ket_6" maxlength="128"  readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 7</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->gmb_7?>" id="gmb_7"  name="gmb_7" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deskripsi Kerusakan Foto 7</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->ket_7?>" id="ket_7"  name="ket_7" maxlength="128"  readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 8</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->gmb_8?>" id="gmb_8"  name="gmb_8" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deskripsi Kerusakan Foto 8</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->ket_8?>" id="ket_8"  name="ket_8" maxlength="128" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 9</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->gmb_9?>" id="gmb_9"  name="gmb_9" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deskripsi Kerusakan Foto 9</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->ket_9?>" id="ket_9"  name="ket_9" maxlength="128" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 10</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->gmb_10?>" id="gmb_10"  name="gmb_10" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deskripsi Kerusakan Foto 10</label>
                                            <input type="text" class="form-control required" value="<?=$kriteria->ket_10?>" id="ket_10"  name="ket_10" maxlength="128" readonly />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" type="submit" class="btn btn-primary btn-md">Edit</a>
                                <a href="#" type = "submit" class="btn btn-danger btn-md" id="btn-chat">Hapus</a>
                            </div><!-- /.box-body -->
                        </form>
                    </div>
                <?php
                }
                else{
                ?>
                    <a href="<?=$this->config->base_url()?>calon/kriteriaq/<?=$calon->id_calon?>" type="submit" class="btn bg-purple btn-md"> Tambah Data : Kondisi Rumah Existing</a>
                <?php
                }
                ?>
                <a href="javascript:window.history.go(-1);" type="submit" class="btn btn-info btn-md pull-right">Kembali</a>
            </div>
        </div>    
    </section>
</div>