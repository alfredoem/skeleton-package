<?php namespace Alfredoem\Skeletonpk\Console;

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
    protected $signature = 'skeletonpk:install {--force}';

    /**
     * The console command description
     *
     * @var string
     */
    protected $description = 'Install the Skeletonpk scaffolding into the application';

    public function handle()
    {
        $this->installMigrations();
    }

    protected function InstallMigrations()
    {
        /*here copy migrations*/
    }









}