<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'marking_code' => 'MC12345',
                'order_number' => '#X28930LI',
                'order_date' => Carbon::create(2022, 1, 1),
                'status' => 1, // Processed
                'origin_warehouse' => 'China warehouse',
                'destination_warehouse' => 'Jakarta warehouse',
                'current_location' => 1, // Origin warehouse
                'delivery_method' => 1, // Air
                'receipt_number' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marking_code' => 'MC12346',
                'order_number' => '#X28931LI',
                'order_date' => Carbon::create(2022, 1, 2),
                'status' => 2, // In Transit
                'origin_warehouse' => 'China warehouse',
                'destination_warehouse' => 'Jakarta warehouse',
                'current_location' => 1, // Origin warehouse
                'delivery_method' => 2, // Sea
                'receipt_number' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marking_code' => 'MC12347',
                'order_number' => '#X28932LI',
                'order_date' => Carbon::create(2022, 1, 3),
                'status' => 3, // Delivered
                'origin_warehouse' => 'China warehouse',
                'destination_warehouse' => 'Jakarta warehouse',
                'current_location' => 2, // Destination warehouse
                'delivery_method' => 1, // Air
                'receipt_number' => '124343524636436',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marking_code' => 'MC12348',
                'order_number' => '#X28933LI',
                'order_date' => Carbon::create(2022, 1, 4),
                'status' => 2, // In Transit
                'origin_warehouse' => 'China warehouse',
                'destination_warehouse' => 'Jakarta warehouse',
                'current_location' => 1, // Origin warehouse
                'delivery_method' => 2, // Sea
                'receipt_number' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marking_code' => 'MC12349',
                'order_number' => '#X28934LI',
                'order_date' => Carbon::create(2022, 1, 5),
                'status' => 1, // Processed
                'origin_warehouse' => 'China warehouse',
                'destination_warehouse' => 'Jakarta warehouse',
                'current_location' => 1, // Origin warehouse
                'delivery_method' => 1, // Air
                'receipt_number' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
