<?php

class Worker{
  private $name;
  public $orderNumber;

  function __construct($name){
    $this->name = $name;
  }

  public function setNextFavoriteBurger($orderNumber){
      $this->orderNumber = $orderNumber;
  }

  public function stateOrderNum(){
    return true;
  }
}

 ?>
