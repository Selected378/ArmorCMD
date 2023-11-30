# ArmorCmdPLugin
Ce plugin sert a ouvrir un menu qui permet de se give une armure complete 

Pour modifier le code est mettre un items customies veuillez mettre comme ceci : 

$item = CustomiesItemFactory::getInstance()->get("Nom de L'item", Quantité);

pour l'armure en complets ses :

$item = CustomiesItemFactory::getInstance()->get("Nom de L'item", Quantité);

$item2 = CustomiesItemFactory::getInstance()->get("Nom de L'item", Quantité);

$item3 = CustomiesItemFactory::getInstance()->get("Nom de L'item", Quantité);

$item4 = CustomiesItemFactory::getInstance()->get("Nom de L'item", Quantité);

pour rajouter un nouveaux bouton veuillez faire rajouter :

case 4:
                   $player->sendMessage(Main::PREFIX . "Vous venez de vous donnée une armure en <npm de l'armure>");
                   ArmorForm::<nom de la fonction exemple (ArmorForm::giveLeatherArmor($player))>($player);
                   break;

 il faut aussi ajouter le 
 $form->addButton("<nom du bouton>")

 est la fonction éxemple :

 private static function giveGoldenArmor(Player $player): void {
        $item = VanillaItems::GOLDEN_HELMET();
        $item2 = VanillaItems::GOLDEN_CHESTPLATE();
        $item3 = VanillaItems::GOLDEN_LEGGINGS();
        $item4 = VanillaItems::GOLDEN_BOOTS();
        $player->getInventory()->addItem($item, $item2, $item3, $item4);
    }


