<?php

use Illuminate\Database\Seeder;
use App\Articulo;
class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articulos')->truncate();//vacia la tabla
        factory(Articulo::class, 12)->create();//creo los registros
    }
}
