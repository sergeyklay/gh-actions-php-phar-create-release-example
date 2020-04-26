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
    const GIT_VERSION = '$Id$';

    private $argv = [];
    private $argc = 0;

    public function __construct(array $argv = [])
    {
        $this->argv = $argv;
        $this->argc = \count($argv);
    }

    public function version()
    {
        echo self::GIT_VERSION, PHP_EOL;
    }

    public function say()
    {
        if (isset($this->argv[1]) && $this->argv[1] === '--version') {
            $this->version();
            return;
        }

        printf('There were %d arguments passed to PHP:' . PHP_EOL, $this->argc);
        print_r($this->argv);
    }
}
