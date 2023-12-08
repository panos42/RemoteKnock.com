<?php

namespace App;

use Goutte\Client;
use App\Models\Listing;
use Illuminate\Support\Facades\Storage;

class RemoteCoScrapper
{
    public static function scrapeAndSave()
    {
        // Create a Goutte client
        $client = new Client();

        // Define the Working Nomads URL
        $url = 'https://www.workingnomads.com/jobs';

        // Fetch the Working Nomads page
        $crawler = $client->request('GET', $url);

        echo "Scraping and saving job details:\n";
        $count = 0; // To limit the number of scraped listings
        echo "Entering the loop\n";

        $crawler->filterXPath('//div[contains(@class, "job-wrapper")]//div[contains(@class, "job-cols")]/div[@class="job-col job-left-col"]/h4/a')->each(function ($node) use (&$count, $client) {

        if ($count >= 20) {
                return false; // Break the loop if the count reaches 20
            }

            echo "mphka poutana";
            $title = $node->filterXPath('.//h2')->text();
            echo "Title: $title\n"; // Debug message

            $company = $node->filterXPath('.//h3')->text();
            echo "Company: $company\n"; // Debug message

            $location = $node->filterXPath('.//span[@class="location"]')->text();
            echo "Location: $location\n"; // Debug message

            $link = $node->attr('href');
            echo "Job Listing Link: $link\n"; // Debug message

            // Check if the entry already exists in the database
            $existingEntry = Listing::where('title', $title)->where('company', $company)->first();
            echo "Checking for an existing entry\n"; // Debug message

            if (!$existingEntry) {
                // Entry doesn't exist, add it to the database
                echo "Adding a new entry\n"; // Debug message

                $jobData = self::scrapeJobDescription($client, $link); // Call the description scraping method

                // Create the Listing model and save it to the database
                Listing::create([
                    'title' => $title,
                    'company' => $company,
                    'user_id' => 1, // Set the appropriate user ID if needed
                    'tags' => $jobData['tags'],
                    'location' => $location,
                    'email' => 'Scrapped...',
                    'website' => $jobData['website'],
                    'min_salary' => '',
                    'max_salary' => '',
                    'listing_views' => 0,
                    'applications_made' => 'Scrapped...',
                    'description' => $jobData['description'],
                    'logo' => null, // Working Nomads does not seem to have logos in the listings
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
        echo "Fetching job listing page: $link\n"; // Debug message

        $jobCrawler = $client->request('GET', $link);
        echo "Fetched job listing page successfully\n"; // Debug message

        // Extract the HTML content of the job description
        $descriptionHtml = $jobCrawler->filterXPath('//div[@class="job-description"]')->html();
        echo "Extracted job description HTML\n"; // Debug message

        // Extract all tags from the job listing page
        $tags = $jobCrawler->filterXPath('//div[@class="tags"]//span')->each(function ($tagNode) {
            return $tagNode->text();
        });
        echo "Extracted tags: " . implode(', ', $tags) . "\n"; // Debug message

        // Extract the website link from the job listing page
        $websiteLink = $jobCrawler->filterXPath('//a[@class="apply-button"]/@href')->text();
        echo "Extracted website link: $websiteLink\n"; // Debug message

        // Combine the description, tags, website link into an array or other suitable data structure
        $jobData = [
            'description' => $descriptionHtml,
            'tags' => implode(', ', $tags), // Convert tags to a comma-separated string
            'website' => $websiteLink, // Add the website link
        ];

        return $jobData;
    }
}
