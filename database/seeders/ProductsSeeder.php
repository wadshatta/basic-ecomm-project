<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
        [
            "name" => "samsung tv",
            "price" => "400",
            "description" => "Your TV product codes are located on a label on the back panel of your TV. If you have a smart TV, you can also find the model code and serial number through the settings menu. Visit our FAQs for more information on TV model and serial numbers.",
            "category" => "mobile",
            "gallery" => "https://images.samsung.com/is/image/samsung/ru-fhd-t5300-ue43t5300auxru-frontblack-225926970?$650_519_PNG$",
        ]
    );
    }
}
