<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Pricing\Calculator;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
class Calculators
{
    const STANDARD = 'standard';
    const TIME_BASED = 'time_based';
    const VOLUME_BASED = 'volume_based';

    private function __construct()
    {
    }
}
