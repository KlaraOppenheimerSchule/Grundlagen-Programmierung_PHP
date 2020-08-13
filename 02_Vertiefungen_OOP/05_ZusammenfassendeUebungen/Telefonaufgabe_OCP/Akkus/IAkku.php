<?php

namespace TelefonaufgabeOCP\Akkus;

interface IAkku
{
    public function getLadezustand() : int;
    public function laden() : bool;
}