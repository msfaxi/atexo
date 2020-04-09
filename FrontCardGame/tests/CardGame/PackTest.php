<?php

namespace Atexo\Tests\CardGame;

use App\Service\CardGame\Pack;
use PHPUnit\Framework\TestCase;

class PackTest extends TestCase
{

    public function testValidInitPack()
    {
        $pack = new Pack();
        $pack->init();
        $this->assertEquals(52, count($pack->getCards()));
    }

    public function testShufflePack()
    {
        $pack = new Pack();
        $this->assertNotEquals($pack->getCards(), $pack->shuffle());
    }
}
