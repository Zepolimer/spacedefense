<?php

require_once 'Ship.php';

/* ------------------------------
  SupportCraft Class extends Ship class which is an object model. From this class, I can access to parent properties and methods. Futhermore, this class contains three properties specific to support Craft.
    1. "medical" for the medical assistance
    2. "order" which correspond to assitance each craft can make
    3. "useMedical" 
*/

class SupportCraft extends Ship {

  public $medical = 1;
  public $order;

  /* ------------------------------
    This method generates a random integer between 1 and 0, it's called when the battle start to generate random medical assistance. 
  */
  public function useRandomMedicalAssistance() {
    $this->medical = mt_rand(0, 1);
  }

  /**
  * @return int
  */
  public function getMedicalUnit() {
    return $this->medical;
  }

  public function getOrder() {
    return $this->order = $this->getName();
  }
}
