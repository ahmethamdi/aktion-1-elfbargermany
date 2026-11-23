<?php

namespace VaporAktion1\Aktion1;

use Plenty\Plugin\Templates\Twig;

/**
 * DataProvider (plugin.json » dataProviders), Aktion 1: sepet önizlemesinde kompakt seçim.
 */
class A1BoxVorschauContainer
{
    public function call(Twig $twig, $arg = null): string
    {
        return $twig->render('VaporAktion1::Aktion1.Box', ['ort' => 'vorschau', 'itemId' => 0]);
    }
}
