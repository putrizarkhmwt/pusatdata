<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-check"></i>Jumlah Data : <?=$jumlahdata?>
        <small>CEK VALIDASI</small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <form role="form"  action="<?php echo base_url() ?>cekListingDokumentasi" method="POST" id="searchList" enctype="multipart/form-data" role="form">
              <div class="box-header">
                <div class="input-group">
                  <strong class="box-title">Filter :</strong><br>
                  <input type="date" name="tglawal" id="tglawal" class="form-control input-sm pull-left" style="width: 150px;" placeholder="Tanggal Awal"/>
                  <input type="date" name="tglakhir" id="tglakhir" class="form-control input-sm pull-left" style="width: 150px;" placeholder="Tanggal Akhir"/>
                  <button class="btn btn-default bg-blue btn-md searchList" type="submit">Cek Data</i></button>
                </div>
              </div>
            </form>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>No Urut</th>
                  <th>ID</th>
                  <th>NIK KK</th>
                  <th>Nama KK</th>
                  <th>Alamat</th>
                  <th>Surveyor</th>
                  <th>Keterangan</th>
                  <th>Tanggal Survey</th>
                  <th>Tanggal Upload</th>
                  <th>Depan Rumah</th>
                  <th>Kondisi Rumah</th>
                  <th>Selfie</th>
                  <th>Jenis Data</th>
                </tr>
                <?php
                  if(!empty($cekRecords))
                  {
                    $penomor = 0;
                      foreach($cekRecords as $record)
                      {
                        $penomor++;
                  ?>
                  <tr>
                    <td><?php echo $penomor ?></td>
                    <td><?php echo $record['id'] ?></td>
                    <td><?php echo $record['nik'] ?></td>
                    <td><?php echo $record['nama'] ?></td>
                    <td><?php echo $record['alamat'] ?></td>
                    <td><?php echo $record['nama_surveyor'] ?></td>
                    <td><?php echo $record['ket'] ?></td>
                    <td><?php echo $record['tgl_survey'] ?></td>
                    <td><?php echo $record['tgl_upload'] ?></td>
                    <td><?php echo $record['jenis_data'] ?></td>
                    <td>
                      <?php
                        if(isset($record['foto_depan_rumah'])){
                      ?>
                          <a href="<?php echo base_url($record['foto_depan_rumah']); ?>" target="blank_"><img src="<?php echo base_url($record['foto_depan_rumah']); ?>" alt="" style="width: 180px;height:180px;" /></a>
                      <?php
                        }else{
                      ?>
                          TIDAK ADA FOTO
                      <?php
                        }
                      ?>
                    </td>
                    <td>
                      <?php
                        if(isset($record['foto_kondisi_rumah'])){
                      ?>
                          <a href="<?php echo base_url($record['foto_kondisi_rumah']); ?>" target="blank_"><img src="<?php echo base_url($record['foto_kondisi_rumah']); ?>" alt="" style="width: 180px;height:180px;" /></a>
                      <?php
                        }else{
                      ?>
                          TIDAK ADA FOTO
                      <?php
                        }
                      ?>
                    </td>
                    <td>
                      
                      <?php
                        if(isset($record['foto_selfie'])){
                      ?>
                          <a href="<?php echo base_url($record['foto_selfie']); ?>" target="blank_"><img src="<?php echo base_url($record['foto_selfie']); ?>" alt="" style="width: 180px;height:180px;" /></a>
                      <?php
                        }else{
                      ?>
                          TIDAK ADA FOTO
                      <?php
                        }
                      ?>
                    </td>
                  </tr>
                  <?php
                      }
                  }
                ?>
              </table>
            </div>
            
          </div><!-- /.box-body -->
        </div>  
      </div>    
    </section>
</div>