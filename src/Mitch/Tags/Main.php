<?php
    
namespace Mitch\tags;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

use jojoe77777\FormAPI;
use _64FF00\PureChat\PureChat;

class Main extends PluginBase
{
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        if ($sender instanceof Player and $command->getName() == "tags") {
            $this->TagsUI($sender);
        }
        return true;
    }
	public function TagsUI(Player $player) : void{
		$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
		$form = $api->createSimpleForm(function (Player $player, int $data = null) {
        $result = $data;
        if ($result === null) {
            return;
        }
		switch($result) {
			case 0:
            if($player->hasPermission("voter.command")) {   
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§aVoter§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "VOTER");
                } else {
                $player->sendMessage("§cYou dont dont own this tag!");
                return true;
            }
			break;
			case 1:
            if($player->hasPermission("tree.command")) { 
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§aTree§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "TREE");
            } else {
                $player->sendMessage("§cYou dont dont own this tag!");
                return true;
            }
			break;	
			case 2:
                if($player->hasPermission("farmer.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§6Farmer§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "FARMER");
        } else {
            $player->sendMessage("§cYou dont dont own this tag!");
                return true;
        }
			break;	
			case 3:
                if($player->hasPermission("seed.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§2Seed§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "SEED");
        } else {
            $player->sendMessage("§cYou dont dont own this tag!");
                return true;
        }
			break;	
			case 4:
                if($player->hasPermission("pvp.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§4P§cv§4P§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "PVP");
            } else {
               $player->sendMessage("§cYou dont dont own this tag!");
               return true;
            }
			break;	
			case 5:
                if($player->hasPermission("nolife.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§cNo§bLife§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "NOLIFE");
             } else {
            		$player->sendMessage("§cYou dont dont own this tag!");
               		return true;
           }
			break;	
			case 6:
                if($player->hasPermission("2021.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§a2§20§a2§21§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "2021");
             } else {
                  $player->sendMessage("§cYou dont dont own this tag!");
                return true;                        
             }
			break;	
			case 7:
                if($player->hasPermission("number1.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§3#1§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "#1");
             } else {
               $player->sendMessage("§cYou dont dont own this tag!");
                return true;                            
              }
			break;
			case 8:
                if($player->hasPermission("rich.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§eRich§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "RICH");
           } else {
                $player->sendMessage("§cYou dont dont own this tag!");
                return true;                       
            }
			break;	
			case 9:
                if($player->hasPermission("rip.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§dRIP§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "RIP");
             } else {
                $player->sendMessage("§cYou dont dont own this tag!");
                return true;                       
             }
			break;	
			case 10:
                if($player->hasPermission("qt.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§9QT§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "QT");
             } else {
                $player->sendMessage("§cYou dont dont own this tag!");
                return true;                          
              }
			break;	
			case 11:
                if($player->hasPermission("home.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§5HOME§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "HOME");
            } else {
                $player->sendMessage("§cYou dont dont own this tag!");
                return true;
            }
			break;		
			case 12:
                if($player->hasPermission("gamer.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§2GAMER§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "GAMER");
            } else {
                $player->sendMessage("§cYou dont dont own this tag!");
                return true;
            }
			break;	
			case 13:
                if($player->hasPermission("epic.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§cEPIC§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "EPIC");
             } else {
                $player->sendMessage("§cYou dont dont own this tag!");
                return true;                        
             }
			break;		
			case 14:
                if($player->hasPermission("tryhard.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§6TRY§eHARD§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "TRYHARD"); 
              } else {
                 $player->sendMessage("§cYou dont dont own this tag!");
                return true;                          
               }
			break;	
            case 15:
                if($player->hasPermission("miner.command")) {
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§8§7Miner§8"), $player);
			$player->sendMessage(TextFormat::GREEN . "Set Tag To " . TextFormat::AQUA . "MINER");
             } else {
                     $player->sendMessage("§cYou dont dont own this tag!");
                return true;                      
             }
			break;	
			case 16:
			$ppchat = $this->getServer()->getPluginManager()->getPlugin("PureChat");
			$ppchat->setSuffix((TextFormat::AQUA . "§a"), $player);
			$player->sendMessage(TextFormat::GREEN . "§cYou removed your tag");
			break;		
		    }
		});
		$form->setTitle(TextFormat::BOLD . TextFormat::GREEN . "Tags");
		$form->setContent(TextFormat::GREEN . "Choose a tag!");
		$form->addButton(TextFormat::RED . "VOTER");
		$form->addButton(TextFormat::RED . "TREE");
		$form->addButton(TextFormat::RED . "FARMER");
		$form->addButton(TextFormat::RED. "SEED");	
		$form->addButton(TextFormat::RED . "PVP");
		$form->addButton(TextFormat::RED . "NOLIFE");		
		$form->addButton(TextFormat::RED . "2021");
		$form->addButton(TextFormat::RED . "#1");
		$form->addButton(TextFormat::RED . "RICH");
		$form->addButton(TextFormat::RED . "RIP");	
		$form->addButton(TextFormat::RED . "QT");
		$form->addButton(TextFormat::RED . "HOME");	
		$form->addButton(TextFormat::RED . "GAMER");
		$form->addButton(TextFormat::RED . "EPIC");	
		$form->addButton(TextFormat::RED . "TRYHARD");		
        $form->addButton(TextFormat::RED . "MINER");	
		$form->addButton(TextFormat::GREEN . "§lRemove Tag");			
		$form->sendToPlayer($player);
	}
}
