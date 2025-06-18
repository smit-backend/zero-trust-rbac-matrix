<?php

return [
    'enabled' => env('ZERO_TRUST_RBAC_MATRIX_ENABLED', true),
    'timeout' => env('ZERO_TRUST_RBAC_MATRIX_TIMEOUT', 30),
    'log_channel' => env('ZERO_TRUST_RBAC_MATRIX_LOG', 'stack'),
];
