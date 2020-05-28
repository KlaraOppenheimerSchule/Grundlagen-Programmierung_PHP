<?php

namespace KochRezept;

class SpecificRecipePage implements Page
{
    private $projection;

    public function __construct(SpecificRecipeProjection $projection)
    {
        $this->projection = $projection;
    }

    public function run() : string
    {
        return $this->projection->getHtml();
    }
}