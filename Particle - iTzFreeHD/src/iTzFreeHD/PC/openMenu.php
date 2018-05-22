<?php
namespace iTzFreeHD\PC;


use pocketmine\inventory\transaction\action\SlotChangeAction;
use pocketmine\item\Item;
use pocketmine\Player;
use muqsit\invmenu\InvMenuHandler;
use muqsit\invmenu\InvMenu;
use pocketmine\utils\TextFormat as c;

class openMenu {

    private $plugin;
    private $prefix = "";

    public function __Construct(Particle $plugin){
        $this->plugin = $plugin;
        if (!InvMenuHandler::isRegistered()) {
            InvMenuHandler::register($plugin);
        }

    }

    public function openMenu(Player $player)
    {
        $menu = InvMenu::create(InvMenu::TYPE_DOUBLE_CHEST);
        $menu->readonly();
        $menu->setName(c::GOLD . "Particles");

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
//Seite 2?

        $entchant = Item::get(340, 0, 1);
        $entchant->setCustomName(c::RESET . c::GREEN . "Entchant-Particle");

        $portal = Item::get(90, 0, 1);
        $portal->setCustomName(c::RESET . c::DARK_PURPLE . "Portal-Particle");

        $exit = Item::get(351, 1, 1);
        $exit->setCustomName(c::RESET . c::RED . "Exit");

        $inv = $menu->getInventory();





        $inv->setItem(2, $rot);
        $inv->setItem(4, $blau);
        $inv->setItem(6, $gruen);
        $inv->setItem(23, $gelb);
        $inv->setItem(21, $rg);

        $inv->setItem(40, $fire);
        $inv->setItem(38, $entchant);
        $inv->setItem(42, $portal);

        $menu->setListener([$this, "onTransaction"]);
        $menu->setListener(function(player $player, item $itemClickedOn, Item $itemClickedwith): bool{
            $name = $player->getName();
            if($itemClickedOn->getCustomName() == c::RESET . c::RED . "Rote " . c::GOLD . "Partikel"){
                if(!in_array($name, $this->plugin->particle1)) {

                    $this->plugin->particle1[] = $name;
                    $player->sendMessage($this->prefix . c::GREEN . "Du hast " . c::GOLD . "Rote" . c::GREEN . " Partikel aktiviert");

                    if(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                } else {

                    unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);

                    $player->sendMessage($this->prefix . c::RED . "Du hast " . c::GOLD . "Rote" . c::RED . " Partikel deaktiviert");

                    if(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                }
            }
            if($itemClickedOn->getCustomName() == c::RESET . c::BLUE . "Blaue " . c::GOLD . "Partikel"){
                if(!in_array($name, $this->plugin->particle4)) {

                    $this->plugin->particle4[] = $name;
                    $player->sendMessage($this->prefix . c::GREEN . "Du hast " . c::GOLD . "Blaue" . c::GREEN . " Partikel aktiviert");

                    if(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                } else {

                    unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);

                    $player->sendMessage($this->prefix . c::RED . "Du hast " . c::GOLD . "Blaue" . c::RED . " Partikel deaktiviert");
                    if(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                }
            }
            if($itemClickedOn->getCustomName() == c::RESET . c::YELLOW . "Gelbe " . c::GOLD . "Partikel"){
                if(!in_array($name, $this->plugin->particle2)) {

                    $this->plugin->particle2[] = $name;
                    $player->sendMessage($this->prefix . c::GREEN . "Du hast " . c::GOLD . "Gelbe" . c::GREEN . " Partikel aktiviert");

                    if(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                } else {

                    unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);

                    $player->sendMessage($this->prefix . c::RED . "Du hast " . c::GOLD . "Gelbe" . c::RED . " Partikel deaktiviert");

                    if(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                }
            }
            if($itemClickedOn->getCustomName() == c::RESET . c::GREEN . "Gruene " . c::GOLD . "Partikel"){
                if(!in_array($name, $this->plugin->particle3)) {

                    $this->plugin->particle3[] = $name;
                    $player->sendMessage($this->prefix . c::GREEN . "Du hast " . c::GOLD . "Gruene" . c::GREEN . " Partikel aktiviert");

                    if(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                } else {

                    unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);

                    $player->sendMessage($this->prefix . c::RED . "Du hast " . c::GOLD . "Gruene" . c::RED . " Partikel deaktiviert");
                    if(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                }
            }
            if($itemClickedOn->getCustomName() == c::RESET . c::GOLD . "Orange " . c::GOLD . "Partikel"){
                if(!in_array($name, $this->plugin->particle5)) {

                    $this->plugin->particle5[] = $name;
                    $player->sendMessage($this->prefix . c::GREEN . "Du hast " . c::GOLD . "Orange" . c::GREEN . " Partikel aktiviert");

                    if(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                } else {

                    unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);

                    $player->sendMessage($this->prefix . c::RED . "Du hast " . c::GOLD . "Orange" . c::RED . " Partikel deaktiviert");

                    if(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                }
            }
            if($itemClickedOn->getCustomName() == c::RESET . c::RED . "Feuer " . c::GOLD . "Partikel"){
                if(!in_array($name, $this->plugin->particle6)) {

                    $this->plugin->particle6[] = $name;
                    $player->sendMessage($this->prefix . c::GREEN . "Du hast " . c::GOLD . "Feuer" . c::GREEN . " Partikel aktiviert");

                    if(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                } else {

                    unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);

                    $player->sendMessage($this->prefix . c::RED . "Du hast " . c::GOLD . "Feuer" . c::RED . " Partikel deaktiviert");

                    if(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                }
            }
            if($itemClickedOn->getCustomName() == c::RESET . c::GREEN . "Entchant-Particle"){
                if(!in_array($name, $this->plugin->particle7)) {

                    $this->plugin->particle7[] = $name;
                    $player->sendMessage($this->prefix . c::GREEN . "Du hast ". c::GREEN . "Entchant-Partikel aktiviert");

                    if(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                } else {

                    unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);

                    $player->sendMessage($this->prefix . c::RED . "Du hast " . c::GREEN . "Entchant" . c::RED . " Partikel deaktiviert");

                    if(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle8)) {
                        unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                }
            }
            if($itemClickedOn->getCustomName() == c::RESET . c::DARK_PURPLE . "Portal-Particle"){
                if(!in_array($name, $this->plugin->particle8)) {

                    $this->plugin->particle8[] = $name;
                    $player->sendMessage($this->prefix . c::GREEN . "Du hast ". c::DARK_PURPLE. "Portal". c::GREEN . " Partikel aktiviert");

                    if(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                } else {

                    unset($this->plugin->particle8[array_search($name, $this->plugin->particle8)]);

                    $player->sendMessage($this->prefix . c::RED . "Du hast " . c::DARK_PURPLE . "Portal" . c::RED . " Partikel deaktiviert");

                    if(in_array($name, $this->plugin->particle3)) {
                        unset($this->plugin->particle3[array_search($name, $this->plugin->particle3)]);
                    } elseif(in_array($name, $this->plugin->particle2)) {
                        unset($this->plugin->particle2[array_search($name, $this->plugin->particle2)]);
                    } elseif(in_array($name, $this->plugin->particle4)) {
                        unset($this->plugin->particle4[array_search($name, $this->plugin->particle4)]);
                    } elseif(in_array($name, $this->plugin->particle1)) {
                        unset($this->plugin->particle1[array_search($name, $this->plugin->particle1)]);
                    } elseif(in_array($name, $this->plugin->particle5)) {
                        unset($this->plugin->particle5[array_search($name, $this->plugin->particle5)]);
                    } elseif(in_array($name, $this->plugin->particle6)) {
                        unset($this->plugin->particle6[array_search($name, $this->plugin->particle6)]);
                    } elseif(in_array($name, $this->plugin->particle7)) {
                        unset($this->plugin->particle7[array_search($name, $this->plugin->particle7)]);
                    } elseif(in_array($name, $this->plugin->particle9)) {
                        unset($this->plugin->particle9[array_search($name, $this->plugin->particle9)]);
                    }



                }
            }
            return true;
        });

        $menu->send($player);
    }
    public function onTransaction(Player $player, Item $itemTakenOut, Item $itemPutIn, SlotChangeAction $inventoryAction) : bool{

        $player->removeWindow($inventoryAction->getInventory());

        return true;
    }
}