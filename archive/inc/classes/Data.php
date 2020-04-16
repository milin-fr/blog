<?php

class Data {
  public $articleList;
  public $categoriesList;
  public $authorsList;

  public function __construct() {
    require './inc/data.php';
    $this->articleList = $dataArticlesList;
    $this->categoriesList = $dataCategoriesList;
      
  }
  public function getArticles(){
    return $this->articleList;
  }

  public function getArticle($id){
    if (array_key_exists($id, $this->articleList)) {
      return $this->articleList[$id];
    }
    header('Location: index.php');
  }

  public function getArticlesPerCategory($id){
    $articlesPerCategory = [];
    foreach($this->articleList as $article){
      if($article->category == $id){
        $articlesPerCategory[$id] = $article; // ajout d'un élément;
      }
    }
    return $articlesPerCategory;
  }
}
