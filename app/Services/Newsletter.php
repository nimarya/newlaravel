<?php

namespace App\Services;

use PhpParser\Builder\Interface_;

interface Newsletter
{
    public function subscribe(string $email, string $list = null);
}
