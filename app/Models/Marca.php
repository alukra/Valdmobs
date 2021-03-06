<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marca extends Model
{
  protected $table = "Marca";

  use SoftDeletes;
  protected $dates = ['deleted_at'];
}
