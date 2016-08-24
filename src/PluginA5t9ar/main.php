<?php

namespace PluginA5t9ar;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\Command\CommandSender;
use pocketmine\utils\text format as Color;

class Main extends PluginBase{

public function OnEnable(){
   $this->getserver()->getLogger()->info("[A5t9ar] has been enabled");


Public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
              switch($cmd->getName()){
                         case 'h':
                          $sender->setHealth(20);
                           break;
                             case 'mass':
                             $this->getserver()->broadcast($args[0]);
                                     break;
                                     case 'g1':
                                     $player = $sender->getPlayer();
                                      $player->setGamemode(1);
                                      break;
                                      case 'g0':
                                      $player = $sender->getPlayer();
                                      $player->setGamemode(0);
                                      break;
                                      case 'g2':
                                      $player = $sender->getPlayer();
                                      $player->setGamemode(2);
                                       



}

