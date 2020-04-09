<?php

namespace App\Tests\Service\CardGame;

use App\Service\CardGame\Game;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class GameTest extends TestCase
{
    /**
     * @throws \Assert\AssertionFailedException
     */
    public function testStartGame()
    {
        $game = new Game(2);
        $game = $game->start();
        assertEquals(32, count($game->getPack()->getCards()));
    }
}
