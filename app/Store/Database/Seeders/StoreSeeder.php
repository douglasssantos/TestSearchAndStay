<?php

namespace App\Store\Database\Seeders;

use App\Book\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Store\Models\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $storesSeeder = [
            [
                "name" => "Book Haven",
                "address" => [
                    "street" => "Main Street",
                    "number" => "123",
                    "complement" => "Suite 101",
                    "district" => "Downtown",
                    "city" => "Cityville",
                    "state" => "California",
                    "postal_code" => "12345"
                ]
            ],
            [
                "name" => "Ink & Quill Books",
                "address" => [
                    "street" => "Broadway",
                    "number" => "456",
                    "complement" => "Floor 2",
                    "district" => "Midtown",
                    "city" => "Towntown",
                    "state" => "New York",
                    "postal_code" => "54321"
                ]
            ],
            [
                "name" => "Novel Escapes",
                "address" => [
                    "street" => "Oak Street",
                    "number" => "789",
                    "complement" => "Suite 210",
                    "district" => "Uptown",
                    "city" => "Bookburgh",
                    "state" => "Illinois",
                    "postal_code" => "67890"
                ]
            ],
            [
                "name" => "Page Turner Books",
                "address" => [
                    "street" => "Cedar Avenue",
                    "number" => "1011",
                    "complement" => "Unit 3A",
                    "district" => "West End",
                    "city" => "Read City",
                    "state" => "Texas",
                    "postal_code" => "98765"
                ]
            ],
            [
                "name" => "Literary Loft",
                "address" => [
                    "street" => "Pine Street",
                    "number" => "1213",
                    "complement" => "Apt 5B",
                    "district" => "Eastside",
                    "city" => "Writerstown",
                    "state" => "Florida",
                    "postal_code" => "13579"
                ]
            ],
            [
                "name" => "Chapter & Verse",
                "address" => [
                    "street" => "Elm Street",
                    "number" => "1415",
                    "complement" => "Suite 7C",
                    "district" => "Old Town",
                    "city" => "Reader City",
                    "state" => "Massachusetts",
                    "postal_code" => "24680"
                ]
            ],
            [
                "name" => "The Reading Nook",
                "address" => [
                    "street" => "Maple Avenue",
                    "number" => "1617",
                    "complement" => "Unit 9D",
                    "district" => "Bookish Quarter",
                    "city" => "Novelville",
                    "state" => "Washington",
                    "postal_code" => "02468"
                ]
            ],
            [
                "name" => "Storybook Corner",
                "address" => [
                    "street" => "Chestnut Street",
                    "number" => "1819",
                    "complement" => "Floor 3",
                    "district" => "Storyland",
                    "city" => "Taleburg",
                    "state" => "Oregon",
                    "postal_code" => "97531"
                ]
            ],
            [
                "name" => "Paper Trail Books",
                "address" => [
                    "street" => "Sycamore Boulevard",
                    "number" => "2021",
                    "complement" => "Suite 11E",
                    "district" => "Literary Lane",
                    "city" => "Paperburg",
                    "state" => "Arizona",
                    "postal_code" => "75319"
                ]
            ],
            [
                "name" => "Prose & Poetry Booksellers",
                "address" => [
                    "street" => "Walnut Street",
                    "number" => "2223",
                    "complement" => "Apt 13F",
                    "district" => "Rhyme District",
                    "city" => "Poetown",
                    "state" => "Colorado",
                    "postal_code" => "35791"
                ]
            ],
            [
                "name" => "Boundless Books",
                "address" => [
                    "street" => "Willow Lane",
                    "number" => "2425",
                    "complement" => "Unit 15G",
                    "district" => "Boundless Borough",
                    "city" => "Chapter City",
                    "state" => "Georgia",
                    "postal_code" => "18975"
                ]
            ],
            [
                "name" => "WordSmith Books",
                "address" => [
                    "street" => "Cypress Street",
                    "number" => "2627",
                    "complement" => "Floor 4",
                    "district" => "Writer's Block",
                    "city" => "Wordville",
                    "state" => "Nevada",
                    "postal_code" => "53697"
                ]
            ],
            [
                "name" => "The Bookworm's Den",
                "address" => [
                    "street" => "Magnolia Avenue",
                    "number" => "2829",
                    "complement" => "Suite 17H",
                    "district" => "Bookworm Block",
                    "city" => "Readerstown",
                    "state" => "Michigan",
                    "postal_code" => "97261"
                ]
            ],
            [
                "name" => "Readings Rendezvous",
                "address" => [
                    "street" => "Hickory Street",
                    "number" => "3031",
                    "complement" => "Unit 19I",
                    "district" => "Reading Road",
                    "city" => "Rendezville",
                    "state" => "Ohio",
                    "postal_code" => "62539"
                ]
            ],
            [
                "name" => "Bookshelf Boulevard",
                "address" => [
                    "street" => "Peachtree Street",
                    "number" => "3233",
                    "complement" => "Floor 5",
                    "district" => "Bookworm Way",
                    "city" => "Bookshelf City",
                    "state" => "Virginia",
                    "postal_code" => "13476"
                ]
            ],
            [
                "name" => "Library Lane",
                "address" => [
                    "street" => "Mulberry Drive",
                    "number" => "3435",
                    "complement" => "Apt 21J",
                    "district" => "Library District",
                    "city" => "Libraville",
                    "state" => "Kansas",
                    "postal_code" => "72694"
                ]
            ],
            [
                "name" => "Bookish Oasis",
                "address" => [
                    "street" => "Cherry Street",
                    "number" => "3637",
                    "complement" => "Suite 23K",
                    "district" => "Bookish Block",
                    "city" => "Oasis City",
                    "state" => "Montana",
                    "postal_code" => "89532"
                ]
            ],
            [
                "name" => "Book Bazaar",
                "address" => [
                    "street" => "Acorn Lane",
                    "number" => "3839",
                    "complement" => "Unit 25L",
                    "district" => "Book Bazaar District",
                    "city" => "Booktown",
                    "state" => "Louisiana",
                    "postal_code" => "35789"
                ]
            ],
            [
                "name" => "Plot Twist Books",
                "address" => [
                    "street" => "Cedar Lane",
                    "number" => "4041",
                    "complement" => "Floor 6",
                    "district" => "Twist Street",
                    "city" => "Storyville",
                    "state" => "Missouri",
                    "postal_code" => "64289"
                ]
            ],
            [
                "name" => "Paperback Palace",
                "address" => [
                    "street" => "Oak Lane",
                    "number" => "4243",
                    "complement" => "Apt 27M",
                    "district" => "Paperback District",
                    "city" => "Page City",
                    "state" => "Kentucky",
                    "postal_code" => "81536"
                ]
            ]
        ];

        collect($storesSeeder)->each(function($store) {

            $createdStore = Store::create($store);

            if($createdStore){

                for($book = 1; $book <= random_int(1,30); $book++){

                    Book::find($book)->stores()->attach($book);

                }

            }

        });

    }
}
