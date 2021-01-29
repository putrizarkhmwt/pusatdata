<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-search"></i> SURVEYOR
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
                        <h3 class="box-title">Masukkan Data</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="addUser" action="<?=$this->config->base_url()?>surveyor/tambahData" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control required" id="username" name="username" maxlength="128">
                                    </div> 
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control required" id="nama_surveyor" name="nama_surveyor" maxlength="128">
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Nomor HP / Telp.</label>
                                        <input type="text" class="form-control required" id="telp_surveyor"  name="telp_surveyor" maxlength="15">
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" style="width: 100%;" id="status"  name="status">
                                        <option>AKTIF</option>
                                        <option>STOP</option>
                                        <option>TESTER</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Kelurahan</label>
                                        <select class="form-control select2" style="width: 100%;" id="kel"  name="kel">
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
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select class="form-control select2" style="width: 100%;" id="kec"  name="kec">
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
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat Domisili</label>
                                        <textarea type="text" class="form-control required" id="dom_surveyor"  name="dom_surveyor" maxlength="128" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-success" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->            
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
<!--  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->
        <div class="row">
        <div class="col-xs-12">
        <div class="box">
        <div class="box-header">
          <h3 class="box-title">List Surveyor</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th style="display:none;">ID</th>
                <th>Nama</th>
                <th>Nomor HP / Telp.</th>
                <!-- <th>Alamat Domisili</th> -->
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php
                foreach ($surveyor_data as $result) {
              ?>
              <tr>
                <td style="display:none;"><?=$result['id_surveyor']?></td>
                <td><?=$result['nama_surveyor']?></td>
                <td><?=$result['telp_surveyor']?></td>
                <!-- <td><?=$result['dom_surveyor']?></td> -->
                <td><?=$result['kec']?></td>
                <td><?=$result['kel']?></td>
                <td><?=$result['status']?></td>
                <td>
                  <a href="<?=$this->config->base_url()?>surveyor/detail/<?=$result['id_surveyor']?>" type="submit" class="btn bg-navy btn-md">Detail</a>
                  <a href="<?=$this->config->base_url()?>surveyor/edit/<?=$result['id_surveyor']?>" type="submit" class="btn btn-primary btn-md">Edit</a>
                  <a href="<?=$this->config->base_url()?>surveyor/delete/<?=$result['id_surveyor']?>" type = "submit" class="btn btn-danger btn-md" id="btn-chat">Hapus</a>
                </td>
              </tr>
              <?php } ?>
              </tbody>
          </table>
        </div>
      </div> </div> </div>
    </div>    
    </section>
</div>

    <script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
    <script>
    $(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
    </script>

  