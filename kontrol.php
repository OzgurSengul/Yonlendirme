<?php
if(isset($_POST["eposta"])&&isset($_POST["sifre"])){
$eposta=trim(strip_tags($_POST["eposta"]));
$sifre=$_POST["sifre"];
echo $eposta."<br>";
echo $sifre."<br>";
if(strstr($eposta, "@hotmail.com"))
echo header("Location: http://www.deu.edu.tr/");
if(strstr($eposta, "@gmail.com"))
echo header("Location: http://ybs.deu.edu.tr/");
};
?>