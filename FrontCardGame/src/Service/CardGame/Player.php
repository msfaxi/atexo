<?php


namespace App\Service\CardGame;


class Player
{

    private $firstname;
    private $lastname;
    private $score;

    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->score = 0;
    }

    /**
     * @return mixed
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return Player
     */
    public function setFirstname($firstname): string
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return Player
     */
    public function setLastname($lastname): string
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScore() : int
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     * @return Player
     */
    public function setScore($score): int
    {
        $this->score = $score;
        return $this;
    }


}