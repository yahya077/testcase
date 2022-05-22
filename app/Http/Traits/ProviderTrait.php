<?php

namespace App\Http\Traits;

use Custom\Interface\ProviderInterface;

trait ProviderTrait
{
    private ProviderInterface $provider;

    public function __construct(ProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function index()
    {
        dd($this->provider->response());
    }
}
