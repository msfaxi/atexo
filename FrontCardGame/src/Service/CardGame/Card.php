<?php

namespace App\Service\CardGame;


class Card
{

    CONST COLOR = ["diams", "hearts", "spades" , "clubs"];
    CONST DISPLAY = ["diams" => "♦", "hearts" =>  "♥", "spades" => "♠", "clubs" => "♣"];
    CONST VALUEPIC = [1 => "as",  11 =>"valet", 12 => "dame", 13=> "roi"];

    /**
     * @var string $color
     */
    private $color;
    /**
     * @var int $value
     */
    private $value;
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var int $force
     */
    private $force;

    private $icone;


    public function __construct($color, $value, $force, $name =null)
    {
        $this->color = $color;
        $this->value = $value;
        $this->name = $name;
        $this->force = $force;
        $this->icone = self::DISPLAY[$this->color];
    }

    /**
     * @return mixed
     */
    public function getIcone()
    {
        return $this->icone;
    }

    /**
     * @param mixed $icone
     * @return Card
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;
        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Card
     */
    public function setColor(string $color): Card
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return Card
     */
    public function setValue(int $value): Card
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Card
     */
    public function setName(string $name): Card
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getForce(): string
    {
        return $this->force;
    }

    /**
     * @param int $force
     * @return Card
     */
    public function setForce(int $force): Card
    {
        $this->force = $force;
        return $this;
    }

    public function displayCard()
    {
        $str = $this->name ?? $this->value;
        return  self::DISPLAY[$this->color]." ".$str." ";
    }

    public function stringValue()
    {
        $tab = [1=> 'a', 11 => 'j', 12 => 'q', 13 => 'k'];
        if (in_array($this->value, [1, 11, 12, 13])) {
            return $tab[$this->value];
        }
        return $this->value;
    }
}