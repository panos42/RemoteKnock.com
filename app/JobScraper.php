<?php

namespace App;

use Goutte\Client;
use App\Models\Listing;

class JobScraper
{
    public static function scrapeAndSave()
    {
        // Create a Goutte client
        $client = new Client();

        // Define the We Work Remotely URL
        $url = 'https://weworkremotely.com/';

        // Fetch the We Work Remotely page
        $crawler = $client->request('GET', $url);

        echo "Scraping and saving job details:\n";
        $count = 0; // To limit the number of scraped listings

        $crawler->filterXPath('//li[contains(@class, "feature")]')->each(function ($node) use (&$count) {
            if ($count >= 5) {
                return false; // Break the loop if the count reaches 5
            }

            $title = $node->filterXPath('.//span[contains(@class, "title")]')->text();
            $company = $node->filterXPath('.//span[contains(@class, "company")]')->text();

            // Check if the entry already exists in the database
            $existingEntry = Listing::where('title', $title)->where('company', $company)->first();

            if (!$existingEntry) {
                // Entry doesn't exist, add it to the database
                Listing::create([
                    'title' => $title,
                    'company' => $company,
                    'user_id' => 1, // Set the appropriate user ID if needed
                    'tags' => 'Scrapped...',
                    'location' => 'Scrapped...',
                    'email' => 'Scrapped...',
                    'website' => 'Scrapped...',
                    'min_salary' => 'Scrapped...',
                    'max_salary' => 'Scrapped...',
                    'listing_views' => 'Scrapped...',
                    'applications_made' => 'Scrapped...',
                    'description' => 'Scrapped...',
                ]);
                echo "Added: $title - $company\n";
            } else {
                echo "Skipped (already exists): $title - $company\n";
            }

            $count++;
        });

        echo "Scraping and saving completed.";
    }
}
