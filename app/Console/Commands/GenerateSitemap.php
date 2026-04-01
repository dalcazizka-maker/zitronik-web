<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Automaticky vygeneruje sitemap.xml pro cely web';

    public function handle()
    {
        // Tento balíček sám projde celý tvůj web a najde všechny odkazy
        SitemapGenerator::create('https://zitronik.cz')
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemapa byla úspěšně vygenerována!');
    }
}