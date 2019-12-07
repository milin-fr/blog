<?php
require './inc/classes/Article.php';
require './inc/classes/Data.php';
require './inc/classes/Category.php';

$dataObject = new Data();

$articleList = $dataObject->articleList;
$categoriesList = $dataObject->categoriesList;

if (!empty($_GET['article'])){
  $articleId = $_GET['article'];
}

require './inc/templates/header.tpl.php';
require './inc/templates/home.tpl.php';
require './inc/templates/footer.tpl.php';

