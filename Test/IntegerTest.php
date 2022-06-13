<?php

use PHPUnit\Framework\TestCase;
require_once './Models/SupportCraft.php';

class SupportTest extends TestCase {

  public function testIfNotColumnInteger() {
    $support = new SupportCraft("support", "cruiser");
    $this->expectException(\Exception::class);

    $support->setColumnGrid("a");
  }

  public function testIfNotRowInteger() {
    $support = new SupportCraft("support", "cruiser");
    $this->expectException(\Exception::class);

    $support->setRowGrid("a");
  }
}

// vendor/bin/phpunit Test --color