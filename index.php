<?php

  require_once './Data/ShipArray.php';
  require_once './AttackManager.php';

  /* COMMENT BLOCK EXPLAINING THE ALGORITHM FOR PART 2

    1. I create a parent class named Ship which contains 4 properties, 2 of them are private (name, type) and the 2 others are public (column, row). 
    The private properties will define if it's an offensive or support craft (name) & the name of this type of craft   
      - offensive: command ship, battleship, destroyer, cruiser
      - support: cargo, refueling, mechanical assitance
      
    All properties has two methods, one to set a value and one to get the value.

    When there is a new object instance, I use a constructor method where I call two methods which affect the name's value and type's value filled in by the user & two more methods to set column and row values. For these two, the parameter generates a random values between 1 and 100.

    2. I create children classes named OffensiveCraft and SupportCraft. These two classes inherit from the Ship class.
      * OffensiveCraft contains 3 public properties and 6 methods.
        -> cannons : integer - number of cannons for one craft
        -> attack : string - "disabled" by default
        -> shield : string - "activated" by default

        -> cannonsNumber() : This method check parent's property 'name'. Depending on the name, it defines the number of cannons the craft has
        -> getCannonsNumber() : return cannons's value
        -> attack() : change the default value of attack to "activated"
        -> attackState() : return a string to tell if the cannons are opening fire or not
        -> shield() : change the default value of shield to "disabled"
        -> shieldState () : return a string to tell if the shield is still activated or not

      * SupportCraft contains 2 public properties and 3 methods.
        -> medical : integer - 1 by default
        -> order : string - empty by default

        -> useRandomMedicalAssistance() : generates a random integer between 1 and 0, it's called when the battle start to generate random medical assistance
        -> getMedicalUnit() : return medical's value
        -> getOrder() : return order's value which is equal to the name of the craft

    3. I create two methods getOffensiveCraftArray() and getSupportCraftArray() who contain an array of objects instances for OffensiveCraft model and SupportCraft model.
      * getOffensiveCraftArray() : I use an if-else instruction to check if the array's length is equal to 25. If it's the case, each object call cannonsNumber() method to generate a number of cannons according to it's name and then, I return the array. If isn't the case, I return an error message.

      * getSupportCraftArray() : I use an if-else instruction to check if the array's length is equal to 25. If it's the case, each object call getOrder() and getMedicalUnit() methods and then, I return the array. If isn't the case, I return an error message.

      See : spacedefense/Data/ShipArray.php
  */

  $offensive_craft_array = getOffensiveCraftArray();
  $support_craft_array = getSupportCraftArray();

  /* COMMENT BLOCK EXPLAINING THE ALGORITHM FOR PART 3

    1. I create a class called AttackManager which contains two methods :
      * randomLocation() : need two parameters (array) that correspond to offensive craft array and support craft array.
      This method use a foreach function to get column and row value. At this time of the algorithm, these values are the result of randomized generation

      * handleAttack() : need two parameters (array) that correspond to offensive craft array and support craft array.
      This method generate a pair of ships with a while and foreach function to set news values to column and row parameters. This makes sense on grid layout (red = offensive & blue = support)

    2. I create a new property called fleet_array to which I assing my two arrays. 

    3. I sort the new array by the value of column property to make pairs on the browser and display details.
  */
  
  $battle = new AttackManager;
  
  if(isset($offensive_craft_array) && isset($support_craft_array)) {
    shuffle($offensive_craft_array);
    shuffle($support_craft_array);

    $battle->randomLocation($offensive_craft_array, $support_craft_array);
    $battle->handleAttack($offensive_craft_array, $support_craft_array);
  
    $fleet_array = array();
    $fleet_array = array_merge($offensive_craft_array, $support_craft_array);
  
    usort($fleet_array, function($a, $b) {
      if ($a->col == $b->col) return (0);
      return (($a->col < $b->col) ? -1 : 1);
    });
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/spacedefense/Assets/css/style.css">
    <title>Space Defense - Code test</title>
  </head>
  <body>

    <section class="space__grid">
      <?php 
        if($offensive_craft_array):
        foreach($offensive_craft_array as $offensive_item): ?>
          <div class="crafts <?= $offensive_item->getType() ?>" style="grid-column: <?= $offensive_item->getColumnGrid() ?>; grid-row: <?= $offensive_item->getRowGrid() ?>" title="<?= $offensive_item->getName() ?>"></div>
      <?php 
        endforeach; 
        endif; 
      
        if($support_craft_array):
        foreach($support_craft_array as $support_item): ?>
          <div class="crafts <?= $support_item->getType() ?>" style="grid-column: <?= $support_item->getColumnGrid() ?>; grid-row: <?= $support_item->getRowGrid() ?>" title="<?= $support_item->getName() ?>"></div>
      <?php 
        endforeach; 
        endif; ?>
    </section>

    <section class="space__result">
      <?php if(isset($fleet_array)): ?>
        <h1 class="space__result__title">Result of fleet attack</h1>

        <article class="space__result__foreach">
        <?php
          foreach($fleet_array as $fleet_item) {
            if($fleet_item->getType() === "support") :
              if($fleet_item->medical === 0) : ?>
                <p><span><?= $fleet_item->getName() ?></span> : <?= $fleet_item->getRowGrid() ?>/<?= $fleet_item->getColumnGrid() ?>. Order is <?= $fleet_item->order ?> and the medical assistance was used during the battle.</p>
              <?php else : ?>
                <p><span><?= $fleet_item->getName() ?></span> : <?= $fleet_item->getRowGrid() ?>/<?= $fleet_item->getColumnGrid() ?>. Order is <?= $fleet_item->order ?> and dispose of <?= $fleet_item->medical ?> medical unit.</p>
              <?php endif; 
            else : ?>
              <p><span><?= $fleet_item->getName() ?></span> : <?= $fleet_item->getRowGrid() ?>/<?= $fleet_item->getColumnGrid() ?>. It has <?= $fleet_item->cannons ?> cannons ! <?= $fleet_item->attackState() ?> <?= $fleet_item->shieldState() ?></p>
            <?php endif;
          }
        ?>
        </article>
      <?php else: ?>
        <article>
          <p>Our fleet isn't ready to fight now..</p>
          <p>You should have a look on the error message at the top. It's propably missing one or some craft ?</p>
        </article>
      <?php endif; ?>
    </section>
  </body>
</html>