<?php

/*
 * This file is part of Laravel Instagram.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vinkla\Tests\Instagram;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

/**
 * This is the service provider test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testInstagramFactoryIsInjectable()
    {
        $this->assertIsInjectable('Vinkla\Instagram\InstagramFactory');
    }

    public function testInstagramManagerIsInjectable()
    {
        $this->assertIsInjectable('Vinkla\Instagram\InstagramManager');
    }
}
