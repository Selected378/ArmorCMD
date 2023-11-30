<?php

namespace ArmorCmdPlugin;

use ArmorCmdPlugin\Commands\ArmorCommands;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase{
    public static $instance;
    const PREFIX = "§9Serveur §f§r§l>> ";

    public function onEnable(): void {
        self::$instance = $this;
        $this->getLogger()->alert(Main::PREFIX . "Le plugin a bien été chargée");
        $this->getServer()->getCommandMap()->register("armorgive", new ArmorCommands());
    }

    public static function getInstance() {
        return self::$instance;
    }

    public static function ConfigName(string $fileName) {
        return new Config(Main::getInstance()->getDataFolder() . $fileName . "yml" . Config::YAML);
    }
}
