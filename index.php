<?php

declare(strict_types=1);

final class DemoFile
{
    public function run()
    {
        return 5;

        // we never get here
        return 10;
    }
}
