<?php

namespace Sys\Curso\Entities;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $fillable = [];

    protected function getTeacherAttribute()
    {
        return 'Evandro Cassio Cortiano';
    }
}
