<?php

namespace VaporAktion1\Aktion1;

use Plenty\Plugin\Templates\Twig;

/**
 * DataProvider (plugin.json » dataProviders), Aktion 1: sepet sayfasında renk seçimi.
 */
class A1BoxContainer
{
    public function call(Twig $twig, $arg = null): string
    {
        return $twig->render('VaporAktion1::Aktion1.Box', ['ort' => 'warenkorb', 'itemId' => 0]);
    }
}
