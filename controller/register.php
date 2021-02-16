<?php

class register extends Controller
{

    public function index()
    {


        $this->view('kayit',[]);
    }


    
    public function save(){

        $uye_adi = $_POST["kadi"];
        $uye_tel = $_POST["tel"];
        $uye_sehir = $_POST["sehir"];
        $uye_unvan = $_POST["unvan"];
        $uye_uzmanlik = $_POST["uzmanlik"];
        $uye_mail = $_POST["mail"];
        $uye_sifre = $_POST["sifre"];

        $usermodel = $this->model('users');
        $users = $usermodel->insertuser("uye",$uye_adi,$uye_tel,$uye_sehir,$uye_unvan,$uye_uzmanlik,$uye_mail,$uye_sifre);
        header("location:/");
        
    }

    public function update(){

        
        $uye_sifre = $_POST["sifre"];

        $usermodel = $this->model('users');
        $users = $usermodel->insertuser("uye",$uye_adi,$uye_tel,$uye_sehir,$uye_unvan,$uye_uzmanlik,$uye_mail,$uye_sifre);
        header("location:/");
        
    }


    public function post()
    {
        print_r($_POST);
    }

}