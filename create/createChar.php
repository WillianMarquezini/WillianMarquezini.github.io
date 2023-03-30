<?php

namespace createChar;
// arquivo para tentar criar um pequeno sistema de rpg em php

// classe para criar um personagem
class char
{
  function classe($class = null)
  {
    switch ($class) {
      case 'warrior':
        //criar habilidades do warrior
        $abilities = array(
          "1" => "Pisão",
          "2" => "Empunhadura Dupla"
        );

        $status = array(
          "life" => "100",
          "mana" => "20",
          "attack" => "10",
          "defense" => "10",
          "speed" => "10"
        );
        break;
      case 'mage':
        //criar habilidades do mage
        $abilities = array(
          "1" => "Bola de Fogo",
          "2" => "Espinho de Gelo"
        );

        $status = array(
          "life" => "100",
          "mana" => "50",
          "attack" => "15",
          "defense" => "5",
          "speed" => "12"
        );
        break;
      case 'rogue':
        //criar habilidades do rogue
        $abilities = array(
          "1" => "Ataque Furtivo",
          "2" => "Camuflagem"
        );

        $status = array(
          "life" => "80",
          "mana" => "20",
          "attack" => "15",
          "defense" => "8",
          "speed" => "15"
        );
        break;
      case 'priest':
        //criar habilidades do priest
        $abilities = array(
          "1" => "Cura",
          "2" => "Bênção"
        );

        $status = array(
          "life" => "50",
          "mana" => "50",
          "attack" => "5",
          "defense" => "5",
          "speed" => "10"
        );
        break;
      case 'hunter':
        //criar habilidades do hunter
        $abilities = array(
          "1" => "Disparo flamejante",
          "2" => "Disparo duplo"
        );

        $status = array(
          "life" => "100",
          "mana" => "20",
          "attack" => "18",
          "defense" => "10",
          "speed" => "10"
        );
        break;
      case 'paladin':
        //criar habilidades do paladin
        $abilities = array(
          "1" => "Bênção da Luz",
          "2" => "Escudo divino"
        );

        $status = array(
          "life" => "150",
          "mana" => "20",
          "attack" => "10",
          "defense" => "15",
          "speed" => "10"
        );
        break;
      default:
        return false;
        break;
    }

    return $abilities;
  }
}
