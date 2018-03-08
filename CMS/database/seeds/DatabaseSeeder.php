<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // factory( App\User::class,100)->create();
    // factory( App\FromDr::class,100)->create();
     //factory( App\Patient::class,100)->create();
  // factory( App\Order::class,100)->create();
  //// factory( App\Subscryption::class,1000)->create();
 //  factory( App\UserPatient::class,100)->create();
        factory( App\PatientSubscryption::class,10)->create();
   // factory( App\OrderSubscryption::class,100)->create();
      //  factory( App\OrderUser::class,100)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
