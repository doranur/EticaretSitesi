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
            <h2>Genel Ayarlar <small>

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


            <hr>
            <!--    (/) => en kök dizine çıkma    (../) =>bir üst diziye çık   -->
            <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

            


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon Numarası <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_tel" value="<?php echo $ayarcek['ayar_tel'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon Numarası (GSM) <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_gsm" value="<?php echo $ayarcek['ayar_gsm'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Faxs Numarası <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_faxs" value="<?php echo $ayarcek['ayar_faxs'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail Adresi <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İlçe<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_ilce" value="<?php echo $ayarcek['ayar_ilce'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İl <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_il" value="<?php echo $ayarcek['ayar_il'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Adress<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_adress" value="<?php echo $ayarcek['ayar_adress'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesai<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_mesai" value="<?php echo $ayarcek['ayar_mesai'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              

              <hr>
              <br/>
              <!--
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tel Menüde <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_tel" value="<?php echo $ayarcek['ayar_tel'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Whatsapp <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_whatsapp" value="<?php echo $ayarcek['ayar_whatsapp'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail Menüde <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
-->

              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button  type="submit" name="iletisimayarkaydet" class="btn btn-success">Guncelle</button>
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
