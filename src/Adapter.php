<?php

namespace Clarkeash\Vfs;

use League\Flysystem\Adapter\Local;

class Adapter extends Local
{
    public function ensureDirectory($root)
    {
        return $root;
    }
}
