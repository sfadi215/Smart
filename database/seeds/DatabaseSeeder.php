<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::raw('SET foreign_key_checks = 0');

        // first i clear the tables here
        DB::table('users')->truncate();
        DB::table('controls')->truncate();

        DB::raw('SET foreign_key_checks = 1');

        Model::unguard();

        // then i call the seeders to seed the data
        $this->call(UserTableSeeder::class);
        $this->call(ControlsTableSeeder::class);

        Model::reguard();
    }
}
