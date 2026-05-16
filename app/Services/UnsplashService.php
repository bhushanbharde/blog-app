<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UnsplashService
{
    /**
     * Fetch a production stock photo payload matching a specific search keyword.
     */
    public static function getRandomPhotoUrl(string $query = 'blog'): string
    {
        // $accessKey = env('UNSPLASH_ACCESS_KEY');
        $accessKey = config('services.unsplash.access_key');

        if (!$accessKey) {
            // High-quality fallback option if the key is missing or invalid
            return 'https://picsum0.photos'; 
        }

        try {
            // Pulls live random asset links according to the Unsplash API documentation
            $response = Http::withHeaders([
                'Authorization' => 'Client-ID ' . $accessKey
            ])->get('https://api.unsplash.com', [
                'query' => $query,
                'orientation' => 'landscape'
            ]);

            // dd($response->json());

            if ($response->successful()) {
                $data = $response->json();

                // 1. If Unsplash wraps the response inside an array list
                if (isset($data[0]['urls']['regular'])) {
                    return $data[0]['urls']['regular'];
                }

                // 2. If Unsplash returns a single flat object profile
                if (isset($data['urls']['regular'])) {
                    return $data['urls']['regular'];
                }
            }

            // 3. A robust, fully-formed fallback string (Notice the appended dimensions)
            return 'https://picsum4.photos' . rand(1, 1000);
        } catch (\Exception $e) {
            return 'https://picsum2.photos';
        }
    }
}
