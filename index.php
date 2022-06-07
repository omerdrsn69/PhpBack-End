<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title></title>
</head>
<body> 
 
<?php
    //yorum satırı
    /*yorum 
    satırı*/
    /*
    echo "ÖMER DURSUN <br>
        web prıgramlama dersi <br>
        php ile web sitesinin yapımı ";

    */
    /*  $sayi1=30; $sayi2=17.5; $metin1="TMD MY FATHER AND HE İS PRFECT THE PEOPLE";
        
        echo "<br>";
        echo $sayi1;
        echo "<br>";
        echo $sayi2;
        echo "<br>";
        echo $metin1;
        echo "<br><br>";
        echo "$sayi1 <br> $sayi2 <br> $metin1 <br><br>";
    */
     /*   define("pi","3.14");
        echo "pi=";echo pi;
        echo "<br><br>";

        $ryaricap= 5;
        $cembercevre= 2*pi*$ryaricap;
        $cemberalan=pi*$ryaricap;

        echo "r=5 için;<br> Çevre=$cembercevre<br>Alan=$cemberalan<br><br>";
    */
        /*
       $degiken1=50;

        if ($degiken1 < 50)
        {
            echo "Dğişken değeri 50den küçük";
        }

        else if ($degiken1 > 50)
        {
            echo "Değişken 50den büyük";
        }
        else
        {
            echo "Değişken 50'ye eşittir";
        }
    */
    /*  $renk="mavi";
        switch($renk)
        {
            case "siyah":
                echo "siyah";
            break;
            
            case "turuncu":
                echo "turuncu";
            break;

            case "sarı":
                echo "sarı";
            break;
            
            default:
                echo "hiçbiri değil";
            break;
        }
        */

        /*dizi tanımlama çeşitleri

        $ogrenciler = array();
        $ogrenciler[0] = array("adsoyad"=>"Fatih","not"=>"60");
        $ogrenciler[1] = array("adsoyad"=>"Ömer","not"=>"100");
        $ogrenciler[2] = array("adsoyad"=>"Mali","not"=>"100");

        $ogrenciler = array(
            array("adsoyad"=>"Fatih","not"=>"60"),
            array("adsoyad"=>"Ömer","not"=>"100"),
            array("adsoyad"=>"Mali","not"=>"100")
        );

        $ogrenciler = array();
        $ogrenciler[0]["adsoyad"]="Fatih";
        $ogrenciler[0]["not"]="60";
        $ogrenciler[1]["adsoyad"]="Ömer";
        $ogrenciler[1]["not"]="100";
        $ogrenciler[2]["adsoyad"]="Mali";
        $ogrenciler[2]["not"]="100";

        echo $ogrenciler[1]["adsoyad"];
        echo "---";
        echo $ogrenciler[1]["not"];
        */

        /*NOT  ORTALMASINI HESAPLAYARAK GÇETİ KALDI MESAJI VERME*/
        $ogrenciler = array(
            array("AdSoyad"=>"Mehmet","Not1" =>"60","Not2"=>"70"),
            array("AdSoyad"=>"Ahmet", "Not1" =>"80","Not2"=>"50"),
            array("AdSoyad"=>"Zeynep", "Not1" =>"40","Not2"=>"50")
        );

        foreach($ogrenciler as $ogrenci){
            $ortalama = ($ogrenci["Not1"]+$ogrenci["Not2"])/2;

            if($ortalama >= 60){
                $sonuc="Geçti";
            }
            else {
                $sonuc="Kaldı";
            }


            echo "Adı Soyadı: ". $ogrenci["AdSoyad"] . "<br>";
            echo "Not1: ". $ogrenci["Not1"] . "<br>";
            echo "Not2: ". $ogrenci["Not2"] . "<br>";
            echo "Ortalama: ".$ortalama ."<br>";
            echo "Sonuç: " . $sonuc."<br>";
            echo "<br><hr><br>";

        }
        
?>
</body>
</html>