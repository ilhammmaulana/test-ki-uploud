<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:command-custom {count=10}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Custom artisan command';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        try {
            $count = $this->argument('count');
            User::factory()->count($count)->create();
            $this->info('Success generate user');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
