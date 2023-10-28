<?php

namespace Thunk\Bugg;

use Illuminate\Support\Str;

class Bugg
{
    public function __construct()
    {
    }

    public static function trace(int $lines = 4): void
    {
        dump(
            array_map(
                fn ($l) => Str::after(
                    $l['file'] . ':' . $l['line'],
                    base_path()
                ),
                debug_backtrace(0, $lines)
            )
        );
    }
}
