<?php

declare(strict_types=1);

namespace Framework;

class Router
{
    private array $router = [];

    public function add(string $method, string $path)
    {
        $path = $this->_normalizePath($path);

        $this->routes[] = [
            'path' => $path,
            'method' => strtoupper($method)
        ];
    }

    private function _normalizePath($path): string
    {
        $path = trim($path, '/');
        $path = "/$path/";
        return $path;
    }
}
