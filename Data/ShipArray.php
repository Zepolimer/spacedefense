<?php

require_once './Models/OffensiveCraft.php';
require_once './Models/SupportCraft.php';


/* ------------------------------
  Array for offensive crafts : contains 25 object instance of OffensiveCraft Class. Need two parameters "offensive" and "name of the craft"
*/
function getOffensiveCraftArray() {

  $offensive = array();

  $offensive1 = new OffensiveCraft("offensive", "command ship");
  $offensive2 = new OffensiveCraft("offensive", "battleship");
  $offensive3 = new OffensiveCraft("offensive", "battleship");
  $offensive4 = new OffensiveCraft("offensive", "battleship");
  $offensive5 = new OffensiveCraft("offensive", "battleship");
  $offensive6 = new OffensiveCraft("offensive", "battleship");
  $offensive7 = new OffensiveCraft("offensive", "battleship");
  $offensive8 = new OffensiveCraft("offensive", "battleship");
  $offensive9 = new OffensiveCraft("offensive", "battleship");
  $offensive10 = new OffensiveCraft("offensive", "destroyer");
  $offensive11 = new OffensiveCraft("offensive", "destroyer");
  $offensive12 = new OffensiveCraft("offensive", "destroyer");
  $offensive13 = new OffensiveCraft("offensive", "destroyer");
  $offensive14 = new OffensiveCraft("offensive", "destroyer");
  $offensive15 = new OffensiveCraft("offensive", "destroyer");
  $offensive16 = new OffensiveCraft("offensive", "destroyer");
  $offensive17 = new OffensiveCraft("offensive", "destroyer");
  $offensive18 = new OffensiveCraft("offensive", "cruiser");
  $offensive19 = new OffensiveCraft("offensive", "cruiser");
  $offensive20 = new OffensiveCraft("offensive", "cruiser");
  $offensive21 = new OffensiveCraft("offensive", "cruiser");  
  $offensive22 = new OffensiveCraft("offensive", "cruiser");
  $offensive23 = new OffensiveCraft("offensive", "cruiser");
  $offensive24 = new OffensiveCraft("offensive", "cruiser");
  $offensive25 = new OffensiveCraft("offensive", "cruiser");

  $offensive = array($offensive1, $offensive2, $offensive3, $offensive4, $offensive5, $offensive6, $offensive7, $offensive8, $offensive9, $offensive10, $offensive11, $offensive12, $offensive13, $offensive14, $offensive15, $offensive16, $offensive17, $offensive18, $offensive19, $offensive20, $offensive21, $offensive22, $offensive23, $offensive24, $offensive25);


  /* ------------------------------
    If-else instruction to check if the array's length is equal to 25. If it's the case, each object call cannonsNumber() method to generate a number of cannons according to it's name
  */
  if(count($offensive) !== 25) {
    echo "You can use 25 Offensive Craft ! You should add them with an instantiation of OffensiveCraft class on Data/ShipArray.php";
  } else {
    foreach($offensive as $offensiveItem) {
      $offensiveItem->cannonsNumber();
    }
    return $offensive;
  }
}


/* ------------------------------
  Array for support crafts : contains 25 object instance of SupportCraft Class. Need two parameters "support" and "name of the craft"
*/
function getSupportCraftArray() {
  $support = array();

  $support1 = new SupportCraft("support", "refueling");
  $support2 = new SupportCraft("support", "refueling");
  $support3 = new SupportCraft("support", "refueling");
  $support4 = new SupportCraft("support", "refueling");
  $support5 = new SupportCraft("support", "mechanical assistance");
  $support6 = new SupportCraft("support", "mechanical assistance");
  $support7 = new SupportCraft("support", "mechanical assistance");
  $support8 = new SupportCraft("support", "mechanical assistance");
  $support9 = new SupportCraft("support", "mechanical assistance");
  $support10 = new SupportCraft("support", "cargo");
  $support11 = new SupportCraft("support", "cargo");
  $support12 = new SupportCraft("support", "cargo");
  $support13 = new SupportCraft("support", "cargo");
  $support14 = new SupportCraft("support", "cargo");
  $support15 = new SupportCraft("support", "refueling");
  $support16 = new SupportCraft("support", "refueling");
  $support17 = new SupportCraft("support", "refueling");
  $support18 = new SupportCraft("support", "mechanical assistance");
  $support19 = new SupportCraft("support", "mechanical assistance");
  $support20 = new SupportCraft("support", "mechanical assistance");
  $support21 = new SupportCraft("support", "mechanical assistance");
  $support22 = new SupportCraft("support", "cargo");
  $support23 = new SupportCraft("support", "cargo");
  $support24 = new SupportCraft("support", "cargo");
  $support25 = new SupportCraft("support", "cargo");

  $support = array($support1, $support2, $support3, $support4, $support5, $support6, $support7, $support8, $support9, $support10, $support11, $support12, $support13, $support14, $support15, $support16, $support17, $support18, $support19, $support20, $support21, $support22, $support23, $support24, $support25);


  /* ------------------------------
    If-else instruction to check if the array's length is equal to 25. If it's the case, each object call getOrder() and getMedicalUnit() methods.
  */
  if(count($support) !== 25) {
    echo "You can use 25 Support Craft ! You should add them with an instantiation of SupportCraft class on Data/ShipArray.php";
  } else {
    foreach($support as $supportItem) {
      $supportItem->getOrder();
      $supportItem->getMedicalUnit();
    }
    return $support;
  }
}
