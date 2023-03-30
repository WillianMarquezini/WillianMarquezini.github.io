<?php

namespace createChar;
// arquivo para tentar criar um pequeno sistema de rpg em php
// classe para criar um personagem
class char
{
  function char($infos, $class)
  {

    //criar personagem
    $class = $this->class($class);

    $char = array(
      "name" => $infos['Name'],
      "age" => $infos['Age'],
      "race" => $infos['Race'],
      "class" => $class['Class'],
      "level" => "1",
      "exp" => "0",
      "Abilities" => $class['Abilities'],
      "Status" => $class['Status']
    );
  }

  function class($class)
  {
    switch ($class) {
      case 'warrior':
        //criar habilidades do warrior
        $class = array(
          "Abilities" => array(
            "1" => "Pisão",
            "2" => "Empunhadura Dupla"
          ),
          "Status" => array(
            "life" => "100",
            "mana" => "20",
            "attack" => "10",
            "defense" => "10",
            "speed" => "10"
          )
        );
        break;
      case 'mage':
        //criar habilidades do mage
        $class = array(
          "Abilities" => array(
            "1" => "Bola de Fogo",
            "2" => "Espinho de Gelo"
          ),
          "Status" => array(
            "life" => "100",
            "mana" => "50",
            "attack" => "15",
            "defense" => "5",
            "speed" => "12"
          )
        );
        break;
      case 'rogue':
        //criar habilidades do rogue
        $class = array(
          "Abilities" => array(
            "1" => "Ataque Furtivo",
            "2" => "Camuflagem"
          ),
          "Status" => array(
            "life" => "80",
            "mana" => "20",
            "attack" => "15",
            "defense" => "8",
            "speed" => "15"
          )
        );
        break;
      case 'priest':
        //criar habilidades do priest
        $class = array(
          "Abilities" => array(
            "1" => "Cura",
            "2" => "Bênção"
          ),
          "Status" => array(
            "life" => "50",
            "mana" => "50",
            "attack" => "5",
            "defense" => "5",
            "speed" => "10"
          )
        );
        break;
      case 'hunter':
        //criar habilidades do hunter
        $class = array(
          "Abilities" => array(
            "1" => "Disparo flamejante",
            "2" => "Disparo duplo"
          ),
          "Status" => array(
            "life" => "100",
            "mana" => "20",
            "attack" => "18",
            "defense" => "10",
            "speed" => "10"
          )
        );
        break;
      case 'paladin':
        //criar habilidades do paladin
        $class = array(
          "Abilities" => array(
            "1" => "Bênção da Luz",
            "2" => "Escudo divino"
          ),
          "Status" => array(
            "life" => "150",
            "mana" => "20",
            "attack" => "10",
            "defense" => "15",
            "speed" => "10"
          )
        );
        break;
      default:
        $class = 'Não foi possivel classificalo';
        break;
    }
    return $class;
  }
}
