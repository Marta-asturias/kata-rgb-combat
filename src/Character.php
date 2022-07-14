<?php

namespace App;

use phpDocumentor\Reflection\Types\This;

 class Character {
  private int $health;
  private int $level;
  private bool $live;


    public function __construct()
    {
        $this->health = 1000;
        $this->level=1;
        $this->live=true;

        
    }
    public function getHealth()
    {
        return $this->health;
    }
    public function getLevel()
    {
        return $this->level;
    }
    public function getLife()
    {
        return $this->live;
    }

    
    
}

?>