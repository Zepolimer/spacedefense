<?php

require_once 'Ship.php';

/* ------------------------------
  OffensiveCraft Class extends Ship class which is an object model. From this class, I can access to parent properties and methods. Futhermore, this class contains three properties specific to offensive Craft.
    1. "cannons" for the number of cannons
    2. "attack" to decide to open fire or not
    3. "shield" to decide to disable craft or not
*/

class OffensiveCraft extends Ship {

  /* ------------------------------
    24, 12 or 6 (defined by cannonsNumber() method)
  */
  public $cannons;

  /* ------------------------------
    By default, property's value is "disabled" but it can change to "activated" if attack() method is called. This means that one or many offensive craft.s opened fire
  */
  public $attack = "disabled";

  /* ------------------------------
    By default, property's value is "activated" but it can change to "disabled" if shield() method is called. This means that one or many offensive craft.s disabled their shields
  */
  public $shield = "activated";


  /* ------------------------------
    This method check parent's property 'name'. Depending on the name, it defines the number of cannons the craft has
  */
  public function cannonsNumber() {
    if($this->getName() === "battleship" || $this->getName() === "command ship") {
      $this->cannons = 24;
    } elseif($this->getName() === "destroyer") {
      $this->cannons = 12;
    } elseif($this->getName() === "cruiser") {
      $this->cannons = 6;
    } else {
      $this->cannons = 3;
    }
  }

  /**
  * @return int $cannons
  */
  public function getCannonsNumber() {
    return $this->cannons;
  }

  /**
  * @return string
  */
  public function attack(){
    return $this->attack = "activated";
  }
  /**
  * @return string
  */
  public function attackState() {
    return "They are " . $this->attack;
  }

  /**
  * @return string
  */
  public function shield(){
    return $this->shield = "disabled";
  }
  /**
  * @return string
  */
  public function shieldState() {
    return " & the shield is " . $this->shield;
  }
}
