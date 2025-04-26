<?php

declare(strict_types=1);

namespace SmitBackend\AuthMatrix;

use SmitBackend\AuthMatrix\Contracts\PolicyRuleInterface;

/**
 * Class PolicyEngine
 *
 * @package SmitBackend\AuthMatrix
 */
class PolicyEngine implements PolicyRuleInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
