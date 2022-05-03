<?php
    if (isset($_POST['onay']))
    {
        if (isset($_POST['ad'], $_POST['soyad'] )&& ($_POST['ad']!='')&& ($_POST['soyad']!=''))
        {
            echo "Ad: ".''.$_POST['ad'];
            echo "</br>";
            echo "Soyad: ".''.$_POST['soyad'];
            echo "</br>";
            echo "Cinsiyet: ".''.$_POST['cinsiyet'];
            echo "</br>";
            echo "E-mail: ".''.$_POST['email'];
            echo "</br>";
            echo "Okuduğunuz Bölüm: ".''.$_POST['bolumler'];
            echo "</br>";
            echo "Adres: ".''.$_POST['textarea'];

        }
        
    }
    echo "<p> <a href='iletisim.html'>&lt;GERİ DÖN&gt;</a></p> ";
?>