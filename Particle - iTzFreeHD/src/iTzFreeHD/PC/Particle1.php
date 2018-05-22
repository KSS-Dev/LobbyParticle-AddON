<?php
namespace iTzFreeHD\PC;



use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\utils\TextFormat as c;

class Particle1 {
    public function getParticle(Player $player)
    {
        $inv = $player->getInventory();
        $inv->clearAll();

        $rot = Item::get(351, 1, 1);
        $rot->setCustomName(c::RESET . c::RED . "Rote " . c::GOLD . "Partikel");

        $blau = Item::get(351, 4, 1);
        $blau->setCustomName(c::RESET . c::BLUE . "Blaue " . c::GOLD . "Partikel");

        $gelb = Item::get(351, 11, 1);
        $gelb->setCustomName(c::RESET . c::YELLOW . "Gelbe " . c::GOLD . "Partikel");

        $gruen = Item::get(351, 2, 1);
        $gruen->setCustomName(c::RESET . c::GREEN . "Gruene " . c::GOLD . "Partikel");

        $rg = Item::get(351, 14, 1);
        $rg->setCustomName(c::RESET . c::GOLD . "Orange " . c::GOLD . "Partikel");

        $fire = Item::get(377, 0, 1);
        $fire->setCustomName(c::RESET . c::RED . "Feuer " . c::GOLD . "Partikel");

        $site2 = Item::get(339, 0, 1);
        $site2->setCustomName(c::RESET . c::GRAY . "Partikel Seite 2 ");

        $exit = Item::get(351, 1, 1);
        $exit->setCustomName(c::RESET . c::RED . "Exit");

        $inv->setItem(0, $rot);
        $inv->setItem(1, $blau);
        $inv->setItem(2, $gruen);
        $inv->setItem(3, $gelb);
        $inv->setItem(4, $rg);
        $inv->setItem(5, $fire);
        $inv->setItem(7, $site2);
        $inv->setItem(8, $exit);
    }
}