<?php
namespace iTzFreeHD\PC;



use pocketmine\level\particle\DustParticle;
use pocketmine\level\particle\EnchantmentTableParticle;
use pocketmine\level\particle\FlameParticle;
use pocketmine\level\particle\PortalParticle;
use pocketmine\math\Vector3;
use pocketmine\scheduler\PluginTask;

class ParticleTask extends PluginTask {
    private $plugin;

    public function __construct($plugin) {
        $this->plugin = $plugin;
        parent::__construct($plugin);
        $this->plugin->getServer()->getScheduler()->scheduleRepeatingTask($this, 10);
    }

    public function onRun(int $currentTick)
    {
        if ($this->plugin instanceof Particle)
        foreach($this->plugin->getServer()->getOnlinePlayers() as $player) {
            $name = $player->getName();
            $inv = $player->getInventory();

            $players = $player->getLevel()->getPlayers();
            $level = $player->getLevel();

            $x = $player->getX();
            $y = $player->getY() + 2;
            $z = $player->getZ();

            /**foreach($players as $play) {
                if(in_array($name, $setMain->showall)) {

                    $player->showPlayer($play);

                } elseif(in_array($name, $setMain->showvips)) {

                    if($play->hasPermission("lobby.showvip")) {

                        $player->showPlayer($play);

                    } else {

                        $player->hidePlayer($play);

                    }

                } elseif(in_array($name, $setMain->shownone)) {

                    $player->hidePlayer($play);

                }

            }*/


            // rot
            if(in_array($name, $this->plugin->particle1)) {

                $r = 255;
                $g = 0;
                $b = 0;

                $center = new Vector3($x, $y, $z);
                $particle = new DustParticle($center, $r, $g, $b, 1);

                for($yaw = 0;  $yaw <= 10; $yaw += (M_PI * 2) / 20){
                    $x = -sin($yaw) + $center->x;
                    $z = cos($yaw) + $center->z;
                    $y = $center->y;

                    $particle->setComponents($x, $y, $z);
                    $level->addParticle($particle);

                }

            }
            //gelb
            if(in_array($name, $this->plugin->particle2)) {

                $r = 255;
                $g = 255;
                $b = 0;

                $center = new Vector3($x, $y, $z);
                $particle = new DustParticle($center, $r, $g, $b, 1);

                for($yaw = 0;  $yaw <= 10; $yaw += (M_PI * 2) / 20){
                    $x = -sin($yaw) + $center->x;
                    $z = cos($yaw) + $center->z;
                    $y = $center->y;

                    $particle->setComponents($x, $y, $z);
                    $level->addParticle($particle);

                }
            }
            //gruen
            if(in_array($name, $this->plugin->particle3)) {

                $r = 0;
                $g = 255;
                $b = 0;

                $center = new Vector3($x, $y, $z);
                $particle = new DustParticle($center, $r, $g, $b, 1);

                for($yaw = 0;  $yaw <= 10; $yaw += (M_PI * 2) / 20){
                    $x = -sin($yaw) + $center->x;
                    $z = cos($yaw) + $center->z;
                    $y = $center->y;

                    $particle->setComponents($x, $y, $z);
                    $level->addParticle($particle);

                }
            }
            //blau
            if(in_array($name, $this->plugin->particle4)) {

                $r = 0;
                $g = 0;
                $b = 255;

                $center = new Vector3($x, $y, $z);
                $particle = new DustParticle($center, $r, $g, $b, 1);

                for($yaw = 0;  $yaw <= 10; $yaw += (M_PI * 2) / 20){
                    $x = -sin($yaw) + $center->x;
                    $z = cos($yaw) + $center->z;
                    $y = $center->y;

                    $particle->setComponents($x, $y, $z);
                    $level->addParticle($particle);

                }

            }
            //orange
            if(in_array($name, $this->plugin->particle5)) {

                $r = 255;
                $g = 165;
                $b = 0;

                $center = new Vector3($x, $y, $z);
                $particle = new DustParticle($center, $r, $g, $b, 1);

                for($yaw = 0;  $yaw <= 10; $yaw += (M_PI * 2) / 20){
                    $x = -sin($yaw) + $center->x;
                    $z = cos($yaw) + $center->z;
                    $y = $center->y;

                    $particle->setComponents($x, $y, $z);
                    $level->addParticle($particle);

                }

            }

            if(in_array($name, $this->plugin->particle6)) {
                $x = $player->getX();
                $y = $player->getY();
                $z = $player->getZ();

                $center = new Vector3($x, $y, $z);

                for($yaw = 0;  $yaw <= 10; $yaw += (M_PI * 2) / 10){
                    $x = -sin($yaw) + $center->x;
                    $z = cos($yaw) + $center->z;
                    $y = $center->y;

                    $level->addParticle(new FlameParticle(new Vector3($x, $y + 1.5, $z)));

                }


            }

            if(in_array($name, $this->plugin->particle7)) {
                $x = $player->getX();
                $y = $player->getY();
                $z = $player->getZ();

                $center = new Vector3($x, $y, $z);

                for($yaw = 0;  $yaw <= 10; $yaw += (M_PI * 2) / 10){
                    $x = -sin($yaw) + $center->x;
                    $z = cos($yaw) + $center->z;
                    $y = $center->y;

                    $level->addParticle(new EnchantmentTableParticle(new Vector3($x, $y + 2, $z)));

                }


            }

            if(in_array($name, $this->plugin->particle8)) {
                $x = $player->getX();
                $y = $player->getY();
                $z = $player->getZ();

                $center = new Vector3($x, $y, $z);

                for($yaw = 0;  $yaw <= 10; $yaw += (M_PI * 2) / 10){
                    $x = -sin($yaw) + $center->x;
                    $z = cos($yaw) + $center->z;
                    $y = $center->y;

                    $level->addParticle(new PortalParticle(new Vector3($x, $y + 1.5, $z)));

                }


            }

        }


    }
}