<?php
namespace RareGappleKill;
  
  use pocketmine\event\Listener;
  use pocketmine\event\player\PlayerDeathEvent;
  use pocketmine\item\Item;
  use pocketmine\plugin\PluginBase;
  use pocketmine\utils\TextFormat as TF;
 class Main extends PluginBase Implements Listener
 {
 	public function onEnable()
 	{
 		$this->getServer()->getPluginManager()->registerEvents($this, $this);
 		$this->getLogger()->info("RareGappleKill v1.0.0 Enabled!");
 	}
  
 	public function onDeath(PlayerDeathEvent $event)
 	{
 		$entity = $event->getEntity();
 		$killer = $entity->getLastDamageCause();
 		$rand = mt_rand(1, 100);
 		If ($rand => 25) {
 		     If($killer instanceof Player){
 			$killer->getInventory()->addItem(Item::get(ITEM::GOLDEN_APPLE, 0, 1));
 			$killer->sendMessage(TF::GREEN . "[RGK] You have got a rare golden apple for killing " . $entity . " ! ");
 		 }
 		}
 	}
 }
