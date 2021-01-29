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
            <form role="form"  action="<?php echo base_url() ?>cekListing" method="POST" id="searchList" enctype="multipart/form-data" role="form">
              <div class="box-header">
                <div class="input-group">
                  <strong class="box-title">Filter :</strong><br>
                  <select class="form-control select2 input-sm pull-right"  style="width: 250px;" name='sur_id' id="sur_id">
                    <?php
                      foreach ($survey as $key) {
                    ?>
                        <option  value="<?=$key['id_surveyor']?>"><?=$key['nama_surveyor']?></option>
                    <?php
                      }
                    ?>
                  </select>
                  <select class="form-control select2" input-sm pull-left style="width: 250px;" name='ket' id="ket">
                    <option  value="BA">BA</option>
                    <option  value="ENTRY">ENTRY</option>
                    <option  value="SEMUA">SEMUA</option>
                  </select>
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
                  <th>Validator</th>
                  <th>Keterangan</th>
                  <th>Tanggal Survey</th>
                  <th>Tanggal Validasi</th>
                  <th>Jenis Data</th>
                  <th>Dokumentasi</th>
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
                    <td><?php echo $record['name'] ?></td>
                    <td><?php echo $record['ket'] ?></td>
                    <td><?php echo $record['tgl_survey'] ?></td>
                    <td><?php echo $record['val_tgl'] ?></td>
                    <td><?php echo $record['jenis_data'] ?></td>
                    <td>
                      <?php if($record['foto_selfie'] == NULL && $record['foto_kondisi_rumah'] == NULL && $record['foto_depan_rumah'] == NULL) { ?>
                        TIDAK ADA
                      <?php }else{ ?>
                        ADA
                      <?php } ?>
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