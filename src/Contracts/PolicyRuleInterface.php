<?php

declare(strict_types=1);

namespace SmitBackend\AuthMatrix\Contracts;

/**
 * Interface PolicyRuleInterface
 *
 * @package SmitBackend\AuthMatrix
 */
interface PolicyRuleInterface
{
    public function execute(array $payload = []): mixed;
}
