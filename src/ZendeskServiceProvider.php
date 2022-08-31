<?php

namespace Astrogoat\Zendesk;

use Astrogoat\Zendesk\Settings\ZendeskSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ZendeskServiceProvider extends PackageServiceProvider
{
    public function registerApp(LegoManager $lego)
    {
        $lego->registerApp(function (App $app) {
            return $app
                ->name('zendesk')
                ->settings(ZendeskSettings::class)
                ->migrations([
                    __DIR__ . '/../database/migrations/settings',
                ])->includeFrontendViews(function (IncludeFrontendViews $views) {
                    return $views->addToEnd(['zendesk::script']);
                });
        });
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $this->registerApp($lego);
        });
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('zendesk')
            ->hasViews()
            ->hasConfigFile();
    }
}
