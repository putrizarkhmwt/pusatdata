<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> LIST SURVEY ALL
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>survey/export_excel" target="_blank"><i class="fa fa-download"></i> Download File</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Survey List</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Nik</th>
                      <th>Nama</th>
                      <th>Kecamatan</th>
                      <th>Kelurahan</th>
                      <th>Alamat</th>
                      <th>Surveyor</th>
                      <th>Tgl Survey</th>
                      <th>Ket</th>
                    </tr>
                    <?php
                    if(!empty($surveyRecords))
                    {
                        foreach($surveyRecords as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $record['nik']; ?></td>
                      <td><?php echo $record['nama']; ?></td>
                      <td><?php echo $record['kecamatan']; ?></td>
                      <td><?php echo $record['kelurahan']; ?></td>
                      <td><?php echo $record['alamat']; ?></td>
                      <td><?php echo $record['nama_surveyor']; ?></td>
                      <td><?php echo $record['tgl_survey']; ?></td>
                      <td><?php echo $record['ket']; ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
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
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
