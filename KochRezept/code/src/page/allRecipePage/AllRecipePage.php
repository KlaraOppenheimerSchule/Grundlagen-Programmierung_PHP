<?php

namespace KochRezept;

class AllRecipePage implements Page
{
    private $projection;

    public function __construct(AllRecipeProjection $projection)
    {
        $this->projection = $projection;
    }

    public function run()
    {
        return $this->projection->getHtml();
    }
}