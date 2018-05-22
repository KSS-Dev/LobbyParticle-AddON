<?php
namespace iTzFreeHD\PC;

use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\utils\TextFormat as c;

class Particle2 {

    public function getParticle(Player $player)
    {
        $inv = $player->getInventory();
        $inv->clearAll();

        $entchant = Item::get(340, 0, 1);
        $entchant->setCustomName(c::RESET . c::GREEN . "Entchant-Particle");

        $portal = Item::get(90, 0, 1);
        $portal->setCustomName(c::RESET . c::DARK_PURPLE . "Portal-Particle");

        $exit = Item::get(351, 1, 1);
        $exit->setCustomName(c::RESET . c::RED . "Exit");


        $inv->setItem(8, $exit);
        $inv->setItem(2, $entchant);
        $inv->setItem(4, $portal);
    }
}