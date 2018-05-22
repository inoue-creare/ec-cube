<?php

namespace Eccube\ServiceProvider;

use Eccube\Application;

/**
 * Interface that all Silex service providers must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @see https://github.com/silexphp/Silex/blob/1.3/src/Silex/ServiceProviderInterface.php
 */
interface ServiceProviderInterface
{
    /**
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     */
    public function register(Application $app);

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(Application $app);
}