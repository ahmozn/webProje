<?php

function infoControl(){
    $email = $_POST['email'];
    $sifre=$_POST['sifre'];
    if  ($email==$sifre){
        echo "basarili giris";

    }
    else{
        echo "olmadı";
    }
}
infoControl();

?>