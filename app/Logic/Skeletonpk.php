<?php namespace Alfredoem\Skeletonpk;

class Skeletonpk
{
    public static function structure()
    {
        return PHP_EOL .
            "alfredoem/
                app/
                    Config
                    Console
                    Http
                    Logic
                resources/
                    stubs/
                        database/
                        migrations
                    views" . PHP_EOL;
    }
}