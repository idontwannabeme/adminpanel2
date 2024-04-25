<?php 
require_once("datebase.php");
require_once("models/articles.php");

$link = db_connenct();
$article = articles_get($link,$_GET['id']);

include("D:/OpenServer/domains/localhost/mvcsite/views/article.php");
 ?>