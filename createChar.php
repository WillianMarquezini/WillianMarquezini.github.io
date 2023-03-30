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
          "attack" =>"10",
          "defense" => "10",
          "speed" => "10"
        );
        break;
      case 'mage':
        //criar habilidades do mage
        $abilities;
        break;
      case 'rogue':
        //criar habilidades do rogue
        $abilities;
        break;
      case 'priest':
        //criar habilidades do priest
        break;
      case 'hunter':
        //criar habilidades do hunter
        break;
      case 'paladin':
        //criar habilidades do paladin
        break;
      default:
        // num sei oq fazer aqui 
        break;
    }

    return $abilities;
  }
}
