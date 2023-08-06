<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $address = ['Eziobodo', 'Obinze', 'Umuchima', 'Ihiagwa'];
        $products = ['Fruit Salad', 'Ice Cream', 'Cake', 'Rice'];
        $category = ['sapa bien', 'odogwu', 'big man'];

        for ($j=0; $j < 2; $j++) { 
            for ($i=1; $i < 151; $i++) { 
                shuffle($address);

                DB::table('orders')->insert([
                    'order_user_id' => $i,
                    'order_id' => createOrderId($address[0], $i),
                    'total_price' => rand(5000, 15000),
                    'additional_information' => fake()->text(),
                    'created_at' => now(),
                ]);
            }
        }

        for ($j=0; $j < 2; $j++) { 
            for ($i=1; $i < 301; $i++) { 
                shuffle($products);
                shuffle($category);
                shuffle($address);

                DB::table('order_details')->insert([
                    'order_id' => $i,
                    'product_name' => $products[0],
                    'category' => $category[0],
                    'selling_price' => rand(1000, 5000),
                    'original_price' => rand(1000, 5000),
                    'quantity' => rand(1, 10),
                    'delivery_fee' => 1000, 
                    'total_price' => rand(5000, 15000)
                ]);

                DB::table('order_statuses')->insert([
                    'order_id' => $i
                ]);

                DB::table('shipping_addresses')->insert([
                    'order_id' => $i,
                    'lodge' => 'Anything',
                    'area' => $address[0],
                    'phone' => '77665443434',
                    'state' => 'Imo'
                ]);
            }
        }
    }
}
