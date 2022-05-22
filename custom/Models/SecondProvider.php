<?php

namespace Custom\Models;

use Custom\Abstracts\ProviderAbstract;
use Custom\Interface\ProviderInterface;
use Illuminate\Support\Facades\Http;

class SecondProvider extends ProviderAbstract implements ProviderInterface
{
    public string $endPoint = '5d47f24c330000623fa3ebfa';

    public array $resourceKeys = [
        'name' => 'id',
        'hours' => 'sure',
        'difficulty' => 'zorluk'
    ];

}
