<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;
use App\Faction;

class CharacterTest extends TestCase {

	/** @test */
	public function test_character_health_starting_at_1000_points()
	{
		$goku= new Character;
		$gokuHealth= $goku->getHealth();
		$this->assertEquals(1000,$gokuHealth);
	}
	public function test_character_Level_starting_at_1()
	{
		$goku= new Character;
		$gokuLevel= $goku->getLevel();
		$this->assertEquals(1,$gokuLevel);
	} 
	public function test_character_is_alive_or_dear()
	{
		$goku= new Character;
		$gokuLife= $goku->getLife();
		$this->assertEquals(true,$gokuLife);
	} 
	public function test_character_takes_damague()
	{
		$vegeta= new Character;
		$krilin = new Character;

		$vegeta->attack($krilin,200);
		$result = $krilin->getHealth();
		$this->assertEquals(800, $result);
	} 
	public function test_when_healht_equal_0_he_died()
	{
      $vegeta =new Character;
	  $krilin =new Character;

	  $vegeta->attack($krilin,1000);
	  $result = $krilin->getHealth();
	  $this->assertEquals(0, $result);
	  $this->assertEquals(false,$krilin->getLife());

	} 
	public function test_chararter_can_heald_anoter_chararter()
	{
      $vegeta =new Character;
	  $krilin =new Character;
	  $krilin->setHealth(800);

      $vegeta->healt($krilin,200);
	  $this->assertEquals(1000,$krilin->getHealth());


	} 
	
	
	

}


