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
    public function setHealth($health)
    {
        $this->health = $health;
        return $this;
    }
    public function getLevel()
    {
        return $this->level;
    }
    public function getLife()
    {
        if($this->health <= 0) {
            $this->live=false;
            return $this->live;
        }
        return $this->live;
    }
    public function attack($enemy,$attackPoins)
    {
        $enemy->health = $enemy->health - $attackPoins;
    }
    public function healt($friend,$healPoins)
    {
        $friend->health = $friend->health + $healPoins;
    }

    
    
}

?>