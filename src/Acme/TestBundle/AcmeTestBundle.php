<?php

namespace Acme\TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeTestBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
