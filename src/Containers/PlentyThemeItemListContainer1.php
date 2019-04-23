<?php

namespace PlentyTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class PlentyThemeItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('PlentyTheme::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}