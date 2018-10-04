<?php

namespace Roketin\Immune\Commands;

use Illuminate\Console\Command;

class RoketinImmuneKey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'immune-key:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate key for Roketin Immune';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $charactersLength; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $path = base_path('.env');
        if (file_exists($path)) {
            file_put_contents(
                $path,
                str_replace(env('IMMUNE_KEY'), $randomString, file_get_contents($path))
            );
        }
        $this->info('Generated: '. $randomString);
    }
}
