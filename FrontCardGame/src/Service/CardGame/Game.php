<?php

/**
 * Copyright (C) Msfaxi - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 */
namespace App\Service\CardGame;


use Assert\Assertion;

/**
 * Class Game
 * @package App\Service\CardGame
 */
class Game
{
    /**
     * @var Pack $pack
     */
    private $pack;
    /**
     * @var array $hands
     */
    private $hands = [];

    private $nbPlayer = 1;

    /**
     * Game constructor.
     * @param int $nbPlayer
     * @throws \Assert\AssertionFailedException
     */
    public function __construct($nbPlayer = 1)
    {
        $this->pack = new Pack();
        $this->pack->init();
        Assertion::greaterOrEqualThan($nbPlayer, 1);
        $this->nbPlayer = $nbPlayer;

    }


    /**
     * @return Pack
     */
    public function getPack(): Pack
    {
        return $this->pack;
    }

    /**
     * @return array
     */
    public function getHands(): array
    {
        return $this->hands;
    }


    /**
     * @return int
     */
    public function getNbPlayer(): int
    {
        return $this->nbPlayer;
    }

    /**
     * @throws \Exception
     */
    public function start()
    {
        try {
            for ($i = 1; $i <= $this->nbPlayer; $i++) {
                $player = new Player("player" . $i, "test");
                $hand = new Hand($player, $this->pack);
                array_push($this->hands, $hand->init());
            }

            return $this;
        } catch (\Exception $ex){
            return $this;
        }

    }

    public function sortHands($cards)
    {
        usort($cards, function($a, $b) {
            if ((int)$a->getForce() == (int)$b->getForce()) {
                return 0;
            }
            return ((int)$a->getForce() < (int)$b->getForce()) ? -1 : 1;
        });
        return $cards;
    }
}