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
        /*$this->installMigrations();

        /*here copy migrations*/
       /* $this->comment('**********************************************');
        $this->comment('**************SkeletonPackage*****************');
        $this->comment('**********************************************');
        $this->comment('');
        if ($this->option('force') || $this->confirm('Would you like to run your database migrations?', 'yes')) {
            (new Process('php artisan migrate', base_path()))->setTimeout(null)->run();
        }*/
    }

    protected function InstallMigrations()
    {
        /*copy(
            SKELETONPK_PATH . '/resources/stubs/database/migrations/2015_09_25_create_secusers_table.php',
            database_path('migrations/2015_09_25_create_secusers_table.php')
        );*/
    }









}