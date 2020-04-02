<?php

use Illuminate\Database\Seeder;
use App\Models\CoCategory;

class CoCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $co_category = new CoCategory();
      $co_category->name = 'Restaurant';
      $co_category->save();

      $co_category = new CoCategory();
      $co_category->name = 'Cafe';
      $co_category->save();

      $co_category = new CoCategory();
      $co_category->name = 'Buffet';
      $co_category->save();

      $co_category = new CoCategory();
      $co_category->name = 'Fast food';
      $co_category->save();

      $co_category = new CoCategory();
      $co_category->name = 'Shop';
      $co_category->save();
    }
}
