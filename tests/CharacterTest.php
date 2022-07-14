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
	
	
	

}


