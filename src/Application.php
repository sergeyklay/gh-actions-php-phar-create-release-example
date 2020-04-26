<?php

/*
 * This file is part of the PPCRE.
 *
 * (c) Serghei Iakovlev <egrep@protonmail.ch>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Ppcre;

class Application
{
    private $argv = [];
    private $argc = 0;

    public function __construct(array $argv = [])
    {
        $this->argv = $argv;
        $this->argc = count($argv);
    }

    public function say()
    {
        printf('There were %d arguments passed to PHP:' . PHP_EOL, $this->argc);
        print_r($this->argv);
    }
}
