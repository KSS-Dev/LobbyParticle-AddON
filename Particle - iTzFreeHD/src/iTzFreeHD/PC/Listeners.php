<?php
namespace iTzFreeHD\PC;



use iTzFreeHD\LB\LobbySystem;
use pocketmine\event\inventory\InventoryTransactionEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\LoginPacket;
use pocketmine\utils\TextFormat as c;

class Listeners implements Listener {

    private $plugin;
    private $prefix = "";

    public function __construct(Particle $plugin)
    {
        $this->plugin = $plugin;
        $this->plugin->getServer()->getPluginManager()->registerEvents($this, $this->plugin);
    }

    public function onDataPacket(DataPacketReceiveEvent $event)
    {
        $packet = $event->getPacket();
        if ($packet instanceof LoginPacket) {
            $name = $packet->username;
            if (in_array($name, $this->plugin->Win10)) {
                unset($this->plugin->Win10[array_search($name, $this->plugin->Win10)]);
            }
            if ($packet->clientData['DeviceOS'] == 7) {
                if (in_array($name, $this->plugin->Win10)) {
                    unset($this->plugin->Win10[array_search($name, $this->plugin->Win10)]);
                    $this->plugin->Win10[] = $name;
                } else {
                    $this->plugin->Win10[] = $name;
                }
            }
        }

    }

    public function noInvMove(InventoryTransactionEvent $event)
    {
        foreach ($this->plugin->getServer()->getOnlinePlayers() as $player) {
            $inv = $player->getInventory();

            if ($inv->getItem(8)->getCustomName() == c::RESET . c::RED . "Exit") {
                $event->setCancelled();
            }
        }
    }

    public function onClick(PlayerInteractEvent $event)
    {
        $player = $event->getPlayer();
        $name = $player->getName();
        $in = $event->getPlayer()->getInventory()->getItemInHand()->getCustomName();
        $inv = $player->getInventory();


        if($in == c::RESET . c::GRAY . "Partikel Seite 2 ") {
            $Particle2 = new Particle2();
            $Particle2->getParticle($player);

        }

        if($in == c::RESET . c::DARK_PURPLE . "Portal-Particle") {

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


        if($in == c::RESET . c::GREEN . "Entchant-Particle") {

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


        if($in == c::RESET . c::RED . "Feuer " . c::GOLD . "Partikel") {

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

        if($in == c::RESET . c::GOLD . "Orange " . c::GOLD . "Partikel") {

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

        if($in == c::RESET . c::RED . "Rote " . c::GOLD . "Partikel") {

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


        if($in == c::RESET . c::YELLOW . "Gelbe " . c::GOLD . "Partikel") {

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

        if($in == c::RESET . c::BLUE . "Blaue " . c::GOLD . "Partikel") {

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

        if($in == c::RESET . c::GREEN . "Gruene " . c::GOLD . "Partikel") {

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

    }
}