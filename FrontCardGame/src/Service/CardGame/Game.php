<?php


namespace App\Service\CardGame;


use Assert\Assertion;

class Game
{
    /**
     * @var Pack $pack
     */
    private $pack;
    /**
     * @var array $mains
     */
    private $mains = [];

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
    public function getMains(): array
    {
        return $this->mains;
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
                $main = new Main($player, $this->pack);
                array_push($this->mains, $main->init());
            }

            return $this;
        } catch (\Exception $ex){
            return $this;
        }

    }

    public function sortMain($cards)
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