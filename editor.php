<?php

class Editor{
  private $name;
  public $articleId;

  function __construct($name){
    $this->name = $name;
  }

  public function setNextFavoriteBurger($articleId){
      $this->articleId = $articleId;
  }

  public function publish(){
    return true;
  }

}

 ?>
