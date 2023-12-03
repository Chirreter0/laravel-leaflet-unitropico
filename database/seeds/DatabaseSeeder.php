<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'unitropico@unitropico.edu.co',
            'password' => Hash::make('123456'),
        ]);

        DB::table('outlets')->insert([
            'name' => 'Entrada1',
            'address' => 'Entrada Peatonal',
            'latitude' => '5.32067',
            'longitude' => '-72.39286',
            'creator_id' => 1,
        ]);
    }
}
