<?php

class login extends Controller
{

    public function index()
    {
        session_start();
        $users= $this->model("users");
        $result = $users->getAll();

        $this->view('login',[]);
    }

    public function system_login()
    {
        session_start();
        
        $kayit_basari="";

        $kullanici_mail ="";
        $kullanici_sifre = "" ;
        if (isset($_POST['mail']) && isset($_POST['sifre']))
        {
            
        $kullanici_mail = $_POST['mail'];
        $kullanici_sifre = $_POST['sifre'];
 

        $user = $this->model("users");

        $mail_sorgu = $user->getuserreset("uye",$kullanici_mail);

        if ($mail_sorgu) {
          
        $kayit_basari ="uyetrue";
          
            
        }

        else{

            $kayit_basari = "uyefalse";

            header('Location:/?kayit_basari='.$kayit_basari);
            exit();
        }


        $result = $user->getuserindex("uye",$kullanici_mail,$kullanici_sifre);

        if ($result and $kayit_basari =="uyetrue") {
           
            $_SESSION['user'] = $result;

            $kayit_basari = "true";
          
            header('Location:/?kayit_basari='.$kayit_basari);
            exit();
            
        }

        else{

            $kayit_basari = "false";
            header('Location:/?kayit_basari='.$kayit_basari);

        }

        $this->view('login',["data"=>$result]);

       

        }


     


    }

    public function post()
    {
        print_r($_POST);
    }

}