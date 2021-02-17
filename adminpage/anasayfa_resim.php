


<?php 
include("../baglan.php");
switch(@$_GET["islem"]){
case "index":
    
?>


<html>
<head>
<meta http-equiv="refresh" content="5" >
</head>
<body>

<h3>Ana Sayfa Sliderını Düzenle</h3>




<a href='index.php?islem=yeni_ekle&id=$id&sayfa=anasayfa_resim' align="center">Yeni Resim Ekle</a>

<?php
$icerik = $db->query("select * from anasayfa_resim order by id desc");
$icerik-> execute();
while($row = $icerik->fetch(PDO::FETCH_ASSOC)){
	$id = $row['id'];
	$dizin = $row['dizin'];
	$dosya_ad = $row['dosya_ad'];
	

echo'<div align="center">
<table>



<tr><td ><font color="red"><b>Dizin:</b></font></td></tr>
<tr><td > <colspan="2"><b>'.$dizin.'</b></td></tr>
<tr><td ><font color="red"><b>Dosya adı:</b></font></td></tr>
<tr><td > <colspan="2"><b>'.$dosya_ad.'</b></td></tr>


<tr>
<td ><br />
<a href="index.php?islem=duzenleislem&id='.$id.'&sayfa=anasayfa_resim">Düzenle</a> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.php?islem=silislem&id='.$id.'&sayfa=anasayfa_resim">Sil</a>
</td>
<td></td>
<td></td></tr>
</table>
</div> <hr />';
}

?>




 <?php
break;
?>



<?php


case "silislem":

$id=$_GET["id"];

$db_kontrol= $db->query("SELECT * FROM anasayfa_resim WHERE id = '$id'")->fetch();

$old = getcwd(); // Save the current directory
	chdir("../anasayfa_resim");
	unlink($db_kontrol["dosya_ad"]);
	chdir($old);

  

$icerik = $db -> query("DELETE FROM anasayfa_resim WHERE id=$id");
if($icerik){header("Location:index.php?islem=index&sayfa=anasayfa_resim");}else{echo"Silme İşleminde hata oluştu";}
break;

case "yeni_ekle":
   
?>

<form action="index.php?sayfa=anasayfa_resim&islem=yeni_ekle" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <p>Resmin Yönlendireceği Sayfa:</p>
  <textarea class="form-control" name="res_url"></textarea>
  <input type="submit" value="Gönder" name="submit">

  
</form>


    <?php

    
    $target_dir = "../anasayfa_resim/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    


   




    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {

        $ekle11 = $db->prepare("INSERT INTO anasayfa_resim SET dizin = ? , dosya_ad = ? , res_url = ?");
        $ekle11 ->execute([$target_dir,$_FILES["fileToUpload"]["name"],$_POST["res_url"]]);
        if($ekle11){
        
        echo "eklendi";
        
        }else{
        echo "eklenmedi.";
        }

        
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
   
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      header("Location:index.php?islem=index&sayfa=anasayfa_resim");
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        header("Location:index.php?islem=index&sayfa=anasayfa_resim");
      } else {
        echo "Sorry, there was an error uploading your file.";
        header("Location:index.php?islem=index&sayfa=anasayfa_resim");
      }
    }
}
break;







case "duzenleislem":

  $id_duzenle = $_GET["id"];
  $db_kontrol= $db->query("SELECT * FROM anasayfa_resim WHERE id = '$id_duzenle'")->fetch();
  ?>

<form action="index.php?sayfa=anasayfa_resim&islem=db_duzenle&id=<?php echo $id_duzenle;?>" method="post">
      
      <P style="all:unset;">Dizin:</P>&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="dizin" value="<?php echo $db_kontrol["dizin"];?>"><br>
      <P style="all:unset;">Dosya adı:</P>&emsp;&emsp;&emsp;<input type="text" name="dosya_ad" value="<?php echo $db_kontrol["dosya_ad"];?>"><br>
      <P style="all:unset;">Url:</P>&emsp;&emsp;&emsp; <textarea class="form-control" name="res_url" ><?php echo $db_kontrol["res_url"];?></textarea><br>
      <input type="submit" value="Gönder" >

</form>


<?php
break;

case "db_duzenle":

  include("baglan.php");

  $id_duzenle = $_GET["id"];

  $dizin = $_POST["dizin"];
  $dosya_ad = $_POST["dosya_ad"];
  $url = $_POST["res_url"];

  $db_duzenle=$db->prepare("UPDATE anasayfa_resim SET dizin = ? , dosya_ad = ?  , res_url = ? WHERE id = ?");
  $result=$db_duzenle->execute([$dizin,$dosya_ad,$url,$id_duzenle]);

      if($result){

          header("Location:index.php?islem=index&sayfa=anasayfa_resim");

      }

      else{

          header("Location:index.php?islem=index&sayfa=anasayfa_resim");

      }
 
  

break;






default:

break;
}
?>