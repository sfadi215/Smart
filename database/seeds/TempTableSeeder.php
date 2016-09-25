<?php


use App\Temperature;
use Illuminate\Database\Seeder;

class TempTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // this is one user
        Temperature::create([
            'sensor_id' => '28 f2 68 97 06 00 00 9b',
            'value' => 0
        ]);

    }
}
