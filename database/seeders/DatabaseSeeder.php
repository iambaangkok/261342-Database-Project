<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CustomersTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(OfficesTableSeeder::class);
        $this->call(OrderdetailsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(ProductlinesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
