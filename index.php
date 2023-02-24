<?php
$baglan=new PDO("mysql:host=localhost;dbname=baglantı;charset=utf8","root","");
//$baglan->query("set character set utf8");
//$baglan->exec("set names utf8");
$baglan->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


/*$sorgu=$baglan->query("select * from ayar where id='5'");
$satir=$sorgu->fetch(PDO::FETCH_ASSOC);
foreach($satir as $veri){
    echo "<br>";
echo $veri;
}*/

/*
$sorgu=$baglan->query("select * from ayar",PDO::FETCH_ASSOC);
foreach($sorgu as $satir){
    echo $satir["kullanici_adi"]."<br>";
}

$sorgu=$baglan->prepare("insert into ayar values(?,?,?,?)");
$ekle=$sorgu->execute(array(null,"batukan","54321","burası php pdo tarafından yollandı"));
if($ekle==true){
    $kayitno=$baglan->lastInsertId();
    echo "$kayitno kayıt no ile eklendi eklendi";
}else
{
    echo "kayit eklenirken hata oluştu";
}
}*/
/*
$sorgu=$baglan->prepare("update ayar set sifre=? where id=?");
$guncelle=$sorgu->execute(array("9053","4"));
if($guncelle){
    echo "güncelleme başarılı";

}
else{
    echo "güncelleme başarısız";
}

$sorgu=$baglan->prepare("delete from ayar where id=?");
$sil=$sorgu->execute(array("4"));
if($sil){
    echo "silme başarılı";
}else{
    echo "silme başarısız";
}

$sil=$baglan->exec("delete from ayar");
if($sil){
    echo "silme başarılı";
}else{
    echo "silme başarısız";
}
*/
?>