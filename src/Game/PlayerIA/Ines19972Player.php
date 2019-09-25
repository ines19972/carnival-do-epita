<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class PaperPlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class Ines19972Player extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;
    protected $max;

    public function getChoice()
    {
        /*
         * If it's the first round I choose rock
         */
        if ($this->result->getNbRound() == 0)
            return parent::rockChoice();
        /*
         * Else, I analyse the opponent's statistics and see what does he play the most
         * Then I fight back with the right move
         */
        $max = array_search(max($this->result->getStatsFor($this->opponentSide)["scissors"], $this->result->getStatsFor($this->opponentSide)["paper"],
                $this->result->getStatsFor($this->opponentSide)["rock"]), $this->result->getStatsFor($this->opponentSide));
        if ($max == "paper")
            return parent::scissorsChoice();
        if ($max == "rock")
            return parent::paperChoice();
        else
            return parent::rockChoice();


        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
       // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------
        
        //return parent::RockChoice();
  }
};
