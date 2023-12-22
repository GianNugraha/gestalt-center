<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'Halloween',
            'author' => 'Harry Puter',
            'price_rent' => '3000',
            'book_category' => 'Horror',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
