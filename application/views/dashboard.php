<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> DASHBOARD
        <small>Control panel</small>
      </h1>
    </section>
    
    <!-- <?php
          $actionlist=['Acceptance','Transfer','Mitigation','Avoidance'];
          for($a=0; $a < count($actionlist); $a++) {
            $tempA[$a]=0;
              for($b = 0; $b < count($hitung); $b++) {
                if(strpos($hitung[$b]['recom'], $actionlist[$a]) !== false) {
                    $tempA[$a]++;
                  }
                }
              }
    ?> -->
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <p><strong>List</strong></p>
                  <p><strong>Data MBR</strong></p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?=$this->config->base_url()?>validator/validatorListing" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <p><strong>List</strong></p>
                  <p><strong>Data SKM</strong></p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?=$this->config->base_url()?>validatorskm/validatorListing" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <?php
            if($role == ROLE_ADMIN || $role == ROLE_SUR)
            {
            ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <p><strong>Rekap</strong></p>
                  <p><strong>Dokumentasi</strong></p>
                </div>
                <div class="icon">
                  <i class="fa fa-camera"></i>
                </div>
                <a href="<?=$this->config->base_url()?>cekdokumentasi/cekListing" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <?php }?>
            <?php
            if($role == ROLE_ADMIN || $role == ROLE_VAL)
            {
            ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <p><strong>Rekap</strong></p>
                  <p><strong>Validasi</strong></p>
                </div>
                <div class="icon">
                  <i class="fa fa-check"></i>
                </div>
                <a href="<?=$this->config->base_url()?>cek/cekListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <?php }?>
          </div>
    </section>
</div>