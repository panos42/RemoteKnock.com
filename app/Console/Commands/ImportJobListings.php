<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Listing;
use App\Models\Company;

class ImportJobListings extends Command
{
    protected $signature = 'import:scrape-remoteok';
    protected $description = 'Import job listings from the RSS feed';

    public function handle()
    {
        // Fetch data from the RSS feed
        $feedUrl = 'https://remoteok.com/rss';
        $response = Http::get($feedUrl);
        $feedXml = $response->body();

        // Parse XML
        $xml = simplexml_load_string($feedXml, 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $feedData = json_decode($json, true);

        // Check if $feedData is an array and contains items
        if (!is_array($feedData) || !isset($feedData['channel']['item'])) {
            $this->error('Failed to fetch job listings. Please check the RSS feed format.');
            return;
        }

        // Iterate through job listings and import into the database
        foreach ($feedData['channel']['item'] as $item) {
            // Check if a similar listing already exists
            $existingListing = Listing::where('title', (string)$item['title'])
                ->where('company', (string)$item['company'])
                ->where('location', is_array($item['location']) ? implode(', ', $item['location']) : (string)$item['location'])
                ->first();

            if (!$existingListing) {
                // If the listing does not exist, create a new one
                $description = isset($item['description']) ? (string) $item['description'] : '';

                // Generate a unique filename for the logo
                $logoFileName = $this->generateUniqueLogoFileName();
                $logoPath = storage_path('app/public/logos/') . $logoFileName; // Define the storage path

                // Download the logo and save it to the specified path
                $logoUrl = isset($item['image']) ? (string) $item['image'] : null;
                if ($logoUrl) {
                    $logoContents = Http::get($logoUrl)->body();
                    file_put_contents($logoPath, $logoContents);
                }

                // Create or update the company record with the logo
                $company = Company::updateOrCreate(
                    ['name' => (string)$item['company']],
                    ['logo' => 'logos/' . $logoFileName, 'email' => 'test'] // Set a default email value
                );

                Listing::create([
                    'title' => (string) $item['title'],
                    'company' => (string) $item['company'],
                    'user_id' => 1, // Set the appropriate user ID if needed
                    'tags' => is_array($item['tags']) ? implode(', ', $item['tags']) : (string) $item['tags'],
                    'location' => is_array($item['location']) ? implode(', ', $item['location']) : (string) $item['location'],
                    'email' => 'Scrapped...',
                    'website' => (string) $item['link'],
                    'min_salary' => isset($item['min_salary']) ? (string) $item['min_salary'] : 'Not specified',
                    'max_salary' => isset($item['max_salary']) ? (string) $item['max_salary'] : 'Not specified',
                    'listing_views' => 0,
                    'applications_made' => 0,
                    'description' => $description,
                    'logo' => 'logos/' . $logoFileName, // Save the filename in the database
                ]);

                $this->info('Listing imported: ' . $item['title']);
            } else {
                $this->info('Listing already exists: ' . $item['title']);
            }
        }

        $this->info('Job listings imported successfully.');
    }

    /**
     * Generate a unique filename for the logo.
     *
     * @return string
     */
    private function generateUniqueLogoFileName()
    {
        $timestamp = time();
        $randomString = bin2hex(random_bytes(8)); // Generate a random string
        return "logo_" . $timestamp . "_" . $randomString . ".jpg";
    }
}
