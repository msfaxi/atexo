<?php
/**
 * Copyright (C) Msfaxi - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 */
namespace App\Service\CardGame;


use Assert\Assertion;

class Pack
{
    protected $cards = [];

    public function __construct(array $cards = [])
    {
        $this->cards = $cards;
    }

    /**
     * Create the init pack
     * @return $this
     */
    public function init()
    {
        $force = 0;
        foreach (Card::COLOR as $color){
            foreach (range(1,13) as $key => $value){
                $name = null;
                if (isset(Card::VALUEPIC[$key])) {
                    $name = Card::VALUEPIC[$key];
                }

                array_push($this->cards, new Card($color, $value, $force, $name));
                $force++;

            }
            $force++;
        }
        return $this;
    }

    /**
     * @param array $cards
     * @return Pack
     */
    public function setCards(array $cards): Pack
    {
        $this->cards = $cards;
        return $this;
    }

    public function getCards():array
    {
        return $this->cards;
    }

    public function shuffle(): self
    {
        shuffle($this->cards);

        return $this;
    }

    /**
     * @param $pack
     * @return string
     */
    public function display(Pack $pack = null):string
    {
        $cards = $pack ?? $this->getCards();
        $string = " ";
            foreach ($cards as $card){
                $string .=  $card->displayCard();
            }
            $string .=  "\n";
        return  $string;
    }



}