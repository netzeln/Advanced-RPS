<?php
    class  Game
    {

        private $player_one_id;
        private $player_one_choice;
        private $player_two_id;
        private $player_two_choice;
        private $winner;
        private $id;

        function getPlayerOneId()
        {
          return $this->player_one_id;
        }
        function setPlayerOneId($new_id)
        {
          $this->player_one_id = $new_id;
        }
        function getPlayerOneChoice()
        {
          return $this->player_one_choice;
        }
        function setPlayerOneChoice($new_choice)
        {
          $this->player_one_choice = $new_choice;
        }

        function getPlayerTwoId()
        {
          return $this->player_two_id;
        }
        function setPlayerTwoId($new_id)
        {
          $this->player_two_id = $new_id;
        }
        function getPlayerTwoChoice()
        {
            return $this->player_two_choice;
        }
        function setPlayerTwoChoice($new_choice)
        {
          $this->player_two_choice = $new_choice;
        }

        function getWinner()
        {
          return $this->winner;
        }
        function setWinner($new_winner)
        {
           $this->winner = $new_winner;
        }
        function getId()
        {
          return $this->id;
        }
        function __construct($player_one_id, $player_one_choice,  $player_two_id, $player_two_choice, $winner, $id=null)
        {
            $this->player_one_id = $player_one_id;
            $this->player_one_choice = $player_one_choice;
            $this->player_two_id = $player_two_id;
            $this->player_two_choice = $player_two_choice;
            $this->winner = $winner;
            $this->id = $id;
        }

        function playGame($player_one_id, $player_one_choice, $player_two_id, $player_two_choice)
        {
            if ($player_one_choice == "rock" && ($player_two_choice == "fire" ||
            $player_two_choice== "scissors" || $player_two_choice == "sponge") ||
//Fire beats
            $player_one_choice == "fire" && ($player_two_choice == "scissors" ||
            $player_two_choice== "sponge" || $player_two_choice == "paper") ||
//scissors beats
            $player_one_choice == "scissors" && ($player_two_choice == "sponge" ||
            $player_two_choice== "paper" || $player_two_choice == "air") ||
//sponge beats
            $player_one_choice == "sponge" && ($player_two_choice == "paper" ||
            $player_two_choice== "air" || $player_two_choice == "water") ||
//paper beats
            $player_one_choice == "paper" && ($player_two_choice == "air" ||
            $player_two_choice== "water" || $player_two_choice == "rock") ||
//air beats
            $player_one_choice == "air" && ($player_two_choice == "water" ||
            $player_two_choice== "rock" || $player_two_choice == "fire") ||
//water beats
            $player_one_choice == "water" && ($player_two_choice == "rock" ||
            $player_two_choice== "fire" || $player_two_choice == "scissors"))
 			{
 				return "Player 1";
 			}
			elseif ($player_one_choice == $player_two_choice)
			{
				return "Tie";
			}
			else
			{
				return "Player 2";
			}

      }
    }
?>