<?php

namespace Database\Seeders;
use App\Models\Guitar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuitarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guitarsData =  [
                     
                [
                    "title" => "Fender Stratocaster",
                    "description" => "Una delle chitarre più iconiche di sempre, utilizzata da artisti come Jimi Hendrix e Eric Clapton. Perfetta per rock, blues e pop.",
                    "thumb" => "https://example.com/images/fender_stratocaster.jpg",
                    "price" => 1200.00
                    "series" => "Stratocaster",
                    "release_date" => "1954-06-01",
                    "type" => "electric",
                    "genre" => "Rock",
                    "artist" => "Jimi Hendrix",
                ],
                [
                    "title" => "Gibson Les Paul",
                    "description" => "La Les Paul è una chitarra dal suono caldo e profondo, popolare per generi come rock e blues. Usata da artisti come Jimmy Page.",
                    "thumb" => "https://example.com/images/gibson_les_paul.jpg",
                    "price" => 2500.00
                    "series" => "Les Paul",
                    "release_date" => "1952-01-01",
                    "type" => "electric",
                    "genre" => "Blues",
                    "artist" => "Jimmy Page",
                ],
                [
                    "title" => "Ibanez RG Series",
                    "description" => "Una chitarra pensata per il metal e hard rock, con un manico veloce e pickup potenti. Scelta da artisti come Steve Vai.",
                    "thumb" => "https://example.com/images/ibanez_rg.jpg",
                    "price" => 1100.00
                    "series" => "RG",
                    "release_date" => "1987-01-01",
                    "type" => "electric",
                    "genre" => "Metal",
                    "artist" => "Steve Vai",
                ],
                [
                    "title" => "Martin D-28",
                    "description" => "Chitarra acustica leggendaria, famosa per il suo suono ricco e bilanciato. Utilizzata da artisti folk e country come Johnny Cash.",
                    "thumb" => "https://example.com/images/martin_d28.jpg",
                    "price" => 3000.00
                    "series" => "D-28",
                    "release_date" => "1931-01-01",
                    "type" => "acoustic",
                    "genre" => "Folk",
                    "artist" => "Johnny Cash",
                ],
                [
                    "title" => "Yamaha Pacifica 112V",
                    "description" => "Un modello versatile e accessibile, adatto per rock, jazz e blues. Perfetto per principianti e chitarristi intermedi.",
                    "thumb" => "https://example.com/images/yamaha_pacifica.jpg",
                    "price" => 3000.00,
                    "series" => "Pacifica",
                    "release_date" => "1993-01-01",
                    "type" => "electric",
                    "genre" => "Rock",
                    "artist" => "Mike Stern",
                ],
                [
                    "title" => "Taylor 814ce",
                    "description" => "Chitarra acustica di alta qualità, con un suono cristallino e adatta per il fingerstyle. Usata da artisti come Taylor Swift.",
                    "thumb" => "https://example.com/images/taylor_814ce.jpg",
                    "price" => 3500.00,
                    "series" => "814ce",
                    "release_date" => "1994-01-01",
                    "type" => "acoustic",
                    "genre" => "Pop",
                    "artist" => "Taylor Swift",
                ]
            ];
            
    foreach ($guitarsData as $guitar) {
        Guitar::create($guitar);
    }
        
    }
}
