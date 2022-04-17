<?php

namespace Sim1dev\Larapicsum;

// use Illuminate\Support\Facades\Log;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class Larapicsum
{
    public function __construct(int $width = 300, int $height = 200, int $grayscale = 0, int $blur = 0, string $format = "jpeg", string $seed = "") {
        $this->width = $width;
        $this->height = $height;
        $this->grayscale = $grayscale;
        $this->blur = $blur;
        $this->format = $format;
        $this->seed = $seed;
        $this->client = new Client([
            'timeout'  => 2,
        ]);
        $this->url = "";
        $this->setUrl();
    }

    public function base64()
    {
        $this->setUrl();
        try {
            $response = $this->client->request('GET', $this->url, ['stream' => true]);
            $base64 = base64_encode($response->getBody());
            return "data:image/$this->format;base64,{$base64}";

        } catch (GuzzleException $e) {

            return response()->json([
                'error' => $e->getMessage()
            ], 500);

        }

    }

    public function url()
    {
        $this->setUrl();
        return $this->url;
    }



    private function setUrl() {
        $seed = $this->seed ? "/seed/".$this->seed : "";
        $url = "{$this->width}/{$this->height}?" . http_build_query([
            "grayscale" => $this->grayscale,
            "blur" => $this->blur
        ]);
        $this->url = "https://picsum.photos$seed/$url.$this->format";
    }

    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function setGrayscale($grayscale)
    {
        $this->grayscale = $grayscale;
        return $this;
    }

    public function setBlur($blur)
    {
        $this->blur = $blur;
        return $this;
    }

    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    public function setSeed($seed)
    {
        $this->seed = $seed;
        return $this;
    }
}