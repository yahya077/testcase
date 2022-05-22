<?php

namespace Custom\Abstracts;

use Illuminate\Support\Facades\Http;

abstract class ProviderAbstract
{
    public string $root = 'http://www.mocky.io/';
    public string $version = 'v2';
    public string $endPoint = ''; //set your api provider endPoint
    public array $response = [];

    //your provider keys
    public array $resourceKeys = [
        'name' => 'id', // if $useKeyAsName is true, you can leave empty
        'hours' => 'sure',
        'difficulty' => 'zorluk'
    ];

    //if your provider task response use key as name
    public bool $useKeyAsName = false;

    //base keys of response
    public $keys = [
        "name",
        "hours",
        "difficulty",
    ];

    //prepares your resource by providers response
    public function prepareResource() : array
    {
        $response = [];
        foreach ($this->response as $key => $item) {
            $key = array_keys($item)[0];
            $response[] = array_combine(
                $this->keys,
                array(
                    $this->useKeyAsName ? $key : $item[$this->resourceKeys['name']],
                    $this->useKeyAsName ? $item[$key][$this->resourceKeys['hours']] : $item[$this->resourceKeys['hours']],
                    $this->useKeyAsName ? $item[$key][$this->resourceKeys['difficulty']] : $item[$this->resourceKeys['difficulty']],
                )
            );
        }
        return $response;
    }

    //brings full url
    public function prepareUrl() : string
    {
        return $this->root.$this->version.'/'.$this->endPoint;
    }

    public function response() : array
    {
        $body = Http::get($this->prepareUrl())->body();
        $this->response = json_decode($body,true);
        return $this->prepareResource();
    }
}
