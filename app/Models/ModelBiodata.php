<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBiodata extends Model
{
    use HasFactory;

    protected $table = 'model_biodatas';
    protected $fillable = [
        'nama',
        'npm',
        'nilai',
    ];
}
