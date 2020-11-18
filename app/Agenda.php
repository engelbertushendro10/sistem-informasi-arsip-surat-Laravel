<?php

namespace App;

use App\Agenda;
use App\Surat;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use softDelete;

    protected $table = 'agenda';
}
