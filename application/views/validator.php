<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php
          if($role == ROLE_ADMIN || $role == ROLE_VAL)
          {
        ?>
            <i class="fa fa-check"></i> VALIDASI MBR
        <?php 
          }else{
        ?>
          <i class="fa fa-check"></i> DATA MBR
        <?php 
          }
        ?>
          <small>List</small>
      </h1>
    </section>
    <section class="content">
        <!-- <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List MBR</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>validator/validatorListing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" class="form-control input-sm pull-right" value="<?php echo $searchText; ?>" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                            <!-- Date and time range -->
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Nomor KK</th>
                      <th>Nomor KTP</th>
                      <th>Kecamatan</th>
                      <th>Kelurahan</th>
                      <th>Alamat</th>
                      <!-- <th>Tgl Survey</th>
                      <th>Ket</th>
                      <th>Catatan</th> -->
                      <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($validatorRecords))
                    {
                        foreach($validatorRecords as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $record->no ?></td>
                      <td><?php echo $record->nama ?></td>
                      <td><?php echo $record->kk ?></td>
                      <td><?php echo $record->nik ?></td>
                      <td><?php echo $record->kecamatan ?></td>
                      <td><?php echo $record->kelurahan ?></td>
                      <td><?php echo $record->alamat ?></td>
                      <!-- <td><?php echo $record->tgl_survey ?></td>
                      <td><?php echo $record->ket ?></td>
                      <td><?php echo $record->catatan ?></td> -->
                      <td class="text-center">
                          <a href="<?=$this->config->base_url()?>validatorq/detail/<?=$record->no?>" type="submit" class="btn bg-navy btn-md">Detail</a>
                      </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                   <!--  <?php echo $this->pagination->create_links(); ?> -->
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "validator/validatorListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>