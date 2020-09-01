<?php

declare(strict_types=1);

namespace Sylius\PayPalPlugin\Client;

interface PayPalClientInterface
{
    public function get(string $url, string $token): array;

    public function post(string $url, string $token, array $data = null): array;

    public function patch(string $url, string $token, array $data = null): array;
}