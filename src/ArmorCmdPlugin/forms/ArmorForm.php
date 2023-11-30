<?php

namespace ArmorCmdPlugin\forms;

use ArmorCmdPlugin\Main;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\item\Armor;
use pocketmine\item\VanillaItems;
use pocketmine\player\Player;

class ArmorForm extends SimpleForm {

    public static function open (Player $player): void {
        $form = new SimpleForm(function (Player $player, $data){
           if ($data === null) {
               $player->sendMessage(Main::PREFIX . "Vous n'avez choisit aucune action");
               return;
           }

           switch ($data) {
               case 0:
                   $player->sendMessage(Main::PREFIX . "Vous venez de vous donnée une armure en diamant");
                   ArmorForm::giveDiamondArmor($player);
                   break;
               case 1:
                   $player->sendMessage(Main::PREFIX . "Vous venez de vous donnée une armure en fer");
                   ArmorForm::giveIronArmor($player);
                   break;
               case 2:
                   $player->sendMessage(Main::PREFIX . "Vous venez de vous donnée une armure en or");
                   ArmorForm::giveGoldenArmor($player);
                   break;
               case 3:
                   $player->sendMessage(Main::PREFIX . "Vous venez de vous donnée une armure en Cuire");
                   ArmorForm::giveLeatherArmor($player);
                   break;
           }
        });

        $form->setTitle("ArmorCommande");
        $form->setContent("Ce menu sert a vous give des armure");
        $form->addButton("Armure en diamant");
        $form->addButton("Armure en fer");
        $form->addButton("Armure en or");
        $form->addButton("Armure en Cuire");
        $form->sendToPlayer($player);
    }

    private static function giveDiamondArmor(Player $player): void {
        $item = VanillaItems::DIAMOND_HELMET();
        $item2 = VanillaItems::DIAMOND_CHESTPLATE();
        $item3 = VanillaItems::DIAMOND_LEGGINGS();
        $item4 = VanillaItems::DIAMOND_BOOTS();
        $player->getInventory()->addItem($item, $item2, $item3, $item4);
    }

    private static function giveIronArmor(Player $player): void {
        $item = VanillaItems::IRON_HELMET();
        $item2 = VanillaItems::IRON_CHESTPLATE();
        $item3 = VanillaItems::IRON_LEGGINGS();
        $item4 = VanillaItems::IRON_BOOTS();
        $player->getInventory()->addItem($item, $item2, $item3, $item4);
    }

    private static function giveLeatherArmor(Player $player): void {
        $item = VanillaItems::LEATHER_CAP();
        $item2 = VanillaItems::LEATHER_TUNIC();
        $item3 = VanillaItems::LEATHER_PANTS();
        $item4 = VanillaItems::LEATHER_BOOTS();
        $player->getInventory()->addItem($item, $item2, $item3, $item4);
    }

    private static function giveGoldenArmor(Player $player): void {
        $item = VanillaItems::GOLDEN_HELMET();
        $item2 = VanillaItems::GOLDEN_CHESTPLATE();
        $item3 = VanillaItems::GOLDEN_LEGGINGS();
        $item4 = VanillaItems::GOLDEN_BOOTS();
        $player->getInventory()->addItem($item, $item2, $item3, $item4);
    }
}