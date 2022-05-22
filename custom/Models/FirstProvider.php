<?php

namespace Custom\Models;

use Custom\Abstracts\ProviderAbstract;
use Custom\Interface\ProviderInterface;
use Illuminate\Support\Facades\Http;

class FirstProvider extends ProviderAbstract implements ProviderInterface
{
    public string $endPoint = '5d47f235330000623fa3ebf7';

    public array $resourceKeys = [
        'hours' => 'estimated_duration',
        'difficulty' => 'level'
    ];

    public bool $useKeyAsName = true;

}
