<?php

namespace PlentyTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class PlentyThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('PlentyTheme::Stylesheet');
    }
}