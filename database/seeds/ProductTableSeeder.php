<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
          [
              'name' => "WEB DEV",
              'is_original' => true,
              'product_id' => "prod_1",
          ],
          [
              'name' => "MOBILE DEV",
              'is_original' => true,
              'product_id' => "prod_2",
          ],
          [
              'name' => "TRAINING",
              'is_original' => true,
              'product_id' => "prod_3",
          ],
          [
              'name' => "FINANCE",
              'is_original' => false,
              'product_id' => "prod_4",
          ],
          [
            'name' => "AI",
            'is_original' => false,
            'product_id' => "prod_5",
          ],
      ]);
    }
}
