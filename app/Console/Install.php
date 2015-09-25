<?php namespace Alfredoem\SkeletonPackage\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Process\Process;

class Install extends Command
{
    /**
    * The name and signature of the console command
    *
    * @var string
    */
    protected $signature = 'SkeletonPackage:install {--force}';

    /**
     * The console command description
     *
     * @var string
     */
    protected $description = 'Install the SkeletonPackage scaffolding into the application';

    public function handle()
    {
        $this->installMigrations();
    }

    protected function InstallMigrations()
    {
        /*here copy migrations*/
    }









}