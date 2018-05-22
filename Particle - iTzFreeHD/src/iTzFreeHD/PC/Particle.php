<?php
namespace iTzFreeHD\PC;



use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use muqsit\invmenu\InvMenuHandler;
use pocketmine\Server;
use pocketmine\utils\Config;

class Particle extends PluginBase {

    public $particle1 = [];
    public $particle2 = [];
    public $particle3 = [];
    public $particle4 = [];
    public $particle5 = [];
    public $particle6 = [];
    public $particle7 = [];
    public $particle8 = [];
    public $particle9 = [];

    public $Win10 = [];

    public $Task;

    public function onEnable()
    {

        @mkdir($this->getDataFolder());
        $this->Task = new ParticleTask($this);
        $list = new Listeners($this);
        $cfg = new Config($this->getDataFolder()."config.yml", Config::YAML);

        if (empty($cfg->get('WinGUI'))) {
            $cfg->set('HelpDE', 'Bevor du WinGUI auf true stzt musst du einiege extra Plugins installieren');
            $cfg->set('HelpEN', 'If you will set WinHUI to true you musst be install some extra Plugins! go on github.com/Hyroxing/');
            $cfg->set('WinGUI', false);
            $cfg->save();
            $cfg->reload();
        }


        if ($cfg->get('WinGUI') === true) {
            $dev = $this->getServer()->getPluginManager()->getPlugin('DEVirion');
            if ($dev->isEnabled()) {
                if (!InvMenuHandler::isRegistered()) {
                    InvMenuHandler::register($this);
                }
            }
        }
        $this->getLogger()->info("Plugin wurde erfolgreich geladen");

    }
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool
    {
        if ($command->getName() === 'freeparticle') {
            if ($sender instanceof Player){
                if ($sender->hasPermission('open.particle')) {
                    $name = $sender->getName();
                    $cfg = new Config($this->getDataFolder()."config.yml", Config::YAML);
                    if ($cfg->get('WinGUI') === false) {
                            $pmenu = new Particle1();
                            $pmenu->getParticle($sender);
                    } else {
                        if (in_array($name, $this->Win10)) {
                            $menu = new openMenu($this);
                            $menu->openMenu($sender);
                        } else {
                            $pmenu = new Particle1();
                            $pmenu->getParticle($sender);
                        }

                    }

                }

            }
        }

        return false;
    }

}