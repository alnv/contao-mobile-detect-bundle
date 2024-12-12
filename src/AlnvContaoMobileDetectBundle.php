<?php

namespace Alnv\ContaoMobileDetectBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AlnvContaoMobileDetectBundle extends Bundle
{

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}