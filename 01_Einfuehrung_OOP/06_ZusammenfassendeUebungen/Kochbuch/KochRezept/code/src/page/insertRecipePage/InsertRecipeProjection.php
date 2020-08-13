<?php

namespace KochRezept;

class InsertRecipeProjection
{
    public function getHtml()
    {
        return file_get_contents(__DIR__ . '/InsertRecipe.html');
    }
}