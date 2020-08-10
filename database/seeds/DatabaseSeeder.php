<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create();
        factory(App\Products::class, 100)->create();
        factory(App\Services::class, 10)->create();
        factory(App\Patients::class, 10)->create();
		factory(App\Patient_details::class, 10)->create();
		factory(App\Stockin::class, 20)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
