<?php
/**
 * Copyright (C) Msfaxi - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 */
namespace Atexo\Tests\CardGame;

use App\Service\CardGame\Pack;
use PHPUnit\Framework\TestCase;

/**
 * Class PackTest
 * @package Atexo\Tests\CardGame
 */
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
