<?php

namespace ladik;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\plugin\Plugin;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as L;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\network\protocol\UseItemPacket;
use pocketmine\event\player\PlayerItemHeldEvent;

class main extends PluginBase implements Listener{
    
      public function onEnable() {
          $this->getServer()->getLogger()->info(self::getPrefix()."Â§aAktivovan!");
          $this->getServer()->getPluginManager()->registerEvents($this, $this);
     }
      
      public static function getPrefix(){
        return "Â§lÂ§4[Â§rÂ§6SurvivalItemÂ§lÂ§4] Â§rÂ§f";
    }       
      public function onJoin(PlayerJoinEvent $event){
      $player = $event->getPlayer();
      $name = $player->getName();
      $this->Item($player);
     
    }  
     public function Item(Player $player){
      $player->getInventory()->clearAll();
      $player->getInventory()->setItem(0, Item::get(268)->setCustomName(L::BLUE."MEC"));
      $player->getInventory()->setItem(1, Item::get(270)->setCustomName(L::BLUE."KRUMP"));
      $player->getInventory()->setItem(2, Item::get(269)->setCustomName(L::BLUE."LOPATA"));
      $player->getInventory()->setItem(3, Item::get(271)->setCustomName(L::BLUE."SEKERA"));      
      $player->getInventory()->setHelmet(Item::get(298));
      $player->getInventory()->setChestplate(Item::get(299));
      $player->getInventory()->setLeggings(Item::get(300));
      $player->getInventory()->setBoots(Item::get(301));

    }                 
}
