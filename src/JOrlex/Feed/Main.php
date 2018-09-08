<?php

namespace JOrlex\Feed;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener {

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

        $player = $sender->getPlayer();

    switch($cmd->getName()){
        case "feed":
        if($sender->hasPermission("feed.cmd")) {
            $player->setFood(20);
            $player->sendMessage("§8§l[§a!§8]§r§a You have been §lFed§r§a!");
            return true;
        } else {
            $player->sendMessage("§8§l[§c!§8]§r§c You do not have permission to execute this command!");
            return true;
        }
    }

 }

}

 
