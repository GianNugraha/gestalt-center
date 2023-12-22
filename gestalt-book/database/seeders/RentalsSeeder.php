<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RentalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rents')->insert([
            'customer_id' => '1',
            'book_id' => '1',
            'date_rent' => '2000-01-01',
            'date_return' => '2000-01-18',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
