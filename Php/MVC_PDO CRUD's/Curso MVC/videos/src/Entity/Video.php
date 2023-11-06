<?php

declare(strict_types=1);

namespace Alura\Mvc\Entity;

class Video
{
    //readonly significa uma constante -> php 8.1 (segurança)
    public readonly int $id;
    public readonly string $url;

    public function __construct(
        string $url,
        public readonly string $title,
    ) {
        $this->setUrl($url);
    }

    private function setUrl(string $url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            throw new \InvalidArgumentException();
        }

        $this->url = $url;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
