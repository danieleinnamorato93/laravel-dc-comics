<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuitarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guitarsData = return [
            [
                "title" => "Fender American Professional II Stratocaster",
                "description" => "The Fender American Professional II Stratocaster is a versatile and high-performance guitar that combines classic tones with modern features. Equipped with V-Mod II single-coil pickups and a Deep 'C' neck, it offers a comfortable feel and precise playability for all music styles.",
                "thumb" => "https://example.com/images/fender-stratocaster.jpg",
                "price" => "$1,499.99",
                "series" => "American Professional II",
                "release_date" => "2021-01-15",
                "type" => "electric guitar",
                "artists" => [
                    "Eric Clapton",
                    "Jimi Hendrix",
                    "John Mayer"
                ],
                "genres" => [
                    "Rock",
                    "Blues",
                    "Pop"
                ]
            ],
            [
                "title" => "Gibson Les Paul Standard '50s",
                "description" => "The Gibson Les Paul Standard '50s is a timeless classic, known for its warm, rich tone and sustain. With Burstbucker pickups and a solid mahogany body, this guitar offers authentic vintage tone and a feel that recalls the golden era of rock.",
                "thumb" => "https://example.com/images/gibson-les-paul.jpg",
                "price" => "$2,499.99",
                "series" => "Les Paul Standard",
                "release_date" => "2020-06-01",
                "type" => "electric guitar",
                "artists" => [
                    "Jimmy Page",
                    "Slash",
                    "Joe Bonamassa"
                ],
                "genres" => [
                    "Rock",
                    "Blues",
                    "Metal"
                ]
            ],
            [
                "title" => "Ibanez RG550",
                "description" => "The Ibanez RG550 is a high-speed shred machine that features a super-fast Wizard neck and versatile V7 and V8 pickups. It’s a favorite among metal guitarists who need performance and precision.",
                "thumb" => "https://example.com/images/ibanez-rg550.jpg",
                "price" => "$1,099.99",
                "series" => "RG",
                "release_date" => "2021-08-20",
                "type" => "electric guitar",
                "artists" => [
                    "Steve Vai",
                    "Paul Gilbert",
                    "Herman Li"
                ],
                "genres" => [
                    "Metal",
                    "Rock"
                ]
            ],
            [
                "title" => "PRS SE Custom 24",
                "description" => "The PRS SE Custom 24 combines classic PRS design with a modern build, featuring a maple top and versatile humbuckers that handle everything from blues to heavy rock with ease.",
                "thumb" => "https://example.com/images/prs-se-custom-24.jpg",
                "price" => "$849.99",
                "series" => "SE Custom",
                "release_date" => "2020-10-10",
                "type" => "electric guitar",
                "artists" => [
                    "Mark Tremonti",
                    "Carlos Santana",
                    "Myles Kennedy"
                ],
                "genres" => [
                    "Rock",
                    "Blues",
                    "Jazz"
                ]
            ],
            [
                "title" => "Yamaha Pacifica 112V",
                "description" => "The Yamaha Pacifica 112V is an affordable and versatile electric guitar perfect for beginners and intermediate players. It features a comfortable neck, Alnico V pickups, and a coil-tap function for tonal variety.",
                "thumb" => "https://example.com/images/yamaha-pacifica.jpg",
                "price" => "$299.99",
                "series" => "Pacifica",
                "release_date" => "2019-05-15",
                "type" => "electric guitar",
                "artists" => [
                    "Mike Stern",
                    "John Patitucci"
                ],
                "genres" => [
                    "Rock",
                    "Blues",
                    "Jazz"
                ]
            ]
        ];
        
    }
}
