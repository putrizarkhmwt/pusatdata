<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table class="table table-hover">
    <tr>
      <tr>
        <th>ID</th>
        <th>Nik KK</th>
        <th>No KK</th>
        <th>Nama KK</th>
        <th>Kecamatan</th>
        <th>Kelurahan</th>
        <th>Alamat</th>
        <th>Surveyor</th>
        <th>Tgl Survey</th>
        <th>Validator</th>
        <th>Tgl Validasi</th>
        <th>Ket</th>
        <th>Catatan</th>
        <th>Jenis Data</th>
        <th>Dokumentasi</th>
      </tr>
      <?php
      if(!empty($surveyRecords))
      {
          foreach($surveyRecords as $record)
          {
      ?>
      <tr>
        <td style="mso-number-format:\@;"><?php echo $record['id']; ?></td>
        <td style="mso-number-format:\@;"><?php echo $record['nik']; ?></td>
        <td style="mso-number-format:\@;"><?php echo $record['kk']; ?></td>
        <td><?php echo $record['nama']; ?></td>
        <td><?php echo $record['kecamatan']; ?></td>
        <td><?php echo $record['kelurahan']; ?></td>
        <td><?php echo $record['alamat']; ?></td>
        <td><?php echo $record['nama_surveyor']; ?></td>
        <td><?php echo $record['tgl_survey']; ?></td>
        <td><?php echo $record['name']; ?></td>
        <td><?php echo date('Y-m-d', strtotime($record['val_tgl'])); ?></td>
        <td><?php echo $record['ket']; ?></td>
        <td><?php echo $record['catatan']; ?></td>
        <td><?php echo $record['jenis_data']; ?></td>
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