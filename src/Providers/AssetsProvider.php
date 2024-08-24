<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Developer Tools.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Phalcon\DevTools\Providers;

use Phalcon\Assets\Manager as AssetsManager;
use Phalcon\Di\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Html\Escaper;
use Phalcon\Html\TagFactory;



class AssetsProvider implements ServiceProviderInterface
{
    /**
     * @var string
     */
    protected $providerName = 'assets';

    /**
     * Registers a service provider.
     *
     * @param DiInterface $di
     */
    public function register(DiInterface $di): void
    {
        $di->setShared($this->providerName, function () {
            $escaper = new Escaper();
            $tagFactory = new TagFactory($escaper);
            return new AssetsManager($tagFactory);
        });
    }
}
