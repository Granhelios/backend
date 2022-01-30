<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calles extends Model
{
    use HasFactory;
    protected $fillable= ["ca_nombre", "ci_id"];
    public $timestamps = false;
}
