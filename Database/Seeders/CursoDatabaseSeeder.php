<?php

namespace Sys\Curso\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Sys\Curso\Entities\Cursos;

class CursoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $curso = new Cursos;
        $curso->title = 'Laravel Inical';
        $curso->description = 'Aprendendo Laravel.';
        $curso->price = 'R$ 200,00';
        $curso->save();

        $curso = new Cursos;
        $curso->title = 'Laravel Avançado';
        $curso->description = 'Aprimorando o uso do Laravel.';
        $curso->price = 'R$ 300,00';
        $curso->save();

    }
}
