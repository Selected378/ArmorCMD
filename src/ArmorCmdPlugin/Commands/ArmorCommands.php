<?php

namespace ArmorCmdPlugin\Commands;

use ArmorCmdPlugin\forms\ArmorForm;
use ArmorCmdPlugin\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;
use pocketmine\player\Player;

class ArmorCommands extends Command {

    public function __construct() {
        parent::__construct("armorgive", "Permet de ce give une armure", "/armorgive");
        $this->setPermission("ArmorCommand.cmd");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if ($sender instanceof Player) {
            ArmorForm::open($sender);
        } else {
            $sender->sendMessage(Main::PREFIX . "Vous devez etre un joueur pour éxécuter cette commande");
        }
    }
}