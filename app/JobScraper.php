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

        $crawler->filterXPath('//li[contains(@class, "feature")]')->each(function ($node) use (&$count, $client) {
            if ($count >= 5) {
                return false; // Break the loop if the count reaches 5
            }

            $title = $node->filterXPath('.//span[contains(@class, "title")]')->text();
            $company = $node->filterXPath('.//span[contains(@class, "company")]')->text();
            $location = $node->filterXPath('.//span[contains(@class, "region company")]')->text();
            // Extract the job listing link
            $linkNode = $node->filterXPath('.//a[contains(@href, "/remote-jobs/")]');
            if ($linkNode->count() > 0) {
                $link = $linkNode->attr('href'); // Get the job listing link
                // You may need to prepend the base URL to the relative link
                $baseURL = 'https://weworkremotely.com'; // Replace with the actual base URL
                $link = $baseURL . $link;
            } else {
                echo "Skipped (no link found): $title - $company\n";
                return; // Skip this iteration and move to the next listing
            }

            // Check if the entry already exists in the database
            $existingEntry = Listing::where('title', $title)->where('company', $company)->first();

            if (!$existingEntry) {
                // Entry doesn't exist, add it to the database
                $description = self::scrapeJobDescription($client, $link); // Call the description scraping method
                Listing::create([
                    'title' => $title,
                    'company' => $company,
                    'user_id' => 1, // Set the appropriate user ID if needed
                    'tags' => 'Scrapped...',
                    'location' => $location,
                    'email' => 'Scrapped...',
                    'website' => 'Scrapped...',
                    'min_salary' => '~',
                    'max_salary' => '~',
                    'listing_views' => 0,
                    'applications_made' => 'Scrapped...',
                    'description' => $description, // Set the scraped description
                ]);
                echo "Added: $title - $company\n";
            } else {
                echo "Skipped (already exists): $title - $company\n";
            }

            $count++;
        });

        echo "Scraping and saving completed.";
    }

    public static function scrapeJobDescription($client, $link)
    {
        // Fetch the job listing page
        $jobCrawler = $client->request('GET', $link);

        // Extract and return the HTML content of the job description
        $descriptionHtml = $jobCrawler->filterXPath('//div[@class="listing-container"]')->html();

        return $descriptionHtml;
    }
}
