<?php

class AttackManager {

  public function randomLocation(array $offensive_array, array $support_array) {
    foreach($offensive_array as $offensive_item) {
      $offensive_item->getRowGrid();
      $offensive_item->getColumnGrid();
    }
    foreach($support_array as $support_item) {
      $support_item->getRowGrid();
      $support_item->getColumnGrid();
    }
  }

  public function handleAttack(array $offensive_array, array $support_array) {    
    $i = 37;
    while ($i < 62) {
      $i++;
      foreach($offensive_array as $offensive_item){
        $offensive_item->col = $i++;
        $offensive_item->row = 75;
      }
    }
    
    $j = 37;
    while ($j < 62) {
      $j++;
      foreach($support_array as $support_item){
        $support_item->col = $j++;
        $support_item->row = 78;
        $support_item->useRandomMedicalAssistance();
      }
    }
  }
}