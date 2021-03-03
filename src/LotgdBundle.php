<?php

/**
 * This file is part of Legend of the Green Dragon package.
 *
 * @see https://github.com/idmarinas/lotgd-contracts
 *
 * @license https://github.com/idmarinas/lotgd-contracts/blob/master/LICENSE.txt
 * @author IDMarinas
 *
 * @since 0.2.0
 */

namespace Lotgd\Bundle\Contract;

use Symfony\Component\HttpKernel\Bundle\Bundle;

abstract class LotgdBundle extends Bundle implements LotgdBundleInterface
{
    use LotgdBundleTrait;
}
