<?php

namespace JOrlex;

use pocketmine\Player;
use pocketmine\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class main extends PluginBase implements Listener {

  public function onLoad()  {
            $this->getLogger()->info("Plugin Loading");
        }

         public function onEnable() {
                   $this->getServer()->getPluginManager()->registerEvents($this,$this);
                   $this->getLogger()->info("Enabled Plugin");
              }

         public function onDisable()  {
                   $this->getLogger()->info("Plugin Disabled");
              }

         public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
             if($cmd->getName() == "feed")  {
             $sender->setFood(20);
            }
             return true;
            }

 ?>
