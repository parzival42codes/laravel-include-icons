<?php

namespace parzival42codes\laravelIncludeIcons;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelIncludeIconsServiceProvider extends PackageServiceProvider
{
    public const PACKAGE_NAME = 'laravel-include-icons';

    public const PACKAGE_NAME_SHORT = 'include-icons';

    public function configurePackage(Package $package): void
    {
        $package->name(self::PACKAGE_NAME);
    }

    public function registeringPackage(): void
    {
    }
}
