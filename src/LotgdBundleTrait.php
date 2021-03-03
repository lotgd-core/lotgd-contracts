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

trait LotgdBundleTrait
{
    /**
     * @inheritDoc
     */
    public function getLotgdName(): string
    {
        //-- Default is a short name of bundle.
        return $this->getName();
    }

    /**
     * @inheritDoc
     */
    public function getLotgdVersion(): string
    {
        return '0.0.0';
    }

    /**
     * @inheritDoc
     */
    public function getLotgdIcon(): ?string
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public function getLotgdDescription(): string
    {
        return 'A LoTGD Bundle';
    }

    /**
     * @inheritDoc
     */
    public function getLotgdDownload(): ?string
    {
        return null;
    }
}
