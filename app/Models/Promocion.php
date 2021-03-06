<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promocion extends Model
{
  protected $table = "Promocion";

  use SoftDeletes;
  protected $dates = ['deleted_at'];
}
