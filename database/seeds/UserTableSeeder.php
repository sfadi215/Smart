<?php


use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // this is one user
        User::create([
            'name' => 'Fadi Salsaa',
            'email' => 'fadi.salsaa@gmail.com',
            'password' => bcrypt('AbuSalsa')
        ]);

        // i will create another
        User::create([
            'name' => 'ALa Hawash',
            'email' => 'ala.hawash@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
