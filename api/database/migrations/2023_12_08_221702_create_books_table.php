<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('publisher');
            $table->integer('publication_year');
            $table->string('isbn');
            $table->string('language');
            $table->string('genre');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('format');
            $table->integer('number_of_pages');
            $table->string('image');
            $table->timestamps();
        });

        // Insert some sample data
        DB::table('books')->insert([
            [
                'title' => 'Book 1',
                'author' => 'Author 1',
                'publisher' => 'Publisher 1',
                'publication_year' => 2021,
                'isbn' => '978-3-16-148410-1',
                'language' => 'English',
                'genre' => 'Genre 1',
                'description' => 'Description of Book 1',
                'price' => 29.99,
                'format' => 'Paperback',
                'number_of_pages' => 200,
                'image' => 'book_1.jpg',
            ],
            [
                'title' => 'Book 2',
                'author' => 'Author 2',
                'publisher' => 'Publisher 2',
                'publication_year' => 2020,
                'isbn' => '978-3-16-148410-2',
                'language' => 'English',
                'genre' => 'Genre 2',
                'description' => 'Description of Book 2',
                'price' => 19.99,
                'format' => 'Hardcover',
                'number_of_pages' => 300,
                'image' => 'book_2.jpg',
            ],
            [
                'title' => 'Book 3',
                'author' => 'Author 3',
                'publisher' => 'Publisher 3',
                'publication_year' => 2019,
                'isbn' => '978-3-16-148410-3',
                'language' => 'English',
                'genre' => 'Genre 3',
                'description' => 'Description of Book 3',
                'price' => 12.99,
                'format' => 'Ebook',
                'number_of_pages' => 150,
                'image' => 'book_3.jpg',
            ],
            [
                'title' => 'Book 4',
                'author' => 'Author 4',
                'publisher' => 'Publisher 4',
                'publication_year' => 2018,
                'isbn' => '978-3-16-148410-4',
                'language' => 'English',
                'genre' => 'Genre 4',
                'description' => 'Description of Book 4',
                'price' => 24.99,
                'format' => 'Paperback',
                'number_of_pages' => 250,
                'image' => 'book_4.jpg',
            ],
            [
                'title' => 'Book 5',
                'author' => 'Author 5',
                'publisher' => 'Publisher 5',
                'publication_year' => 2017,
                'isbn' => '978-3-16-148410-5', 'language' => 'English', 'genre' => 'Genre 5', 'description' => 'Description of Book 5', 'price' => 14.99, 'format' => 'Hardcover', 'number_of_pages' => 400, 'image' => 'book_5.jpg',
            ],
            [
                'title' => 'Book 6',
                'author' => 'Author 6',
                'publisher' => 'Publisher 6',
                'publication_year' => 2016, 'isbn' => '978-3-16-148410-6',
                'language' => 'English',
                'genre' => 'Genre 6',
                'description' => 'Description of Book 6',
                'price' => 17.99, 'format' => 'Ebook',
                'number_of_pages' => 180, 'image' => 'book_6.jpg',
            ],
            [
                'title' => 'Book 7',
                'author' => 'Author 7',
                'publisher' => 'Publisher 7',
                'publication_year' => 2015, 'isbn' => '978-3-16-148410-7',
                'language' => 'English',
                'genre' => 'Genre 7',
                'description' => 'Description of Book 7',
                'price' => 39.99,
                'format' => 'Paperback',
                'number_of_pages' => 350, 'image' => 'book_7.jpg',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
