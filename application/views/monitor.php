<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-search"></i> MONITOR
        <small>List Error</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
        <div class="col-xs-12">
        <div class="box">
        <div class="box-header">
          <h3 class="box-title">KURANG KETERANGAN GABUNG-PISAH</h3>
        </div>
        <!-- /.box-header -->
        <!-- 'id_mbr', 'ket', 'catatan', 'surveyor_id', 'val_id', 'val_status', 'gabung', 'val_tgl', 'update_tgl' -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID MBR</th>
                <th>ID Surveyor</th>
                <th>ID Validator</th>
                <th>Status</th>
                <th>Gabung Pisah</th>
                <th>Tgl Validasi</th>
                <th>Tgl Update</th>
                <!-- <th>Action</th> -->
              </tr>
              </thead>
              <tbody>
              <?php
                foreach ($salah_k as $result) {
              ?>
              <tr>
                <td><a href="<?=$this->config->base_url()?>validatorq/detail/<?=$result['id_mbr']?>"><?=$result['id_mbr']?></a></td>
                <td><?=$result['surveyor_id']?></td>
                <td><?=$result['val_id']?></td>
                <td><?=$result['val_status']?></td>
                <td><?=$result['gabung']?></td>
                <td><?=$result['val_tgl']?></td>
                <td><?=$result['update_tgl']?></td>
                <!-- <td>
                  <a href="<?=$this->config->base_url()?>surveyor/detail/<?=$result['id_surveyor']?>" type="submit" class="btn bg-navy btn-md">Detail</a>
                  <a href="<?=$this->config->base_url()?>surveyor/edit/<?=$result['id_surveyor']?>" type="submit" class="btn btn-primary btn-md">Edit</a>
                  <a href="<?=$this->config->base_url()?>surveyor/delete/<?=$result['id_surveyor']?>" type = "submit" class="btn btn-danger btn-md" id="btn-chat">Hapus</a>
                </td> -->
              </tr>
              <?php } ?>
              </tbody>
          </table>
        </div>
      </div> </div> </div>
  </section>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
        <div class="box-header">
          <h3 class="box-title">KETERANGAN SURVEYOR SALAH</h3>
        </div>
        <!-- /.box-header -->
        <!-- 'id_mbr', 'ket', 'catatan', 'surveyor_id', 'val_id', 'val_status', 'gabung', 'val_tgl', 'update_tgl' -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID MBR</th>
                <th>ID Surveyor</th>
                <th>ID Validator</th>
                <th>Status</th>
                <th>Gabung Pisah</th>
                <th>Tgl Validasi</th>
                <th>Tgl Update</th>
                <!-- <th>Action</th> -->
              </tr>
              </thead>
              <tbody>
              <?php
                foreach ($salah_s as $result) {
              ?>
              <tr>
                <td><a href="<?=$this->config->base_url()?>validatorq/detail/<?=$result['id_mbr']?>"><?=$result['id_mbr']?></a></td>
                <td><?=$result['surveyor_id']?></td>
                <td><?=$result['val_id']?></td>
                <td><?=$result['val_status']?></td>
                <td><?=$result['gabung']?></td>
                <td><?=$result['val_tgl']?></td>
                <td><?=$result['update_tgl']?></td>
                <!-- <td>
                  <a href="<?=$this->config->base_url()?>surveyor/detail/<?=$result['id_surveyor']?>" type="submit" class="btn bg-navy btn-md">Detail</a>
                  <a href="<?=$this->config->base_url()?>surveyor/edit/<?=$result['id_surveyor']?>" type="submit" class="btn btn-primary btn-md">Edit</a>
                  <a href="<?=$this->config->base_url()?>surveyor/delete/<?=$result['id_surveyor']?>" type = "submit" class="btn btn-danger btn-md" id="btn-chat">Hapus</a>
                </td> -->
              </tr>
              <?php } ?>
              </tbody>
          </table>
        </div>
      </div> </div> </div>   
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

  