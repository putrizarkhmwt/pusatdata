<!-- <section class="content-header">
  <section class="content-header">
      <h1>
        <i class="fa fa-envelope-o"></i> MBR 2018
        <small>List</small>
      </h1>
    </section>	

<section class="content">
	<div class="row">
		<div class="col-md-8">
    <div class="box box-warning">
       <div class="box">
        <div class="box-header">
          <h3 class="box-title">MBR List</h3>
        </div>
        <div class="box-body">
          <table id="example2" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nomor KK</th>
                <th>Nomor KTP</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Alamat</th>
                <th>Ket</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php
                foreach ($validatorq as $result) {
                $result = get_object_vars($result);
              ?>
              <tr>
                <td><?=$result['no']?></td>
                <td><?=$result['nama']?></td>
                <td><?=$result['kk']?></td>
                <td><?=$result['nik']?></td>
                <td><?=$result['kecamatan']?></td>
                <td><?=$result['kelurahan']?></td>
                <td><?=$result['alamat']?></td>
                <td><?=$result['ket']?></td>

                <td>
                  <a href="<?=$this->config->base_url()?>validator/detail/<?=$result['no']?>" type="submit" class="btn bg-navy btn-md">Detail</a>
                </td>
              </tr>
              <?php } ?>
              </tbody>
          </table>
        </div>
        <h4 style="text-align: right;"><?php echo $links; ?></h4>
      </div>
      <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
     </div>

    </div> 
	</div>
</section> -->

<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-user"></i> VALIDATOR
        <small>Validasi Survey MBR</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
        <div class="row">
        <div class="col-xs-12">
        <div class="box">
        <div class="box-header">
          <h3 class="box-title">List Data</h3>
          <div class="box-tools">
                        <form action="<?php echo base_url() ?>validatorq/valListing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
          </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nomor KK</th>
                <th>Nomor KTP</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Alamat</th>
                <th>Ket</th>
                <th>Catatan</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <?php
                foreach ($validatorq as $result) {
                $result = get_object_vars($result);
              ?>
              <tr>
                <td><?=$result['no']?></td>
                <td><?=$result['nama']?></td>
                <td><?=$result['kk']?></td>
                <td><?=$result['nik']?></td>
                <td><?=$result['kecamatan']?></td>
                <td><?=$result['kelurahan']?></td>
                <td><?=$result['alamat']?></td>
                <td><?=$result['ket']?></td>
                <td><?=$result['catatan']?></td>
                <td>
                  <a href="<?=$this->config->base_url()?>validatorq/detail/<?=$result['no']?>" type="submit" class="btn bg-navy btn-md">Detail</a>
                </td>
              </tr>
              <?php } ?>
              </tbody>
          </table>
        </div>
        <h4 style="text-align: center;"><strong><?php echo $links;?></strong></h4>
      </div>
      <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
    </div>
  </div>

        </div>    
    </section>
</div>
