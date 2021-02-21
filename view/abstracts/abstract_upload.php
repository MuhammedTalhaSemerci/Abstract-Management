<html lang="en">
  <head>
  <meta charset="utf-8">
    <title>without bootstrap</title>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">


    <?php 
      for($i=0;$i<count($abstract_websites);$i++ ){

        $arrwebsite= explode(" ",$abstract_websites[$i]["abstract_website"]);
        $arr_yazi ="";
        for($a=0; $a<count($arrwebsite);$a++){

          $arr_yazi.=$arrwebsite[$a];          

        }

        echo '<input type="hidden" name="'.$arr_yazi.'"' ."value='".$abstract_websites[$i]["categories"]."'> ";
      }

      ?>
       
  </head>
  <body>
          <label for="abstract_website">Bildiri yüklemek istediğiniz sistemi seçin.</label>
        
    <select name="abstract_website" style="width:30%">

      <?php 

      echo '<option value=""></option>';

      for($i=0;$i<count($abstract_websites);$i++ ){

        
        echo '<option value="'.$abstract_websites[$i]["abstract_website"].'">'.$abstract_websites[$i]["abstract_website"].'</option>';

      }
        
      ?>
      
    </select>
    <br>
   
    <label class="abstract_categories_lbl" for="abstract_categories">Bildiri yüklemek istediğiniz ana kategoriyi seçin.</label>
       
    <select name="abstract_categories" class="abstract_categories" style="width:30%"></select>

    <br>

    <label class="abstract_sub_categories_lbl" for="abstract_categories">Bildiri yüklemek istediğiniz alt kategoriyi seçin.</label>
    <div name="abstract_sub_categories" class="radio" style="width:30%">


      
      
    </div>
    <br>

  
    <label for="author_num">Yazar bilgilerini eklemek için kaç yazar bulunduğunu sayı cinsinde yazınız.</label>
    <input type="number" name="author_num" id="author_num" value="" style="width:30%" placeholder="1,2,10,5 gibi değerler yazın."/>
    <div class="authors" style="width:50%"></div>
    <br>
    <select name="abstract_type" style="width:30%">
      <option value="Sözlü Sunum">Sözlü Sunum</option>
      <option value="Poster">Poster</option>
      <option value="E-Poster">E-Poster</option>
    </select>
    <br>
    <br>
    <label for="alt_contact">Alternatif mail adresi</label>
    <input type="email" name="alt_contact" style="width:30%" required>
    <br>
    <label for="title">Bildiri Başlığı</label>
    <input type="text" name="title" style="width:30%" placeholder="Parazitoit ve Predatörler..." required>
    <br>
    <label for="contant">Bildiri Özeti </label>
    <textarea id="summernote" name="contant"></textarea>
    <br>
    <label for="keywords">Anahtar Kelimeler</label>
    <input type="text" name="keywords" placeholder="Hiyalopterus pruni, Myzus spersicae...">
    <br>
    <label for="comments">Yorum ve Açıklamalar</label>
    <textarea id="summernote1" name="comments"></textarea>
    <br>
    <button onclick="yazi_kaydet()">Gönder</button>
 
   
    





    <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });


      var site;


      String.prototype.turkishToLower = function(){
	var string = this;
	var letters = { "İ": "i", "I": "ı", "Ş": "ş", "Ğ": "ğ", "Ü": "ü", "Ö": "ö", "Ç": "ç" };
	string = string.replace(/(([İIŞĞÜÇÖ]))/g, function(letter){ return letters[letter]; })
	return string.toLowerCase();
}	
$(".abstract_sub_categories_lbl").css("visibility", "hidden");
$(".abstract_categories_lbl").css("visibility", "hidden");
$(".abstract_categories").css("visibility", "hidden");
$("input[name=abstract_sub_categories]").css("visibility", "hidden");




  $( "select[name=abstract_website]" )
  .change(function () {
    var str = "";
    $( "select[name=abstract_website] option:selected" ).each(function() {
      str += $( this ).text();
    });

    str = str.split(" ");
    newstr="";
    for(i=0;i<str.length;i++){
      newstr += str[i];

    }
    site = $("input[name="+newstr+"]").val();
    var site_categories = JSON.parse(site);
    site_cat_html="";


    site_cat_html += '<option value=""></option>';
    for(i=0; i<site_categories.length; i++){
      

        site_cat_html += '<option value="'+site_categories[i][0].category+'">'+site_categories[i][0].category+'</option>';
     

    }

    $(".abstract_categories_lbl").css("visibility", "visible");
    $(".abstract_categories").css("visibility", "visible");
    $(".abstract_categories").html(site_cat_html);


    
  });
 









  $( "select[name=abstract_categories]" )
  .change(function () {
    let str = "";
    let str_subcategories ="";
    $( "select[name=abstract_categories] option:selected" ).each(function() {
      str_subcategories += $( this ).text();
    });

    
   
    var site_categories = JSON.parse(site);
    console.log(site_categories);
    
    site_cat_html="";


    var i;
    var newstr;
    for(i=0; i<site_categories.length; i++){
      

      for(k=0;k<site_categories[i].length;k++){

        if(site_categories[i][k].category == str_subcategories){

          newstr = i;

        }
        else{
          
        }
      }
       
     

    }

    for(k=1;k<site_categories[newstr].length;k++){

      site_cat_html +=   '<label><input type="radio" name="abstract_sub_check"  value="'+site_categories[newstr][k] +'">'+site_categories[newstr][k] +'</label><br/>';

    }
    $(".abstract_sub_categories_lbl").css("visibility", "visible");
    $("div[name=abstract_sub_categories]").html(site_cat_html);


    
  })
  .change();
    </script>

    <script>
    
//////Yazı Ekle //////////
      function yazi_kaydet(){

        var abstract_category  = $("select[name=abstract_categories] option:selected").val();
        var abstract_sub_category = $("input[name=abstract_sub_check]:checked").val();

        var abstract_categories = JSON.stringify(abstract_category+","+abstract_sub_category);

        var alt_contact        = $("input[name=alt_contact]").val();
        var title              = $("input[name=title]").val();
        var keywords           = $("input[name=keywords]").val();
        var abstract_type      = $("select[name=abstract_type] option:selected").val();
        var comments           = $("textarea[name=comments]").val();
        var contant            = $("textarea[name=contant]").val();

        var author_num         = parseInt($("input[name=author_num]").val());

        var deg_list = [];
        var deg_list_other=[];
        var infos=[];
        for(i=1;i<author_num+1;i++){

          infos[0]= $("input[name=name_first"+i+"]").val();
          infos[1]= $("input[name=name_last"+i+"]").val();
          infos[2]= $("input[name=organization"+i+"]").val();
          infos[3]= $("#country"+i+" option:selected").val();

          if(infos[0] !="" && infos[1] !="" && infos[2] !="" && infos[3] !=""){

          
            for(a=0;a<3;a++){
              if(i==1){
                deg_list[i] = infos[0]+"/"+ infos[1]+"/"+ infos[2]+"/"+ infos[3];
              }
              else{

                deg_list_other[i] = infos[0]+"/"+ infos[1]+"/"+ infos[2]+"/"+ infos[3];

              }
              
            }
          }
          else{

            alert("Lütfen eksik alan bırakmayınız !").stop();
          }
        }

        var main_author = JSON.stringify(deg_list[1]);
        var other_author= JSON.stringify(deg_list_other);
        $.post("/abstract_save",
        {
          abstract_upload:1,
          register_id :0,
          contant     : contant, 
          main_author : main_author,
          other_author : other_author,
          abstract_category:abstract_categories,
          accepted:0,
          alt_contact:alt_contact,
          abstract_type:abstract_type,
          title : title,
          keywords:keywords,
          comments:comments,
        },
        function(data,status){
          alert("Data: " + data + "\nStatus: " + status);
        });
          
             
      }
          
    
    
    </script>




    <script type="text/javascript">
    var author_info=[];
     author_info[0] = '';
     author_info[1] = '<option value=""></option><option value="UM">ABD Küçük Harici Adaları</option>\n <option value="VI">ABD Virjin Adaları</option><option value="AF">Afganistan</option><option value="AX">Åland Adaları</option><option value="DE">Almanya</option>\n <option value="US">Amerika Birleşik Devletleri</option><option value="AS">Amerikan Samoası</option><option value="AD">Andorra</option><option value="AO">Angola</option>\n <option value="AI">Anguilla</option><option value="AQ">Antarktika</option><option value="AG">Antigua ve Barbuda</option><option value="AR">Arjantin</option>\n <option value="AL">Arnavutluk</option><option value="AW">Aruba</option><option value="AC">Ascension Adası</option><option value="AU">Avustralya</option>\n <option value="AT">Avusturya</option><option value="AZ">Azerbaycan</option><option value="BS">Bahamalar</option><option value="BH">Bahreyn</option>\n <option value="BD">Bangladeş</option><option value="BB">Barbados</option><option value="EH">Batı Sahra</option><option value="BY">Belarus</option>\n <option value="BE">Belçika</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option>\n <option value="AE">Birleşik Arap Emirlikleri</option><option value="GB">Birleşik Krallık</option><option value="BO">Bolivya</option><option value="BA">Bosna-Hersek</option>\n <option value="BW">Botsvana</option><option value="BV">Bouvet Adası</option><option value="BR">Brezilya</option><option value="IO">Britanya Hint Okyanusu Toprakları</option>\n <option value="VG">Britanya Virjin Adaları</option><option value="BN">Brunei</option><option value="BG">Bulgaristan</option><option value="BF">Burkina Faso</option>\n <option value="BI">Burundi</option><option value="BT">Butan</option><option value="CV">Cape Verde</option><option value="KY">Cayman Adaları</option>\n <option value="GI">Cebelitarık</option><option value="EA">Ceuta ve Melilla</option><option value="DZ">Cezayir</option><option value="CX">Christmas Adası</option>\n <option value="DJ">Cibuti</option><option value="CP">Clipperton Adası</option><option value="CC">Cocos (Keeling) Adaları</option><option value="CK">Cook Adaları</option>\n <option value="CI">Côte d’Ivoire</option><option value="CW">Curaçao</option><option value="TD">Çad</option><option value="CZ">Çekya</option><option value="CN">Çin</option>\n <option value="DK">Danimarka</option><option value="DG">Diego Garcia</option><option value="DO">Dominik Cumhuriyeti</option><option value="DM">Dominika</option>\n <option value="EC">Ekvador</option><option value="GQ">Ekvator Ginesi</option><option value="SV">El Salvador</option><option value="ID">Endonezya</option>\n <option value="ER">Eritre</option><option value="AM">Ermenistan</option><option value="EE">Estonya</option><option value="SZ">Esvatini</option>\n <option value="ET">Etiyopya</option><option value="FK">Falkland Adaları (Malvinas Adaları)</option><option value="FO">Faroe Adaları</option><option value="MA">Fas</option>\n <option value="FJ">Fiji</option><option value="PH">Filipinler</option><option value="PS">Filistin</option><option value="FI">Finlandiya</option>\n <option value="FR">Fransa</option><option value="GF">Fransız Guyanası</option><option value="TF">Fransız Güney Toprakları</option>\n <option value="PF">Fransız Polinezyası</option><option value="GA">Gabon</option><option value="GM">Gambiya</option><option value="GH">Gana</option>\n <option value="GN">Gine</option><option value="GW">Gine-Bissau</option><option value="GD">Grenada</option><option value="GL">Grönland</option>\n <option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option>\n <option value="GY">Guyana</option><option value="ZA">Güney Afrika</option><option value="GS">Güney Georgia ve Güney Sandwich Adaları</option>\n <option value="KR">Güney Kore</option><option value="SS">Güney Sudan</option><option value="GE">Gürcistan</option><option value="HT">Haiti</option>\n <option value="HM">Heard Adası ve McDonald Adaları</option><option value="HR">Hırvatistan</option><option value="IN">Hindistan</option><option value="NL">Hollanda</option>\n <option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IQ">Irak</option><option value="IR">İran</option><option value="IE">İrlanda</option>\n <option value="ES">İspanya</option><option value="IL">İsrail</option><option value="SE">İsveç</option><option value="CH">İsviçre</option><option value="IT">İtalya</option>\n <option value="IS">İzlanda</option><option value="JM">Jamaika</option><option value="JP">Japonya</option><option value="JE">Jersey</option><option value="KH">Kamboçya</option>\n <option value="CM">Kamerun</option><option value="CA">Kanada</option><option value="IC">Kanarya Adaları</option><option value="ME">Karadağ</option>\n <option value="BQ">Karayip Hollandası</option><option value="QA">Katar</option><option value="KZ">Kazakistan</option><option value="KE">Kenya</option>\n <option value="CY">Kıbrıs</option><option value="KG">Kırgızistan</option><option value="KI">Kiribati</option><option value="CO">Kolombiya</option>\n <option value="KM">Komorlar</option><option value="CG">Kongo Cumhuriyeti</option><option value="CD">Kongo Demokratik Cumhuriyeti</option>\n <option value="XK">Kosova</option><option value="CR">Kosta Rika</option><option value="KW">Kuveyt</option><option value="KP">Kuzey Kore</option>\n <option value="MK">Kuzey Makedonya</option><option value="MP">Kuzey Mariana Adaları</option><option value="CU">Küba</option><option value="LA">Laos</option>\n <option value="LS">Lesotho</option><option value="LV">Letonya</option><option value="LR">Liberya</option><option value="LY">Libya</option>\n <option value="LI">Liechtenstein</option><option value="LT">Litvanya</option><option value="LB">Lübnan</option><option value="LU">Lüksemburg</option>\n <option value="HU">Macaristan</option><option value="MG">Madagaskar</option><option value="MO">Makao</option><option value="MW">Malavi</option>\n <option value="MV">Maldivler</option><option value="MY">Malezya</option><option value="ML">Mali</option><option value="MT">Malta</option>\n <option value="IM">Man Adası</option><option value="MH">Marshall Adaları</option><option value="MQ">Martinik</option><option value="MU">Mauritius</option>\n <option value="YT">Mayotte</option><option value="MX">Meksika</option><option value="EG">Mısır</option><option value="FM">Mikronezya</option>\n <option value="MN">Moğolistan</option><option value="MD">Moldova</option><option value="MC">Monako</option><option value="MS">Montserrat</option>\n <option value="MR">Moritanya</option><option value="MZ">Mozambik</option><option value="MM">Myanmar (Burma)</option><option value="NA">Namibya</option>\n <option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NE">Nijer</option><option value="NG">Nijerya</option><option value="NI">Nikaragua</option>\n <option value="NU">Niue</option><option value="NF">Norfolk Adası</option><option value="NO">Norveç</option><option value="CF">Orta Afrika Cumhuriyeti</option>\n <option value="UZ">Özbekistan</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option>\n <option value="PG">Papua Yeni Gine</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PN">Pitcairn Adaları</option>\n <option value="PL">Polonya</option><option value="PT">Portekiz</option><option value="PR">Porto Riko</option><option value="RE">Reunion</option>\n <option value="RO">Romanya</option><option value="RW">Ruanda</option><option value="RU">Rusya</option><option value="BL">Saint Barthelemy</option>\n <option value="SH">Saint Helena</option><option value="KN">Saint Kitts ve Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option>\n <option value="PM">Saint Pierre ve Miquelon</option><option value="VC">Saint Vincent ve Grenadinler</option><option value="WS">Samoa</option>\n <option value="SM">San Marino</option><option value="ST">Sao Tome ve Principe</option><option value="SN">Senegal</option><option value="SC">Seyşeller</option>\n <option value="RS">Sırbistan</option><option value="SL">Sierra Leone</option><option value="SG">Singapur</option><option value="SX">Sint Maarten</option>\n <option value="SK">Slovakya</option><option value="SI">Slovenya</option><option value="SB">Solomon Adaları</option><option value="SO">Somali</option>\n <option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Surinam</option><option value="SY">Suriye</option>\n <option value="SA">Suudi Arabistan</option><option value="SJ">Svalbard ve Jan Mayen</option><option value="CL">Şili</option><option value="TJ">Tacikistan</option>\n <option value="TZ">Tanzanya</option><option value="TH">Tayland</option><option value="TW">Tayvan</option><option value="TL">Timor-Leste</option>\n <option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad ve Tobago</option>\n <option value="TA">Tristan da Cunha</option><option value="TN">Tunus</option><option value="TC">Turks ve Caicos Adaları</option><option value="TV">Tuvalu</option>\n <option value="TR">Türkiye</option><option value="TM">Türkmenistan</option><option value="UG">Uganda</option>';
     author_info[2] ='<option value="UA">Ukrayna</option>\n <option value="OM">Umman</option><option value="UY">Uruguay</option><option value="JO">Ürdün</option><option value="VU">Vanuatu</option><option value="VA">Vatikan</option>\n <option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis ve Futuna</option><option value="YE">Yemen</option>\n <option value="NC">Yeni Kaledonya</option><option value="NZ">Yeni Zelanda</option><option value="GR">Yunanistan</option><option value="ZM">Zambiya</option>\n <option value="ZW">Zimbabve</option></select></div>\n';
     author_info[3] = '';

   
    var i = 0;
    // Add validation check
    $( "input[name=author_num]" )
  .change(function () {
    var html="";
    var author_num = parseInt($("input[name=author_num]").val());

    if(author_num > 0 && author_num < 20){
      for(b=1; b<author_num+1; b++){
     
       if(b==1){

        html+='<fieldset id="ocauthor'+b+'"><legend  style="color:red;">Sorumlu Yazar </legend><div class="field"><label for="name_first'+b+'">Adı:</label> <input name="name_first'+b+'" id="name_first'+b+'" size="60" maxlength="60" value=""></div><div class="field"><label for="name_last'+b+'">Soyadı:</label><input name="name_last'+b+'" id="name_last'+b+'" size="60" maxlength="40" value="">\n </div>\n <div class="field"><label for="organization'+b+'">Kurum:</label><input name="organization'+b+'" id="organizatio'+b+'" size="60" maxlength="150" value="">\n </div>\n <div class="field"><label for="country'+b+'">Ülke:</label><select name="country'+b+'" id="country'+b+'">';

        for(a=0; a<4; a++){
          html +=author_info[a];
          

        }
        html+=' <div class="field"><label for="email'+b+'">E-posta:</label><input name="email3" id="email'+b+'" type="email" size="60" maxlength="100" value=""></div>\n </fieldset></br></br>';
        $( ".authors" ).html(html);

       }


       else{

          html+='<fieldset id="ocauthor'+b+'"><legend  style="color:red;">Yazar '+b+'</legend><div class="field"><label for="name_first'+b+'">Adı:</label> <input name="name_first'+b+'" id="name_first'+b+'" size="60" maxlength="60" value=""></div><div class="field"><label for="name_last'+b+'">Soyadı:</label><input name="name_last'+b+'" id="name_last'+b+'" size="60" maxlength="40" value="">\n </div>\n <div class="field"><label for="organization'+b+'">Kurum:</label><input name="organization'+b+'" id="organizatio'+b+'" size="60" maxlength="150" value="">\n </div>\n <div class="field"><label for="country'+b+'">Ülke:</label><select name="country'+b+'" id="country'+b+'">';

          for(a=0; a<4; a++){
            html +=author_info[a];
            

          }
          html+=' <div class="field"><label for="email'+b+'">E-posta:</label><input name="email'+b+'" id="email'+b+'" type="email" size="60" maxlength="100" value=""></div>\n </fieldset></br></br>';
          $( ".authors" ).html(html);
            
       }
      }
  }
    
    i++;
  })
  .change();
    </script>
  </body>
</html>


















