<?php

namespace KochRezept;

class IndexProjection
{
    public function __construct()
    {
    }

    public function createHtml()
    {
        return file_get_contents(__DIR__ . '/index.html');
    }
}