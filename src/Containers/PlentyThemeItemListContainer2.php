<?php

namespace PlentyTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class PlentyThemeItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('PlentyTheme::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}