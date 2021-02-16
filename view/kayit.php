

<!DOCTYPE html>

<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <title>ASM Güncesi | Aile  Hekimliği Online Etkinlik Platformu </title>
	
	<meta name="keywords" content="asm güncesi, ASM Güncesi, Aile Hekimliği, Aile Hekimi Akademi, canlı yayın, konahed, nutuva, nutuvalive, konya aile hekimi, aile hekimliği akademi, canlı etkinlik, istahed, ahef akademi, akademi, ahef, konya aile hekimi,">
<meta name="description" content="asm güncesi, ASM Güncesi, Aile Hekimliği, Aile Hekimi Akademi, canlı yayın, konahed, nutuva, nutuvalive, konya aile hekimi, aile hekimliği akademi, canlı etkinlik, istahed, ahef akademi, akademi, ahef, konya aile hekimi,">
<meta name="author" content="nutuva.com">
<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

	
 <script src="https://kit.fontawesome.com/a9da6c256f.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" type="image/png" href="images/favicon/favicon-32x32.png"/>
<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

	
   
    <link href="view/css/bootstrap.min.css" rel="stylesheet" />
    <link href="view/css/all.min.css" rel="stylesheet" />
    <link href="view/css/custom.css" rel="stylesheet" />
    <link href="view/fontawesome/css/fontawesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="view/style.css">


	<link rel="stylesheet" href="view/css/style.css">

    <script src="view/js/moment-with-locales.js"></script>
    <script src="view/js/moment-duration-format.js"></script>
    <script src="view/js/jquery-3.1.0.min.js"></script>
    <script src="view/js/popper.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/jquery.countdown.js"></script>
    <script src="view/js/jquery.totemticker.js"></script>
    <script src="view/js/AlseinJS.js"></script>

 
    <style>
        a {
            text-decoration: none;
            background-color: transparent;
        }

        .giris {
            color: #000 !important;
        }
    </style>
	
	
	<script src="view/js/mobilemask.debug.js" type="text/javascript"></script>

	
</head>
<body>
   
<script src="http://www.turkpediatri.tv/ScriptResource.axd?d=D9drwtSJ4hBA6O8UhT6CQsfET3aMp3eabpLVvNadVeUyv674QlzjrfqaLgn56pxal_fZbX66eNQtuwBr0YX-KsxLs_uDNmv9QIHDTN8fWwwFaDFUvxicxontNjrxYeE0VCf3Xj7rGqLE92Tbq1UJKOGLM781&amp;t=ffffffffce034dab" type="text/javascript"></script>



        <header>
		  <div class="container-fluid topbar">
                <div class="row py-2">
                    <div class="col-md-4 offset-1">
                        <a>Nutuva Bildiri Toplama Sistemi </a> 
						
                    </div>
					
					<div class="col-md-4 offset-1">
                       <?php
  
    if (isset($_SESSION['user'])) {
        echo "Giriş yapıldı. (".$_SESSION['user']['uye_adi'].")<a href='cikis'>Güvenli Çıkış </a>";
    }else {
        echo "Giriş yapılmamış.";
    }
?>
                    </div>

                </div>
            </div>
            
           
		<?php
include("menu.php");
?>	
			
			
		
		</header>
   
              
	


			
		

		<!-- Modal -->
			<div >
			
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Ücretsiz Kayıt OL</h5>
							
							
						</div>
						
						
						<div class="modal-body">
							<form action="/kaydet" method="POST">
		<label>* Ad Soyad</label>
		<input class="form-control" type="text" name="kadi" onchange="toUpper(this)" onkeyup="toUpper(this)" style="width:100%;" required>
								
		<label>* Cep Telefonu</label>
		<input name="tel" type="text" id="ContentPlaceHolder2_txtCepTelefonu" class="form-control" placeholder="(5xx) xxx xx xx" / required>
								
		<label>Şehir</label>
		<select name="sehir" class="form-control" type="text" >
		<option value="Yok">Se&#231;iniz</option>
		<option value="Adana">Adana</option>
		<option value="Adıyaman">Adıyaman</option>
		<option value="Afyonkarahisar">Afyonkarahisar</option>
		<option value="Ağrı">Ağrı</option>
		<option value="Aksaray">Aksaray</option>
		<option value="Amasya">Amasya</option>
		<option value="Ankara">Ankara</option>
		<option value="Antalya">Antalya</option>
		<option value="Ardahan">Ardahan</option>
		<option value="Artvin">Artvin</option>
		<option value="Aydın">Aydın</option>
		<option value="Balıkesir">Balıkesir</option>
		<option value="Bartın">Bartın</option>
		<option value="Batman">Batman</option>
		<option value="Bayburt">Bayburt</option>
		<option value="Bilecik">Bilecik</option>
		<option value="Bing&#246;l">Bing&#246;l</option>
		<option value="Bitlis">Bitlis</option>
		<option value="Bolu">Bolu</option>
		<option value="Burdur">Burdur</option>
		<option value="Bursa">Bursa</option>
		<option value="&#199;anakkale">&#199;anakkale</option>
		<option value="&#199;ankırı">&#199;ankırı</option>
		<option value="&#199;orum">&#199;orum</option>
		<option value="Denizli">Denizli</option>
		<option value="Diyarbakır">Diyarbakır</option>
		<option value="D&#252;zce">D&#252;zce</option>
		<option value="Edirne">Edirne</option>
		<option value="Elazığ">Elazığ</option>
		<option value="Erzincan">Erzincan</option>
		<option value="Erzurum">Erzurum</option>
		<option value="Eskişehir">Eskişehir</option>
		<option value="Gaziantep">Gaziantep</option>
		<option value="Giresun">Giresun</option>
		<option value="G&#252;m&#252;şhane">G&#252;m&#252;şhane</option>
		<option value="Hakkari">Hakkari</option>
		<option value="Hatay">Hatay</option>
		<option value="Iğdır">Iğdır</option>
		<option value="Isparta">Isparta</option>
		<option value="İstanbul">İstanbul</option>
		<option value="İzmir">İzmir</option>
		<option value="Kahramanmaraş">Kahramanmaraş</option>
		<option value="Karab&#252;k">Karab&#252;k</option>
		<option value="Karaman">Karaman</option>
		<option value="Kars">Kars</option>
		<option value="Kastamonu">Kastamonu</option>
		<option value="Kayseri">Kayseri</option>
		<option value="Kırıkkale">Kırıkkale</option>
		<option value="Kırklareli">Kırklareli</option>
		<option value="Kırşehir">Kırşehir</option>
		<option value="Kilis">Kilis</option>
		<option value="Kocaeli">Kocaeli</option>
		<option value="Konya">Konya</option>
		<option value="K&#252;tahya">K&#252;tahya</option>
		<option value="Malatya">Malatya</option>
		<option value="Manisa">Manisa</option>
		<option value="Mardin">Mardin</option>
		<option value="Mersin">Mersin</option>
		<option value="Muğla">Muğla</option>
		<option value="Muş">Muş</option>
		<option value="Nevşehir">Nevşehir</option>
		<option value="Niğde">Niğde</option>
		<option value="Ordu">Ordu</option>
		<option value="Osmaniye">Osmaniye</option>
		<option value="Rize">Rize</option>
		<option value="Sakarya">Sakarya</option>
		<option value="Samsun">Samsun</option>
		<option value="Siirt">Siirt</option>
		<option value="Sinop">Sinop</option>
		<option value="Sivas">Sivas</option>
		<option value="Şanlıurfa">Şanlıurfa</option>
		<option value="Şırnak">Şırnak</option>
		<option value="Tekirdağ">Tekirdağ</option>
		<option value="Tokat">Tokat</option>
		<option value="Trabzon">Trabzon</option>
		<option value="Tunceli">Tunceli</option>
		<option value="Uşak">Uşak</option>
		<option value="Van">Van</option>
		<option value="Yalova">Yalova</option>
		<option value="Yozgat">Yozgat</option>
		<option value="Zonguldak">Zonguldak</option>
		<option value="T&#252;rkiye Dışı">T&#252;rkiye Dışı</option>
		</select>
				
		
		<label>Ünvan</label>
		<select name="unvan" class="form-control" type="text" >
		<option value="Yok">Se&#231;iniz</option>
		
		<option value="öğrenci">Tıp Fakültesi Öğrencisi</option>
		<option value="Yardımcı Sağlık Personeli">Yardımcı Sağlık Personeli</option>
		<option value="Dr.">Dr.(Tıp)</option>
		<option value="Uzm. Dr.">Uzm. Dr.(Tıp)</option>
		<option value="Dr. &#214;ğr. G&#246;r.">Dr. &#214;ğr. G&#246;r.</option>
		
		</select>			
									
		<label>Uzmanlık Dalı (varsa)</label>
		<select name="uzmanlik" class="form-control" type="text" >
		<option value="Yok">Se&#231;iniz</option>
		<option value="Acil Tıp">Acil Tıp</option>
		<option value="Adli Tıp">Adli Tıp</option>
		<option value="Adli Tıp - Toksikoloji">Adli Tıp - Toksikoloji</option>
		<option value="Aile Hekimliği Uzmanlığı">Aile Hekimliği Uzmanlığı</option>
		<option value="Aile Hekimliği">Aile Hekimliği </option>
		<option value="Anatomi">Anatomi</option>
		<option value="Anesteziyoloji ve Reanimasyon">Anesteziyoloji ve Reanimasyon</option>
		<option value="Anesteziyoloji ve Reanimasyon - Algoloji">Anesteziyoloji ve Reanimasyon - Algoloji</option>
		<option value="Askeri Sahra Hekimliği">Askeri Sahra Hekimliği</option>
		<option value="Beyin ve Sinir Cerrahisi">Beyin ve Sinir Cerrahisi</option>
		<option value="&#199;ocuk Cerrahisi">&#199;ocuk Cerrahisi</option>
		<option value="&#199;ocuk Cerrahisi - &#199;ocuk &#220;rolojisi">&#199;ocuk Cerrahisi - &#199;ocuk &#220;rolojisi</option>
		<option value="&#199;ocuk Psikiyatrisi">&#199;ocuk Psikiyatrisi</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - Acil">&#199;ocuk Sağlığı ve Hastalıkları - Acil</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - Adolesan">&#199;ocuk Sağlığı ve Hastalıkları - Adolesan</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Alerjisi">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Alerjisi</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Endokrinolojisi">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Endokrinolojisi</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Enfeksiyon Hastalıkları">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Enfeksiyon Hastalıkları</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk G&#246;ğ&#252;s Hastalıkları">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk G&#246;ğ&#252;s Hastalıkları</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Hematolojisi">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Hematolojisi</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk İmm&#252;nolojisi">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk İmm&#252;nolojisi</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Kardiyolojisi">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Kardiyolojisi</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Metabolizma Hastalıkları">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Metabolizma Hastalıkları</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Nefrolojisi">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Nefrolojisi</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk N&#246;rolojisi">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk N&#246;rolojisi</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Onkolojisi">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Onkolojisi</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Romatolojisi">&#199;ocuk Sağlığı ve Hastalıkları - &#199;ocuk Romatolojisi</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - Genel">&#199;ocuk Sağlığı ve Hastalıkları - Genel</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - Genetik">&#199;ocuk Sağlığı ve Hastalıkları - Genetik</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - Neonataloji">&#199;ocuk Sağlığı ve Hastalıkları - Neonataloji</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - Sosyal Pediatri">&#199;ocuk Sağlığı ve Hastalıkları - Sosyal Pediatri</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - Yoğun Bakım">&#199;ocuk Sağlığı ve Hastalıkları - Yoğun Bakım</option>
		<option value="&#199;ocuk Sağlığı ve Hastalıkları - Yoğun Bakım">&#199;ocuk Sağlığı ve Hastalıkları - Yoğun Bakım</option>
		<option value="Dermatoloji">Dermatoloji</option>
		<option value="Embriyoloji ve Histoloji">Embriyoloji ve Histoloji</option>
		<option value="Enfeksiyon Hastalıkları">Enfeksiyon Hastalıkları</option>
		<option value="Fiziksel Tıp ve Rehabilitasyon">Fiziksel Tıp ve Rehabilitasyon</option>
		<option value="Fiziksel Tıp ve Rehabilitasyon - Romatoloji">Fiziksel Tıp ve Rehabilitasyon - Romatoloji</option>
		<option value="Fizyoloji">Fizyoloji</option>
		<option value="Genel Cerrahi">Genel Cerrahi</option>
		<option value="Genel Cerrahi - Gastroenteroloji Cerrahisi">Genel Cerrahi - Gastroenteroloji Cerrahisi</option>
		<option value="Genel Pratisyenlik">Genel Pratisyenlik</option>
		<option value="Genel Pratisyenlik - Aile Hekimliği">Genel Pratisyenlik - Aile Hekimliği</option>
		<option value="G&#246;ğ&#252;s Cerrahisi">G&#246;ğ&#252;s Cerrahisi</option>
		<option value="G&#246;ğ&#252;s Hastalıkları">G&#246;ğ&#252;s Hastalıkları</option>
		<option value="G&#246;ğ&#252;s Hastalıkları - Alerjik G&#246;ğ&#252;s Hastalıkları">G&#246;ğ&#252;s Hastalıkları - Alerjik G&#246;ğ&#252;s Hastalıkları</option>
		<option value="G&#246;ğ&#252;s Hastalıkları - Yoğun Bakım">G&#246;ğ&#252;s Hastalıkları - Yoğun Bakım</option>
		<option value="G&#246;z Hastalıkları">G&#246;z Hastalıkları</option>
		<option value="Halk Sağlığı">Halk Sağlığı</option>
		<option value="Halk Sağlığı - &#199;evre Sağlığı">Halk Sağlığı - &#199;evre Sağlığı</option>
		<option value="Halk Sağlığı - Epidemiyoloji">Halk Sağlığı - Epidemiyoloji</option>
		<option value="Halk Sağlığı - İşyeri Hekimliği">Halk Sağlığı - İşyeri Hekimliği</option>
		<option value="Halk Sağlığı - Okul Hekimliği">Halk Sağlığı - Okul Hekimliği</option>
		<option value="Hava ve Uzay Hekimliği">Hava ve Uzay Hekimliği</option>
		<option value="İ&#231; Hastalıkları">İ&#231; Hastalıkları</option>
		<option value="İ&#231; Hastalıkları - Alerji Hastalıkları">İ&#231; Hastalıkları - Alerji Hastalıkları</option>
		<option value="İ&#231; Hastalıkları - Endokrinoloji ve Metabolizma Hastalıkları">İ&#231; Hastalıkları - Endokrinoloji ve Metabolizma Hastalıkları</option>
		<option value="İ&#231; Hastalıkları - Gastroenteroloji">İ&#231; Hastalıkları - Gastroenteroloji</option>
		<option value="İ&#231; Hastalıkları - Geriatri">İ&#231; Hastalıkları - Geriatri</option>
		<option value="İ&#231; Hastalıkları - Hematoloji">İ&#231; Hastalıkları - Hematoloji</option>
		<option value="İ&#231; Hastalıkları - İmm&#252;noloji">İ&#231; Hastalıkları - İmm&#252;noloji</option>
		<option value="İ&#231; Hastalıkları - İş ve Meslek Hastalıkları">İ&#231; Hastalıkları - İş ve Meslek Hastalıkları</option>
		<option value="İ&#231; Hastalıkları - Nefroloji">İ&#231; Hastalıkları - Nefroloji</option>
		<option value="İ&#231; Hastalıkları - Romatoloji">İ&#231; Hastalıkları - Romatoloji</option>
		<option value="İ&#231; Hastalıkları - Tıbbi Onkoloji">İ&#231; Hastalıkları - Tıbbi Onkoloji</option>
		<option value="İ&#231; Hastalıkları - Yoğun Bakım">İ&#231; Hastalıkları - Yoğun Bakım</option>
		<option value="Kadın Hastalıkları ve Doğum">Kadın Hastalıkları ve Doğum</option>
		<option value="Kadın Hastalıkları ve Doğum - Perinatoloji">Kadın Hastalıkları ve Doğum - Perinatoloji</option>
		<option value="Kadın Hastalıkları ve Doğum - &#220;reme Endokrinolojisi ve İnfertilite">Kadın Hastalıkları ve Doğum - &#220;reme Endokrinolojisi ve İnfertilite</option>
		<option value="Kalp ve Damar Cerrahisi">Kalp ve Damar Cerrahisi</option>
		<option value="Kalp ve Damar Cerrahisi - &#199;ocuk Kalp ve Damar Cerrahisi">Kalp ve Damar Cerrahisi - &#199;ocuk Kalp ve Damar Cerrahisi</option>
		<option value="Kardiyoloji">Kardiyoloji</option>
		<option value="Kulak -Burun -Boğaz Hastalıkları">Kulak -Burun -Boğaz Hastalıkları</option>
		<option value="N&#246;roloji">N&#246;roloji</option>
		<option value="N&#252;kleer Tıp">N&#252;kleer Tıp</option>
		<option value="Ortopedi ve Travmatoloji">Ortopedi ve Travmatoloji</option>
		<option value="Ortopedi ve Travmatoloji - El Cerrahisi">Ortopedi ve Travmatoloji - El Cerrahisi</option>
		<option value="Plastik, Rekonstr&#252;ktif ve Estetik Cerrahi">Plastik, Rekonstr&#252;ktif ve Estetik Cerrahi</option>
		<option value="Plastik, Rekonstr&#252;ktif ve Estetik Cerrahi - El Cerrahisi">Plastik, Rekonstr&#252;ktif ve Estetik Cerrahi - El Cerrahisi</option>
		<option value="Psikiyatri">Psikiyatri</option>
		<option value="Radyasyon Onkolojisi">Radyasyon Onkolojisi</option>
		<option value="Radyoloji">Radyoloji</option>
		<option value="Radyoloji - Girişimsel Radyoloji">Radyoloji - Girişimsel Radyoloji</option>
		<option value="Radyoloji - N&#246;roradyoloji">Radyoloji - N&#246;roradyoloji</option>
		<option value="Radyoloji - Pediyatrik Radyoloji">Radyoloji - Pediyatrik Radyoloji</option>
		<option value="Spor Hekimliği">Spor Hekimliği</option>
		<option value="Sualtı Hekimliği ve Hiperbarik Tıp">Sualtı Hekimliği ve Hiperbarik Tıp</option>
		<option value="Tıbbi Biyokimya">Tıbbi Biyokimya</option>
		<option value="Tıbbi Biyoloji">Tıbbi Biyoloji</option>
		<option value="Tıbbi Ekoloji ve Hidroklimatoloji">Tıbbi Ekoloji ve Hidroklimatoloji</option>
		<option value="Tıbbi Farmakoloji">Tıbbi Farmakoloji</option>
		<option value="Tıbbi Farmakoloji - Toksikoloji">Tıbbi Farmakoloji - Toksikoloji</option>
		<option value="Tıbbi Genetik">Tıbbi Genetik</option>
		<option value="Tıbbi Genetik - Klinik Genetik">Tıbbi Genetik - Klinik Genetik</option>
		<option value="Tıbbi Genetik - Klinik Molek&#252;ler Genetik">Tıbbi Genetik - Klinik Molek&#252;ler Genetik</option>
		<option value="Tıbbi Genetik - Klinik Sitogenetik">Tıbbi Genetik - Klinik Sitogenetik</option>
		<option value="Tıbbi Mikrobiyoloji">Tıbbi Mikrobiyoloji</option>
		<option value="Tıbbi Mikrobiyoloji - İmm&#252;noloji">Tıbbi Mikrobiyoloji - İmm&#252;noloji</option>
		<option value="Tıbbi Mikrobiyoloji - Mikoloji">Tıbbi Mikrobiyoloji - Mikoloji</option>
		<option value="Tıbbi Mikrobiyoloji - Tıbbi Parazitoloji">Tıbbi Mikrobiyoloji - Tıbbi Parazitoloji</option>
		<option value="Tıbbi Mikrobiyoloji - Viroloji">Tıbbi Mikrobiyoloji - Viroloji</option>
		<option value="Tıbbi Patoloji">Tıbbi Patoloji</option>
		<option value="Tıbbi Patoloji - Dermatopatoloji">Tıbbi Patoloji - Dermatopatoloji</option>
		<option value="Tıbbi Patoloji - N&#246;ropatoloji">Tıbbi Patoloji - N&#246;ropatoloji</option>
		<option value="Tıbbi Patoloji - Sitopatoloji">Tıbbi Patoloji - Sitopatoloji</option>
		<option value="Tıbbi Patoloji - Sitopatoloji">Tıbbi Patoloji - Sitopatoloji</option>
		<option value="Tıp Tarihi ve Etik">Tıp Tarihi ve Etik</option>
		<option value="&#220;roloji">&#220;roloji</option>
		<option value="&#220;roloji - Androloji">&#220;roloji - Androloji</option>
		<option value="&#220;roloji - &#199;ocuk &#220;rolojisi">&#220;roloji - &#199;ocuk &#220;rolojisi</option>
		<option value="Yok">Yok</option>

		</select>
				
		<label>* Email</label>
		<input class="form-control" type="email" name="mail" required>	
								
		<label>* Şifreniz</label>
		<input class="form-control" type="password" name="sifre" required>
								  
								  <p align="left">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <span style="color: #000;"><input id="ContentPlaceHolder2_checkbox1" type="checkbox" name="checkbox1" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder2$checkbox1\&#39;,\&#39;\&#39;)&#39;, 0)" required /></span>
                            &nbsp;&nbsp;
                            <a style="color: #007bff !important" data-toggle="modal" data-target="#exampleModal">* KVKK Metnini</a> Okudum, Kabul Ediyorum.
                            
                        </p>
						
							 <p align="left">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <span style="color: #000;"><input id="ContentPlaceHolder2_checkbox1" type="checkbox" name="checkbox1" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder2$checkbox1\&#39;,\&#39;\&#39;)&#39;, 0)" required /></span>
                            &nbsp;&nbsp; * Sağlık Mesleği Mensubu Olduğumu Beyan Ederim.
                            
                        </p>
								
								<br>
		<button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;Kayıt OL</button>
		
		</form>
		
						</div>
						
						
						
	
						
					</div>
				</div>
			
			</div>

			
		

	
        
		 
		 
		 <div class="modal modalxx fade pr-0" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialogxx" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">KVKK METNİ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <h5 class="pt-5">KİŞİSEL VERİLERİN KORUNMASI VE İŞLENMESİ POLİTİKASI</h5>
                            <br />
                            KVKK’nın 11. maddesi gereği haklarınız; kişisel verilerinizin,
                            <ul>
                                <li>1- İşlenip işlenmediğini öğrenme,</li>
                                <li>2- İşlenmişse bilgi talep etme, </li>
                                <li>3- İşlenme amacını ve amacına uygun kullanılıp kullanılmadığını öğrenme,</li>
                                <li>4- Yurt içinde / yurt dışında aktarıldığı 3. kişileri bilme,</li>
                                <li>5- Eksik / yanlış işlenmişse düzeltilmesini isteme,</li>
                                <li>6- KVKK’nın 7. maddesinde öngörülen şartlar çerçevesinde silinmesini / yok edilmesini isteme,</li>
                                <li>7- Aktarıldığı 3. kişilere yukarıda sayılan (e) ve (f) bentleri uyarınca yapılan işlemlerin bildirilmesini isteme,</li>
                                <li>8- Münhasıran otomatik sistemler ile analiz edilmesi nedeniyle aleyhinize bir sonucun ortaya çıkmasına itiraz etme,</li>
                                <li>9- Kanuna aykırı olarak işlenmesi sebebiyle zarara uğramanız hâlinde zararın giderilmesini talep etme haklarına sahipsiniz.</li>
                            </ul>
                            <p>KVK Kanunu’nun 13. maddesinin 1. fıkrası gereğince, yukarıda belirtilen haklarınızı kullanmak ile ilgili talebinizi, yazılı olarak veya Kişisel Verileri Koruma Kurulu’nun belirlediği diğer yöntemlerle bize iletebilirsiniz.</p>
                            <br />
                            <p>
                                Kişisel verileriniz,<br />
                                • Kanuni yükümlülüğün yerine getirilmesi veya ilgili derneklere ait hakların tesisi, kullanılması veya korunması amacıyla yetkili resmi kurum ve kuruluşlar ile kanunen yetkilendirilmiş özel kişilere;  yurtiçi ve yurtdışı iş ortaklarımıza, işbirliği içinde bulunduğumuz şirket ve kurumlara, akdi veya kanuni yükümlülüklerimizi yerine getirmek amacıyla dışarıdan hizmet aldığı şirketlere (güvenlik, sağlık, iş güvenliği, hukuk vb. konularda), yetkili kurum ve kuruluşlara ilgili mevzuatta öngörülen usul ve esaslar çerçevesinde ve KVKK’nın 8. ve 9. maddelerinde belirtilen kişisel veri aktarma şartları ve amaçlarına uygun olarak aktarılabilecektir.
                            </p>
                            <strong>Kişisel Verilerin/Özel Nitelikli Kişisel Verilerin Toplanma Yöntemi ve Hukuki Sebebi</strong>
                            <p>
                                Kişisel verileriniz, otomatik yöntemlerle veya otomatik olmayan yöntemler ile; iletişim formları vasıtasıyla ve sitemizi ziyaret eden kişilerin IP adreslerinin kaydedilmesi suretiyle elde edilmektedir.<br />
                                <br />
                                Söz konusu kişisel verilerinizin Şirket tarafından işlenmesindeki hukuki sebepler; Veri sahibinin Açık Rıza metninde, KVKK’nin 5.maddesinin birinci fıkrası uyarınca vermiş olduğu rıza ile KVKK’nın 5.maddesinin ikinci fıkrasının ç,e ve f bentlerinde belirtilen açık rızanın istisnası olan hallerdir. 

                            </p>
                            <strong>SİTE SAHİBİ<br />
                                Nutuva Organizasyon</strong>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    </div>
                </div>
            </div>
        </div>	
		

       


	<script src="js/jquery.mask.min.js"></script>
<script>
        function pageLoad(sender, args) {
            $(ContentPlaceHolder2_txtCepTelefonu).mask("(500) 000 00 00", { clearIfNotMatch: true });
        }
</script>
    <style>
        .calisan {
            padding: 5px;
            color: #fff;
        }
    </style>

		  
<section style="z-index:-1;" >



<div class="wave wave1"></div>
<div class="wave wave2"></div>
<div class="wave wave3"></div>
<div class="wave wave4"></div>
</section>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
	
</body>

</html>
