<?php

namespace VaporAktion1\Providers;

use Plenty\Modules\Basket\Events\Basket\AfterBasketChanged;
use Plenty\Modules\Frontend\Events\ValidateCheckoutEvent;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use VaporAktion1\Aktion1\A1GeschenkService;
use VaporAktion1\Aktion1\A1KasseListener;
use VaporAktion1\Aktion1\A1KatalogService;
use VaporAktion1\Aktion1\A1WarenkorbListener;

/**
 * Aktion 1 (3 ELFA Pods → 1 ELFA Basisgerät gratis): servisler, REST rotaları, sepet ve kasa dinleyicileri.
 */
class VaporAktion1ServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->singleton(A1KatalogService::class);
        $this->getApplication()->singleton(A1GeschenkService::class);
        $this->getApplication()->register(VaporAktion1RouteServiceProvider::class);
    }

    public function boot(Dispatcher $dispatcher)
    {
        $dispatcher->listen(AfterBasketChanged::class, A1WarenkorbListener::class);
        $dispatcher->listen(ValidateCheckoutEvent::class, A1KasseListener::class);
    }
}
