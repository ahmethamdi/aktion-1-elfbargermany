<?php

namespace VaporAktion1\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\ApiRouter;
use Plenty\Plugin\Routing\Router;

/** REST rotaları; yazan rotalar 'csrf' middleware'i ile (plentyShop LTS #csrf-token → X-CSRF-TOKEN). */
class VaporAktion1RouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router, ApiRouter $api)
    {
        $api->version(['v1'], ['namespace' => 'VaporAktion1\Aktion1'], function (ApiRouter $api) {
            $api->get('vapor-aktion1/geschenk', 'A1Controller@status');
        });

        $api->version(['v1'], ['namespace' => 'VaporAktion1\Aktion1', 'middleware' => ['csrf']], function (ApiRouter $api) {
            $api->post('vapor-aktion1/geschenk', 'A1Controller@waehlen');
            $api->delete('vapor-aktion1/geschenk', 'A1Controller@entfernen');
        });
    }
}
