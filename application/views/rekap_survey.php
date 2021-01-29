<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Rekap Survey</small>
         <!-- <?php
        echo $sur_id;
        echo "_";
        echo $valid_id;
        echo "_";
        echo $tglawal;
        echo "_";
        echo $tglakhir;
        echo "_";
        print_r($cekRecords);
        ?> -->
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>survey/export_excel" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="date" name="tglakhir" id="tglakhir" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Tanggal Akhir"/>
                              <input type="date" name="tglawal" id="tglawal" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Tanggal Awal"/>
                              <div class="input-group-btn">
                                <button class="btn btn-default bg-blue btn-md searchList" type="submit" target="_blank">Download Data</i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                <!-- sur.nama_surveyor AS surveyor, usr.name AS validator, val.id_mbr, val.ket, val.gabung, val.val_tgl, val.update_tgl, val.cek_gaji -->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script> -->
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "cekListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
