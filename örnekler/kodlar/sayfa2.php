<?php

if(isset($_GET['v']) && !empty($_GET['v'])){
	$v = intval(trim($_GET['v']));
	echo "$v. haberdesiniz";

}else{
	echo "bu sayfaya anasayfadan gelmelisiniz";
}

