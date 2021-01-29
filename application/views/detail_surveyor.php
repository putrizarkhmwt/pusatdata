<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> SURVEYOR
        <small>Detail</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><strong>PROFIL SURVEYOR</strong></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->                   
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group" style="display:none;">
                                        <label>ID</label>
                                        <input type="text" class="form-control required" value="<?=$surveyor->id_surveyor?>" id="id_surveyor" name="id_surveyor" maxlength="20" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Nama</label>
                                        <input type="text" class="form-control required" value="<?=$surveyor->nama_surveyor?>" id="nama_surveyor"  name="nama_surveyor" maxlength="128" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label>Nomor HP / Telp.</label>
                                        <input type="text" class="form-control required" value="<?=$surveyor->telp_surveyor?>" id="telp_surveyor" name="telp_surveyor" maxlength="30" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat Domisili</label>
                                        <textarea type="text" class="form-control required" value="<?=$surveyor->dom_surveyor?>" id="dom_surveyor"  name="dom_surveyor" maxlength="128" rows="3" placeholder="Enter ..." readonly /><?=$surveyor->dom_surveyor?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Status</label>
                                        <input type="text" class="form-control required" value="<?=$surveyor->status?>" id="status"  name="status" maxlength="128" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Kecamatan</label>
                                        <input type="text" class="form-control required" value="<?=$surveyor->kec?>" id="kec"  name="kec" maxlength="128" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Kelurahan</label>
                                        <input type="text" class="form-control required" value="<?=$surveyor->kel?>" id="kel"  name="kel" maxlength="128" readonly />
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </form>
                </div>
                <a href="javascript:window.history.go(-1);" type="submit" class="btn btn-info btn-md pull-right">Kembali</a>
            </div>
        </div>    
    </section>
</div>