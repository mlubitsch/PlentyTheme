<?php

namespace PlentyTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class PlentyThemeItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('PlentyTheme::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}