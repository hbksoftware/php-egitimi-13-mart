<?php
if(isset($_GET['page'])){
	$page=intval(trim($_GET['page']));
}else{
	$page=1;
}
$page=(isset($_GET['page']))? intval(trim($_GET['page'])):1;


?>

<a href="?page=1">Anasayfa</a> | 
<a href="?page=2">Hakkımızda</a> | 
<a href="?page=3">Habeler</a>

</br>

<?php

if($page == 1){
echo 'Merhaba Anasayfadasınız.';

}else if($page==2){
	echo "Merhaba Hakkımızdasınız";
}else if($page==3){
	echo "Merhaba Haberlerdesiniz";
}else{
	echo "Üzgünüm Böyle bir sayfa bulunmamaktadır";
}


?>