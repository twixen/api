<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('items')->insert([
            ['id' => 1, 'name' => 'Product 1', 'amount' => 4],
            ['id' => 2, 'name' => 'Product 2', 'amount' => 12],
            ['id' => 3, 'name' => 'Product 5', 'amount' => 0],
            ['id' => 4, 'name' => 'Product 7', 'amount' => 6],
            ['id' => 5, 'name' => 'Product 8', 'amount' => 2],
        ]);
    }

}
