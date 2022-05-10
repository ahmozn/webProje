<?php

function infoControl(){
    $email = $_POST['email'];
    $sifre=$_POST['sifre'];
    if  ($email==$sifre){
        echo "hosgeldiniz: "." ".$email;

    }
    else{
        header('Refresh: 4; URL=https://g211210073.000webhostapp.com/login.html');
        echo "kullanici adi ve sifre uyusmuyor";
    }
}
infoControl();

?>