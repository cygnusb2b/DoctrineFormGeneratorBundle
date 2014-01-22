<?php

namespace Cygnus\DoctrineFormGeneratorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DoctrineFormGeneratorBundle extends Bundle
{

    public function getParent()
    {
        return 'SymfonyComponentForm';
    }

}
