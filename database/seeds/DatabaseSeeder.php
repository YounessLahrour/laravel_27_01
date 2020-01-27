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
        // $this->call(UsersTableSeeder::class);
        //registramos todos los seeders aqui
        $this->call(LibroSeeder::class);
        $this->call(ArticuloSeeder::class);
    }
}
