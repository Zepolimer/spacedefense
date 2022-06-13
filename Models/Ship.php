<?php

class Ship {

  /* ------------------------------
    offensive or support
  */
  private $type;
  
  /* ------------------------------
    offensive : destroyer, command ship, battleship, cruiser & support : cargo, mechanical, refueling;
  */
  private $name;

  /* ------------------------------
    column position on grid layout
  */
  public $col;

  /* ------------------------------
    row position on grid layout
  */
  public $row;


  /* ------------------------------
  Ship Class is extended by Offensive Class and Support Class. I use the __construct method for each new object instance.
    1. I can easily set the type of Craft (offensive vs support)
    2. I can easily set the name of Craft
    3. I call a method to generate a value for $col and another to generate a value for $row when there is a new object instance. These methods take one parameter, here a random integer between 1 and 100 (grid layout : 100 x 100)
  */
  public function __construct($t, $n) {
    $this->setType($t);
    $this->setName($n);

    $this->setColumnGrid(random_int(1, 100));
    $this->setRowGrid(random_int(1, 100));
  }

  
  /* ------------------------------
    Methods for each parameter to SET values or GET them 
  */

  /**
  * @param string $t
  */
  public function setType($t) {
    $this->type = $t;
  }

  public function getType() {
    return $this->type;
  }

  /**
  * @param string $n
  */
  public function setName($n) {
    $this->name = $n;
  }

  public function getName() {
    return $this->name;
  }

  public function setColumnGrid($col) {
    if (!is_int($col)) {
      throw new \Exception("Value should be an integer");
    } else {
      $this->col = $col;
    }
  }
  /**
  * @return int
  */
  public function getColumnGrid() {
    return $this->col;
  }

  public function setRowGrid($row) {
    if (!is_int($row)) {
      throw new \Exception("Value should be an integer");
    } else {
      $this->row = $row;
    }
  }
  /**
  * @return int
  */
  public function getRowGrid() {
    return $this->row;
  }
}
