<?php 
ob_start();
session_start();
include 'baglan.php';



if (isset($_POST['admingiris'])) {


 $kullanici_mail= $_POST['kullanici_mail'];
 $kullanici_password= md5($_POST['kullanici_password']);

 $kullanicisor=$db->prepare("SELECT *FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and 
  kullanici_yetki=:yetki");
 $kullanicisor->execute(array(
  'mail'=> $kullanici_mail,
  'password'=> $kullanici_password,
  'yetki'=>5
  ));

 echo $say=$kullanicisor->rowCount();

 if ( $say==1)
 {
   $_SESSION['kullanici_mail']=$kullanici_mail;
   header("Location:../production/index.php");
   exit;
}
  else 
  {
   header("Location:../production/login.php?durum=no");
   exit;
 }

}
//// Genel ayar kaydet
if (isset($_POST['genelayarkaydet'])) {

$ayarkaydet=$db->prepare("UPDATE ayar SET 
     ayar_title=:ayar_title,
     ayar_description=:ayar_description,
     ayar_keywords=:ayar_keywords,
     ayar_author=:ayar_author WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
   'ayar_title'=> $_POST['ayar_title'],
   'ayar_description'=> $_POST['ayar_description'],
   'ayar_keywords'=> $_POST['ayar_keywords'],
   'ayar_author'=> $_POST['ayar_author']
   ));

 if($update){

  header("Location:../production/genelayarlar.php?durum=ok");
 }

 else {
 	header("Location:../production/genelayarlar.php?durum=no");
 }

}










/////iletisim ayarlar
if (isset($_POST['iletisimayarkaydet'])) {

$ayarkaydet=$db->prepare("UPDATE ayar SET 
     ayar_tel=:ayar_tel,
     ayar_gsm=:ayar_gsm,
     ayar_ilce=:ayar_ilce,
     ayar_il=:ayar_il,
     ayar_mail=:ayar_mail,
     ayar_faxs=:ayar_faxs,
     ayar_mesai=:ayar_mesai,
     ayar_adress=:ayar_adress 
     WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
   'ayar_tel'=> $_POST['ayar_tel'],
   'ayar_gsm'=> $_POST['ayar_gsm'],
   'ayar_ilce'=> $_POST['ayar_ilce'],
   'ayar_il'=> $_POST['ayar_il'],
   'ayar_mail'=> $_POST['ayar_mail'],
   'ayar_faxs'=> $_POST['ayar_adress'],
   'ayar_mesai'=> $_POST['ayar_mesai'],
   'ayar_adress'=> $_POST['ayar_adress'] ));

 if($update){

  header("Location:../production/iletisim.php?durum=ok");
 }
 else {
 	header("Location:../production/iletisim.php?durum=no");
 }

}









///////////sosyal medya ayarları
if (isset($_POST['sosyalmedyaayarkaydet'])) {

$ayarkaydet=$db->prepare("UPDATE ayar SET 
     ayar_facebook=:ayar_facebook,
     ayar_youtube=:ayar_youtube,
     ayar_google=:ayar_google
    
     WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
   'ayar_facebook'=> $_POST['ayar_facebook'],
   'ayar_youtube'=> $_POST['ayar_youtube'],
   'ayar_google'=> $_POST['ayar_google']
    ));

 if($update){

  header("Location:../production/sosyalmedya.php?durum=ok");
 }
 else {
 	header("Location:../production/sosyalmedya.php?durum=no");
 }

}







///////mail ayarlarrrrrlarrrrrrrrrrrr
if (isset($_POST['mailayarkaydet'])) {

$ayarkaydet=$db->prepare("UPDATE ayar SET 
     ayar_smtphost=:ayar_smtphost,
     ayar_smtpport=:ayar_smtpport,
     ayar_smtppassword=:ayar_smtppassword
    
     WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
   'ayar_smtphost'=> $_POST['ayar_smtphost'],
   'ayar_smtpport'=> $_POST['ayar_smtpport'],
   'ayar_smtppassword'=> $_POST['ayar_smtppassword']
    ));

 if($update){

  header("Location:../production/mailayarlar.php?durum=ok");
 }
 else {
 	header("Location:../production/mailayarlar.php?durum=no");
 }

}










//////////hakkımzda  a yarlarrrrrrr
if (isset($_POST['hakkimizdakaydet'])) {

$hakkimizdakaydet=$db->prepare("UPDATE hakkımızda SET 
    hakkimizda_baslik=:hakkimizda_baslik,
    hakkimizda_misyon=:hakkimizda_misyon,
    hakkimizda_vizyon=:hakkimizda_vizyon,
    hakkimizda_video=:hakkimizda_video,
    hakkimizda_icerik=:hakkimizda_icerik WHERE hakkimizda_id=0");

$update=$hakkimizdakaydet->execute(array(
   'hakkimizda_video'=> $_POST['hakkimizda_video'],
   'hakkimizda_vizyon'=> $_POST['hakkimizda_vizyon'],
   'hakkimizda_misyon'=> $_POST['hakkimizda_misyon'],
   'hakkimizda_baslik'=> $_POST['hakkimizda_baslik'],
   'hakkimizda_icerik'=> $_POST['hakkimizda_icerik']
   ));

 if($update){

  header("Location:../production/hakkimizda.php?durum=ok");
 }

 else {
  header("Location:../production/hakkimizda.php?durum=no");
 }

}



 ?>
