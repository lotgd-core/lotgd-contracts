<?php

/**
 * This file is part of Legend of the Green Dragon package.
 *
 * @see https://github.com/idmarinas/lotgd-contracts
 *
 * @license https://github.com/idmarinas/lotgd-contracts/blob/master/LICENSE.txt
 * @author IDMarinas
 *
 * @since 0.1.0
 */

namespace Lotgd\Bundle\Contract;

/**
 * If you want show your Bundle in bundles list of LoTGD Core, implement this interface.
 *
 *  <?php class NameOfYourBundle extends \Symfony\Component\HttpKernel\Bundle\Bundle implement \Lotgd\Bundle\Contract\LotgdBundleInterface {}
 *
 * With this interface show your Bundle in route /about/bundles
 */
interface LotgdBundleInterface
{
    /**
     * Display name
     */
    public function getLotgdName(): string;

    /**
     * Version for display.
     *
     * @return string
     */
    public function getLotgdVersion(): string;

    /**
     * Name of icon to show in list.
     */
    public function getLotgdIcon(): string;

    /**
     * Description for Lotgd Bundle.
     */
    public function getLotgdDescription(): string;

    /**
     * Url for download LoTGD Bundle.
     */
    public function getLotgdDownload(): string;
}
