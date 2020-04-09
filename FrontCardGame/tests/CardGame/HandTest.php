<?php
/**
 * Copyright (C) Msfaxi - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 */
namespace Atexo\Tests\CardGame;

use App\Service\CardGame\Card;
use App\Service\CardGame\Hand;
use App\Service\CardGame\Pack;
use App\Service\CardGame\Player;
use PHPUnit\Framework\TestCase;

/**
 * Class HandTest
 * @package Atexo\Tests\CardGame
 */
class HandTest extends TestCase
{

    public function testChooseCard()
    {
        $pack = new Pack();
        $pack->init();
        $player = new Player('test', 'test');;
        $main = new Hand($player, $pack);

        $card = $main->chooseCard();
        $this->assertInstanceOf(Card::class,  $card);
    }
}
