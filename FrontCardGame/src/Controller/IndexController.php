<?php

namespace App\Controller;

use App\Service\CardGame\Game;
use App\Service\CardGame\Pack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/game", name="game")
     */
    public function index(Game $game, Pack $pack)
    {
        $pack->init();
        $game = $game->start();
        return $this->render("game/index.html.twig", ['pack' => $pack, 'game' => $game]);
    }
}
