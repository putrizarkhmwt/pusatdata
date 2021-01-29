<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> SURVEYOR
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
                        <h3 class="box-title">Masukkan Data</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>surveyor/edit" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display:none;">
                                        <label>ID</label>
                                        <input type="text" class="form-control required" value="<?=$surveyor->id_surveyor?>" id="id_surveyor" name="id_surveyor" maxlength="20" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Nama</label>
                                        <input type="text" class="form-control required" value="<?=$surveyor->nama_surveyor?>" id="nama_surveyor"  name="nama_surveyor" maxlength="128">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Nomor HP / Telp.</label>
                                        <input type="text" class="form-control required" value="<?=$surveyor->telp_surveyor?>" id="telp_surveyor"  name="telp_surveyor" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat Domisili</label>
                                        <textarea type="text" class="form-control required" id="dom_surveyor"  name="dom_surveyor" maxlength="128" rows="3" placeholder="Enter ..."><?=$surveyor->dom_surveyor?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2" style="width: 100%;" id="status"  name="status">
                                            <option><?=$surveyor->status?></option>
                                            <option>AKTIF</option>
                                            <option>STOP</option>
                                            <option>TESTER</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <select class="form-control select2" style="width: 100%;" id="kec"  name="kec">
                                            <option><?=$surveyor->kec?></option>
                                            <option>ASEMROWO</option>
                                            <option>BENOWO</option>
                                            <option>BUBUTAN</option>
                                            <option>BULAK</option>
                                            <option>DUKUH PAKIS</option>
                                            <option>GAYUNGAN</option>
                                            <option>GENTENG</option>
                                            <option>GUBENG</option>
                                            <option>GUNUNG ANYAR</option>
                                            <option>JAMBANGAN</option>
                                            <option>KARANG PILANG</option>
                                            <option>KENJERAN</option>
                                            <option>KREMBANGAN</option>
                                            <option>LAKARSANTRI</option>
                                            <option>MULYOREJO</option>
                                            <option>PABEAN CANTIAN</option>
                                            <option>PAKAL</option>
                                            <option>RUNGKUT</option>
                                            <option>SAMBIKEREP</option>
                                            <option>SAWAHAN</option>
                                            <option>SEMAMPIR</option>
                                            <option>SIMOKERTO</option>
                                            <option>SUKOLILO</option>
                                            <option>SUKOMANUNGGAL</option>
                                            <option>TAMBAKSARI</option>
                                            <option>TANDES</option>
                                            <option>TEGALSARI</option>
                                            <option>TENGGILIS MEJOYO</option>
                                            <option>WIYUNG</option>
                                            <option>WONOCOLO</option>
                                            <option>WONOKROMO</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-md-6">                                
                                        <div class="form-group">
                                            <label>Kelurahan</label>
                                            <select class="form-control select2" style="width: 100%;" id="kel"  name="kel">
                                            <option><?=$surveyor->kel?></option>
                                            <option>KOSONG</option>
                                            <option>ASEMROWO</option>
                                            <option>GENTING KALIANAK</option>
                                            <option>TAMBAK SARIOSO</option>
                                            <option>KANDANGAN</option>
                                            <option>ROMOKALISARI</option>
                                            <option>SEMEMI</option>
                                            <option>TAMBAK OSOWILANGUN</option>
                                            <option>ALON ALON CONTONG</option>
                                            <option>BUBUTAN</option>
                                            <option>GUNDIH</option>
                                            <option>JEPARA</option>
                                            <option>TEMBOK DUKUH</option>
                                            <option>BULAK</option>
                                            <option>KEDUNG COWEK</option>
                                            <option>KENJERAN</option>
                                            <option>SUKOLILO BARU</option>
                                            <option>DUKUH KUPANG</option>
                                            <option>DUKUH PAKIS</option>
                                            <option>GUNUNGSARI</option>
                                            <option>PRADAH KALIKENDAL</option>
                                            <option>DUKUH MENANGGAL</option>
                                            <option>GAYUNGAN</option>
                                            <option>KETINTANG</option>
                                            <option>MENANGGAL</option>
                                            <option>EMBONG KALIASIN</option>
                                            <option>GENTENG</option>
                                            <option>KAPASARI</option>
                                            <option>KETABANG</option>
                                            <option>PENELEH</option>
                                            <option>AIRLANGGA</option>
                                            <option>BARATAJAYA</option>
                                            <option>GUBENG</option>
                                            <option>KERTAJAYA</option>
                                            <option>MOJO</option>
                                            <option>PUCANG SEWU</option>
                                            <option>GUNUNG ANYAR</option>
                                            <option>GUNUNG ANYAR TAMBAK</option>
                                            <option>RUNGKUT MENANGGAL</option>
                                            <option>RUNGKUT TENGAH</option>
                                            <option>JAMBANGAN</option>
                                            <option>KARAH</option>
                                            <option>KEBONSARI</option>
                                            <option>PAGESANGAN</option>
                                            <option>KARANGPILANG</option>
                                            <option>KEBRAON</option>
                                            <option>KEDURUS</option>
                                            <option>WARUGUNUNG</option>
                                            <option>BULAK BANTENG</option>
                                            <option>SIDOTOPO WETAN</option>
                                            <option>TAMBAK WEDI</option>
                                            <option>TANAH KALI KEDINDING</option>
                                            <option>DUPAK</option>
                                            <option>KEMAYORAN</option>
                                            <option>KREMBANGAN SELATAN</option>
                                            <option>MOROKREMBANGAN</option>
                                            <option>PERAK BARAT</option>
                                            <option>BANGKINGAN</option>
                                            <option>JERUK</option>
                                            <option>LAKARSANTRI</option>
                                            <option>LIDAH KULON</option>
                                            <option>LIDAH WETAN</option>
                                            <option>SUMUR WELUT</option>
                                            <option>DUKUH SUTOREJO</option>
                                            <option>KALIJUDAN</option>
                                            <option>KALISARI</option>
                                            <option>KEJAWAN PUTIH TAMBAK</option>
                                            <option>MANYAR SABRANGAN</option>
                                            <option>MULYOREJO</option>
                                            <option>BONGKARAN</option>
                                            <option>KREMBANGAN UTARA</option>
                                            <option>NYAMPLUNGAN</option>
                                            <option>PERAK TIMUR</option>
                                            <option>PERAK UTARA</option>
                                            <option>BABAT JERAWAT</option>
                                            <option>BENOWO</option>
                                            <option>PAKAL</option>
                                            <option>SUMBER REJO</option>
                                            <option>KALI RUNGKUT</option>
                                            <option>KEDUNG BARUK</option>
                                            <option>MEDOKAN AYU</option>
                                            <option>PENJARINGAN SARI</option>
                                            <option>RUNGKUT KIDUL</option>
                                            <option>WONOREJO</option>
                                            <option>BRINGIN</option>
                                            <option>LONTAR</option>
                                            <option>MADE</option>
                                            <option>SAMBIKEREP</option>
                                            <option>BANYU URIP</option>
                                            <option>KUPANG KRAJAN</option>
                                            <option>PAKIS</option>
                                            <option>PETEMON</option>
                                            <option>PUTAT JAYA</option>
                                            <option>SAWAHAN</option>
                                            <option>AMPEL</option>
                                            <option>PEGIRIAN</option>
                                            <option>SIDOTOPO</option>
                                            <option>UJUNG</option>
                                            <option>WONOKUSUMO</option>
                                            <option>KAPASAN</option>
                                            <option>SIDODADI</option>
                                            <option>SIMOKERTO</option>
                                            <option>SIMOLAWANG</option>
                                            <option>TAMBAKREJO</option>
                                            <option>GEBANG PUTIH</option>
                                            <option>KEPUTIH</option>
                                            <option>KLAMPIS NGASEM</option>
                                            <option>MEDOKAN SEMAMPIR</option>
                                            <option>MENUR PUMPUNGAN</option>
                                            <option>NGINDEN JANGKUNGAN</option>
                                            <option>SEMOLOWARU</option>
                                            <option>PUTAT GEDE</option>
                                            <option>SIMOMULYO</option>
                                            <option>SIMOMULYO BARU</option>
                                            <option>SONO KWIJENAN</option>
                                            <option>SUKOMANUNGGAL</option>
                                            <option>TANJUNGSARI</option>
                                            <option>DUKUH SETRO</option>
                                            <option>GADING</option>
                                            <option>KAPASMADYA BARU</option>
                                            <option>PACAR KELING</option>
                                            <option>PACAR KEMBANG</option>
                                            <option>PLOSO</option>
                                            <option>RANGKAH</option>
                                            <option>TAMBAKSARI</option>
                                            <option>BALONGSARI</option>
                                            <option>BANJAR SUGIHAN</option>
                                            <option>KARANGPOH</option>
                                            <option>MANUKAN KULON</option>
                                            <option>MANUKAN WETAN</option>
                                            <option>TANDES</option>
                                            <option>DR. SUTOMO</option>
                                            <option>KEDUNGDORO</option>
                                            <option>KEPUTRAN</option>
                                            <option>TEGALSARI</option>
                                            <option>KENDANGSARI</option>
                                            <option>KUTISARI</option>
                                            <option>PANJANG JIWO</option>
                                            <option>TENGGILIS MEJOYO</option>
                                            <option>BABATAN</option>
                                            <option>BALAS KLUMPRIK</option>
                                            <option>JAJARTUNGGAL</option>
                                            <option>WIYUNG</option>
                                            <option>BENDUL MERISI</option>
                                            <option>JEMUR WONOSARI</option>
                                            <option>MARGOREJO</option>
                                            <option>SIDOSERMO</option>
                                            <option>SIWALANKERTO</option>
                                            <option>DARMO</option>
                                            <option>JAGIR</option>
                                            <option>NGAGEL</option>
                                            <option>NGAGELREJO</option>
                                            <option>SAWUNGGALING</option>
                                            <option>WONOKROMO</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <a href="<?=$this->config->base_url()?>surveyor" type="submit" class="btn btn-success btn-md">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </section>
</div>