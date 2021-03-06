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
        $this->call(KeysTableSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(FilterSeeder::class);
        $this->call(SkilltierSeeder::class);
    }
}
