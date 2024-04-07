<?php

namespace App\Book\Database\Seeders;

use App\Store\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Book\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $booksSeeder = [
            [
                'name' => 'To Kill a Mockingbird',
                'isbn' => '9780061120084',
                'price' => '12.99'
            ],
            [
                'name' => '1984',
                'isbn' => '9780451524935',
                'price' => '10.25'
            ],
            [
                'name' => 'Pride and Prejudice',
                'isbn' => '9780141439518',
                'price' => '9.99'
            ],
            [
                'name' => 'The Great Gatsby',
                'isbn' => '9780743273565',
                'price' => '11.50'
            ],
            [
                'name' => 'The Catcher in the Rye',
                'isbn' => '9780316769488',
                'price' => '13.75'
            ],
            [
                'name' => 'Animal Farm',
                'isbn' => '9780451526342',
                'price' => '8.75'
            ],
            [
                'name' => 'Lord of the Flies',
                'isbn' => '9780399501487',
                'price' => '9.50'
            ],
            [
                'name' => 'Brave New World',
                'isbn' => '9780060850524',
                'price' => '12.25'
            ],
            [
                'name' => 'The Hobbit',
                'isbn' => '9780261102217',
                'price' => '15.99'
            ],
            [
                'name' => 'Harry Potter and the Sorcerer\'s Stone',
                'isbn' => '9780590353427',
                'price' => '14.99'
            ],
            [
                'name' => 'The Da Vinci Code',
                'isbn' => '9780307277671',
                'price' => '11.99'
            ],
            [
                'name' => 'The Hunger Games',
                'isbn' => '9780439023481',
                'price' => '13.50'
            ],
            [
                'name' => 'The Lord of the Rings',
                'isbn' => '9780618645619',
                'price' => '19.75'
            ],
            [
                'name' => 'The Road',
                'isbn' => '9780307387899',
                'price' => '10.99'
            ],
            [
                'name' => 'The Adventures of Huckleberry Finn',
                'isbn' => '9780143107323',
                'price' => '9.25'
            ],
            [
                'name' => 'Gone with the Wind',
                'isbn' => '9781416548942',
                'price' => '11.99'
            ],
            [
                'name' => 'Crime and Punishment',
                'isbn' => '9780679734505',
                'price' => '14.25'
            ],
            [
                'name' => 'The Picture of Dorian Gray',
                'isbn' => '9780141439570',
                'price' => '10.75'
            ],
            [
                'name' => 'The Alchemist',
                'isbn' => '9780061122415',
                'price' => '12.49'
            ],
            [
                'name' => 'The Girl on the Train',
                'isbn' => '9781594634024',
                'price' => '13.85'
            ],
            [
                'name' => 'Catch-22',
                'isbn' => '9780684833392',
                'price' => '11.50'
            ],
            [
                'name' => 'The Chronicles of Narnia',
                'isbn' => '9780066238500',
                'price' => '18.99'
            ],
            [
                'name' => 'The Secret History',
                'isbn' => '9781400031702',
                'price' => '14.75'
            ],
            [
                'name' => 'The Kite Runner',
                'isbn' => '9781573222457',
                'price' => '12.30'
            ],
            [
                'name' => 'The Giver',
                'isbn' => '9780544336261',
                'price' => '10.99'
            ],
            [
                'name' => 'The Road Less Traveled',
                'isbn' => '9780743243155',
                'price' => '11.45'
            ],
            [
                'name' => 'The Help',
                'isbn' => '9780399155345',
                'price' => '13.75'
            ],
            [
                'name' => 'The Grapes of Wrath',
                'isbn' => '9780143039433',
                'price' => '9.99'
            ],
            [
                'name' => 'The Book Thief',
                'isbn' => '9780375831003',
                'price' => '12.60'
            ],
            [
                'name' => 'Wuthering Heights',
                'isbn' => '9780141439556',
                'price' => '10.25'
            ],
        ];

        collect($booksSeeder)->each(fn($book) => Book::create($book));
    }
}
