<?php
/**
 * Copyright (C) Msfaxi - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 */
namespace App\Tests\Service\CardGame;

use App\Service\CardGame\Game;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

/**
 * Class GameTest
 * @package App\Tests\Service\CardGame
 */
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
