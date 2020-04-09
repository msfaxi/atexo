<?php

namespace Atexo\Tests\CardGame;

use App\Service\CardGame\Card;
use App\Service\CardGame\Main;
use App\Service\CardGame\Pack;
use App\Service\CardGame\Player;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{

    public function testChooseCard()
    {
        $pack = new Pack();
        $pack->init();
        $player = new Player('test', 'test');;
        $main = new Main($player, $pack);

        $card = $main->chooseCard();
        $this->assertInstanceOf(Card::class,  $card);
    }
}
