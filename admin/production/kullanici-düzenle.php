<?php  
include 'header.php';
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Kullanıcı Düzenle <small>

              <?php 
              if ($_GET['durum']=="ok"){?>

              <b style="color: green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") { ?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php } elseif ($_GET['durum']=="dosyabuyuk") { ?>

              <b style="color:red;">Dosya Boyutu Yüksek İşlem Başarısız...</b>

              <?php } elseif ($_GET['durum']=="formathatali") { ?>

              <b style="color:red;">Format Hatalı İşlem Başarısız...</b>

              <?php } ?>


            </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <br />
<!--
            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Logo<br><span class="required"></span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php 
                  if (strlen($ayarcek['ayar_logo'])>0) {?>

                  <img width="200"  src="../../<?php echo $ayarcek['ayar_logo']; ?>">

                  <?php } else {?>
                  <img width="200"  src="../../dimg/logo-yok.png">
                  <?php } ?>

                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name"  name="ayar_logo"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_logo']; ?>">

              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="logoduzenle" class="btn btn-primary">Güncelle</button>
              </div>

            </form>
            -->
            <hr>
            <!--
             <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Fovicon <br><span class="required"></span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php 
                  if (strlen($ayarcek['ayar_favicon'])>0) {?>

                  <img width="36"  src="../../<?php echo $ayarcek['ayar_favicon']; ?>">

                  <?php } else {?>
                  <img width="200"  src="../../dimg/logo-yok.png">
                  <?php } ?>

                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fovicon Seç (36x36) <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name"  name="ayar_favicon"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_favicon']; ?>">

              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="faviconduzenle" class="btn btn-primary">Güncelle</button>
              </div>

            </form> -->


           
            <!--    (/) => en kök dizine çıkma    (../) =>bir üst diziye çık   -->
            <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

            


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tc <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_tc" value="<?php echo $ayarcek['kullanici_tc'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad Soyad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_adsoyad" value="<?php echo $ayarcek['kullanici_'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>



























              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button  type="submit" name="genelayarkaydet" class="btn btn-success">Guncelle</button>
                </div>
              </div>

            </form>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<!-- footer content -->
<?php 
include 'footer.php';
?>
<!-- /footer content -->
