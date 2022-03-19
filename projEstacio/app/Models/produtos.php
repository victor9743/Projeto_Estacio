<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    // necessário para realizar o comando de PUT
    protected $guarded = [];
    // protected $table = 'produtos';
    use HasFactory;
}
