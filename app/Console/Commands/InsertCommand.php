<?php

namespace App\Console\Commands;

use Database\Seeders\TaskSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InsertCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tasks:insert {--f|force : Force to database refresh}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert tasks from api';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Database check.');
        try {
            DB::connection()->getPdo();
        } catch (\PDOException $PDOException) {
            $this->error($PDOException->getMessage());

            return false;
        }
        $this->info('Database connected successfully');

        if ($this->option('force')) {
            \Artisan::call('migrate:fresh', [
                '--force' => 'true'
            ]);
        }

        $provider = $this->anticipate('Which provider you want to insert?', ['first','second']);

        (new TaskSeeder())->run($provider);

        $this->info($provider.' provider tasks inserted');
    }
}
