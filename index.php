<?php 
//baba naptın
include('functions/main_functions.php');
//nasıl laaa
include('inc/header.php');
//yorum satırı
$mesaj_no = (isset($_GET['mesaj'])) ? $_GET['mesaj'] : 0;
//herkesi takip edemem ki baba
if(!isset($_GET['main'])){
	include('inc/main/main.php');
} else {
	include('inc/main/'.$_GET['main'].'.php');
}

include('inc/footer.php');

?>