<?php

use Illuminate\Database\Seeder;
use App\Models\CoCity;

class CoCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $co_city = new CoCity();
      $co_city->name = 'Dhaka';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Chittagong';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Rajshahi';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Khulna';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Sylhet';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Mymensingh';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Barisal';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Rangpur';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Comilla';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Narayanganj';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Gazipur';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Bogra';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Kushtia';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Jessore';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Dinajpur';
      $co_city->save();

      $co_city = new CoCity();
      $co_city->name = 'Chandpur';
      $co_city->save();


    }
}
