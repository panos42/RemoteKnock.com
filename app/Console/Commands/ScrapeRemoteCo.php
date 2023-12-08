<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\RemoteCoScrapper;

class ScrapeRemoteCo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:scrape-remote-co';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        RemoteCoScrapper::scrapeAndSave();

        $this->info('Scraping and saving remote jobs completed.');
    }
}
