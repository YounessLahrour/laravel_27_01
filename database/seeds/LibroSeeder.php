<?php

use Illuminate\Database\Seeder;
use App\Libro;
class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('libros')->truncate();//vacia la tabla
        factory(Libro::class, 10)->create();//creo los registros
    }
}
