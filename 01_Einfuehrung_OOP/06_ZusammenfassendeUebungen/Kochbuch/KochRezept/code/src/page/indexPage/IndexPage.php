<?php

namespace KochRezept;

class IndexPage implements Page
{
    private $indexProjection;

    public function __construct(indexProjection $indexProjection)
    {
        $this->indexProjection = $indexProjection;
    }

    public function run()
    {
        return $this->indexProjection->createHtml();
    }
}