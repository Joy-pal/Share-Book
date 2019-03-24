<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'book_user_id'          => 1,
            'book_name'             => 'Book Name 1',
            'book_slug'             => 'book-name-1',
            'book_author'           => 'Author 1',
            'book_condition'        => 'old',
            'book_price'            => 100.50,
            'book_price_negotiable' => false,
            'book_published_at'     => \Carbon\Carbon::create(2001)->year,
            'created_at'            => \Carbon\Carbon::now(),
            'updated_at'            => \Carbon\Carbon::now()
        ]);

        DB::table('books')->insert([
            'book_user_id'          => 1,
            'book_name'             => 'Book Name 2',
            'book_slug'             => 'book-name-2',
            'book_author'           => 'Author 2',
            'book_condition'        => 'old',
            'book_price'            => 250.50,
            'book_price_negotiable' => true,
            'book_published_at'     => \Carbon\Carbon::create(2004)->year,
            'created_at'            => \Carbon\Carbon::now(),
            'updated_at'            => \Carbon\Carbon::now()
        ]);

        DB::table('books')->insert([
            'book_user_id'          => 1,
            'book_name'             => 'Book Name 3',
            'book_slug'             => 'book-name-3',
            'book_author'           => 'Author 3',
            'book_condition'        => 'old',
            'book_price'            => 100.50,
            'book_price_negotiable' => false,
            'book_published_at'     => \Carbon\Carbon::create(2003)->year,
            'created_at'            => \Carbon\Carbon::now(),
            'updated_at'            => \Carbon\Carbon::now()
        ]);

        DB::table('books')->insert([
            'book_user_id'          => 1,
            'book_name'             => 'Book Name 4',
            'book_slug'             => 'book-name-4',
            'book_author'           => 'Author 4',
            'book_condition'        => 'old',
            'book_price'            => 100.50,
            'book_price_negotiable' => false,
            'book_published_at'     => \Carbon\Carbon::create(2002)->year,
            'created_at'            => \Carbon\Carbon::now(),
            'updated_at'            => \Carbon\Carbon::now()
        ]);
    }
}
